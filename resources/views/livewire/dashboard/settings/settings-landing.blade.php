<div x-data="{ on:true }" class="content-body">
    <style>
        .settings-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 0;
        }

        .settings-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            background-color: #fff;
            margin-bottom: 20px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .settings-header {
            background: linear-gradient(135deg, #6a3093 0%, #6f3093 100%);
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .settings-title {
            color: #ffffff;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }

        .settings-title svg {
            filter: drop-shadow(0 3px 5px rgba(0, 0, 0, 0.2));
        }

        .settings-body {
            padding: 0;
        }

        .settings-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            width: 100%;
            transition: all 0.25s ease;
            position: relative;
        }

        .menu-link {
            display: flex;
            align-items: center;
            padding: 22px 24px;
            color: #333;
            text-decoration: none;
            gap: 20px;
            transition: all 0.3s ease;
            position: relative;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            width: 100%;
        }

        .menu-link:hover {
            background-color: #f9fafb;
            color: #333;
            padding-left: 32px;
        }

        .menu-link:after {
            content: "";
            position: absolute;
            right: 24px;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            width: 8px;
            height: 8px;
            border-top: 2px solid #ddd;
            border-right: 2px solid #ddd;
            transition: all 0.3s ease;
        }

        .menu-link:hover:after {
            border-color: #FFD700;
            right: 20px;
        }

        .menu-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 56px;
            height: 56px;
            background-color: rgba(255, 215, 0, 0.12);
            border-radius: 14px;
            color: #FFD700;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(255, 215, 0, 0.1);
        }

        .menu-link:hover .menu-icon {
            background-color: rgba(255, 215, 0, 0.18);
            transform: scale(1.08) rotate(3deg);
            box-shadow: 0 8px 16px rgba(255, 215, 0, 0.15);
        }

        .menu-text {
            flex: 1;
            padding-right: 20px;
        }

        .menu-text h5 {
            margin: 0;
            font-size: 1.15rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .menu-link:hover .menu-text h5 {
            transform: translateX(5px);
        }

        .menu-text p {
            margin: 6px 0 0;
            color: #666;
            font-size: 0.9rem;
            opacity: 0.85;
            transition: all 0.3s ease;
        }

        .menu-link:hover .menu-text p {
            opacity: 1;
            transform: translateX(5px);
        }

        /* Active state */
        .menu-item.active .menu-link {
            background-color: rgba(255, 215, 0, 0.05);
            border-left: 4px solid #FFD700;
            padding-left: 28px;
        }

        .menu-item.active .menu-icon {
            background-color: rgba(255, 215, 0, 0.2);
            transform: scale(1.05);
        }

        .menu-item.active .menu-text h5 {
            color: #333;
            font-weight: 700;
        }

        /* Responsive styles */
        @media (max-width: 767px) {
            .settings-header {
                padding: 1.2rem 1.2rem;
            }

            .settings-title {
                font-size: 1.3rem;
            }

            .menu-link {
                padding: 18px 16px;
            }

            .menu-icon {
                width: 48px;
                height: 48px;
                min-width: 48px;
            }

            .menu-text h5 {
                font-size: 1rem;
            }
        }
    </style>

    <div class="settings-container">
        <div class="settings-card">
            <div class="settings-header">
                <h4 class="settings-title">
                    <svg width="28" height="28" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#FFD700" stroke="#FFD700" stroke-width="7.68">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#FFD700" d="M87 32v71h18V32H87zm160 0v345h18V32h-18zm160 0v167h18V32h-18zM50 121c-5.14 0-9 3.9-9 9v28c0 5.1 3.86 9 9 9h92c5.1 0 9-3.9 9-9v-28c0-5.1-3.9-9-9-9H50zm37 64v295h18V185H87zm283 32c-5.1 0-9 3.9-9 9v28c0 5.1 3.9 9 9 9h92c5.1 0 9-3.9 9-9v-28c0-5.1-3.9-9-9-9h-92zm37 64v199h18V281h-18zM210 395c-5.1 0-9 3.9-9 9v28c0 5.1 3.9 9 9 9h92c5.1 0 9-3.9 9-9v-28c0-5.1-3.9-9-9-9h-92zm37 64v21h18v-21h-18z"/>
                        </g>
                    </svg>
                    My Settings
                </h4>
            </div>
            <div class="settings-body">
                <ul class="settings-menu">
                    <li class="menu-item">
                        <a href="{{ route('profile.show', ['view'=>'profile']) }}" class="menu-link" style="display: flex">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                            </div>
                            <div class="menu-text">
                                <h5>My Profile</h5>
                                <p>View and update your personal information</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('profile.show', ['view'=>'kyc']) }}" class="menu-link" style="display: flex">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                                </svg>
                            </div>
                            <div class="menu-text">
                                <h5>KYC Information</h5>
                                <p>Manage your verification documents</p>
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('profile.show', ['view'=>'issue']) }}" class="menu-link"  style="display: flex">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                    <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                </svg>
                            </div>
                            <div class="menu-text">
                                <h5>Support (Report Issue)</h5>
                                <p>Get help with any problems you encounter</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>