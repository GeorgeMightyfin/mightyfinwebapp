<div class="wizard-container">
    <div class="progress-container">
        <div class="progress-steps">
            <div class="progress-line"></div>
            <div class="progress-line-fill" id="progressLineFill"></div>

            <div class="progress-step active" id="progressStep1">
                <div class="step-icon">1</div>
                <div class="step-title">Personal Information</div>
            </div>

            <div class="progress-step" id="progressStep2">
                <div class="step-icon">2</div>
                <div class="step-title">Documentation Upload</div>
            </div>
        </div>
    </div>

    <form action="{{ route("update-kyc-uploads") }}" method="POST" enctype="multipart/form-data" id="wizardForm">
        @csrf
        <div class="step active" id="step1">
            <h3 class="section-title">Personal Information</h3>
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">First Name</label>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="{{ auth()->user()->fname }}"
                    name="fname"
                    value="{{ auth()->user()->fname }}"
                    />
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">Last Name</label>
                    <input
                    name="lname"
                    type="text"
                    class="form-control"
                    placeholder="{{ auth()->user()->lname }}"
                    value="{{ auth()->user()->lname }}"
                    />
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">Phone Number</label>
                    <input
                    name="phone"
                    type="text"
                    class="form-control"
                    placeholder="{{ auth()->user()->phone}}"
                    value="{{ auth()->user()->phone}}"
                    />
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">National ID Type</label>
                    <select
                        name="id_type"
                        class="form-control"
                        >
                        <option {{ auth()->user()->id_type == null ? 'selected' : ''}} value="">-- Choose --</option>
                        <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                        <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                        <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver Liecense</option>
                    </select>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">National ID Number</label>
                    <input
                    name="nrc_no"
                    type="text"
                    class="form-control"
                    placeholder="{{ auth()->user()->nrc_no ?? auth()->user()->nrc}}"
                    value="{{ auth()->user()->nrc_no ?? auth()->user()->nrc}}"
                    />
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">Sex</label>
                    <select
                        name="gender"
                        class="form-control"
                        >
                        <option value="{{ auth()->user()->gender}}">{{ auth()->user()->gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">Date of birth</label>
                    <input
                    name="dob"
                    type="text"
                    class="form-control hasDatepicker"
                    placeholder="{{ auth()->user()->dob}}"
                    value="{{ auth()->user()->dob}}"
                    id="datepicker"
                    autocomplete="off"
                    />
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">Present Address</label>
                    <input
                    name="address"
                    type="text"
                    class="form-control"
                    placeholder="{{ auth()->user()->address }}"
                    value="{{ auth()->user()->address }}"
                    />
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <label class="form-label">Job Title</label>
                    <input
                    name="occupation"
                    type="text"
                    class="form-control"
                    placeholder="{{ auth()->user()->occupation }}"
                    value="{{ auth()->user()->occupation }}"
                    />
                </div>
            </div>
            <div class="clearfix">
                <button type="button" class="btn btn-primary float-end button-pulse" onclick="navigateStep('next')">
                    Continue <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="step" id="step2">
            <h3 class="section-title">Documentation Upload</h3>
            <div class="row">
                <div class="col-xl-6">
                    <div class="file-upload-container">
                        <div class="upload-icon"><i class="fas fa-id-card"></i></div>
                        <h4>NRC Front (Image)</h4>
                        <p class="upload-text">Click or drag and drop your NRC front image</p>
                        <p class="upload-hint">Supported formats: JPG, PNG, PDF (Max: 5MB)</p>
                        <input required class="form-control" name="nrc_file" type="file" id="nrc_file">
                    </div>
                    @if ($meta->uploads->where('name', 'nrc_file')->isNotEmpty())
                        <p class="text-success file-list"><i class="fas fa-check-circle"></i> You uploaded a National ID Copy on {{ $meta->uploads->where('name', 'nrc_file')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>

                <div class="col-xl-6">
                    <div class="file-upload-container">
                        <div class="upload-icon"><i class="fas fa-id-card"></i></div>
                        <h4>NRC Back (Image)</h4>
                        <p class="upload-text">Click or drag and drop your NRC back image</p>
                        <p class="upload-hint">Supported formats: JPG, PNG, PDF (Max: 5MB)</p>
                        <input required class="form-control" name="nrc_file_2" type="file" id="nrc_file_2">
                    </div>
                    @if ($meta->uploads->where('name', 'nrc_file')->isNotEmpty())
                        <p class="text-success file-list"><i class="fas fa-check-circle"></i> You uploaded a National ID Copy on {{ $meta->uploads->where('name', 'nrc_file')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>

                <div class="col-xl-6">
                    <div class="file-upload-container">
                        <div class="upload-icon"><i class="fas fa-file-alt"></i></div>
                        <h4>Tpin (Document)</h4>
                        <p class="upload-text">Click or drag and drop your Tpin document</p>
                        <p class="upload-hint">Supported formats: PDF, DOC, JPG (Max: 5MB)</p>
                        <input required class="form-control" name="tpin_file" type="file" id="tpin_file">
                    </div>
                    @if ($meta->uploads->where('name', 'tpin_file')->isNotEmpty())
                        <p class="text-success file-list"><i class="fas fa-check-circle"></i> You uploaded a Tpin Copy on {{ $meta->uploads->where('name', 'tpin_file')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>

                <div class="col-xl-6">
                    <div class="file-upload-container">
                        <div class="upload-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4>Payslip (Document)</h4>
                        <p class="upload-text">Click or drag and drop your latest payslip</p>
                        <p class="upload-hint">Supported formats: PDF, DOC, JPG (Max: 5MB)</p>
                        <input required class="form-control" name="payslip_file" type="file" id="payslip_file">
                    </div>
                    @if ($meta->uploads->where('name', 'payslip_file')->isNotEmpty())
                        <p class="text-success file-list"><i class="fas fa-check-circle"></i> You uploaded a Payslip on {{ $meta->uploads->where('name', 'payslip_file')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>

                <div class="col-xl-6">
                    <div class="file-upload-container">
                        <div class="upload-icon"><i class="fas fa-university"></i></div>
                        <h4>Bank Statement (Document)</h4>
                        <p class="upload-text">Click or drag and drop your bank statement</p>
                        <p class="upload-hint">Supported formats: PDF, DOC, JPG (Max: 5MB)</p>
                        <input required class="form-control" name="bank_file" type="file" id="bank_file">
                    </div>
                    @if ($meta->uploads->where('name', 'bank_file')->isNotEmpty())
                        <p class="text-success file-list"><i class="fas fa-check-circle"></i> You uploaded a Bank Statement on {{ $meta->uploads->where('name', 'bank_file')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>

                <div class="col-xl-6">
                    <div class="file-upload-container">
                        <div class="upload-icon"><i class="fas fa-file-contract"></i></div>
                        <h4>Preapproval (Document)</h4>
                        <p class="upload-text">Click or drag and drop your preapproval document</p>
                        <p class="upload-hint">Supported formats: PDF, DOC, JPG (Max: 5MB)</p>
                        <input required class="form-control" name="preapproval" type="file" id="preapproval_file">
                    </div>
                    @if ($meta->uploads->where('name', 'preapproval')->isNotEmpty())
                        <p class="text-success file-list"><i class="fas fa-check-circle"></i> You uploaded a Preapproval document on {{ $meta->uploads->where('name', 'preapproval')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>
            </div>

            <div class="clearfix">
                <button class="btn btn-outline float-start" type="button" onclick="navigateStep('prev')">
                    <i class="fas fa-arrow-left"></i> Previous
                </button>
                <button class="btn btn-primary float-end button-pulse" type="submit">
                    <i class="fas fa-check"></i> Submit Application
                </button>
            </div>
        </div>
    </form>
</div>