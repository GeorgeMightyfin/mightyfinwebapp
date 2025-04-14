<div class="step-panel step" id="step1">
    <div class="step-header">
        <h5 class="step-title">Your Profile Details</h5>
        <span class="step-indicator">Step 1/7</span>
    </div>

    <div class="form-grid">
        <!-- Row 1 -->
        <div class="form-cell">
            <label for="dob" class="form-label">Date of Birth</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                </span>
                <input type="date" class="form-control compact" id="dob" name="dob">
            </div>
            <small id="jobDOBError" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="jobTitleInput" class="form-label">Job Title</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                </span>
                <input value="{{ auth()->user()->occupation ?? auth()->user()->jobTitle }}" type="text" class="form-control compact" id="jobTitleInput" placeholder="e.g., Teacher" name="jobTitle">
            </div>
            <small id="jobTitleError" class="error-text"></small>
        </div>

        <!-- Row 2 -->
        <div class="form-cell">
            <label for="phone" class="form-label">Phone Number</label>
            <div class="input-group compact">
                <div class="select-wrapper">
                    <select class="form-select compact" name="pcode">
                        <option value="26" data-thumbnail="https://png.pngtree.com/thumb_back/fw800/background/20221004/pngtree-waving-zambia-flag-background-image_1466907.jpg">+26</option>
                    </select>
                </div>
                <input id="phone" value="{{ auth()->user()->phone }}" type="text" data-mask='0000 000 000' name="phone" class="form-control compact" placeholder="0975 --- ---">
            </div>
            <small class="helper-text">Format: 0975, 00772, 965</small>
            <small id="phoneError" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="employeeNo" class="form-label">Employee No.</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </span>
                <input value="{{ auth()->user()->employeeNo }}" type="text" class="form-control compact" id="employeeNo" placeholder="Employee ID" name="employeeNo" maxlength="8">
            </div>
            <small id="employeeNoError" class="error-text"></small>
        </div>

        <!-- Row 3 -->
        <div class="form-cell">
            <label for="nrc_id" class="form-label">Identification</label>
            <div class="input-group compact">
                <div class="select-wrapper">
                    <select id="nrc_id" name="id_type" class="form-select compact">
                        <option {{ auth()->user()->id_type == null ? 'selected' : ''}} value="">ID Type</option>
                        <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                        <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                        <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver License</option>
                    </select>
                </div>
                <input value="{{auth()->user()->nrc_no ?? auth()->user()->nrc}}" type="text" placeholder="ID Number" class="form-control compact" id="nrc" name="nrc">
            </div>
            <small id="nrcError" class="error-text"></small>
            <small id="nrcIDError" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="ministry" class="form-label">Ministry</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </span>
                <input value="{{ auth()->user()->ministry }}" placeholder="e.g., Ministry of Health" type="text" class="form-control compact" id="ministry" name="ministry">
            </div>
        </div>

        <!-- Row 4 -->
        <div class="form-cell">
            <label for="gender" class="form-label">Gender</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                </span>
                <select id="gender" class="form-control compact" name="gender">
                    <option value="">Select Gender</option>
                    <option {{ auth()->user()->gender == 'Male' ? 'selected' : ''}} value="Male">Male</option>
                    <option {{ auth()->user()->gender == 'Female' ? 'selected' : ''}} value="Female">Female</option>
                </select>
            </div>
            <small id="genderError" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="department" class="form-label">Department</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </span>
                <input value="{{ auth()->user()->department }}" type="text" placeholder="Your Department" class="form-control compact" id="department" name="department">
            </div>
        </div>

        <!-- Row 5 -->
        <div class="form-cell">
            <label for="address" class="form-label">Physical Address</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </span>
                <input id="address" name="address" class="form-control compact" placeholder="Your address" value="{{ auth()->user()->address }}"/>
            </div>
            <small id="phoneAddress" class="error-text"></small>
        </div>

        <div class="form-cell">
            <label for="yearsOfWork" class="form-label">Years of Work</label>
            <div class="input-wrapper">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </span>
                <select class="form-control compact" id="yearsOfWork" name="yearsOfWork">
                    <option value="1">1 Year</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                    <option value="5">5 Years</option>
                    <option value="6">6 Years</option>
                    <option value="6+">6+ Years</option>
                    <option value="20+">20+ Years</option>
                    <!-- Add more options as needed for different years of work -->
                </select>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <button style="background: linear-gradient(135deg, #6a3093, #873093)" type="button" class="btn btn-prime rounded-3" onclick="nextStep(1)">
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
    padding-right:5px;
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
    height: 50px;
    padding-left: 10%;
}

.form-control:focus, .form-select:focus {
    border-color: #6a3093;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
    outline: none;
}

.input-group {
    display: flex;
    align-items: stretch;
    width: 100%;
}

.input-group .form-control {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    flex: 1;
}

.select-wrapper {
    min-width: 70px;
    max-width: 80px;
    position: relative;
}

.select-wrapper:after {
    content: "";
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #6b7280;
    pointer-events: none;
}

.form-select {
    appearance: none;
    padding-right: 2rem;
    border-right: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    background-color: #f9fafb;
}

.helper-text {
    display: block;
    font-size: 0.7rem;
    color: #6b7280;
    margin-top: 0.25rem;
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

<script>
    // Function to format the date as YYYY-MM-DD
    function formatDate(date) {
        var year = date.getFullYear();
        var month = ('0' + (date.getMonth() + 1)).slice(-2);
        var day = ('0' + date.getDate()).slice(-2);
        return `${year}-${month}-${day}`;
    }

    // Calculate the date 16 years ago
    var currentDate = new Date();
    var dobDate = new Date(currentDate.getFullYear() - 16, currentDate.getMonth(), currentDate.getDate());

    // Set the default value for the date input
    var dobInput = document.getElementById('dob');
    dobInput.value = formatDate(dobDate);
</script>