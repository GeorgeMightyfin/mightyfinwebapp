<div x-data="{ on:true }" class="content-body bg-gray-50">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles that enhance Tailwind - Matched with first design */
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
        <div class="rounded-xl overflow-hidden bg-white shadow-md">
            <!-- Menu Items -->
            <div class="settings-body">
                <ul class="list-none p-0 m-0">
                    <!-- Loan Repayment -->
                    <li class="menu-item border-b border-gray-100">
                        <a href="{{ route('transaction.item', ['view'=>'payments']) }}" class="menu-link d-flex items-center py-4 px-4 text-gray-800 no-underline relative hover:bg-gray-50">
                            <div class="menu-icon flex items-center justify-center min-w-12 h-12 bg-amber-50 rounded-lg text-amber-400 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                    <path d="M2 11V9h1.5a1.5 1.5 0 0 1 0 3H2v-1h1.5a.5.5 0 0 0 0-1H2Z"/>
                                    <path d="M5.5 7a.5.5 0 0 1 .5.5V8h1V7.5a.5.5 0 0 1 1 0V8h1v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1H10v.5a.5.5 0 0 1-1 0V9H8v.5a.5.5 0 0 1-1 0V9H6.5a.5.5 0 0 1 0-1H7v-.5a.5.5 0 0 1 .5-.5ZM0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3H0V4Zm0 4h16v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8Zm11 1a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <div class="menu-text flex-1 ml-4 pr-5">
                                <h5 class="m-0 text-base font-semibold">Loan Repayment</h5>
                                <p class="mt-1 mb-0 text-sm text-gray-500">Monitor and make payments towards your loan balance, including interest and due dates.</p>
                            </div>
                        </a>
                    </li>

                    <!-- Transfer Funds -->
                    <li class="menu-item border-b border-gray-100">
                        <a href="{{ route('transaction.item', ['view'=>'transfers']) }}" class="menu-link d-flex items-center py-4 px-4 text-gray-800 no-underline relative hover:bg-gray-50">
                            <div class="menu-icon flex items-center justify-center min-w-12 h-12 bg-amber-50 rounded-lg text-amber-400 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 0-.708.708L9.293 4H1.5a.5.5 0 0 0 0 1h7.793L7.646 6.646a.5.5 0 0 0 .708.708l2.5-2.5a.5.5 0 0 0 0-.708l-2.5-2.5ZM7.646 14.354a.5.5 0 0 0 .708-.708L6.707 12H14.5a.5.5 0 0 0 0-1H6.707l1.647-1.646a.5.5 0 0 0-.708-.708l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5Z"/>
                                </svg>
                            </div>
                            <div class="menu-text flex-1 ml-4 pr-5">
                                <h5 class="m-0 text-base font-semibold">Transfer Funds</h5>
                                <p class="mt-1 mb-0 text-sm text-gray-500">Send money to other accounts or wallets quickly and securely.</p>
                            </div>
                        </a>
                    </li>

                    <!-- Investments -->
                    <li class="menu-item">
                        <a href="{{ route('transaction.item', ['view'=>'investments']) }}" class="menu-link d-flex items-center py-4 px-4 text-gray-800 no-underline relative hover:bg-gray-50">
                            <div class="menu-icon flex items-center justify-center min-w-12 h-12 bg-amber-50 rounded-lg text-amber-400 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm14.979 3.979l-3.5 4-3-3-4 5L1.5 8.5l-.707.707 3.5 3.5 4-5 3 3 4.5-5.5-.814-.728z"/>
                                </svg>
                            </div>
                            <div class="menu-text flex-1 ml-4 pr-5">
                                <h5 class="m-0 text-base font-semibold">Investments</h5>
                                <p class="mt-1 mb-0 text-sm text-gray-500">Explore opportunities to grow your money through smart investments.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>