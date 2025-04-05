<div class="dashboard-wrapper">
    <!-- Header Section with Gradient Background -->
    <div class="header-section" style="background-image: linear-gradient(135deg, #662d91, #912d73); color:#fff; border-radius: 0 0 1.5rem 1.5rem; padding: 2rem 0 3rem 0; box-shadow: 0 4px 15px rgba(102, 45, 145, 0.2);">
        <div class="container-fluid">
            <!-- Preserved Header Content -->
            <div class="header" style="background: transparent; position: absolute; top: 26px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="header-content d-flex justify-content-between align-items-center">
                                <div class="header-left">
                                </div>
                                <div class="header-right d-flex align-items-center">
                                    <div class="dark-light-toggle me-3" onclick="themeToggle()">
                                        <span class="dark"><i class="bi bi-moon"></i></span>
                                        <span class="light"><i class="bi bi-brightness-high"></i></span>
                                    </div>

                                    @include('livewire.dashboard.__parts.notifcations_part')
                                    @include('livewire.dashboard.__parts.profile_part')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Title Section -->
            <div class="row">
                <div class="col-xl-12" style="padding-top: 7svh">
                    <div class="page-title-content">
                        <h1 class="mb-4 text-white fw-bold" style="font-size: 2.5rem;">My Dashboard</h1>
                    </div>
                </div>
            </div>

            <!-- Wallet Balance Card -->
            <div class="row">
                <div class="col-xl-9">
                    <div class="p-3 wallet-balance-card">
                        <div class="px-0 card-body">
                            <p class="mb-1" style="color: #fec00f; font-weight: 600; font-size: 1rem;">
                                Your Wallet Balance
                            </p>
                            <div class="wallet-amount">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h1 class="mb-3 text-white fw-bold" style="font-size: 2.5rem;">0.00 ZMW</h1>
                                    </div>
                                </div>
                                <div id="chartx"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Body -->
    <div class="content-body mt-n5">
        <div class="container-fluid">
            <div class="row">
                <!-- Left Column Content -->
                <div class="col-xl-9">
                    <div class="row">
                        @include('livewire.dashboard.__parts.current-balance')

                        <!-- Quick Actions Section -->
                        <div class="mb-4 col-12">
                            <div class="mb-3 d-flex align-items-center">
                                <h4 class="mb-0 fw-bold text-primary">
                                    <i class="bi bi-lightning-fill me-2"></i>Quick Actions
                                </h4>
                            </div>
                            <div class="flex-wrap gap-3 quick-actions d-flex">
                                <a class="text-center action-item" href="{{ route('profile.show', ['view' => 'kyc']) }}">
                                    <div class="p-3 mb-2 shadow-sm btn btn-light rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-lightning-charge-fill text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                                        </svg>
                                    </div>
                                    <small class="fw-medium">Complete KYC</small>
                                </a>
                            </div>
                        </div>

                        <!-- Wallet Information Section -->
                        <div class="mb-4 col-12">
                            <div class="mb-3 d-flex align-items-center">
                                <h4 class="mb-0 fw-bold text-primary">
                                    <i class="bi bi-wallet2 me-2"></i>Wallet Information
                                </h4>
                            </div>
                            <div class="row">
                                <!-- Wallet Card -->
                                <div class="mb-3 col-md-4">
                                    <div class="shadow-sm card h-100 rounded-4 hover-card">
                                        <div class="p-4 card-body">
                                            <div class="mb-3 d-flex align-items-center">
                                                <span class="p-2 badge rounded-circle me-2" style="background-color: rgba(102, 45, 145, 0.1)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="#662d91" class="bi bi-wallet2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
                                                    </svg>
                                                </span>
                                                <h6 class="mb-0 text-muted">Wallet</h6>
                                            </div>
                                            <h5 class="mb-0 fw-bold">K 0.00</h5>
                                        </div>
                                    </div>
                                </div>

                                <!-- Withdrawals Card -->
                                <div class="mb-3 col-md-4">
                                    <div class="shadow-sm card h-100 rounded-4 hover-card">
                                        <div class="p-4 card-body">
                                            <div class="mb-3 d-flex align-items-center">
                                                <span class="p-2 badge rounded-circle me-2" style="background-color: rgba(102, 45, 145, 0.1)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="#662d91" class="bi bi-box-arrow-in-down"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>
                                                </span>
                                                <h6 class="mb-0 text-muted">Withdrawals</h6>
                                            </div>
                                            <h5 class="mb-0 fw-bold">K 0.0</h5>
                                        </div>
                                    </div>
                                </div>

                                <!-- Deposits Card -->
                                <div class="mb-3 col-md-4">
                                    <div class="shadow-sm card h-100 rounded-4 hover-card">
                                        <div class="p-4 card-body">
                                            <div class="mb-3 d-flex align-items-center">
                                                <span class="p-2 badge rounded-circle me-2" style="background-color: rgba(102, 45, 145, 0.1)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="#662d91" class="bi bi-box-arrow-in-up"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z" />
                                                    </svg>
                                                </span>
                                                <h6 class="mb-0 text-muted">Deposits</h6>
                                            </div>
                                            <h5 class="mb-0 fw-bold">K 0.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Loan History Section -->
                        <div class="mb-4 col-12">
                            <div class="mb-3 d-flex align-items-center">
                                <h4 class="mb-0 fw-bold text-primary">
                                    <i class="bi bi-clock-history me-2"></i>Loan History
                                </h4>
                            </div>
                            <div class="shadow-sm card rounded-4">
                                <div class="bg-transparent card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 card-title">Recent Loans</h5>
                                    <a href="{{ route('view-loan-requests') }}" class="btn btn-sm btn-outline-primary">See more</a>
                                </div>
                                @if (!empty($all_loan_requests->toArray()))
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-hover">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Loan ID</th>
                                                        <th>Date</th>
                                                        <th>Type</th>
                                                        <th>Amount</th>
                                                        <th>Payback</th>
                                                        <th>Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($all_loan_requests as $loan)
                                                        <tr>
                                                            <td><span class="badge bg-light text-dark">#{{ $loan->id }}</span></td>
                                                            <td>{{ $loan->created_at->toFormattedDateString() }}</td>
                                                            <td>
                                                                <span class="badge bg-danger-subtle text-danger">{{ $loan->type }}</span>
                                                            </td>
                                                            <td class="fw-medium text-primary">
                                                                {{ $loan->amount }} ZMW</td>
                                                            <td class="text-danger">
                                                                {{ App\Models\Application::payback($loan->amount, $loan->repayment_plan) }}
                                                                ZMW</td>
                                                            <td><strong>{{ App\Models\Loans::loan_balance($loan->id) }}
                                                                    ZMW</strong></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6" class="py-4 text-center">No completed loans</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-xl-3">
                    <div class="row">
                        <!-- KYC Verification Card -->
                        @if ($my_loan->complete == 0)
                            <div class="mb-4 col-12">
                                <div class="text-white shadow card rounded-4"
                                    style="background-image: linear-gradient(135deg, #662d91, #913d93);">
                                    <div class="p-4 card-body">
                                        <h4 class="mb-3">Hi, {{ auth()->user()->fname . ' ' . auth()->user()->lname }}!</h4>
                                        <p class="mb-4">
                                            Looks like you are not verified yet. Update your full profile details to use
                                            the full potential of MFS.
                                        </p>

                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <a class="p-3 bg-white rounded d-flex align-items-center bg-opacity-10 tour-kyc-1"
                                                    href="{{ route('profile.show', ['view' => 'kyc']) }}">
                                                    <span class="not-verified me-3"><i class="icofont-close-line"></i></span>
                                                    <span class="fw-medium">Update Profile (KYC)</span>
                                                    <div data-hint="Please continue to update and upload neccessary
                                                        profile information, to allow quick loan processing and review"
                                                        data-hint-position="top-left"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="mb-4 col-12">
                            <div class="gap-2 d-flex">
                                <a href="{{ route('payment.gate', ['view' => 'deposit']) }}"
                                   class="gap-2 btn btn-primary flex-grow-1 d-flex align-items-center justify-content-center"
                                   style="background: #662d91; border-color: #662d91;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                        <path
                                            d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                    </svg>
                                    <span>Transfer</span>
                                </a>
                                <a href="{{ route('payment.gate', ['view' => 'deposit']) }}"
                                   class="gap-2 btn btn-outline-primary flex-grow-1 d-flex align-items-center justify-content-center"
                                   style="border-color: #662d91; color: #662d91;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-safe" viewBox="0 0 16 16">
                                        <path
                                            d="M1 1.5A1.5 1.5 0 0 1 2.5 0h12A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 1 14.5V13H.5a.5.5 0 0 1 0-1H1V8.5H.5a.5.5 0 0 1 0-1H1V4H.5a.5.5 0 0 1 0-1H1zM2.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5z" />
                                        <path
                                            d="M13.5 6a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5M4.828 4.464a.5.5 0 0 1 .708 0l1.09 1.09a3.003 3.003 0 0 1 3.476 0l1.09-1.09a.5.5 0 1 1 .707.708l-1.09 1.09c.74 1.037.74 2.44 0 3.476l1.09 1.09a.5.5 0 1 1-.707.708l-1.09-1.09a3.002 3.002 0 0 1-3.476 0l-1.09 1.09a.5.5 0 1 1-.708-.708l1.09-1.09a3.003 3.003 0 0 1 0-3.476l-1.09-1.09a.5.5 0 0 1 0-.708zM6.95 6.586a2 2 0 1 0 2.828 2.828A2 2 0 0 0 6.95 6.586" />
                                    </svg>
                                    <span>Fund Account</span>
                                </a>
                            </div>
                        </div>

                        <!-- Referral Card -->
                        <div class="col-12">
                            <div class="border-0 shadow-sm card rounded-4">
                                <div class="p-4 card-body">
                                    <div class="mb-4">
                                        <div class="mb-3 d-flex align-items-center">
                                            <div class="p-2 me-3 rounded-circle" style="background-color: rgba(102, 45, 145, 0.1);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#662d91" class="bi bi-gift" viewBox="0 0 16 16">
                                                    <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07M9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a.5.5 0 0 1-.5.5H9V7zM2 10.5V7h4v8H2.5a.5.5 0 0 1-.5-.5m9-1.5h4v.5a.5.5 0 0 1-.5.5H11z"/>
                                                </svg>
                                            </div>
                                            <h5 class="mb-0">Invite & Earn</h5>
                                        </div>
                                        <h4 class="mb-2 fw-bold text-primary">Invite a friend and get K30</h4>
                                        <p class="mb-3 text-muted">
                                            You will receive up to K30 when they:
                                            <br>(1) Apply for a Loan
                                            <br>(2) Get approved and
                                            <br>(3) Payback
                                            <br><a href="#" class="text-primary">Learn more</a>
                                        </p>
                                    </div>

                                    <div class="copy-link">
                                        <form action="#">
                                            <div class="input-group">
                                                <input disabled type="text" class="form-control rounded-start"
                                                    value="https://mightyfinance.co.zm/" />
                                                <button class="text-white input-group-text copy"
                                                    style="background: #662d91; cursor: pointer;">Copy</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Preserve Original JavaScript -->
<script>
    $(document).ready(function() {
        const amountInput = document.getElementById('amountInput');
        var slider_months = 1;
        var init_return = (parseInt(100) * 0.21) * parseInt(1) + parseInt(100);

        $('#payback_value').text('Payback amount of: K' + init_return.toFixed(2));
        amountInput.addEventListener('input', function() {
            var inputValue = amountInput.value;
            var numericValue = inputValue.replace(/[^0-9.]/g, '');
            principal = parseInt(numericValue);
            var my_returns = (parseInt(principal) * 0.21) * parseInt(slider_months) + parseInt(
                principal);
            $('#payback_value').text('Payback amount of: K' + my_returns.toFixed(2));
            $('#principal_value').text('Borrowing: K' + principal);
            $('#slider_value').text('Payback in ' + slider_months + ' Months');
        });

        $('#slider_input').on('input', function() {
            var sliderValue = $(this).val();
            slider_months = sliderValue;
            var inputValue = amountInput.value;
            var numericValue = inputValue.replace(/[^0-9.]/g, '');
            principal = parseInt(numericValue);

            var my_returns = (parseInt(principal) * 0.21) * parseInt(sliderValue) + parseInt(principal);
            principal = parseInt(numericValue);
            $('#payback_value').text('Payback amount of: K' + my_returns.toFixed(2));
            $('#principal_value').text('Borrowing: K' + principal);
            $('#slider_value').text('Payback in ' + sliderValue + ' Months');
        });
    });

    const slider_input = document.getElementById('slider_input'),
        slider_thumb = document.getElementById('slider_thumb'),
        slider_line = document.getElementById('slider_line');

    function showSliderValue() {
        slider_thumb.innerHTML = slider_input.value;
        const bulletPosition = (slider_input.value / slider_input.max),
            space = slider_input.offsetWidth - slider_thumb.offsetWidth;

        slider_thumb.style.left = (bulletPosition * space) + 'px';
        slider_line.style.width = slider_input.value + '%';
    }

    showSliderValue();
    window.addEventListener("resize", showSliderValue);
    slider_input.addEventListener('input', showSliderValue, false);
</script>

<style>
/* Additional CSS for enhanced UI */
.dashboard-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.hover-card {
    transition: all 0.3s ease;
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(102, 45, 145, 0.1) !important;
}

.action-item {
    text-decoration: none;
    color: inherit;
    transition: all 0.2s ease;
}

.action-item:hover {
    transform: translateY(-3px);
}

.badge {
    font-weight: 500;
}

.table th {
    font-weight: 600;
    color: #555;
}

@media (max-width: 768px) {
    h1 {
        font-size: 2rem !important;
    }

    .header-section {
        border-radius: 0 0 1rem 1rem;
    }
}
</style>