<div class="step" id="step6">
    <div style="width: 90%" class="mb-2 d-block justify-content-start">
        <h5>Requirements</h5>
        <span class="float-right text-left justify-content-end items-right">
            <p>Click the button below to share preapproval form, if missing</p>
            <button title="Send the preapproval form to employer, manager, or supervisor" type="button" class="btn btn-sm" style="background-color: rgb(54, 15, 94)" onclick="openSendDocModal()">Send Preapproval</button>
        </span>
    </div>
    <br>
    <div class="col-xxl-12 col-xl-12 col-lg-12">
        <div class="text-success" id="sendDocResponseText">Pre-approval forms share successfully</div>
        <div class="text-danger" id="sendDocResponseText2">Could not send, Please try again</div>
    </div>

    <div class="row col-md-12 col-lg-12" style="">
        <div class="border file-uploader col-xxl-6 col-xl-6 col-lg-6" style="border: 1px #d3d1d1; padding:2%;">
            <input type="file" value="{{ $meta->uploads->where('name', 'payslip_file')->first()->path }}" class="file-input visually-hidden" id="fileInput3" accept=".pdf, .doc, .docx" name="payslip_file">
            <label for="fileInput3" class="file-input-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
                <span>Upload Latest Payslip</span>
            </label>
            <div class="pt-2">
                <ul class="file-list-2" id="fileList-3"></ul>
                @if ($meta->uploads->where('name', 'payslip_file')->isNotEmpty())
                    <p class="file-list">You uploaded a Payslip Copy on
                        {{
                            $meta->uploads->where('name', 'payslip_file')->first() != null ?
                            $meta->uploads->where('name', 'payslip_file')->first()->created_at->toFormattedDateString() : ''
                        }}
                    </p>
                @endif
            </div>
            <small id="payslipError" class="text-danger"></small>
        </div>
        <div class="border file-uploader col-xxl-6 col-xl-6 col-lg-6" style="border: 1px #d3d1d1; padding:2%;">
            <!-- Use a label for file input and add a Font Awesome icon -->
            <input type="file" value="{{ $meta->uploads->where('name', 'bankstatement')->first()->path }}" class="file-input visually-hidden" id="fileInput4" accept=".pdf, .doc, .docx" name="bankstatement">
            <label for="fileInput4" class="file-input-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
                <span>3 months Bank statement</span>
            </label>

            <!-- Uploaded file list -->
            <div class="pt-2">
                <ul class="file-list-3" id="fileList-4"></ul>
                @if ($meta->uploads->where('name', 'bankstatement')->isNotEmpty())
                    <p class="file-list">You uploaded a Bank Statement Copy on
                    {{
                        $meta->uploads->where('name', 'bankstatement')->first() !== null ?
                        $meta->uploads->where('name', 'bankstatement')->first()->created_at->toFormattedDateString() : ''
                    }}
                    </p>
                @endif
            </div>
            <small id="bankstatementError" class="text-danger"></small>
        </div>
        <div class="border file-uploader col-xxl-6 col-xl-6 col-lg-6" style="border: 1px #d3d1d1; padding:2%;">
            <!-- Use a label for file input and add a Font Awesome icon -->
            <input type="file" value="{{ $meta->uploads->where('name', 'passport')->first()->path }}" class="file-input visually-hidden" id="fileInput5" accept=".pdf, .doc, .docx" name="passport">
            <label for="fileInput5" class="file-input-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
                <span>Passport size photo</span>
            </label>

            <!-- Uploaded file list -->
            <div class="pt-2">
                <ul class="file-list-4" id="fileList-5"></ul>
                @if ($meta->uploads->where('name', 'passport')->isNotEmpty())
                    <p class="file-list">You uploaded a Passport Size photo on
                        {{
                            $meta->uploads->where('name', 'passport')->first() != null ?
                            $meta->uploads->where('name', 'passport')->first()->created_at->toFormattedDateString() : ''
                        }}
                    </p>
                @endif
            </div>
            <small id="passportError" class="text-danger"></small>
        </div>
        <div class="border file-uploader col-xxl-6 col-xl-6 col-lg-6" style="border: 1px #d3d1d1; padding:2%;">
            <!-- Use a label for file input and add a Font Awesome icon -->
            <input type="file" value="{{$meta->uploads->where('name', 'preapproval')->first()->path}}" class="file-input visually-hidden" id="fileInput6" accept=".pdf, .doc, .docx" name="preapproval">
            <label for="fileInput6" class="file-input-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
                <span>Pre approval Document</span>
            </label>

            <!-- Uploaded file list -->
            <div class="pt-2">
                <ul class="file-list-5" id="fileList-6"></ul>
                @if ($meta->uploads->where('name', 'preapproval')->isNotEmpty())
                    <p class="file-list">You uploaded a Pre-approval form Copy on
                        {{
                            $meta->uploads->where('name', 'preapproval')->first() != null ?
                            $meta->uploads->where('name', 'preapproval')->first()->created_at->toFormattedDateString() :''
                        }}
                    </p>
                @endif
            </div>
            <small id="preapprovalError" class="text-danger"></small>
        </div>
        <div class="border file-uploader col-xxl-6 col-xl-6 col-lg-6" style="border: 1px #d3d1d1; padding:2%;">
            <!-- Use a label for file input and add a Font Awesome icon -->
            <input type="file" value="{{ $meta->uploads->where('name', 'letterofintro')->first()->path }}" class="file-input visually-hidden" id="fileInput7" accept=".pdf, .doc, .docx" name="letterofintro">
            <label for="fileInput7" class="file-input-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
                <span>Letter of Introduction <span class="badge badge-danger bg-danger">Optional</span></span>
            </label>

            <!-- Uploaded file list -->
            <div class="pt-2">
                <ul class="file-list-5" id="fileList-7"></ul>
                @if ($meta->uploads->where('name', 'letterofintro')->isNotEmpty())
                    <p class="file-list">You uploaded a Letter of Introduction Copy on
                        {{
                            $meta->uploads->where('name', 'letterofintro')->first() != null ?
                            $meta->uploads->where('name', 'letterofintro')->first()->created_at->toFormattedDateString() : ''
                        }}
                    </p>
                @endif
            </div>
            <small id="letterError" class="text-danger"></small>
        </div>
    </div>
    <div style="float: right;">
        <button type="button" class="btn btn-light text-dark" onclick="prevStep(6)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Back
        </button>
        <button  style="background: linear-gradient(135deg, #6a3093, #873093)" type="button" class="btn btn-primary" onclick="nextStep(6)">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
        </button>
    </div>
</div>