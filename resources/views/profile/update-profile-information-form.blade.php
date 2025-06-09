
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom styles that extend Tailwind */
        .profile-image {
            border: 2px solid #6a3093;
        }
        
        .hasDatepicker {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23888' viewBox='0 0 16 16'%3E%3Cpath d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1rem;
            padding-right: 2rem;
        }
        
        /* Modal transition */
        .modal {
            transition: opacity 0.3s ease;
        }
        
        /* File input styling */
        .file-input-label {
            transition: all 0.2s ease;
        }
        
        .file-input-label:hover {
            border-color: #9ca3af;
        }
    </style>
<body class="bg-gray-50 font-inter">
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left Column -->
            <div class="w-full lg:w-1/3 space-y-6">
                <!-- Profile Card -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center space-x-4 pb-4 border-b border-gray-200">
                        <div class="relative">
                            <img
                                id="previewImage"
                                class="profile-image w-20 h-20 rounded-full object-cover"
                                @if(auth()->user()->profile_photo_path)
                                src="{{ '../public/'.Storage::url(auth()->user()->profile_photo_path) }}"
                                @else
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmw0mqGxMV3LaBmRd2LTjBWq8PMMm2ZnoiopUzXmaMlw&s"
                                @endif
                                alt="Profile Picture"
                            />
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-semibold text-gray-900">{{ auth()->user()->fname.' '.auth()->user()->lname}}</h4>
                            <p class="text-xs text-gray-500 mb-2">Max file size is 20mb</p>
                            <button class="btn-change-photo flex items-center space-x-1.5 text-purple-700 border border-purple-700 rounded-md px-3 py-1.5 text-xs font-medium hover:bg-purple-50 transition-colors" id="openModalBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                <span>Change Photo</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="mt-2">
                        @livewire('profile.update-password-form')
                    </div>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="w-full lg:w-2/3">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h4 class="text-lg font-semibold text-gray-900 pb-2 border-b border-gray-200 mb-6">Personal Information</h4>
                    
                    <form action="{{ route('update-profile') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">First Name</label>
                                <input
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="{{ auth()->user()->fname }}"
                                    name="fname"
                                    value="{{ auth()->user()->fname }}"
                                />
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input
                                    name="lname"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="{{ auth()->user()->lname }}"
                                    value="{{ auth()->user()->lname }}"
                                />
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input
                                    readonly
                                    name="email"
                                    type="email"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 cursor-not-allowed"
                                    placeholder="{{ auth()->user()->email}}"
                                    value="{{ auth()->user()->email}}"
                                />
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input
                                    name="phone"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="{{ auth()->user()->phone}}"
                                    value="{{ auth()->user()->phone}}"
                                />
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">National ID Type</label>
                                <select
                                    name="id_type"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    wire:model.defer="state.id_type"
                                >
                                    <option {{ auth()->user()->id_type == null ? 'selected' : ''}} value="">-- Choose --</option>
                                    <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                                    <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                                    <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver Liecense</option>
                                </select>
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">National ID Number</label>
                                <input
                                    name="nrc_no"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="{{ auth()->user()->nrc_no}}"
                                    value="{{ auth()->user()->nrc_no}}"
                                />
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">Sex</label>
                                <select
                                    name="gender"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                >
                                    <option value="{{ auth()->user()->gender}}">{{ auth()->user()->gender}}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">Date of birth</label>
                                <input
                                    name="dob"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent hasDatepicker"
                                    placeholder="{{ auth()->user()->dob}}"
                                    value="{{ auth()->user()->dob}}"
                                    id="datepicker"
                                    autocomplete="off"
                                />
                            </div>
                            <div class="space-y-1 md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Present Address</label>
                                <input
                                    name="address"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="{{ auth()->user()->address }}"
                                    value="{{ auth()->user()->address }}"
                                />
                            </div>
                            <div class="space-y-1 md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Job Title</label>
                                <input
                                    name="occupation"
                                    type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    placeholder="{{ auth()->user()->occupation }}"
                                    value="{{ auth()->user()->occupation }}"
                                />
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="flex items-center space-x-2 bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                <span>Save Changes</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 opacity-0 pointer-events-none modal">
        <div class="bg-white rounded-xl p-6 w-full max-w-md relative mx-4">
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700" onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </button>
            <h4 class="text-lg font-semibold text-gray-900 pb-2 border-b border-gray-200 mb-4">Update Profile Picture</h4>
            <form id="imageForm" action="{{ route('update-prof-pic') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <div>
                        <h5 class="text-purple-700 mb-3 text-sm font-medium">New Profile Picture</h5>
                        <div class="relative">
                            <label for="imageInput" class="file-input-label block bg-gray-50 text-gray-700 border border-dashed border-gray-300 rounded-md px-4 py-8 text-center cursor-pointer hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="mt-2 block text-sm font-medium">Click to upload</span>
                                <span class="mt-1 block text-xs text-gray-500">PNG, JPG, GIF up to 20MB</span>
                            </label>
                            <input type="file" name="photo" id="imageInput" accept="image/*" onchange="previewImage()" class="sr-only">
                        </div>
                    </div>

                    <div id="preview-container" class="hidden border border-gray-200 rounded-md overflow-hidden">
                        <img id="preview-image" alt="Preview Image" class="w-full h-48 object-contain">
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="flex items-center space-x-2 bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors w-full justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z"/>
                            </svg>
                            <span>Save Changes</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('openModalBtn');
        var profileForm = document.getElementById('profileForm');
        var fileSizeError = document.getElementById('fileSizeError');

        btn.onclick = function() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
        };

        function closeModal() {
            modal.classList.remove('opacity-100', 'pointer-events-auto');
            modal.classList.add('opacity-0', 'pointer-events-none');
        }

        window.onclick = function(event) {
            if (event.target === modal) {
                closeModal();
            }
        };

        function previewImage() {
            var previewContainer = document.getElementById('preview-container');
            var previewImage = document.getElementById('preview-image');
            var imageInput = document.getElementById('imageInput');

            if (imageInput.files && imageInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }

                reader.readAsDataURL(imageInput.files[0]);
            } else {
                previewImage.src = '';
                previewContainer.classList.add('hidden');
            }
        }
    </script>
</div>