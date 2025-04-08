<style>
    /* Base styles */
    :root {
        --primary: #9b43ee;
        --primary-light: #5704d315;
        --success: #2ecc71;
        --warning: #f39c12;
        --danger: #e74c3c;
        --dark: #2c3e50;
        --gray: #7f8c8d;
        --light-gray: #ecf0f1;
        --white: #ffffff;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.07), 0 1px 3px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    }

    /* Animations */
    @keyframes slide-fade-up {
        0% {
            transform: translateY(50px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    @keyframes spinner {
        to { transform: rotate(360deg); }
    }

    .loader {
        width: 24px;
        height: 24px;
        border: 3px solid var(--primary-light);
        border-radius: 50%;
        border-top-color: var(--primary);
        animation: spinner 0.8s linear infinite;
        margin: 0 auto;
        display: none;
    }

    .animate-slide-fade {
        opacity: 0;
        animation: slide-fade-up 0.5s ease-out forwards;
    }

    /* Header */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        margin-bottom: 1.5rem;
    }

    .balance-card {
        background: linear-gradient(135deg, var(--primary), #3a0ca3);
        color: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 8px 16px rgba(67, 97, 238, 0.3);
        margin-bottom: 1.5rem;
    }

    /* Buttons */
    .btn-repay {
        background-color: var(--primary);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-repay:hover {
        background-color: #3251d4;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(67, 97, 238, 0.4);
    }

    .btn-view {
        background-color: #17a2b8;
        color: white;
    }

    .btn-statement {
        background-color: var(--primary);
        color: white;
    }

    /* Transaction card */
    .transaction-card {
        background-color: var(--white);
        border-radius: 10px;
        padding: 1.25rem;
        transition: var(--transition);
        box-shadow: var(--shadow);
        margin-bottom: 1rem;
    }

    .transaction-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: var(--white);
        margin: auto;
        border-radius: 16px;
        max-width: 500px;
        width: 100%;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        animation: slide-fade-up 0.3s;
        overflow: hidden;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.5rem;
        border-bottom: 1px solid var(--light-gray);
    }

    .modal-body {
        padding: 1.5rem;
    }

    .modal-footer {
        padding: 1.5rem;
        border-top: 1px solid var(--light-gray);
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
    }

    .close {
        color: var(--gray);
        font-size: 1.5rem;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover {
        color: var(--dark);
    }

    /* Form elements */
    .form-group {
        margin-bottom: 1.25rem;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid var(--light-gray);
        border-radius: 8px;
        transition: var(--transition);
        font-size: 1rem;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-light);
    }

    .payment-option {
        display: flex;
        align-items: center;
        padding: 1rem;
        border: 1px solid var(--light-gray);
        border-radius: 8px;
        margin-bottom: 0.75rem;
        cursor: pointer;
        transition: var(--transition);
    }

    .payment-option:hover {
        border-color: var(--primary);
        background-color: var(--primary-light);
    }

    .payment-option input {
        margin-right: 1rem;
    }

    .payment-option.selected {
        border-color: var(--primary);
        background-color: var(--primary-light);
    }

    /* Tabs */
    .tabs {
        display: flex;
        border-bottom: 1px solid var(--light-gray);
        margin-bottom: 2rem;
    }

    .tab {
        padding: 1rem 1.5rem;
        cursor: pointer;
        font-weight: 600;
        color: var(--gray);
        border-bottom: 3px solid transparent;
        transition: var(--transition);
    }

    .tab.active {
        color: var(--primary);
        border-bottom-color: var(--primary);
    }

    /* Filter */
    .filter-section {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    /* Custom icon colors */
    .icon-receipt {
        color: var(--primary);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .transaction-card {
            padding: 1rem;
        }
        .filter-section {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div wire:ignore class="col-xl-12 col-md-12 col-sm-12">
    <!-- Header with repayment button -->
    @if ($current_loan)
    <div class="dashboard-header">
        <h1 class="text-2xl font-bold"></h1>
        <button id="repaymentBtn" class="btn-repay">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.5-1.5H2V1.78a1.5 1.5 0 0 1 2.136-1.355L8 2.539l3.864-2.213zM3.5 3V1.78a.5.5 0 0 1 .712-.45L8 3.417l3.788-2.168a.5.5 0 0 1 .712.45V3H3.5zm-2 3h5v1H1.5V6zm0 2h5v1H1.5V8zm0 2h5v1H1.5v-1zm7 0h5v1h-5v-1zm0-2h5v1h-5V8zm0-2h5v1h-5V6z"/>
            </svg>
            Make a Repayment
        </button>
    </div>
    @endif

    <!-- Balance Card -->
    @if ($current_loan)
    <div class="balance-card">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <p style="font-size: 0.875rem; opacity: 0.8;">Total Outstanding Balance</p>
                <h2 style="font-size: 1.5rem; font-weight: bold; margin-top: 0.5rem; color:#fff">K{{ number_format(App\Models\Application::open_balance($current_loan),2,'.',',') }}</h2>
            </div>
            <div>
                <p style="font-size: 0.875rem; opacity: 0.8;">Next Payment Due</p>
                <h3 style="font-size: 1.25rem; font-weight: bold; margin-top: 0.5rem;">April 15, 2025</h3>
                <p style="font-weight:bold; font-size: 1.875rem; opacity: 0.8; margin-top: 0.5rem; color:#fff">K3,500.00</p>
            </div>
        </div>
    </div>
    @endif


    <!-- Transaction List -->
    <div class="grid grid-cols-1 gap-4 p-2 mt-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse($transactions as $data)
        <div class="animate-slide-fade transaction-card" style="animation-delay: {{ $loop->index * 150 }}ms;">
            <div class="row flex-column flex-md-row justify-content-even">
                <div class="col-md-5 col-xs-12 row">
                    <div class="col-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="icon-receipt" viewBox="0 0 16 16">
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                            <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                        </svg>
                    </div>
                    <div class="col-8">
                        <div style="display: flex; align-items: center;">
                            <span style="height: 8px; width: 8px; border-radius: 50%; background-color: var(--success); margin-right: 8px;"></span>
                            <span style="font-weight: bold;"> <b>K{{ number_format($data?->amount_settled, 2, '.', ',') }}</b> </span>
                        </div>
                        <p style="color: var(--gray); font-size: 0.875rem;">Repayment installment to {{ $data?->application?->loan_product->name }} Loan</p>
                        <small style="color: var(--gray); font-size: 0.75rem;">Date: {{ $data->created_at->toFormattedDateString() }}</small>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <small style="color: var(--gray); font-size: 0.75rem;">Process by: {{ $data?->proccess_by ?? 'System' }}</small>
                </div>
                <div class="col-md-4 col-xs-3">
                    <div class="btn-group">
                        @if ($data->application)
                        <a href="{{ route('loan-details',['id' => $data->application->id]) }}" class="btn btn-view sharp tp-btn">
                            <i style="color: white" class="fa fa-eye"></i>
                        </a>
                        @else
                        <p>This loan was removed or deleted</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        @empty
            <p>No Payment Transactions</p>
        @endforelse
    </div>

    <!-- Repayment Modal -->
    <div id="repaymentModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="font-weight: bold; font-size: 1.25rem;">Make a Repayment</h3>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form id="repaymentForm">
                    <div class="form-group">
                        <label for="loanSelect" style="display: block; margin-bottom: 0.5rem;">Select Loan</label>
                        <select id="loanSelect" value="{{ $current_loan->id }}" class="form-control">
                            <option value="{{ $current_loan->id }}" selected>{{ $current_loan->loan_product->name }} K({{ number_format(App\Models\Application::payback($current_loan)) }})</option>
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="paymentAmount" style="display: block; margin-bottom: 0.5rem;">Payment Amount</label>
                        <input type="text" id="paymentAmount" class="form-control" placeholder="Enter amount (K)">
                    </div>
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 0.75rem;">Payment Method</label>
                        <div class="payment-option">
                            <input type="radio" id="method2" name="paymentMethod" value="mobile_money">
                            <label for="method2">Mobile Money</label>
                        </div>
                        <div class="payment-option">
                            <input disabled type="radio" id="method3" name="paymentMethod" value="card">
                            <label for="method3">Debit/Credit Card</label>
                            &nbsp;&nbsp;
                            <small class="rounded bg-primary badge">Coming Soon</small>
                        </div>
                        <div class="payment-option">
                            <input disabled type="radio" id="method1" name="paymentMethod" value="bank_transfer">
                            <label for="method1">Bank Transfer</label>
                            &nbsp;&nbsp;
                            <small class="rounded bg-primary badge">Coming Soon</small>
                        </div>
                    </div>

                    <!-- Mobile Network Selection (initially hidden) -->
                    <div id="networkSelection" class="form-group" style="display: none; margin-top: 1rem;">
                        <label for="networkSelect" style="display: block; margin-bottom: 0.5rem;">Select Network</label>
                        <label for="networkSelect" style="display: block; margin-bottom: 0.1rem;">{{ auth()->user()->phone }}</label>

                        <select id="networkSelect" class="form-control">
                            <option value="">Select a network</option>
                            <option value="MTN_MOMO_ZMB">MTN</option>
                            <option value="AIRTEL_OAPI_ZMB">Airtel</option>
                            <option value="ZAMTEL_ZMB">Zamtel</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="cancelBtn" style="background-color: var(--light-gray); color: var(--dark); border: none; padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 600; cursor: pointer;">Cancel</button>
                <button id="payBtn" style="background-color: var(--primary); color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 0.5rem;">
                    <span>Make Payment</span>
                    <div id="paymentLoader" class="loader"></div>
                </button>
            </div>
        </div>
    </div>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Add the full-screen preloader CSS to the head
document.head.insertAdjacentHTML('beforeend', `
<style>
    .fullscreen-preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .fullscreen-preloader.active {
        opacity: 1;
        visibility: visible;
    }

    .fullscreen-preloader .spinner {
        width: 60px;
        height: 60px;
        border: 4px solid rgba(155, 67, 238, 0.2);
        border-radius: 50%;
        border-top-color: var(--primary, #9b43ee);
        animation: spinner 1s linear infinite;
    }

    .preloader-message {
        position: absolute;
        bottom: calc(50% - 50px);
        font-weight: 600;
        color: var(--primary, #9b43ee);
    }
</style>
`);

// Create the preloader element
const preloaderHTML = `
<div id="fullscreenPreloader" class="fullscreen-preloader">
    <div class="spinner"></div>
    <div class="preloader-message">Processing your payment...</div>
</div>
`;

// Append preloader to body
document.body.insertAdjacentHTML('beforeend', preloaderHTML);

// Preloader utility functions
const preloader = {
    show: function(message = 'Processing your payment...') {
        const preloader = document.getElementById('fullscreenPreloader');
        const messageEl = preloader.querySelector('.preloader-message');
        messageEl.textContent = message;
        preloader.classList.add('active');
    },
    hide: function() {
        const preloader = document.getElementById('fullscreenPreloader');
        preloader.classList.remove('active');
    }
};

// Wait for the page to fully load
document.addEventListener("DOMContentLoaded", function () {
    // Original script
    const cards = document.querySelectorAll(".card");
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 300}ms`;
    });

    // Modal functionality
    const modal = document.getElementById("repaymentModal");
    const repaymentBtn = document.getElementById("repaymentBtn");
    const closeBtn = document.querySelector(".close");
    const cancelBtn = document.getElementById("cancelBtn");
    const payBtn = document.getElementById("payBtn");
    const loader = document.getElementById("paymentLoader");
    const networkSelection = document.getElementById("networkSelection");

    // Payment options
    const paymentOptions = document.querySelectorAll(".payment-option");

    // Open modal
    repaymentBtn.addEventListener("click", function() {
        modal.style.display = "flex";
    });

    // Close modal
    closeBtn.addEventListener("click", closeModal);
    cancelBtn.addEventListener("click", closeModal);

    function closeModal() {
        modal.style.display = "none";
        // Reset the form when closing
        document.getElementById("repaymentForm").reset();
        networkSelection.style.display = "none";
    }

    // Close if clicked outside
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Handle payment options selection
    paymentOptions.forEach(option => {
        option.addEventListener("click", function() {
            // Remove selected class from all options
            paymentOptions.forEach(opt => opt.classList.remove("selected"));

            // Add selected class to clicked option
            this.classList.add("selected");

            // Check the radio button
            const radio = this.querySelector("input[type='radio']");
            radio.checked = true;

            // Show network selection if Mobile Money is selected
            if (radio.value === "mobile_money") {
                networkSelection.style.display = "block";
            } else {
                networkSelection.style.display = "none";
            }
        });
    });

    // Handle payment submission
    payBtn.addEventListener("click", async function(e) {
        e.preventDefault();

        // Form validation
        const loanSelect = document.getElementById("loanSelect");
        const paymentAmount = document.getElementById("paymentAmount");
        const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
        const networkSelect = document.getElementById("networkSelect");

        // Basic validation
        if (!loanSelect.value) {
            alert("Please select a loan");
            return;
        }

        if (!paymentAmount.value || isNaN(parseFloat(paymentAmount.value))) {
            alert("Please enter a valid payment amount");
            return;
        }

        if (!selectedPaymentMethod) {
            alert("Please select a payment method");
            return;
        }

        // Network validation for Mobile Money
        if (selectedPaymentMethod.value === "mobile_money" && !networkSelect.value) {
            alert("Please select a mobile network");
            return;
        }

        // Collect form data for submission to Laravel controller
        const formData = {
            loan_id: loanSelect.value,
            amount: paymentAmount.value,
            payment_method: selectedPaymentMethod.value,
            network: selectedPaymentMethod.value === "mobile_money" ? networkSelect.value : null
        };

        // Show loader in button
        loader.style.display = "block";

        // Disable button
        payBtn.disabled = true;

        // Close modal
        closeModal();

        // Show full-screen preloader
        preloader.show();

        try {
            // Send the data to Laravel backend using fetch API
            // Get the CSRF token from meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            const response = await fetch('api/pay/repayment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            if (!response.ok) {
                throw new Error(result.message || 'Payment processing failed');
            }

            // On success
            preloader.hide();

            // Show success message with SweetAlert if available, otherwise use regular alert
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your payment has been processed successfully. Please enter the MOMO Pin on your phone to complete.',
                    icon: 'info',
                    confirmButtonColor: 'var(--primary, #9b43ee)'
                }).then(() => {
                    // Reload the page to show updated data
                    window.location.reload();
                });
            } else {
                alert('Payment successful!');
                window.location.reload();
            }

        } catch (error) {
            console.error('Payment Error:', error);

            preloader.hide();

            // Show error message
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Payment Failed',
                    text: error.message || 'There was an error processing your payment',
                    icon: 'error',
                    confirmButtonColor: 'var(--primary, #9b43ee)'
                });
            } else {
                alert(`Payment failed: ${error.message || 'There was an error processing your payment'}`);
            }
        } finally {
            // Reset button state
            loader.style.display = "none";
            payBtn.disabled = false;
        }
    });
});
    </script>
</div>