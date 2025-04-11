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
                    My Transactions
                </h4>
            </div>
            <div class="settings-body">
                <ul class="settings-menu">
                    <li class="menu-item">
                        <a href="{{ route('transaction.item', ['view'=>'payments']) }}" class="menu-link" style="display: flex">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                    <path d="M2 11V9h1.5a1.5 1.5 0 0 1 0 3H2v-1h1.5a.5.5 0 0 0 0-1H2Z"/>
                                    <path d="M5.5 7a.5.5 0 0 1 .5.5V8h1V7.5a.5.5 0 0 1 1 0V8h1v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1H10v.5a.5.5 0 0 1-1 0V9H8v.5a.5.5 0 0 1-1 0V9H6.5a.5.5 0 0 1 0-1H7v-.5a.5.5 0 0 1 .5-.5ZM0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3H0V4Zm0 4h16v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8Zm11 1a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/>
                                  </svg>

                            </div>
                            <div class="menu-text">
                                <h5>Loan Repayment</h5>
                                <p>Monitor and make payments towards your loan balance, including interest and due dates.</p>
                            </div>

                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('transaction.item', ['view'=>'transfers']) }}" class="menu-link" style="display: flex">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 0-.708.708L9.293 4H1.5a.5.5 0 0 0 0 1h7.793L7.646 6.646a.5.5 0 0 0 .708.708l2.5-2.5a.5.5 0 0 0 0-.708l-2.5-2.5ZM7.646 14.354a.5.5 0 0 0 .708-.708L6.707 12H14.5a.5.5 0 0 0 0-1H6.707l1.647-1.646a.5.5 0 0 0-.708-.708l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5Z"/>
                                  </svg>

                            </div>
                            <div class="menu-text">
                                <h5>Transfer Funds</h5>
                                <p>Send money to other accounts or wallets quickly and securely.</p>
                            </div>

                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('transaction.item', ['view'=>'investments']) }}" class="menu-link"  style="display: flex">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm14.979 3.979l-3.5 4-3-3-4 5L1.5 8.5l-.707.707 3.5 3.5 4-5 3 3 4.5-5.5-.814-.728z"/>
                                  </svg>

                            </div>
                            <div class="menu-text">
                                <h5>Investments</h5>
                                <p>Explore opportunities to grow your money through smart investments.</p>
                            </div>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
