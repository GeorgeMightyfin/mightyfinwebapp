<div style="width: 100%;" class="w-full profile-dashboard">
    <style>
        :root {
            --primary: #6a3093;
            --primary-dark: #7d2c96;
            --secondary: #f5f5f5;
            --text-dark: #333333;
            --text-medium: #555555;
            --text-light: #888888;
            --border: #e0e0e0;
            --danger: #f44336;
            --success: #4caf50;
            --shadow: 0 2px 5px rgba(0,0,0,0.08);
        }

        .profile-dashboard {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-dark);
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 768px) {
            .profile-dashboard {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .profile-card, .my-profile-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 16px;
            height: fit-content;
        }

        .my-profile-card {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border);
        }

        .profile-avatar {
            position: relative;
        }

        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary);
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h4 {
            margin: 0 0 4px;
            font-size: 16px;
            font-weight: 600;
        }

        .profile-info p {
            margin: 0 0 8px;
            font-size: 12px;
            color: var(--text-light);
        }

        .btn-change-photo {
            display: flex;
            align-items: center;
            gap: 6px;
            background: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 4px;
            padding: 6px 12px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-change-photo:hover {
            background: rgba(30, 136, 229, 0.1);
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 16px;
            color: var(--text-dark);
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border);
        }

        .form-section {
            width: 100%;
        }

        .row {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 12px;
        }

        @media (min-width: 576px) {
            .row {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .col-form-group {
            margin-bottom: 0px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 4px;
            color: var(--text-medium);
        }


        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 2px rgba(30, 136, 229, 0.2);
        }

        .form-control:read-only {
            background-color: var(--secondary);
            cursor: not-allowed;
        }

        .btn-primary {
            display: flex;
            align-items: center;
            gap: 6px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        /* Modal styles */
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
            background: white;
            border-radius: 8px;
            padding: 20px;
            width: 90%;
            max-width: 400px;
            position: relative;
        }

        .modal-close {
            position: absolute;
            right: 12px;
            top: 12px;
            cursor: pointer;
            color: var(--text-light);
        }

        .modal-close:hover {
            color: var(--danger);
        }

        .file-input-container {
            position: relative;
            width: 100%;
        }

        .file-input-label {
            display: block;
            background: var(--secondary);
            color: var(--text-medium);
            border: 1px dashed var(--border);
            border-radius: 4px;
            padding: 8px 12px;
            font-size: 13px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .file-input-label:hover {
            background: #e9e9e9;
            border-color: var(--text-light);
        }

        input[type="file"] {
            position: absolute;
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            z-index: -1;
        }

        #preview-container {
            width: 100%;
            height: 150px;
            display: none;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            border-radius: 4px;
            overflow: hidden;
            margin-top: 12px;
        }

        #preview-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        /* Date picker customization */
        .hasDatepicker {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23888' viewBox='0 0 16 16'%3E%3Cpath d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
            padding-right: 30px;
        }
    </style>

    <div class="my-profile-card">
        <div class="profile-header">
            <div class="profile-avatar">
                <img
                    id="previewImage"
                    class="profile-image"
                    @if(auth()->user()->profile_photo_path)
                    src="{{ '../public/'.Storage::url(auth()->user()->profile_photo_path) }}"
                    @else
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmw0mqGxMV3LaBmRd2LTjBWq8PMMm2ZnoiopUzXmaMlw&s"
                    @endif
                    alt="Profile Picture"
                />
            </div>
            <div class="profile-info">
                <h4>{{ auth()->user()->fname.' '.auth()->user()->lname}}</h4>
                <p>Max file size is 20mb</p>
                <button class="btn-change-photo" id="openModalBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    Change Photo
                </button>
            </div>
        </div>

        <div class="form-section">
            @livewire('profile.update-password-form')
        </div>
    </div>

    <div class="profile-card">
        <h4 class="section-title">Personal Information</h4>

        <form action="{{ route('update-profile') }}" method="POST" class="form-section">
            @csrf
            <div class="row">
                <div class="col-form-group">
                    <label class="form-label">First Name</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="{{ auth()->user()->fname }}"
                        name="fname"
                        value="{{ auth()->user()->fname }}"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">Last Name</label>
                    <input
                        name="lname"
                        type="text"
                        class="form-control"
                        placeholder="{{ auth()->user()->lname }}"
                        value="{{ auth()->user()->lname }}"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">Email</label>
                    <input
                        readonly
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="{{ auth()->user()->email}}"
                        value="{{ auth()->user()->email}}"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">Phone Number</label>
                    <input
                        name="phone"
                        type="text"
                        class="form-control"
                        placeholder="{{ auth()->user()->phone}}"
                        value="{{ auth()->user()->phone}}"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">National ID Type</label>
                    <select
                        name="id_type"
                        class="form-control"
                        wire:model.defer="state.id_type"
                    >
                        <option {{ auth()->user()->id_type == null ? 'selected' : ''}} value="">-- Choose --</option>
                        <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                        <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                        <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver Liecense</option>
                    </select>
                </div>
                <div class="col-form-group">
                    <label class="form-label">National ID Number</label>
                    <input
                        name="nrc_no"
                        type="text"
                        class="form-control"
                        placeholder="{{ auth()->user()->nrc_no}}"
                        value="{{ auth()->user()->nrc_no}}"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">Sex</label>
                    <select
                        name="gender"
                        class="form-control"
                    >
                        <option value="{{ auth()->user()->gender}}">{{ auth()->user()->gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-form-group">
                    <label class="form-label">Date of birth</label>
                    <input
                        name="dob"
                        type="text"
                        class="form-control hasDatepicker"
                        placeholder="{{ auth()->user()->dob}}"
                        value="{{ auth()->user()->dob}}"
                        id="datepicker"
                        autocomplete="off"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">Present Address</label>
                    <input
                        name="address"
                        type="text"
                        class="form-control"
                        placeholder="{{ auth()->user()->address }}"
                        value="{{ auth()->user()->address }}"
                    />
                </div>
                <div class="col-form-group">
                    <label class="form-label">Job Title</label>
                    <input
                        name="occupation"
                        type="text"
                        class="form-control"
                        placeholder="{{ auth()->user()->occupation }}"
                        value="{{ auth()->user()->occupation }}"
                    />
                </div>
            </div>

            <div style="margin-top: 16px;">
                <button type="submit" class="btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Save Changes
                </button>
            </div>
        </form>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </span>
            <h4 class="section-title">Update Profile Picture</h4>
            <form id="imageForm" action="{{ route('update-prof-pic') }}" method="POST" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-form-group">
                    <h5 style="color: var(--primary); margin-bottom: 12px; font-size: 13px; font-weight: 500;">New Profile Picture</h5>
                    <div class="file-input-container">
                        <label for="imageInput" class="file-input-label">Choose a picture</label>
                        <input type="file" name="photo" id="imageInput" accept="image/*" onchange="previewImage()">
                    </div>
                </div>

                <div class="col-form-group">
                    <div id="preview-container">
                        <img id="preview-image" alt="Preview Image">
                    </div>
                </div>

                <div style="width: 100%; margin-top: 16px;">
                    <button type="submit" onclick="submitForm()" class="btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z"/>
                        </svg>
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('openModalBtn');
        var profileForm = document.getElementById('profileForm');
        var fileSizeError = document.getElementById('fileSizeError');

        btn.onclick = function () {
            modal.style.display = 'flex';
        };

        function closeModal() {
            modal.style.display = 'none';
        }

        window.onclick = function (event) {
            if (event.target === modal) {
                closeModal();
            }
        };

        function previewImage() {
            var previewContainer = document.getElementById('preview-container');
            var previewImage = document.getElementById('preview-image');
            var imageInput = document.getElementById('imageInput');

            // Check if a file is selected
            if (imageInput.files && imageInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'flex';
                }

                reader.readAsDataURL(imageInput.files[0]);
            } else {
                // No file selected, hide the preview
                previewImage.src = '';
                previewContainer.style.display = 'none';
            }
        }
    </script>
</div>