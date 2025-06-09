
<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-gray-100 py-10 px-5">
<div style="width:80em" class="bg-white rounded shadow p-6">
    <!-- Progress -->
    <div class="mb-8 relative">
        <div class="flex justify-between relative z-10">
            <div class="text-center w-1/2">
                <div id="progressStep1" class="w-10 h-10 rounded-full bg-blue-600 text-white mx-auto flex items-center justify-center font-bold">1</div>
                <p class="mt-2 text-sm font-medium">Personal Information</p>
            </div>
            <div class="text-center w-1/2">
                <div id="progressStep2" class="w-10 h-10 rounded-full bg-gray-300 text-white mx-auto flex items-center justify-center font-bold">2</div>
                <p class="mt-2 text-sm font-medium">Documentation Upload</p>
            </div>
        </div>
        <div class="absolute top-5 left-0 w-full h-1 bg-gray-300 z-0">
            <div id="progressLineFill" class="h-1 bg-blue-600 transition-all duration-500 w-1/2"></div>
        </div>
    </div>

    <!-- Wizard Form -->
    <form action="{{ route('update-kyc-uploads') }}" method="POST" enctype="multipart/form-data" id="wizardForm">
        @csrf

        <!-- Step 1 -->
        <div class="wizard-step" id="step1">
            <h3 class="text-xl font-bold mb-4">Personal Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- First Name -->
                <div>
                    <label class="block text-sm font-medium mb-1">First Name</label>
                    <input type="text" name="fname" class="w-full border rounded px-3 py-2" placeholder="{{ auth()->user()->fname }}" value="{{ auth()->user()->fname }}">
                </div>
                <!-- Last Name -->
                <div>
                    <label class="block text-sm font-medium mb-1">Last Name</label>
                    <input type="text" name="lname" class="w-full border rounded px-3 py-2" placeholder="{{ auth()->user()->lname }}" value="{{ auth()->user()->lname }}">
                </div>
                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                    <input type="text" name="phone" class="w-full border rounded px-3 py-2" placeholder="{{ auth()->user()->phone }}" value="{{ auth()->user()->phone }}">
                </div>
                <!-- ID Type -->
                <div>
                    <label class="block text-sm font-medium mb-1">National ID Type</label>
                    <select name="id_type" class="w-full border rounded px-3 py-2">
                        <option {{ auth()->user()->id_type == null ? 'selected' : ''}} value="">-- Choose --</option>
                        <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                        <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                        <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver Liecense</option>
                    </select>
                </div>
                <!-- ID Number -->
                <div>
                    <label class="block text-sm font-medium mb-1">National ID Number</label>
                    <input type="text" name="nrc_no" class="w-full border rounded px-3 py-2" placeholder="{{ auth()->user()->nrc_no ?? auth()->user()->nrc }}" value="{{ auth()->user()->nrc_no ?? auth()->user()->nrc }}">
                </div>
                <!-- Gender -->
                <div>
                    <label class="block text-sm font-medium mb-1">Sex</label>
                    <select name="gender" class="w-full border rounded px-3 py-2">
                        <option value="{{ auth()->user()->gender }}">{{ auth()->user()->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <!-- DOB -->
                <div>
                    <label class="block text-sm font-medium mb-1">Date of Birth</label>
                    <input type="text" name="dob" class="w-full border rounded px-3 py-2" value="{{ auth()->user()->dob }}" placeholder="{{ auth()->user()->dob }}" autocomplete="off">
                </div>
                <!-- Address -->
                <div>
                    <label class="block text-sm font-medium mb-1">Present Address</label>
                    <input type="text" name="address" class="w-full border rounded px-3 py-2" value="{{ auth()->user()->address }}" placeholder="{{ auth()->user()->address }}">
                </div>
                <!-- Job Title -->
                <div>
                    <label class="block text-sm font-medium mb-1">Job Title</label>
                    <input type="text" name="occupation" class="w-full border rounded px-3 py-2" value="{{ auth()->user()->occupation }}" placeholder="{{ auth()->user()->occupation }}">
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button type="button" onclick="navigateStep('next')" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Continue →</button>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="wizard-step hidden" id="step2">
            <h3 class="text-xl font-bold mb-4">Documentation Upload</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- NRC Front -->
                <div>
                    <label class="block text-sm font-medium mb-2">NRC Front</label>
                    <input required class="w-full border px-3 py-2" name="nrc_file" type="file">
                    @if ($meta->uploads->where('name', 'nrc_file')->isNotEmpty())
                        <p class="text-green-600 text-sm mt-2"><i class="fas fa-check-circle"></i> Uploaded on {{ $meta->uploads->where('name', 'nrc_file')->first()->created_at->toFormattedDateString() }}</p>
                    @endif
                </div>

                <!-- NRC Back -->
                <div>
                    <label class="block text-sm font-medium mb-2">NRC Back</label>
                    <input required class="w-full border px-3 py-2" name="nrc_file_2" type="file">
                </div>

                <!-- Tpin -->
                <div>
                    <label class="block text-sm font-medium mb-2">Tpin</label>
                    <input required class="w-full border px-3 py-2" name="tpin_file" type="file">
                </div>

                <!-- Payslip -->
                <div>
                    <label class="block text-sm font-medium mb-2">Payslip</label>
                    <input required class="w-full border px-3 py-2" name="payslip_file" type="file">
                </div>

                <!-- Bank Statement -->
                <div>
                    <label class="block text-sm font-medium mb-2">Bank Statement</label>
                    <input required class="w-full border px-3 py-2" name="bank_file" type="file">
                </div>

                <!-- Preapproval -->
                <div>
                    <label class="block text-sm font-medium mb-2">Preapproval</label>
                    <input required class="w-full border px-3 py-2" name="preapproval" type="file">
                </div>
            </div>

            <div class="mt-6 flex justify-between">
                <button type="button" onclick="navigateStep('prev')" class="bg-gray-400 text-white px-5 py-2 rounded hover:bg-gray-500">← Back</button>
                <button type="submit" class="bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700">Submit</button>
            </div>
        </div>
    </form>
</div>

<script>
    const steps = ["step1", "step2"];
    let currentStep = 0;

    function navigateStep(direction) {
        document.getElementById(steps[currentStep]).classList.add("hidden");

        if (direction === "next") currentStep++;
        else if (direction === "prev") currentStep--;

        document.getElementById(steps[currentStep]).classList.remove("hidden");

        // Update progress indicators
        document.getElementById("progressStep1").classList.remove("bg-gray-300");
        document.getElementById("progressStep2").classList.remove("bg-gray-300");
        if (currentStep === 0) {
            document.getElementById("progressStep1").classList.add("bg-blue-600");
            document.getElementById("progressStep2").classList.add("bg-gray-300");
            document.getElementById("progressLineFill").style.width = "50%";
        } else {
            document.getElementById("progressStep2").classList.add("bg-blue-600");
            document.getElementById("progressLineFill").style.width = "100%";
        }
    }
</script>

</div>


