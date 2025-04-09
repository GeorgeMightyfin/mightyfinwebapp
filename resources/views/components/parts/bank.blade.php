<div class="step-panel step" id="step5">
    <div class="step-header">
        <h5 class="step-title">Bank Details</h5>
        <span class="step-indicator">Step 2/4</span>
    </div>
    
    <div class="form-grid">
        <!-- Row 1 -->
        <div class="form-cell">
            <label for="bankName" class="form-label">Bank Name</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </span>
                <select id="bankName" name="bankName" class="form-control compact">
                    <option value="">Select a Bank</option>
                    <option value="Zambia National Commercial Bank">Zambia National Commercial Bank (Zananco)</option>
                    <option value="Zambia National Building Society">Zambia National Building Society (ZNBS)</option>
                    <option value="Standard Chartered Bank Zambia">Standard Chartered Bank Zambia</option>
                    <option value="Stanbic Bank Zambia">Stanbic Bank Zambia</option>
                    <option value="Barclays Bank Zambia">Barclays Bank Zambia</option>
                    <option value="First National Bank Zambia">First National Bank Zambia</option>
                    <option value="Cavmont Bank">Cavmont Bank</option>
                    <option value="Atlas Mara Bank Zambia">Atlas Mara Bank Zambia</option>
                    <option value="Indo Zambia Bank">Indo Zambia Bank</option>
                    <option value="Access Bank Zambia">Access Bank Zambia</option>
                    <option value="United Bank for Africa Zambia">United Bank for Africa Zambia</option>
                    <option value="Citibank Zambia">Citibank Zambia</option>
                    <option value="Ecobank Zambia">Ecobank Zambia</option>
                    <option value="Bank of China Zambia">Bank of China Zambia</option>
                    <option value="Development Bank of Zambia">Development Bank of Zambia</option>
                    <option value="Zambia Industrial Commercial Bank">Zambia Industrial Commercial Bank</option>
                    <option value="BancABC Zambia">BancABC Zambia</option>
                    <option value="Investrust Bank Zambia">Investrust Bank Zambia</option>
                    <option value="Natsave Zambia">Natsave Zambia</option>
                    <option value="AB Bank Zambia">AB Bank Zambia</option>
                    <option value="FNB Zambia">FNB Zambia</option>
                    <option value="Nedbank Zambia">Nedbank Zambia</option>
                </select>
            </div>
            <small id="bankNameError" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="branchName" class="form-label">Branch Name</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l18 0"></path><path d="M3 14l18 0"></path><path d="M3 19l18 0"></path><path d="M5 5l0 14"></path><path d="M19 5l0 14"></path></svg>
                </span>
                <input type="text" class="form-control compact" id="branchName" name="branchName" placeholder="e.g., Main Branch">
            </div>
            <small id="bankBranchError" class="error-text"></small>
        </div>

        <!-- Row 2 -->
        <div class="form-cell">
            <label for="accountNumber" class="form-label">Account Number</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="M7 15h0"></path><path d="M2 9h20"></path></svg>
                </span>
                <input type="text" class="form-control compact" id="accountNumber" name="accountNumber" placeholder="XXXX XXXX XXXX XXXX">
            </div>
            <small id="bankAccError" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="accountNames" class="form-label">Account Names</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </span>
                <input type="text" class="form-control compact" id="accountNames" name="accountNames" placeholder="Full name as on account">
            </div>
            <small id="bankAccNameError" class="error-text"></small>
        </div>
    </div>

    <div class="form-actions">
        <button type="button" class="btn btn-outline" onclick="prevStep(5)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Back to Previous Step
        </button>
        <button type="button" class="btn btn-primary" onclick="nextStep(5)">
            Continue to Next Step
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
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

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.form-cell {
    position: relative;
    margin-bottom: 0.5rem;
}

.form-label {
    display: block;
    font-size: 0.75rem;
    font-weight: 600;
    color: #4b5563;
    margin-bottom: 0.25rem;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.input-wrapper {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 0.75rem;
    top: 50%;
    transform: translateY(-50%);
    color: #9ca3af;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-control, .form-select {
    width: 100%;
    padding: 0.65rem 0.75rem;
    padding-left: 2.5rem;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    font-size: 0.875rem;
    color: #1f2937;
    background-color: #fff;
    transition: border-color 0.15s ease, box-shadow 0.15s ease;
}

.form-control.compact, .form-select.compact {
    height: 40px;
}

.form-control:focus, .form-select:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
    outline: none;
}

.error-text {
    display: block;
    font-size: 0.7rem;
    color: #ef4444;
    margin-top: 0.25rem;
    font-weight: 500;
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

/* Responsive Adjustments */
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
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