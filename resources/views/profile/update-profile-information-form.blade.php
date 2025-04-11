<div style="width: 100%" class="w-full profile-dashboard">
    <style>
        /* Main Styles */
        :root {
            --primary: #6a3093;
            --primary-light: #8245b0;
            --primary-dark: #592680;
            --accent: #FFD700;
            --accent-light: #FFEB80;
            --text-dark: #333333;
            --text-light: #666666;
            --white: #ffffff;
            --light-bg: #f7f9fc;
            --border-light: #e9ecef;
        }

        .profile-dashboard {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background-color: var(--light-bg);
            padding: 25px;
            border-radius: 16px;
        }

        /* Card Styling */
        .profile-card {
            background-color: var(--white);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(106, 48, 147, 0.08);
            padding: 30px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .profile-card:hover {
            box-shadow: 0 12px 30px rgba(106, 48, 147, 0.12);
            transform: translateY(-5px);
        }

        /* Profile Header */
        .profile-header {
            display: flex;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 25px;
        }

        .profile-avatar {
            position: relative;
            margin-right: 24px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--white);
            box-shadow: 0 0 0 3px var(--primary-light);
            transition: all 0.3s ease;
        }

        .profile-info h4 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .profile-info p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 12px;
        }

        /* Section Titles */
        .section-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title::before {
            content: "";
            display: inline-block;
            width: 5px;
            height: 24px;
            background-color: var(--accent);
            border-radius: 3px;
        }

        /* Form Styling */
        .form-section {
            padding: 15px 0;
        }

        .form-label {
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            height: 48px;
            border-radius: 10px;
            border: 1px solid var(--border-light);
            padding: 10px 15px;
            transition: all 0.3s ease;
            width: 100%;
            background-color: #f9fafc;
        }

        .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(106, 48, 147, 0.15);
            background-color: var(--white);
        }

        .form-control[readonly] {
            background-color: #f0f0f5;
            color: #888;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236a3093' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: calc(100% - 15px) center;
            padding-right: 35px;
        }

        /* Button Styling */
        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 10px rgba(106, 48, 147, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(106, 48, 147, 0.4);
        }

        .btn-change-photo {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 10px;
            padding: 10px 18px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 12px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-change-photo:hover {
            background-color: var(--primary-dark);
        }

        .btn-change-photo svg {
            width: 16px;
            height: 16px;
        }

        /* Grid System */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }

        .col-form-group {
            padding: 10px;
            flex: 0 0 50%;
            max-width: 50%;
        }

        @media (max-width: 768px) {
            .col-form-group {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        /* Modal Styling */
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
            border-radius: 16px;
            max-width: 600px;
            width: 90%;
            padding: 30px;
            position: relative;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            width: 32px;
            height: 32px;
            background-color: #f0f0f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .modal-close:hover {
            background-color: #e0e0e5;
            transform: rotate(90deg);
        }

        .file-input-container {
            margin-top: 20px;
        }

        .file-input-label {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--primary-light);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-input-label:hover {
            background-color: var(--primary);
        }

        input[type="file"] {
            display: none;
        }

        #preview-container {
            margin-top: 20px;
            border: 2px dashed var(--primary-light);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 150px;
        }

        #preview-image {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
        }
    </style>

    <div class="profile-card">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    Change Profile Picture
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

            <div style="margin-top: 25px;">
                <button type="submit" class="btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </span>
            <h4 class="section-title">Update Profile Picture</h4>
            <form id="imageForm" action="{{ route('update-prof-pic') }}" method="POST" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-form-group">
                    <h5 style="color: var(--primary); margin-bottom: 15px;">New Profile Picture</h5>
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

                <div style="width: 100%; margin-top: 20px;">
                    <button type="submit" onclick="submitForm()" class="btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
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