<div class="col-12 col-xl-12">
    <!-- Header Section with Gradient Background -->
    <div class="header-section" style="background-image: linear-gradient(180deg, #fff, #fff); color:#18062e; border-radius: 0 0 1rem 1rem; padding: 1.25rem 0 1.5rem 0; box-shadow: 0 4px 12px rgba(102, 45, 145, 0.25);">
        <div class="container flex px-4">
            <!-- Top Navigation Bar -->
            <div class="mb-3 d-flex justify-content-end align-items-center">
                <div class="gap-2 header-right d-flex align-items-center">
                    <div class="dark-light-toggle" onclick="themeToggle()">
                        <span class="dark"><i class="bi bi-moon"></i></span>
                        <span class="light"><i class="bi bi-brightness-high"></i></span>
                    </div>
                    @include('livewire.dashboard.__parts.notifcations_part')
                    @include('livewire.dashboard.__parts.profile_part')
                </div>
            </div>

            <!-- Dashboard Content Row -->
            <div class="content-body col-xl-12 col-xxl-12">
                <div class="px-2 row gx-4">
                    <div class="col-xl-8">
                        <div class="row">
                            @include('livewire.dashboard.__parts.current-balance')

                            <!-- Quick Actions Section -->
                            <div class="mb-5 col-12">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 fw-bold text-primary">
                                        <i class="bi bi-lightning-fill me-2"></i>Quick Actions
                                    </h4>
                                    <span class="px-3 py-2 badge bg-primary-subtle text-primary rounded-pill">Essentials</span>
                                </div>
                                <div class="flex-wrap gap-4 quick-actions d-flex">
                                    <a class="text-center action-item position-relative" href="{{ route('profile.show', ['view' => 'kyc']) }}">
                                        <div class="p-3 mb-3 shadow-sm btn btn-light rounded-circle action-icon-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-lightning-charge-fill text-primary" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                                            </svg>
                                            <div class="ripple-effect"></div>
                                        </div>
                                        <span class="fw-medium">Complete KYC</span>
                                        <span class="top-0 position-absolute start-100 translate-middle badge rounded-pill bg-danger">
                                            !
                                        </span>
                                    </a>
                                    <a class="text-center action-item" href="#">
                                        <div class="p-3 mb-3 shadow-sm btn btn-light rounded-circle action-icon-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-bank text-primary" viewBox="0 0 16 16">
                                                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.5.5 0 0 1-.485.62H.5a.5.5 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                                            </svg>
                                            <div class="ripple-effect"></div>
                                        </div>
                                        <span class="fw-medium">Apply for Loan</span>
                                    </a>
                                    <a class="text-center action-item" href="#">
                                        <div class="p-3 mb-3 shadow-sm btn btn-light rounded-circle action-icon-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-credit-card text-primary" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1z"/>
                                            </svg>
                                            <div class="ripple-effect"></div>
                                        </div>
                                        <span class="fw-medium">Payment Methods</span>
                                    </a>
                                    <a class="text-center action-item" href="#">
                                        <div class="p-3 mb-3 shadow-sm btn btn-light rounded-circle action-icon-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-credit-card text-primary" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1z"/>
                                            </svg>
                                            <div class="ripple-effect"></div>
                                        </div>
                                        <span class="fw-medium">Payment Methods</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Wallet Information Section -->
                            {{-- <div class="mb-5 col-12">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 fw-bold text-primary">
                                        <i class="bi bi-wallet2 me-2"></i>Wallet Information
                                    </h4>
                                    <button class="px-3 btn btn-sm btn-outline-primary rounded-pill">Refresh <i class="bi bi-arrow-repeat ms-1"></i></button>
                                </div>
                                <div class="row g-4">
                                    <!-- Wallet Card -->
                                    <div class="col-md-4">
                                        <div class="shadow card h-100 rounded-4 hover-card wallet-card">
                                            <div class="p-4 card-body position-relative">
                                                <div class="wallet-shine"></div>
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
                                                <span class="mt-2 badge bg-success-subtle text-success rounded-pill small">Ready to Fund</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Withdrawals Card -->
                                    <div class="col-md-4">
                                        <div class="shadow card h-100 rounded-4 hover-card">
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
                                                <h5 class="mb-0 fw-bold">K 0.00</h5>
                                                <span class="mt-2 badge bg-secondary-subtle text-secondary rounded-pill small">No Recent Activity</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deposits Card -->
                                    <div class="col-md-4">
                                        <div class="shadow card h-100 rounded-4 hover-card">
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
                                                <span class="mt-2 badge bg-info-subtle text-info rounded-pill small">Add Funds Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Loan History Section -->
                            <div class="mb-5 col-12">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 fw-bold text-primary">
                                        <i class="bi bi-clock-history me-2"></i>Loan History
                                    </h4>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('view-loan-requests') }}" class="btn btn-sm btn-outline-primary text-dark rounded-pill">See all <i class="bi bi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="border-0 shadow-sm card rounded-4">
                                    <div class="bg-transparent card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 card-title">Recent Loans</h5>
                                    </div>
                                    @if (!empty($all_loan_requests->toArray()))
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-hover">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Loan ID</th>
                                                            <th>Date</th>
                                                            <th>Duration</th>
                                                            <th>Amount</th>
                                                            <th>Payback</th>
                                                            <th>Balance</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($all_loan_requests as $loan)
                                                            <tr class="loan-row">
                                                                <td><span class="badge bg-light text-dark">#{{ $loan->id }}</span></td>
                                                                <td>{{ $loan->created_at->toFormattedDateString() }}</td>
                                                                <td>
                                                                    <span class="badge bg-danger-subtle text-danger">{{ $loan->repayment_plan }} Months</span>
                                                                </td>
                                                                <td class="fw-medium text-primary">
                                                                    K{{ number_format($loan->amount, 2, '.',',') }}</td>
                                                                <td class="text-danger">
                                                                    K{{ number_format(App\Models\Application::payback($loan), 2, '.',',') }}
                                                                </td>
                                                                <td><strong>K{{  number_format(App\Models\Application::open_balance($loan), 2, '.',',')  }}
                                                                        </strong>
                                                                    </td>
                                                                <td>
                                                                    <a href="{{ route('loan-details', $loan->id) }}" class="btn btn-sm btn-light text-dark rounded-pill"><i class="bi bi-eye"></i></a>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="7" class="py-5 text-center">
                                                                    <div class="empty-state">
                                                                        <div class="mb-3 empty-state-icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#662d91" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                                                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                                                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                                                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                                                            </svg>
                                                                        </div>
                                                                        <h5 class="mb-2">No Loan History Yet</h5>
                                                                        <p class="mb-4 text-muted">Ready to apply for your first loan? It only takes a few minutes!</p>
                                                                        <a href="#" class="px-4 py-2 btn btn-primary">Apply Now</a>
                                                                    </div>
                                                                </td>
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

                    <div class="col-xl-4">
                        <div class="row">
                            @if ($my_loan->complete == 0)
                                <div class="mb-5 col-12">
                                    <div class="text-white border-0 shadow-lg card rounded-4 verification-card"
                                        style="background-image: linear-gradient(135deg, #662d91, #913d93);">
                                        <div class="p-4 card-body">
                                            <div class="mb-2 d-flex justify-content-between">
                                                <h4 class="mb-0">Hey, {{ auth()->user()->fname }}! 👋</h4>
                                                <div class="profile-avatar">
                                                    <div class="avatar-placeholder">{{ substr(auth()->user()->fname, 0, 1) }}</div>
                                                </div>
                                            </div>
                                            <p class="mb-4">
                                                Complete your verification to unlock all features and maximize your MFS experience!
                                            </p>

                                            <div class="mb-3 progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-4 small">Profile completion: <strong>25%</strong></p>

                                            <ul class="list-unstyled">
                                                <li class="mb-3">
                                                    <a class="p-3 bg-white rounded-4 d-flex align-items-center justify-content-between bg-opacity-10 tour-kyc-1 verification-link"
                                                        href="{{ route('profile.show', ['view' => 'kyc']) }}">
                                                        <div class="d-flex align-items-center">
                                                            <span class="not-verified me-3"><i class="icofont-close-line"></i></span>
                                                            <span class="fw-medium">Complete KYC Verification</span>
                                                        </div>
                                                        <i class="text-white bi bi-chevron-right"></i>
                                                    </a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="p-3 bg-white rounded-4 d-flex align-items-center justify-content-between bg-opacity-10 verification-link"
                                                        href="#">
                                                        <div class="d-flex align-items-center">
                                                            <span class="not-verified me-3"><i class="icofont-close-line"></i></span>
                                                            <span class="fw-medium">Verify Mobile Number</span>
                                                        </div>
                                                        <i class="text-white bi bi-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-5 col-12">
                                <div class="gap-3 d-flex">
                                    <a href="{{ route('payment.gate', ['view' => 'deposit']) }}"
                                       class="gap-2 py-3 btn btn-primary flex-grow-1 d-flex align-items-center justify-content-center position-relative btn-pulse"
                                       style="background: #662d91; border-color: #662d91;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                            <path
                                                d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                        </svg>
                                        <span>Transfer Money</span>
                                        <div class="btn-hover-effect"></div>
                                    </a>
                                    <a href="{{ route('payment.gate', ['view' => 'deposit']) }}"
                                       class="gap-2 py-3 btn btn-outline-primary flex-grow-1 d-flex align-items-center justify-content-center"
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