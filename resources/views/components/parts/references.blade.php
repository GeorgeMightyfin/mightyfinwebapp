<div class="step-panel step" id="step4">
    <div class="step-header">
        <h5 class="step-title">References</h5>
        <span class="step-indicator">Step 4/4</span>
    </div>

    <div class="section-title">Human Resource Details</div>

    <div class="form-grid">
        <!-- HR First Name -->
        <div class="form-cell">
            <label for="hrFirstName" class="form-label">First Name (HR)</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
                <input type="text" value="{{ $meta->refs->first()->hrFname }}" class="form-control compact" id="hrFirstName" name="hrFirstName">
            </div>
            <small id="fnHRError" class="error-text"></small>
        </div>

        <!-- HR Last Name -->
        <div class="form-cell">
            <label for="hrLastName" class="form-label">Last Name (HR)</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
                <input type="text" value="{{ $meta->refs->first()->hrLname }}" class="form-control compact" id="hrLastName" name="hrLastName">
            </div>
            <small id="lnHRError" class="error-text"></small>
        </div>

        <!-- HR Contact Number -->
        <div class="form-cell">
            <label for="hrContactNumber" class="form-label">Contact Number (HR)</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </span>
                <input type="text" value="{{ $meta->refs->first()->hrContactNumber }}" data-mask='000 0000 000' class="form-control compact" id="hrContactNumber" name="hrContactNumber">
            </div>
            <small id="contactHRError" class="error-text"></small>
        </div>
    </div>

    <div class="section-title">Supervisor Details</div>

    <div class="form-grid">
        <!-- Supervisor First Name -->
        <div class="form-cell">
            <label for="supervisorFirstName" class="form-label">First Name (Supervisor)</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </span>
                <input type="text" value="{{ $meta->refs->first()->supervisorFirstName }}" class="form-control compact" id="supervisorFirstName" name="supervisorFirstName">
            </div>
            <small id="supFNError" class="error-text"></small>
        </div>

        <!-- Supervisor Last Name -->
        <div class="form-cell">
            <label for="supervisorLastName" class="form-label">Last Name (Supervisor)</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </span>
                <input type="text" value="{{ $meta->refs->first()->supervisorLastName }}" class="form-control compact" id="supervisorLastName" name="supervisorLastName">
            </div>
            <small id="supLNError" class="error-text"></small>
        </div>

        <!-- Supervisor Contact Number -->
        <div class="form-cell">
            <label for="supervisorContactNumber" class="form-label">Contact Number (Supervisor)</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </span>
                <input type="text" value="{{ $meta->refs->first()->supervisorContactNumber }}" data-mask='000 0000 000' class="form-control compact" id="supervisorContactNumber" name="supervisorContactNumber">
            </div>
            <small id="supContactError" class="error-text"></small>
        </div>
    </div>

    <div class="form-actions">
        <button type="button" class="btn btn-secondary" onclick="prevStep(4)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Back
        </button>
        <button style="background: linear-gradient(135deg, #6a3093, #873093)" type="button" class="btn btn-primary" onclick="nextStep(4)">
            Complete Registration
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
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
    background: linear-gradient(180deg, #6a3093, #6a3093);
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

.section-title {
    font-size: 0.95rem;
    font-weight: 600;
    color: #4b5563;
    margin-bottom: 1.25rem;
    position: relative;
    display: inline-block;
    padding-bottom: 0.25rem;
}

.section-title:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, #6a3093, rgba(59, 130, 246, 0.2));
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    margin-bottom: 1.75rem;
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
    border-color: #6a3093;
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
    justify-content: flex-end;
    gap: 0.75rem;
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
    background: linear-gradient(135deg, #6a3093, #873093);
    color: white;
    box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
}

.btn-primary:hover {
    background: linear-gradient(135deg, #6a3093, #873093);
    box-shadow: 0 6px 8px -1px rgba(59, 130, 246, 0.4);
    transform: translateY(-1px);
}

.btn-secondary {
    background-color: #f3f4f6;
    color: #4b5563;
    border: 1px solid #e5e7eb;
}

.btn-secondary:hover {
    background-color: #e5e7eb;
    color: #1f2937;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }

    .step-panel {
        padding: 1.25rem;
    }
}
</style>