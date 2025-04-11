<div class="step-panel step" id="step7">
    <div class="step-header">
        <h5 class="step-title">Loan Summary Details</h5>
        <span class="step-indicator">Step 3/4</span>
    </div>

    <div class="summary-grid">
        <!-- Left Column -->
        <div class="summary-column">
            <div class="summary-item">
                <span class="summary-label">Loan Amount:</span>
                <span class="summary-value">K{{ number_format($activeLoan->amount, 2, '.', ',') }}</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Loan Type:</span>
                <span class="summary-value">{{ App\Models\Application::loanProduct($activeLoan->loan_product_id)->name }} Loan</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Interest Rate:</span>
                <span class="summary-value">{{ App\Models\Application::loanProduct($activeLoan->loan_product_id)->def_loan_interest }}%</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Service Charge:</span>
                <span class="summary-value">10%</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Tenure:</span>
                <span class="summary-value">{{ $activeLoan->repayment_plan }} (Months)</span>
            </div>
            <input type="hidden" name="final" value="1">
        </div>

        <!-- Right Column -->
        <div class="summary-column">
            <div class="summary-item">
                <span class="summary-label">You Will Receive:</span>
                <span class="summary-value">K{{ App\Models\Application::receive_amount($activeLoan->amount, $activeLoan->repayment_plan) }}</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Payback Amount:</span>
                <span class="summary-value">K{{ number_format(App\Models\Application::payback($activeLoan), 2,'.',',') }}</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Next Payment Amount:</span>
                <span class="summary-value">K{{ number_format(App\Models\Application::payback_installment($activeLoan), 2, '.',',') }}</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Phone Number:</span>
                <span class="summary-value">+26 {{ auth()->user()->phone }}</span>
            </div>
            <div class="summary-item">
                <span class="summary-label">Email:</span>
                <span class="summary-value">{{ auth()->user()->email }}</span>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <button type="button" class="btn btn-outline" onclick="prevStep(7)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Back to Previous Step
        </button>
        <button  style="background: linear-gradient(135deg, #6a3093, #873093)" type="submit" id="submit_click" class="btn btn-primary">
            <div id="ploading" style="display:none;">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
                <span>Please wait...</span>
            </div>
            <div id="finishicon">
                Complete Application
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg>
            </div>
        </button>
    </div>
</div>

<style>
/* Modern Sleek Form Styling */
.step-panel {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
    padding: 1.75rem;
    max-width: 900px;
    margin: 0 auto;
}

.step-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.step-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
    margin: 0;
    position: relative;
    padding-left: 1rem;
}

.step-title:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 4px;
    background: linear-gradient(180deg, #3b82f6, #1e40af);
    border-radius: 2px;
}

.step-indicator {
    font-size: 0.75rem;
    font-weight: 500;
    color: #6b7280;
    background: #f3f4f6;
    padding: 0.25rem 0.75rem;
    border-radius: 100px;
}

.summary-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    padding: 0.5rem 0;
}

.summary-column {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.summary-item {
    padding: 0.75rem;
    background-color: #f9fafb;
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.2s ease;
}

.summary-item:hover {
    background-color: #f3f4f6;
    transform: translateY(-2px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.summary-label {
    font-size: 0.85rem;
    color: #6b7280;
    font-weight: 500;
}

.summary-value {
    font-size: 0.95rem;
    color: #111827;
    font-weight: 600;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 1.5rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(0, 0, 0, 0.08);
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-weight: 500;
    font-size: 0.875rem;
    padding: 0.6rem 1.25rem;
    border-radius: 6px;
    transition: all 0.2s ease;
    cursor: pointer;
    border: none;
}

.btn-primary {
    background: linear-gradient(135deg, #3b82f6, #1e40af);
    color: white;
    box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
}

.btn-primary:hover {
    background: linear-gradient(135deg, #2563eb, #1e3a8a);
    box-shadow: 0 6px 8px -1px rgba(59, 130, 246, 0.4);
    transform: translateY(-1px);
}

.btn-outline {
    background: white;
    color: #4b5563;
    border: 1px solid #e5e7eb;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-outline:hover {
    background: #f9fafb;
    color: #1f2937;
    border-color: #d1d5db;
    transform: translateY(-1px);
}

/* Spinner Animation */
.spinner {
    display: inline-flex;
    gap: 4px;
    margin-right: 8px;
}

.spinner > div {
    width: 8px;
    height: 8px;
    background-color: white;
    border-radius: 100%;
    display: inline-block;
    animation: bounce 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
    animation-delay: -0.32s;
}

.spinner .bounce2 {
    animation-delay: -0.16s;
}

@keyframes bounce {
    0%, 80%, 100% {
        transform: scale(0);
    } 40% {
        transform: scale(1.0);
    }
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .summary-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .step-panel {
        padding: 1.25rem;
    }

    .form-actions {
        flex-direction: column-reverse;
        gap: 0.75rem;
    }

    .form-actions button {
        width: 100%;
    }
}
</style>