<div x-data="{ on:true }" class="content-body bg-gray-50">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles that enhance Tailwind */
        .menu-link:after {
            content: "";
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            width: 7px;
            height: 7px;
            border-top: 2px solid #ddd;
            border-right: 2px solid #ddd;
            transition: all 0.25s ease;
        }

        .menu-link:hover:after {
            border-color: #FFD700;
            right: 14px;
        }

        .menu-icon {
            transition: all 0.25s ease;
        }

        .menu-link:hover .menu-icon {
            transform: scale(1.05);
        }

        .menu-text h5, .menu-text p {
            transition: all 0.25s ease;
        }

        .menu-link:hover .menu-text h5,
        .menu-link:hover .menu-text p {
            transform: translateX(3px);
        }

        /* Active state styles */
        .menu-item.active .menu-link {
            background-color: rgba(255, 215, 0, 0.05);
            border-left: 3px solid #FFD700;
        }
    </style>

    <div style="z-index: 0" class="w-full z-0 mx-auto py-3 px-2 sm:px-3">
        <div class="settings-card bg-white rounded-xl overflow-hidden">
            <!-- Settings Menu -->
            <div class="settings-body">
                <ul class="settings-menu list-none p-0 m-0">
                    <!-- Profile -->
                    <li class="menu-item border-b border-gray-100">
                        <a href="{{ route('my-profile', ['view' => 'profile']) }}" class="menu-link d-flex items-center py-4 px-4 text-gray-800 no-underline relative hover:bg-gray-50">
                            <div class="menu-icon flex items-center justify-center min-w-12 h-12 bg-amber-50 rounded-lg text-amber-400 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                            </div>
                            <div class="menu-text flex-1 ml-4 pr-5">
                                <h5 class="m-0 text-base font-semibold">My Profile</h5>
                                <p class="mt-1 mb-0 text-sm text-gray-500">View and update your personal information</p>
                            </div>
                        </a>
                    </li>

                    <!-- KYC -->
                    <li class="menu-item border-b border-gray-100">
                        <a href="{{ route('profile.show', ['view'=>'kyc']) }}" class="menu-link d-flex items-center py-4 px-4 text-gray-800 no-underline relative hover:bg-gray-50">
                            <div class="menu-icon flex items-center justify-center min-w-12 h-12 bg-amber-50 rounded-lg text-amber-400 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                                </svg>
                            </div>
                            <div class="menu-text flex-1 ml-4 pr-5">
                                <h5 class="m-0 text-base font-semibold">KYC Information</h5>
                                <p class="mt-1 mb-0 text-sm text-gray-500">Manage your verification documents</p>
                            </div>
                        </a>
                    </li>

                    <!-- Support -->
                    <li class="menu-item">
                        <a href="{{ route('profile.show', ['view'=>'issue']) }}" class="menu-link d-flex items-center py-4 px-4 text-gray-800 no-underline relative hover:bg-gray-50">
                            <div class="menu-icon flex items-center justify-center min-w-12 h-12 bg-amber-50 rounded-lg text-amber-400 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                    <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                </svg>
                            </div>
                            <div class="menu-text flex-1 ml-4 pr-5">
                                <h5 class="m-0 text-base font-semibold">Support (Report Issue)</h5>
                                <p class="mt-1 mb-0 text-sm text-gray-500">Get help with any problems you encounter</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>