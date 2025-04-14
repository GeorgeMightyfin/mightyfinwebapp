<div class="content-body">
    <div class="container mt-4">
        <!-- Loan Information Card - Enhanced -->
        <div class="row">
            <div class="col-xxl-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="card-title text-primary d-flex align-items-center">
                            <i class="bi bi-clipboard-data me-2"></i> MY LOAN INFORMATION
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <!-- Loan Details -->
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="info-card bg-light-primary p-3 rounded-3 h-100">
                                    <span class="text-muted small">Loan Product</span>
                                    <h5 class="fw-bold mb-1">{{ $loan_product->name }} Loan</h5>
                                    <div class="d-flex align-items-center mt-2">
                                        <i class="bi bi-credit-card me-2 text-primary"></i>
                                        <small class="text-muted">{{ $loan->loan_number }}</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Borrowed Amount -->
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="info-card bg-light-success p-3 rounded-3 h-100">
                                    <span class="text-muted small">Borrowed Amount</span>
                                    <h5 class="fw-bold mb-1">K{{ number_format($loan->amount, 2, '.',',') ?? 0 }}</h5>
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="info-card bg-light-warning p-3 rounded-3 h-100">
                                    <span class="text-muted small">Duration</span>
                                    <h5 class="fw-bold mb-1">{{ $loan->repayment_plan }} Month(s)</h5>
                                    <div class="d-flex align-items-center mt-2">
                                        <i class="bi bi-calendar-check me-2 text-warning"></i>
                                        <small>K{{ number_format(App\Models\Application::payback_installment($loan), 2, '.',',') }} Monthly</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Payback -->
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="info-card bg-light-info p-3 rounded-3 h-100">
                                    <span class="text-muted small">Total Payback</span>
                                    <h5 class="fw-bold mb-1">K{{ number_format(App\Models\Application::payback($loan), 2, '.', ',') }}</h5>
                                    <div class="d-flex align-items-center mt-2">
                                        <i class="bi bi-cash-stack me-2 text-info"></i>
                                        <small>Including interest</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Information Card - Enhanced -->
        <div class="row">
            <div class="col-xxl-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="card-title text-primary d-flex align-items-center">
                            <i class="bi bi-person-badge me-2"></i> MY USER INFORMATION
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- User Profile Photo -->
                            <div class="col-xxl-4 col-xl-4 col-lg-4 mb-4">
                                <div class="profile-photo-container text-center">
                                    <div class="avatar-lg position-relative">
                                        @if ($loan->user->profile_photo_path)
                                            <img src="{{ '../public/'.Storage::url($loan->user->profile_photo_path) }}"
                                                 class=" border border-3 border-primary shadow-sm"
                                                 alt="Profile Photo" style="border-radius: 20px; width: 100%; height: auto; max-width: 300px;">
                                        @else
                                            <img src="https://thumbs.dreamstime.com/b/default-avatar-profile-image-vector-social-media-user-icon-potrait-182347582.jpg"
                                                class=" border border-3 border-primary shadow-sm"
                                                 alt="Default Profile" style="border-radius: 20px; width: 100%; height: auto; max-width: 300px;">
                                        @endif
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-0">{{ $loan->user->fname.' '.$loan->user->lname }}</h5>
                                        <small class="text-muted">User ID: {{ $loan->user->id }}</small>
                                    </div>
                                </div>
                            </div>

                            <!-- User Details -->
                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                <div class="row g-3">
                                    <!-- Personal Info -->
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="user-detail-card p-3 rounded-3 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-person-circle me-2 text-primary"></i>
                                                <span class="text-muted small">FULL NAME</span>
                                            </div>
                                            <h6 class="fw-bold mb-0">{{ $loan->user->fname.' '.$loan->user->lname }}</h6>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="user-detail-card p-3 rounded-3 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-envelope me-2 text-primary"></i>
                                                <span class="text-muted small">EMAIL</span>
                                            </div>
                                            <h6 class="fw-bold mb-0">{{ $loan->user->email ?? 'Not set'}}</h6>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="user-detail-card p-3 rounded-3 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-telephone me-2 text-primary"></i>
                                                <span class="text-muted small">PHONE</span>
                                            </div>
                                            <h6 class="fw-bold mb-0">
                                                <a href="tel:{{ $loan->user->phone }}" class="text-dark">+26{{ $loan->user->phone ?? 'Not set'}}</a>
                                            </h6>
                                        </div>
                                    </div>

                                    <!-- Address Info -->
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="user-detail-card p-3 rounded-3 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-house-door me-2 text-primary"></i>
                                                <span class="text-muted small">ADDRESS</span>
                                            </div>
                                            <h6 class="fw-bold mb-0">{{ $loan->user->address ?? 'Not set'}}</h6>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="user-detail-card p-3 rounded-3 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-calendar-event me-2 text-primary"></i>
                                                <span class="text-muted small">JOINED DATE</span>
                                            </div>
                                            <h6 class="fw-bold mb-0">{{ $loan->user->created_at->toFormattedDateString()}}</h6>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="user-detail-card p-3 rounded-3 h-100">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi bi-credit-card-2-front me-2 text-primary"></i>
                                                <span class="text-muted small">PRODUCT</span>
                                            </div>
                                            <h6 class="fw-bold mb-0">{{ $loan_product->name }} Loan</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents Section - Enhanced -->
        @role('user')@else
        <div class="row mt-4">
            <div class="col-xxl-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="card-title text-primary d-flex align-items-center">
                            <i class="bi bi-file-earmark-text me-2"></i> SUPPORT DOCUMENTS & REFERENCES
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <!-- Document Cards -->
                            @if ($loan->user->uploads->where('name', 'nrc_file')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'nrc_file')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-primary rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-text text-primary" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">NRC Document</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'nrc_file')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if ($loan->user->uploads->where('name', 'tpin_file')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'tpin_file')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-success rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-earmark-lock text-success" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">TPIN Document</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'tpin_file')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if ($loan->user->uploads->where('name', 'preapproval')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'preapproval')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-warning rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-check text-warning" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">Preapproval</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'preapproval')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if ($loan->user->uploads->where('name', 'letterofintro')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'letterofintro')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-info rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-earmark-text text-info" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">Intro Letter</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'letterofintro')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if ($loan->user->uploads->where('name', 'bankstatement')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'bankstatement')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-danger rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-earmark-bar-graph text-danger" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">Bank Statement</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'bankstatement')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if ($loan->user->uploads->where('name', 'payslip_file')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'payslip_file')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-secondary rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-earmark-spreadsheet text-secondary" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">Payslip</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'payslip_file')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif

                            @if ($loan->user->uploads->where('name', 'passport')->isNotEmpty())
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="document-card p-3 text-center">
                                    <a href="{{ 'public/'.Storage::url($loan->user->uploads->where('name', 'passport')->first()->path) }}" class="open-modal" data-toggle="modal" data-target="#fileModal" data-file-url="{{ 'public/'.Storage::url($loan->user->uploads[0]->path) }}">
                                        <div class="document-icon bg-light-dark rounded-3 p-3 mb-2">
                                            <i class="bi bi-file-earmark-image text-dark" style="font-size: 2rem;"></i>
                                        </div>
                                        <h6 class="mb-1">Passport Photo</h6>
                                        <small class="text-muted">Uploaded: {{ $loan->user->uploads->where('name', 'passport')->first()->created_at->toFormattedDateString() }}</small>
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endrole

        <!-- User Actions Section -->
        @role('user')
        <div class="row mt-4">
            <!-- Loan Status Card -->
            <div class="col-xxl-8 col-xl-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="card-title text-primary d-flex align-items-center">
                            <i class="bi bi-clipboard-check me-2"></i> LOAN STATUS
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                @if ($loan->status == 0)
                                    @if($loan->complete == 0)
                                        <div class="avatar-sm rounded-circle bg-warning bg-opacity-10 p-2">
                                            <i class="bi bi-exclamation-triangle fs-4 text-warning"></i>
                                        </div>
                                    @endif
                                @elseif ($loan->status == 1)
                                    <div class="avatar-sm rounded-circle bg-success text-white bg-opacity-10 p-2">
                                        <i class="bi bi-check fs-4 text-white"></i>
                                    </div>
                                @elseif ($loan->status == 2)
                                    <div class="avatar-sm rounded-circle bg-info bg-opacity-10 p-2">
                                        <i class="bi bi-hourglass-split fs-4 text-info"></i>
                                    </div>
                                @elseif ($loan->status == 3)
                                    <div class="avatar-sm rounded-circle bg-danger bg-opacity-10 p-2">
                                        <i class="bi bi-circle fs-4 text-danger"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">
                                    @if ($loan->status == 0)
                                        @if($loan->complete == 0)
                                            <span class="text-warning">Incomplete KYC</span>
                                        @else
                                            <span class="text-secondary">Unverified</span>
                                        @endif
                                    @elseif ($loan->status == 1)
                                        <span class="text-success">Accepted</span>
                                    @elseif ($loan->status == 2)
                                        <span class="text-info">Processing</span>
                                    @elseif ($loan->status == 3)
                                        <span class="text-danger">Rejected</span>
                                    @endif
                                </h5>
                                <p class="text-muted mb-2">
                                    @if ($loan->status == 0)
                                        @if($loan->complete == 0)
                                            Your loan request needs attention. Please update your profile information within the next 24 hours.
                                        @else
                                            Your loan request is unverified. Please hold on while we process your request.
                                        @endif
                                    @elseif ($loan->status == 1)
                                        Great news! Your loan request has been accepted. Congratulations!
                                    @elseif ($loan->status == 2)
                                        Your loan request is currently under review. We appreciate your patience.
                                    @elseif ($loan->status == 3)
                                        Loan request rejected. Feel free to reapply later or contact support.
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            @if ($loan->status == 0)
                                <a href="{{ route('profile.show') }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-square me-1"></i> Update Profile
                                </a>
                            @endif
                            @if ($loan->status == 1)
                                <p href="#" class="text-muted">
                                    <i class=" bi bi-cash-stack me-1"></i> Make repayment
                                </p>
                            @endif
                            @if ($loan->status == 3)
                                <a href="#" class="btn btn-primary">
                                    <i class="bi bi-arrow-repeat me-1"></i> Reapply
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Referral Card -->
            <div class="col-xxl-4 col-xl-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white border-0 py-3">
                        <h4 class="card-title text-primary d-flex align-items-center">
                            <i class="bi bi-people me-2"></i> EARN COMMISSION
                        </h4>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-sm rounded-circle bg-purple bg-opacity-10 p-2">
                                    <i class="bi bi-gift fs-4 text-purple"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Earn 30% Commission</h5>
                                    <p class="text-muted mb-0">Refer your friends and earn 30% of their trading fees.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a @disabled(true) href="#" class="btn btn-primary w-100">
                                <i class="bi bi-share me-1"></i> Referral Program
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <!-- Admin Approval Section -->
            @if ($this->my_review_status($loan->id) == 1)
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        @if ($this->my_approval_status($loan->id) == 1)
                                            <div class="avatar-sm rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                                <i class="bi bi-check-circle fs-4 text-success"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-0 text-success">You approved this loan</h5>
                                                <small class="text-muted">Your approval has been recorded</small>
                                            </div>
                                        @else
                                            <div class="avatar-sm rounded-circle bg-warning bg-opacity-10 p-2 me-3">
                                                <i class="bi bi-exclamation-triangle fs-4 text-warning"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Pending Your Approval</h5>
                                                <small class="text-muted">Please review before taking action</small>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button class="btn btn-light">
                                            <i class="bi bi-x-circle me-1"></i> Cancel Review
                                        </button>
                                        <button wire:click="setLoanID({{$loan->id}})" data-bs-target="#kt_modal_decline_warning" data-bs-toggle="modal" class="btn btn-danger">
                                            <i class="bi bi-x-lg me-1"></i> Decline
                                        </button>
                                        <button wire:click="accept({{$loan->id}})" class="btn btn-primary">
                                            <i class="bi bi-check-lg me-1"></i> Approve
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endrole
    </div>

    @include('livewire.dashboard.loans.__modals.review-warning')
    @include('livewire.dashboard.loans.__modals.decline-loan')
</div>

<!-- Add this CSS to your stylesheet -->
<style>
    .info-card {
        transition: all 0.3s ease;
        /* border-bottom: 4px solid; */
    }
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .user-detail-card {
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    .user-detail-card:hover {
        background-color: #f8f9fa;
    }
    .document-card {
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        border-radius: 8px;
    }
    .document-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .document-icon {
        transition: all 0.3s ease;
    }
    .document-card:hover .document-icon {
        transform: scale(1.1);
    }
    .profile-photo-container {
        position: relative;
    }
    .profile-photo-container::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 10px;
        background: rgba(0,0,0,0.1);
        filter: blur(5px);
        z-index: -1;
    }
</style>