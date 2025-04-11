
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #6a3de8;
            --primary-dark: #5429d0;
            --secondary: #ffd500;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --white: #fff;
            --success: #38b653;
            --error: #e74c3c;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f7ff;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .wizard-container {
            max-width: 1200px;
            margin: 2rem auto;
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .profile-card {
            padding: 2rem !important;
        }

        .step {
            display: none;
            padding: 2rem;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .step.active {
            display: block;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5ee;
            border-radius: 12px;
            font-size: 16px;
            transition: var(--transition);
            margin-bottom: 1.5rem;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(106, 61, 232, 0.15);
            outline: none;
        }

        select.form-control {
            appearance: none;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236a3de8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E") no-repeat;
            background-position: right 16px center;
            background-color: var(--white);
            padding-right: 40px;
        }

        .btn {
            padding: 14px 30px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(106, 61, 232, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        .float-end {
            float: right;
        }

        .float-start {
            float: left;
        }

        .text-success {
            color: var(--success);
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: -10px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col-xxl-4, .col-xl-4, .col-lg-4, .col-xl-6 {
            padding: 0 15px;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-xl-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .justify-content-center {
            justify-content: center;
        }

        .progress-container {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            padding-top: 1.5rem;
        }

        .progress-steps {
            display: flex;
            width: 70%;
            position: relative;
            z-index: 1;
        }

        .progress-step {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .step-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e1e5ee;
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: bold;
            transition: var(--transition);
            position: relative;
            z-index: 2;
        }

        .progress-step.active .step-icon {
            background-color: var(--primary);
            color: var(--white);
        }

        .progress-step.completed .step-icon {
            background-color: var(--success);
            color: var(--white);
        }

        .step-title {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-top: 5px;
        }

        .progress-step.active .step-title {
            color: var(--primary);
            font-weight: 600;
        }

        .progress-line {
            position: absolute;
            top: 20px;
            height: 2px;
            background-color: #e1e5ee;
            left: 0;
            right: 0;
            z-index: 1;
        }

        .progress-line-fill {
            position: absolute;
            top: 20px;
            height: 2px;
            background-color: var(--primary);
            left: 0;
            width: 0%;
            transition: width 0.3s ease;
            z-index: 1;
        }

        .file-upload-container {
            border: 2px dashed #e1e5ee;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 1.5rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }

        .file-upload-container:hover {
            border-color: var(--primary);
        }

        .file-upload-container input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .upload-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .upload-text {
            color: var(--text-light);
        }

        .upload-hint {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-top: 0.5rem;
        }

        .section-title {
            margin-bottom: 1.5rem;
            color: var(--primary);
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Animations */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .button-pulse:hover {
            animation: pulse 1s infinite;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .col-xxl-4, .col-xl-4, .col-lg-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 768px) {
            .col-xxl-4, .col-xl-4, .col-lg-4, .col-xl-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .progress-steps {
                width: 90%;
            }
        }
    </style>
    <div class="col-xxl-12 col-xl-12 col-lg-12">
        <div id="fileUploadSection" class="profile-card card-bx m-b30 p-4">
            @include('profile.parts.kyc-wizard')
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 2;

        // Show initial step
        showStep(currentStep);
        updateProgress();

        function showStep(step) {
            // Hide all steps
            const steps = document.querySelectorAll('.step');
            steps.forEach(s => {
                s.classList.remove('active');
            });

            // Show current step
            document.getElementById(`step${step}`).classList.add('active');

            // Update progress steps
            updateProgress();
        }

        function updateProgress() {
            // Update step icons
            for (let i = 1; i <= totalSteps; i++) {
                const stepEl = document.getElementById(`progressStep${i}`);

                if (i < currentStep) {
                    stepEl.classList.add('completed');
                    stepEl.classList.remove('active');
                    stepEl.querySelector('.step-icon').innerHTML = '<i class="fas fa-check"></i>';
                } else if (i === currentStep) {
                    stepEl.classList.add('active');
                    stepEl.classList.remove('completed');
                    stepEl.querySelector('.step-icon').innerHTML = i;
                } else {
                    stepEl.classList.remove('active', 'completed');
                    stepEl.querySelector('.step-icon').innerHTML = i;
                }
            }

            // Update progress line fill
            const progressPercent = ((currentStep - 1) / (totalSteps - 1)) * 100;
            document.getElementById('progressLineFill').style.width = `${progressPercent}%`;
        }

        function navigateStep(direction) {
            if (direction === 'next' && currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            } else if (direction === 'prev' && currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Add visual feedback for file uploads
        const fileInputs = document.querySelectorAll('input[type="file"]');
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const container = this.closest('.file-upload-container');

                if (this.files.length > 0) {
                    container.style.borderColor = '#38b653';
                    container.style.backgroundColor = 'rgba(56, 182, 83, 0.05)';

                    const fileName = this.files[0].name;
                    const uploadText = container.querySelector('.upload-text');
                    uploadText.innerHTML = `Selected: <strong>${fileName}</strong>`;
                } else {
                    container.style.borderColor = '#e1e5ee';
                    container.style.backgroundColor = 'transparent';
                }
            });
        });
    </script>