

<div class="mb-5 col-12">
    <div class="mb-4 d-flex align-items-center justify-content-between">
        <h4 class="mb-0 fw-bold text-primary">
            <i class="bi bi-lightning-fill me-2"></i>Quick Actions
        </h4>
        <span class="px-3 py-2 badge -subtle text-primary rounded-pill">Essentials</span>
    </div>

    <div class="flex-wrap gap-3 quick-actions d-flex justify-content-between w-100">
        <a href="{{ route('profile.show', ['view' => 'kyc']) }}" style="background-color: rgba(106, 48, 147, 0.85); border-radius:1rem" class="p-3 text-center text-white action-item d-flex flex-column align-items-center flex-fill text-decoration-none" >
            <div class="mb-2 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                </svg>
            </div>
            <span class="fw-medium">Complete KYC</span>
            <span class="top-0 position-absolute start-100 translate-middle badge rounded-pill bg-danger">!</span>
        </a>
        
        @if ($my_loan == null)
        <a href="{{ route('new-loan') }}" style="background-color: rgba(106, 48, 147, 0.85); border-radius:1rem" class="p-3 text-center text-white action-item d-flex flex-column align-items-center flex-fill text-decoration-none">
            <div class="mb-2 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.5.5 0 0 1-.485.62H.5a.5.5 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                </svg>
            </div>
            <span class="fw-medium">Apply for Loan</span>
        </a>
        @endif

        <a style="background-color: rgba(106, 48, 147, 0.85); border-radius:1rem" class="p-3 text-center text-white action-item d-flex flex-column align-items-center flex-fill text-decoration-none " href="#">
            <div class="mb-2 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1z"/>
                </svg>
            </div>
            <span class="fw-medium">Payment Methods</span>
        </a>

        <a href="{{ route('profile.show', ['view'=>'profile']) }}" style="background-color: rgba(106, 48, 147, 0.85); border-radius:1rem" class="p-3 text-center text-white action-item d-flex flex-column align-items-center flex-fill text-decoration-none " href="#">
            <div class="mb-2 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1z"/>
                </svg>
            </div>
            <span class="fw-medium">Support</span>
        </a>
    </div>
</div>
