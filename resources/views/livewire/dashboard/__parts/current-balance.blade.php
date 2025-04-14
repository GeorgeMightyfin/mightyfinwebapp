@if ($my_loan !== null)
    <div class="loan-dashboard-container">
        <!-- Current Loan Status Card -->
        <div class="loan-status-card">
            <div class="loan-status-header">
                <h1 class="subtitle" style="color: #888577">Current Loan</h1>
                <h2 class="amount" style="color: #3c3833">K{{ number_format($my_loan->amount, 2, '.',',') }}</h2>
                <h4 class="amount" style="color: #dbcbb8">{{ $my_loan->loan_product->name }} </h4>
            </div>

            <a class="loan-details-link" href="#">
                <div class="loan-card"
                    @switch($my_loan->status)
                        @case(1)
                            data-status="active"
                            @break
                        @case(2)
                            data-status="processing"
                            @break
                        @case(3)
                            data-status="declined"
                            @break
                        @case(4)
                            data-status="defaulted"
                            @break
                        @default
                            data-status="pending approval"
                    @endswitch
                >
                    <div class="loan-info">
                        <div class="loan-details">
                            <div class="loan-type" style="color:#98929e">My Pending Repayment</div>
                            <div class="balance" style="color:#120a1a">K{{ number_format(App\Models\Application::open_balance($my_loan), 2, '.',',') }}</div>
                            <div class="due-date">
                                @if ($my_loan->status == 1)
                                    @php
                                        if ($my_loan->loan->final_due_date !== null) {
                                            $date_str = $my_loan->loan->final_due_date;
                                            $date = DateTime::createFromFormat('Y-m-d H:i:s', $date_str);
                                            echo 'Due: ' . $date->format('F j, Y, g:i a');
                                        } else {
                                            $my_loan->due_date;
                                        }
                                    @endphp
                                @else
                                    In review
                                @endif
                            </div>
                        </div>

                        <div class="action-button">
                            @switch($my_loan->status)
                                @case(1)
                                    <a href="{{ route('transaction.item', ['view'=>'payments']) }}" class="text-white btn-action active">
                                        <span class="btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z"/>
                                                <path fill="white" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                              </svg>                                                                                      </span>
                                        Repay Now
                                    </a>
                                    @break
                                @case(2)
                                    <a href="{{ route('loan-details', $my_loan->id) }}" class="btn-action processing">
                                        <span class="btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
                                        </span>
                                        Processing
                                        @if($stage !== null)
                                            <div class="status-badge">{{$stage}}</div>
                                        @else
                                            <div class="status-badge">KYC Pending</div>
                                        @endif
                                    </a>
                                    @break
                                @case(3)
                                    <a href="{{ route('loan-details', $my_loan->id) }}" class="btn-action declined">
                                        <span class="btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-10v-2h10v2z"/></svg>
                                        </span>
                                        Declined
                                        @if($stage !== null)
                                            <div class="status-badge">{{$stage}}</div>
                                        @else
                                            <div class="status-badge">KYC Incomplete</div>
                                        @endif
                                    </a>
                                    @break
                                @case(4)
                                    <a href="{{ route('loan-details', $my_loan->id) }}" class="btn-action defaulted">
                                        <span class="btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                                        </span>
                                        Defaulted
                                    </a>
                                    @break
                                @default
                                    <a href="{{ route('loan-details', $my_loan->id) }}" class="btn-action pending">
                                        <span class="btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
                                        </span>
                                        Pending Approval
                                    </a>
                                @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@else
    <div class="no-loan-container">
        <div class="action-cards">
            <!-- Loan Application Card -->
            <div class="apply-loan-card">
                <div class="card-content">
                    <div class="card-text">
                        <div class="tag">New Application</div>
                        <h3 class="card-title">Need funds?</h3>
                        <p class="card-description">Get quick access to cash with our easy application process</p>
                        <a href="{{ route('new-loan') }}" class="apply-button">
                            <span class="button-text">Apply Now</span>
                            <span class="button-icon" >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path fill="white" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                  </svg>
                            </span>
                        </a>
                    </div>
                    <div class="card-illustration">
                        <img src="{{ asset('public/images/mfs.png') }}" alt="Loan Application" class="illustration-image">
                    </div>
                </div>
            </div>

            <!-- Refer a Friend Card -->
            <div class="refer-friend-card">
                <div class="card-content">
                    <div class="card-text">
                        <div class="tag">Invitation</div>
                        <h3 class="card-title">Refer & Earn</h3>
                        <p class="card-description">Share with friends and you both get special benefits</p>
                        <button class="refer-button">
                            <span class="button-text">Share Now</span>
                            <span class="button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path fill="white" d="M13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .959 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.199 2.29a4 4 0 1 1-.959 1.755zM6 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm11-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                  </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<style>
/* Global Styles */
:root {
    --primary-color: #fff;
    --primary-gradient: linear-gradient(135deg, #6a3093 0%, #a044ff 100%);
    --secondary-color: #ffc107;
    --text-color: #333;
    --text-light: #6c757d;
    --white: #ffffff;
    --success: #2ecc71;
    --warning: #f39c12;
    --danger: #f02d17;
    --dark: #333;
    --light-bg: #f8f9fa;
    --border-radius: 16px;
    --shadow: 0 10px 30px rgba(106, 48, 147, 0.15);
    --shadow-hover: 0 15px 35px rgba(106, 48, 147, 0.25);
    --font-primary: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.loan-dashboard-container,
.no-loan-container {
    font-family: var(--font-primary);
    max-width: 100%;
    padding: 1.5rem;
}

/* Current Loan Card Styles */
.loan-status-card {
    margin-bottom: 2rem;
}

.loan-status-header {
    margin-bottom: 1rem;
}

.subtitle {
    color: var(--primary-color);
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 0.25rem;
    letter-spacing: 0.5px;
}

.amount {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-color);
    margin: 0;
}

.loan-details-link {
    text-decoration: none;
    display: block;
    transition: transform 0.3s ease;
}

.loan-details-link:hover {
    transform: translateY(-5px);
}

.loan-card {
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
    padding: 2rem;
}

.loan-card:hover {
    box-shadow: var(--shadow-hover);
}

.loan-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 8px;
    background: var(--primary-gradient);
}

.loan-card[data-status="active"]::before {
    background: linear-gradient(90deg, #802ecc, #38258c);
}

.loan-card[data-status="processing"]::before {
    background: linear-gradient(90deg, #f39c12, #e67e22);
}

.loan-card[data-status="declined"]::before {
    background: linear-gradient(90deg, #e74c3c, #c0392b);
}

.loan-card[data-status="defaulted"]::before {
    background: linear-gradient(90deg, #333, #555);
}

.loan-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.loan-details {
    flex: 1;
}

.loan-type {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.balance {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: var(--text-color);
}

.due-date {
    color: var(--text-light);
    font-size: 0.875rem;
}

.action-button {
    margin-left: 1.5rem;
}

.btn-action {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 1.5rem;
    border-radius: 50px;
    border: none;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-size: 1rem;
    min-width: 180px;
}

.btn-action.active {
    background-color: rgb(66, 33, 126);
    color:rgb(255, 255, 255)
}

.btn-action.processing {
    background-color: var(--warning);
    color: var(--white);
}

.btn-action.declined {
    background-color: var(--danger);
    color: var(--white);
}

.btn-action.defaulted {
    background-color: var(--dark);
    color: var(--white);
}
.btn-action.pending {
    background-color: #08ac6dda;
    color: var(--white);
}
/*
.btn-action:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    color:white !important;
} */

.btn-icon {
    margin-right: 0.75rem;
    display: flex;
    align-items: center;
}

.status-badge {
    background-color: rgba(255, 255, 255, 0.2);
    font-size: 0.75rem;
    border-radius: 12px;
    padding: 0.25rem 0.75rem;
    margin-left: 0.75rem;
}

/* No Loan Cards Styles */
.action-cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.apply-loan-card,
.refer-friend-card {
    border-radius: var(--border-radius);
    overflow: hidden;
    height: 300px;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
    position: relative;
}

.apply-loan-card:hover,
.refer-friend-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
}

.apply-loan-card {
    background: rgba(106, 48, 147, 0.85);
    background-size: cover;
    background-position: center;
    color: var(--white);
}


.apply-loan-card::before{
    background: rgba(106, 48, 147, 0.85);
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.refer-friend-card {
    background: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    position: relative;
}

.refer-friend-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(106, 48, 147, 0.85);
}

.card-content {
    display: flex;
    height: 100%;
    padding: 2rem;
    position: relative;
    z-index: 1;
}

.card-text {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.tag {
    background-color: rgba(255, 255, 255, 0.2);
    color: var(--white);
    display: inline-block;
    padding: 0.25rem 1rem;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.card-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
    color:#fff;
}

.card-description {
    font-size: 0.875rem;
    opacity: 0.9;
    margin-bottom: 1.5rem;
    max-width: 80%;
}

.apply-button,
.refer-button {
    display: inline-flex;
    align-items: center;
    background-color: var(--secondary-color);
    color: var(--primary-color);
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 0.875rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: fit-content;
}

.apply-button:hover,
.refer-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    background-color: #ffca2c;
}

.button-text {
    margin-right: 0.5rem;
    color:#fff
}

.button-icon {
    display: flex;
    align-items: center;
    color:#fff;
}

.card-illustration {
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    width: 30%;
}

.illustration-image {
    padding-left: 50%;
    margin-bottom:-40px;
    max-width: 160%;
    max-height: 140px;
    object-fit: contain;
    transition: transform 0.5s ease;
}
@media screen and (max-width: 768px) {
  .illustration-image {
    padding-left: 52%;
    margin-bottom: 0;
    max-width: 102%;
    max-height: 123px !important;
    object-fit: contain;
    position: absolute;
    bottom: -20px
  }
}
.apply-loan-card:hover .illustration-image {
    transform: translateY(-10px);
}

/* Responsive Styles */
@media (max-width: 992px) {
    .action-cards {
        grid-template-columns: 1fr;
    }

    .apply-loan-card,
    .refer-friend-card {
        padding: 0.5rem;
    }

    .card-illustration {
        width: 20%;
    }

    .illustration-image {
        max-height: 100px;
    }
}

@media (max-width: 768px) {
    .loan-info {
        flex-direction: column;
    }

    .action-button {
        margin-left: 0;
        margin-top: 1rem;
        width: 100%;
    }

    .btn-action {
        width: 100%;
        justify-content: space-between;
    }

    .status-badge {
        margin-left: auto;
    }

    .card-content {
        padding: 1.5rem;
    }

    .card-description {
        max-width: 100%;
    }
}

@media (max-width: 576px) {
    .apply-loan-card,
    .refer-friend-card {
        height: auto;
    }

    .card-content {
        flex-direction: column;
        padding: 1.5rem;
    }

    .card-illustration {
        width: 100%;
        justify-content: center;
        margin-top: 1rem;
    }

    .illustration-image {
        max-height: 80px;
    }
}
</style>