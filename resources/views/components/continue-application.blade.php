<div id="overlay" class="loan-modal-overlay"></div>
<div class="loan-modal" style="z-index: 99999; background:#e5f5f0;" id="continue-loan-modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="p-6 loan-modal-content">
        {{-- <div class="loan-modal-header">
            <h4 class="loan-modal-title">
                <span class="loan-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></span>
                <b>Loan Completion Form</b>
            </h4>
        </div> --}}
        <div class="loan-modal-body row" style="overflow-y: auto; overflow-x: hidden; height: 70vh">
            <div class="loan-sidebar col-xxl-3 col-xl-3 col-lg-3">
                <div class="loan-progress-container">
                    <div class="loan-progress-bar"></div>
                    <div class="loan-progress-text">Application Progress</div>
                </div>
                {{-- <img class="loan-illustration" width="100%" src="https://img.freepik.com/free-vector/account-concept-illustration_114360-279.jpg?w=740&t=st=1700475235~exp=1700475835~hmac=99f4c6fbffcf369cc925fde13256cbcdefd9c50ab8b470e1d74610f67d158f4d"> --}}
                <div class="loan-steps">
                    <div class="loan-step active">
                        <div class="loan-step-icon">1</div>
                        <div class="loan-step-text">Personal Information</div>
                    </div>
                    <div class="loan-step">
                        <div class="loan-step-icon">2</div>
                        <div class="loan-step-text">Document Upload</div>
                    </div>
                    <div class="loan-step">
                        <div class="loan-step-icon">3</div>
                        <div class="loan-step-text">Next of Kin</div>
                    </div>
                    <div class="loan-step">
                        <div class="loan-step-icon">4</div>
                        <div class="loan-step-text">References</div>
                    </div>
                    <div class="loan-step">
                        <div class="loan-step-icon">5</div>
                        <div class="loan-step-text">Bank Details</div>
                    </div>
                    <div class="loan-step">
                        <div class="loan-step-icon">6</div>
                        <div class="loan-step-text">Pre-approval</div>
                    </div>
                    <div class="loan-step">
                        <div class="loan-step-icon">7</div>
                        <div class="loan-step-text">Summary</div>
                    </div>
                </div>
            </div>
            <div class="loan-form-container col-xxl-9 col-xl-9 col-lg-9">
                <form class="py-6 pb-4 loan-form col-xxl-12 col-xl-12 col-lg-12" method="post" action="{{ route('continue-loan') }}" id="wizard" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="MAX_FILE_SIZE" value="64000000" />
                    <input type="hidden" name="application_id" value="{{ App\Models\Application::currentApplication()->id }}">
                    <input type="hidden" name="borrower_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <!-- Personal Info -->
                    @include('components.parts.basic_info')

                    {{-- KYC --}}
                    @include('components.parts.uploads')

                    <!-- Next of Kin Info -->
                    @include('components.parts.nextkin')

                    <!-- References -->
                    @include('components.parts.references')

                    <!-- Bank Details -->
                    @include('components.parts.bank')

                    <!-- Bank Pre approval -->
                    @include('components.parts.preapproval')

                    <!-- Loan Details -->
                    @include('components.parts.summary')
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    /* Modern Loan Form Styling */
    :root {
        --loan-primary: #3b82f6;
        --loan-primary-dark: #2563eb;
        --loan-success: #10b981;
        --loan-text: #334155;
        --loan-bg: #ffffff;
        --loan-border: #e2e8f0;
        --loan-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        --loan-radius: 12px;
    }

    .loan-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(4px);
        z-index: 99999;
    }

    .loan-modal {
        position: absolute;
        top: 0%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 1200px;
        max-height: 90vh;
        background-color: #ffff;
        border-radius: var(--loan-radius);
        box-shadow: var(--loan-shadow);
        animation: loanModalFadeIn 0.3s ease-out;
    }

    @keyframes loanModalFadeIn {
        from { opacity: 0; transform: translate(-50%, -48%); }
        to { opacity: 1; transform: translate(-50%, -50%); }
    }

    .loan-modal-content {
        border-radius: var(--loan-radius);
        overflow: hidden;
    }

    .loan-modal-header {
        padding: 1.5rem 2rem;
        background: linear-gradient(135deg, var(--loan-primary-dark), var(--loan-primary));
        color: white;
        border-radius: var(--loan-radius) var(--loan-radius) 0 0;
    }

    .loan-modal-title {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        font-weight: 700;
        gap: 0.75rem;
    }

    .loan-icon {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loan-modal-body {
        padding: 0;
        display: flex;
    }

    .loan-sidebar {
        padding: 1.5rem;
        border-right: 1px solid var(--loan-border);
        background-color: #f8fafc;
    }

    .loan-progress-container {
        margin-bottom: 1.5rem;
        background-color: #e2e8f0;
        height: 6px;
        border-radius: 3px;
        overflow: hidden;
        position: relative;
    }

    .loan-progress-bar {
        height: 100%;
        width: 15%; /* Adjust based on progress */
        background: linear-gradient(to right, var(--loan-primary), var(--loan-success));
        border-radius: 3px;
        transition: width 0.5s ease;
    }

    .loan-progress-text {
        font-size: 0.875rem;
        color: var(--loan-text);
        margin-top: 0.5rem;
        font-weight: 500;
        text-align: center;
    }

    .loan-illustration {
        border-radius: var(--loan-radius);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
    }

    .loan-illustration:hover {
        transform: translateY(-5px);
    }

    .loan-steps {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .loan-step {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        border-radius: var(--loan-radius);
        background-color: #f1f5f9;
        transition: all 0.2s ease;
        cursor: pointer;
    }

    .loan-step:hover {
        background-color: #e2e8f0;
    }

    .loan-step.active {
        background-color: rgba(59, 130, 246, 0.1);
        border-left: 3px solid var(--loan-primary);
    }

    .loan-step-icon {
        width: 2rem;
        height: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #e2e8f0;
        color: var(--loan-text);
        font-weight: 600;
        font-size:8px;
        margin-right: 1rem;
        transition: all 0.2s ease;
    }

    .loan-step.active .loan-step-icon {
        background-color: var(--loan-primary);
        color: white;
    }

    .loan-step-text {
        font-weight: 500;
        font-size:12px;
        color: var(--loan-text);
    }

    .loan-step.active .loan-step-text {
        color: var(--loan-primary);
    }

    .loan-form-container {
        padding: 1.5rem 2rem;
    }

    .loan-form {
        animation: loanFormFadeIn 0.5s ease-out;
    }

    @keyframes loanFormFadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Enhance existing form elements */
    .form-control {
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        padding: 0.75rem 1rem;
        transition: all 0.2s ease;
        width: 100%;
    }

    .form-control:focus {
        border-color: var(--loan-primary);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        outline: none;
    }

    label {
        font-weight: 500;
        color: var(--loan-text);
        margin-bottom: 0.5rem;
        display: block;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .loan-modal {
            width: 95%;
        }

        .loan-sidebar {
            border-right: none;
            border-bottom: 1px solid var(--loan-border);
            padding-bottom: 1rem;
        }

        .loan-steps {
            flex-direction: row;
            overflow-x: auto;
            padding-bottom: 0.5rem;
            gap: 0.5rem;
        }

        .loan-step {
            min-width: 120px;
            flex-direction: column;
            text-align: center;
            padding: 0.75rem 0.5rem;
        }

        .loan-step-icon {
            margin-right: 0;
            margin-bottom: 0.5rem;
        }

        .loan-step-text {
            font-size: 0.75rem;
        }
    }
</style>


<script>
    let currentStep = 1;
    showStep(1);

    function showStep(step) {
      const steps = document.querySelectorAll('.step');
      steps.forEach((stepElem) => stepElem.style.display = 'none');

      const currentStep = document.getElementById('step' + step);
      currentStep.style.display = 'block';
    }

    function nextStep(step) {
      switch (step) {
        case 1:
          if (_validate_step1()) {
            currentStep += 1;
            showStep(currentStep);
          }
          break;
        case 2:
          if (_validate_step2()) {
            currentStep += 1;
            showStep(currentStep);
          }
          break;
        case 3:
          if (_validate_step3()) {
            currentStep += 1;
            showStep(currentStep);
          }
          break;
        case 4:
          if (_validate_step4()) {
            currentStep += 1;
            showStep(currentStep);
          }
          break;
        case 5:
          if (_validate_step5()) {
            currentStep += 1;
            showStep(currentStep);
          }
          break;
        case 6:

          if (_validate_step6()) {
            currentStep += 1;
            showStep(currentStep);
          }
          break;

        default:

          currentStep += 1;
          showStep(currentStep);
          break;
      }
    }

    function prevStep(step) {
        currentStep -= 1;
        showStep(currentStep);
    }

    document.getElementById('submit_click').addEventListener('click', function() {// Disable the button
        document.getElementById('submit_click').classList.remove('btn-primary');
        document.getElementById('submit_click').classList.add('text-dark');

        // Show loading animation and hide finish icon
        document.getElementById('ploading').style.display = 'inline-block';

        document.getElementById('finishicon').style.display = 'none';
        document.getElementById('backicon').style.display = 'none';

        // You can add additional logic here, such as form submission or other actions.

        // For demonstration purposes, let's simulate a delay (e.g., 3 seconds) before resetting the button state.
        setTimeout(function() {
            // Hide loading animation and show finish icon
            document.getElementById('ploading').style.display = 'none';
            document.getElementById('finishicon').style.display = 'inline-block';
            document.getElementById('backicon').style.display = 'inline-block';
        }, 10000);
    });

    function _validate_step1(){
      var jobTitleInput = document.getElementById('jobTitleInput');
      var jobTitleError = document.getElementById('jobTitleError');
      var employeeNo = document.getElementById('employeeNo');
      var employeeNoError = document.getElementById('employeeNoError');
      var dobInput = document.getElementById('dob');
      var dobError = document.getElementById('jobDOBError');
      var phoneInput = document.getElementById('phone');
      var phoneError = document.getElementById('phoneError');
      var nrcInput = document.getElementById('nrc');
      var nrcError = document.getElementById('nrcError');
      var genderInput = document.getElementById('gender');
      var genderError = document.getElementById('genderError');
      var nrc_idInput = document.getElementById('nrc_id');
      var nrcIDError = document.getElementById('nrcIDError');

      var ministry = document.getElementById('ministry');
      var department = document.getElementById('department');

      // In this example, we'll check if the input is not empty
      if (!employeeNo.value) {
          employeeNoError.textContent = 'Employee Number is required';
      }
      if (employeeNo.value.length !== 8) {
        employeeNoError.textContent = 'Employee Number must be 8 characters long';
      }
      if (!jobTitleInput.value) {
          jobTitleError.textContent = 'Job Title is required';
      }
      if (!dobInput.value) {
          dobError.textContent = 'DOB is required';
      }
      if (!phoneInput.value) {
          phoneError.textContent = 'Phone is required';
      }
      if (!nrcInput.value) {
          nrcError.textContent = 'Identification ID is required';
      }

      if (!genderInput.value) {
          genderError.textContent = 'Gender is required';
      }
      if (!nrc_idInput.value) {
          nrcIDError.textContent = 'Identification Type is required';
      }

      if (!employeeNo.value || !jobTitleInput.value || !dobInput.value || !phoneInput.value || !nrcInput.value || !genderInput.value || !nrc_idInput.value) {
          return false;
      } else {
          // Prepare data to send to the server
          var formData = new FormData();
          formData.append('jobTitle', jobTitleInput.value);
          formData.append('dob', dobInput.value);
          formData.append('phone', phoneInput.value);
          formData.append('nrc', nrcInput.value);
          formData.append('gender', genderInput.value);
          formData.append('nrc_id', nrc_idInput.value);
          formData.append('employeeNo', employeeNo.value);
          formData.append('ministry', ministry.value);
          formData.append('department', department.value);
          formData.append('borrower_id', '{{ auth()->user()->id }}');

          // Perform Fetch API request to the Laravel backend
          fetch("{{ route('continue-loan') }}", {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle the success response from the server
              console.log('Data successfully updated or created:', data);
          })
          .catch(error => {
              // Handle the error response from the server
              // console.error('Error updating or creating data:', error);
          });
          return true;
      }

    }

    function _validate_step2(){
      var fileInput = document.getElementById('fileInput');
      var nrcFileError = document.getElementById('nrcFileError');
      var fileInput2 = document.getElementById('fileInput2');
      var fiileInput2Error = document.getElementById('fiileInput2Error');

      var nrcExists = "{{$meta->uploads->where('name', 'nrc_file')->first()->path}}";
      var tpinExists = "{{$meta->uploads->where('name', 'tpin_file')->first()->path}}";

      // In this example, we'll check if the input is not empty
      if (fileInput.value === '' && nrcExists === '') {
        nrcFileError.textContent = 'Please upload copy of national ID';
      }
        //   if (!fileInput2.value && tpinExists === 'null') {
        //     fiileInput2Error.textContent = 'Please upload copy of Tpin';
        //   }
        // !fileInput2.value && tpinExists === 'null' ||
      if (fileInput.value === '' && nrcExists === '') {
          return false;
      } else {

          // Prepare data to send to the server
          var formData = new FormData();

          // Get the files
          formData.append('nrc_file', fileInput.files[0]);
          formData.append('tpin_file', fileInput2.files[0]);

          // Perform Fetch API request to the Laravel backend
          fetch("{{ route('continue-loan') }}", {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle the success response from the server
              console.log('Data successfully updated or created:', data);
          })
          .catch(error => {
              // Handle the error response from the server
              // console.error('Error updating or creating data:', error);
          });
          return true;
      }

    }

    function _validate_step3(){
      // Required
      var nextOfKinFirstName = document.getElementById('nextOfKinFirstName');
      var nokFNError = document.getElementById('nokFNError');
      var nextOfKinLastName = document.getElementById('nextOfKinLastName');
      var nokLNError = document.getElementById('nokLNError');
      var nextOfKinPhone = document.getElementById('nextOfKinPhone');
      var nextOfKinPhoneError = document.getElementById('nextOfKinPhoneError');
      var relationshipInput = document.getElementById('relationship');
      var relationError = document.getElementById('relationError');
      // optionals
      var physicalAddress = document.getElementById('physicalAddress');



      // In this example, we'll check if the input is not empty
      if (!nextOfKinFirstName.value) {
        nokFNError.textContent = 'First Name required';
      }
      if (!nextOfKinLastName.value) {
        nokLNError.textContent = 'First Name required';
      }
      if (!nextOfKinPhone.value) {
        nextOfKinPhoneError.textContent = 'Phone number required';
      }
      if (!relationshipInput.value) {
        relationError.textContent = 'Your relation is required';
      }

      if (!nextOfKinLastName.value || !nextOfKinFirstName.value || !nextOfKinPhone.value || !relationshipInput.value ) {
          return false;
      } else {
          // Prepare data to send to the server
          var formData = new FormData();
          formData.append('nextOfKinFirstName', nextOfKinFirstName.value);
          formData.append('nextOfKinLastName', nextOfKinLastName.value);
          formData.append('nextOfKinPhone', nextOfKinPhone.value);
          formData.append('relationship', relationshipInput.value);
          formData.append('physicalAddress', physicalAddress.value);
          formData.append('borrower_id', '{{ auth()->user()->id }}');

          // Perform Fetch API request to the Laravel backend
          fetch("{{ route('continue-loan') }}", {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle the success response from the server
              console.log('Data successfully updated or created:', data);
          })
          .catch(error => {
              // Handle the error response from the server
              // console.error('Error updating or creating data:', error);
          });
          return true;
      }

    }

    function _validate_step4(){
      var hrFirstName = document.getElementById('hrFirstName');
      var fnHRError = document.getElementById('fnHRError');
      var hrLastName = document.getElementById('hrLastName');
      var lnHRError = document.getElementById('lnHRError');
      var hrContactNumber = document.getElementById('hrContactNumber');
      var contactHRError = document.getElementById('contactHRError');
      var supervisorFirstName = document.getElementById('supervisorFirstName');
      var supLNError = document.getElementById('supLNError');
      var supervisorLastName = document.getElementById('supervisorLastName');
      var supFNError = document.getElementById('supFNError');
      var supervisorContactNumber = document.getElementById('supervisorContactNumber');
      var supContactError = document.getElementById('supContactError');


      // In this example, we'll check if the input is not empty
      if (!hrFirstName.value) {
        fnHRError.textContent = 'HR First Name required';
      }
      if (!hrLastName.value) {
        lnHRError.textContent = 'HR Last Name required';
      }
      if (!hrContactNumber.value) {
        contactHRError.textContent = 'HR contact is required';
      }

        //   ---- supervisor !mportant
    //   if (!supervisorLastName.value) {
    //     supLNError.textContent = 'Supervisor First Name';
    //   }
    //   if (!supervisorFirstName.value) {
    //     supFNError.textContent = 'Supervisor Last Name';
    //   }
    //   if (!supervisorContactNumber.value) {
    //     supContactError.textContent = 'Supervisor Conact Number';
    //   }
    // || !supervisorLastName.value || !supervisorFirstName.value || !supervisorContactNumber.value
      if (!hrFirstName.value || !hrLastName.value || !hrContactNumber.value ) {
          return false;
      } else {
          // Prepare data to send to the server
          var formData = new FormData();
          formData.append('hrFirstName', hrFirstName.value);
          formData.append('hrLastName', hrLastName.value);
          formData.append('hrContactNumber', hrContactNumber.value);
          formData.append('supervisorFirstName', supervisorFirstName.value);
          formData.append('supervisorLastName', supervisorLastName.value);
          formData.append('supervisorContactNumber', supervisorContactNumber.value);
          formData.append('application_id', '{{ $activeLoan->id }}');
          formData.append('borrower_id', '{{ auth()->user()->id }}');

          // Perform Fetch API request to the Laravel backend
          fetch("{{ route('continue-loan') }}", {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle the success response from the server
              console.log('Data successfully updated or created:', data);
          })
          .catch(error => {
              // Handle the error response from the server
              // console.error('Error updating or creating data:', error);
          });
          return true;
      }
    }

    function _validate_step5(){
      var bankName = document.getElementById('bankName');
      var bankNameError = document.getElementById('bankNameError');
      var branchName = document.getElementById('branchName');
      var bankBranchError = document.getElementById('bankBranchError');
      var accountNumber = document.getElementById('accountNumber');
      var bankAccError = document.getElementById('bankAccError');
      var accountNames = document.getElementById('accountNames');
      var bankAccNameError = document.getElementById('bankAccNameError');

      // In this example, we'll check if the input is not empty
      if (!bankName.value) {
        bankNameError.textContent = 'Bank Name required';
      }
      if (!branchName.value) {
        bankBranchError.textContent = 'Branch Name required';
      }
      if (!accountNumber.value) {
        bankAccError.textContent = 'Account Number is required';
      }
      if (!accountNames.value) {
        bankAccNameError.textContent = 'Account Name required';
      }

      if (!bankName.value || !branchName.value || !accountNumber.value || !accountNames.value ) {
          return false;
      } else {
          // Prepare data to send to the server
          var formData = new FormData();
          formData.append('bankName', bankName.value);
          formData.append('branchName', branchName.value);
          formData.append('accountNames', accountNames.value);
          formData.append('accountNumber', accountNumber.value);
          formData.append('user_id', '{{ auth()->user()->id }}');

          // Perform Fetch API request to the Laravel backend
          fetch("{{ route('continue-loan') }}", {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle the success response from the server
              console.log('Data successfully updated or created:', data);
          })
          .catch(error => {
              // Handle the error response from the server
              // console.error('Error updating or creating data:', error);
          });
          return true;
      }
    }

    function _validate_step6(){
      var fileInput3 = document.getElementById('fileInput3');
      var payslipError = document.getElementById('payslipError');
      var fileInput4 = document.getElementById('fileInput4');
      var bankstatementError = document.getElementById('bankstatementError');
      var fileInput5 = document.getElementById('fileInput5');
      var passportError = document.getElementById('passportError');
      var fileInput6 = document.getElementById('fileInput6');
      var preapprovalError = document.getElementById('preapprovalError');
      var fileInput7 = document.getElementById('fileInput7');
      var letterError = document.getElementById('letterError');

      var payslipExists = "{{$meta->uploads->where('name', 'nrc_file')->first()->path}}";
      var bankExists = "{{$meta->uploads->where('name', 'bankstatement')->first()->path}}";
      var passportExists = "{{$meta->uploads->where('name', 'passport')->first()->path}}";
      var preapprovalExists = "{{$meta->uploads->where('name', 'preapproval')->first()->path}}";
      var letterExists = "{{$meta->uploads->where('name', 'letterofintro')->first()->path}}";

        payslipError.textContent = '';
        bankstatementError.textContent = '';
        passportError.textContent = '';
        preapprovalError.textContent = '';

      // we'll check if the input is not empty
      if (!fileInput3.value && payslipExists === '') {
        // alert('1');
        payslipError.textContent = 'Please upload copy of Latest Payslip';
      }

      if (!fileInput4.value && bankExists === '' ) {
        // alert('2');
        bankstatementError.textContent = 'Please upload copy of Bank Statement';
      }
      if (!fileInput5.value && passportExists === '') {
        // alert('3');
        passportError.textContent = 'Please upload a Passport size photo';
      }
      if (!fileInput6.value && preapprovalExists === '') {
        // alert('4');
        preapprovalError.textContent = 'Please upload signed Preapproval form';
      }

        //   !fileInput7.value || letterExists === 'null' --letter of introduction
      if (!fileInput3.value && payslipExists === '' ||
        !fileInput4.value && bankExists === '' ||
        !fileInput5.value && passportExists === '' ||
        !fileInput6.value && preapprovalExists === ''
        ){
          return false;
      } else {
          // Prepare data to send to the server
          var formData = new FormData();

          // Get the files
          formData.append('payslip_file', fileInput3.files[0]);
          formData.append('bankstatement', fileInput4.files[0]);
          formData.append('passport', fileInput5.files[0]);
          formData.append('preapproval', fileInput6.files[0]);
          formData.append('letterofintro', fileInput7.files[0]);

          // Perform Fetch API request to the Laravel backend
          fetch("{{ route('continue-loan') }}", {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              // Handle the success response from the server
              console.log('Data successfully updated or created:', data);
          })
          .catch(error => {
              // Handle the error response from the server
              // console.error('Error updating or creating data:', error);
          });
          return true;
      }

    }



    // NRC
    // JavaScript to handle file selection and removal
    const fileInput = document.getElementById('fileInput');
    const fileList = document.getElementById('fileList');

    const uploadedFiles = [];
    // const uploadedFilesJson = [];

    // JavaScript to handle file selection and removal
    fileInput.addEventListener('change', function () {
        const files = this.files;
        // Initialize an array to store uploaded file names
        if (files.length > 0) {
            // Add the uploaded files to the uploadedFiles array
            Array.from(files).forEach(file => {
                uploadedFiles.push(file);

                const listItem = document.createElement('li');
                listItem.className = 'file-item grid pb-1';
                listItem.innerHTML = `
                    <span class="grid-file-item">${file.name}</span>
                    <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
                `;
                fileList.appendChild(listItem);
            });
        }
    });

    fileList.addEventListener('click', function (e) {
        // console.log(e.target.classList.value);
        if (e.target.classList.value == 'grid-file-item-btn') {
            const fileName = e.target.getAttribute('data-name');
            const fileItem = e.target.parentElement;
            fileItem.remove();
            // Remove the file name from the uploadedFiles array
            const fileIndex = uploadedFiles.indexOf(fileName);
            if (fileIndex !== -1) {
                uploadedFiles.splice(fileIndex, 1);
            }
            // Update the hidden input with the updated uploaded files
            myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
            // You can perform additional actions here (e.g., remove the file from the server).
        }
    });


  //Tpin File Upload
  // JavaScript to handle file selection and removal
  const fileInput2 = document.getElementById('fileInput2');
  const fileList2 = document.getElementById('fileList-2');

  const uploadedFiles2 = [];
  // const uploadedFilesJson = [];

  // JavaScript to handle file selection and removal
  fileInput2.addEventListener('change', function () {
  const files = this.files;
  // Initialize an array to store uploaded file names

  if (files.length > 0) {

      // Add the uploaded files to the uploadedFiles array
      Array.from(files).forEach(file => {

          uploadedFiles2.push(file);

          const listItem = document.createElement('li');
          listItem.className = 'file-item grid pb-1';
          listItem.innerHTML = `
              <span class="grid-file-item">${file.name}</span>
              <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
          `;

          fileList2.appendChild(listItem);
      });
  }
  });

  fileList2.addEventListener('click', function (e) {
    // console.log(e.target.classList.value);
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles2.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
    }
  });


  // 3 months bank statement
  // JavaScript to handle file selection and removal
  const fileInput3 = document.getElementById('fileInput3');
  const fileList3 = document.getElementById('fileList-3');

  const uploadedFiles3 = [];
  // const uploadedFilesJson = [];

  // JavaScript to handle file selection and removal
  fileInput3.addEventListener('change', function () {
  const files = this.files;
  // Initialize an array to store uploaded file names

  if (files.length > 0) {

      // Add the uploaded files to the uploadedFiles array
      Array.from(files).forEach(file => {

          uploadedFiles3.push(file);

          const listItem = document.createElement('li');
          listItem.className = 'file-item grid pb-1';
          listItem.innerHTML = `
              <span class="grid-file-item">${file.name}</span>
              <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
          `;

          fileList3.appendChild(listItem);
      });
  }
  });
  fileList3.addEventListener('click', function (e) {
  if (e.target.classList.value == 'grid-file-item-btn') {
      const fileName = e.target.getAttribute('data-name');
      const fileItem = e.target.parentElement;
      fileItem.remove();
      // Remove the file name from the uploadedFiles array
      const fileIndex = uploadedFiles.indexOf(fileName);
      if (fileIndex !== -1) {
          uploadedFiles3.splice(fileIndex, 1);
      }
      // Update the hidden input with the updated uploaded files
      myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
      // You can perform additional actions here (e.g., remove the file from the server).
  }
  });


  // Passport
  // JavaScript to handle file selection and removal
  const fileInput4 = document.getElementById('fileInput4');
  const fileList4 = document.getElementById('fileList-4');

  const uploadedFiles4 = [];
  // const uploadedFilesJson = [];

  // JavaScript to handle file selection and removal
  fileInput4.addEventListener('change', function () {
  const files = this.files;
  // Initialize an array to store uploaded file names

  if (files.length > 0) {

      // Add the uploaded files to the uploadedFiles array
      Array.from(files).forEach(file => {

          uploadedFiles4.push(file);

          const listItem = document.createElement('li');
          listItem.className = 'file-item grid pb-1';
          listItem.innerHTML = `
              <span class="grid-file-item">${file.name}</span>
              <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
          `;

          fileList4.appendChild(listItem);
      });
  }
  });
  fileList4.addEventListener('click', function (e) {
  if (e.target.classList.value == 'grid-file-item-btn') {
      const fileName = e.target.getAttribute('data-name');
      const fileItem = e.target.parentElement;
      fileItem.remove();
      // Remove the file name from the uploadedFiles array
      const fileIndex = uploadedFiles.indexOf(fileName);
      if (fileIndex !== -1) {
          uploadedFiles4.splice(fileIndex, 1);
      }
      // Update the hidden input with the updated uploaded files
      myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
      // You can perform additional actions here (e.g., remove the file from the server).
  }
  });

  // Preapproval
  // JavaScript to handle file selection and removal
  const fileInput5 = document.getElementById('fileInput5');
  const fileList5 = document.getElementById('fileList-5');

  const uploadedFiles5 = [];
  // const uploadedFilesJson = [];

  // JavaScript to handle file selection and removal
  fileInput5.addEventListener('change', function () {
    const files = this.files;
    // Initialize an array to store uploaded file names

    if (files.length > 0) {

        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {

            uploadedFiles5.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item grid pb-1';
            listItem.innerHTML = `
                <span class="grid-file-item">${file.name}</span>
                <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
            `;

            fileList5.appendChild(listItem);
        });
    }
  });
  fileList5.addEventListener('click', function (e) {
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles5.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
    }
  });


  // Preapproval
  // JavaScript to handle file selection and removal
  const fileInput6 = document.getElementById('fileInput6');
  const fileList6 = document.getElementById('fileList-6');

  const uploadedFiles6 = [];
  // const uploadedFilesJson = [];

  // JavaScript to handle file selection and removal
  fileInput6.addEventListener('change', function () {
    const files = this.files;
    // Initialize an array to store uploaded file names

    if (files.length > 0) {

        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {

            uploadedFiles6.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item grid pb-1';
            listItem.innerHTML = `
                <span class="grid-file-item">${file.name}</span>
                <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
            `;

            fileList6.appendChild(listItem);
        });
    }
  });
  fileList6.addEventListener('click', function (e) {
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles6.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
    }
  });


  // Preapproval
  // JavaScript to handle file selection and removal
  const fileInput7 = document.getElementById('fileInput7');
  const fileList7 = document.getElementById('fileList-7');

  const uploadedFiles7 = [];
  // const uploadedFilesJson = [];

  // JavaScript to handle file selection and removal
  fileInput7.addEventListener('change', function () {
    const files = this.files;
    // Initialize an array to store uploaded file names

    if (files.length > 0) {

        // Add the uploaded files to the uploadedFiles array
        Array.from(files).forEach(file => {

            uploadedFiles7.push(file);

            const listItem = document.createElement('li');
            listItem.className = 'file-item grid pb-1';
            listItem.innerHTML = `
                <span class="grid-file-item">${file.name}</span>
                <button class="grid-file-item-btn" type="button" class="remove-button" data-name="${file.name}">x</button>
            `;

            fileList7.appendChild(listItem);
        });
    }
  });
  fileList6.addEventListener('click', function (e) {
    if (e.target.classList.value == 'grid-file-item-btn') {
        const fileName = e.target.getAttribute('data-name');
        const fileItem = e.target.parentElement;
        fileItem.remove();
        // Remove the file name from the uploadedFiles array
        const fileIndex = uploadedFiles.indexOf(fileName);
        if (fileIndex !== -1) {
            uploadedFiles6.splice(fileIndex, 1);
        }
        // Update the hidden input with the updated uploaded files
        myUploadedFilesInput.value = JSON.stringify(uploadedFiles);
        // You can perform additional actions here (e.g., remove the file from the server).
    }
  });
  </script>
