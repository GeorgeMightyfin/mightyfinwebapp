<!-- Loan Requests Grid with Tailwind CSS -->
<div class="p-4 mb-4">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="w-full">
      <!-- Loop through loan requests -->
      @forelse($loan_requests as $loan)
        <div class="p-4 mb-2 transition-all bg-white rounded-lg shadow-md hover:shadow-lg animate-slide-fade">
          <div class="flex flex-col space-y-3 md:flex-row md:space-y-0">
            <!-- Left section with icon and loan details -->
            <div class="flex items-start space-x-3 md:w-3/5">
              <div class="text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                  <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                </svg>
              </div>
              <div class="flex flex-col">
                <div class="flex flex-wrap items-center gap-2">
                  <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                  <span class="font-bold text-gray-800">K{{ number_format($loan->amount, 2, '.', ',') }}</span>
                  
                  <!-- Status badge -->
                  @if($loan->status == 0 && $loan->closed == 0)
                  <span class="px-2 py-1 text-xs font-medium text-blue-800 bg-blue-100 rounded-full">
                    Pending Approval
                  </span>
                  @elseif($loan->status == 1 && $loan->closed == 0)
                  <span class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">
                    Active (Open)
                  </span>
                  @elseif($loan->status == 2 && $loan->closed == 0)
                  <span class="px-2 py-1 text-xs font-medium text-yellow-800 bg-yellow-100 rounded-full">
                    Under Review
                  </span>
                  @elseif($loan->status == 1 && $loan->closed == 1)
                  <span class="px-2 py-1 text-xs font-medium text-purple-800 bg-pink-100 rounded-full">
                    Closed & Repaid
                  </span>
                  @else
                  <span class="px-2 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">
                    Rejected
                  </span>
                  @endif
                </div>
                <p class="mt-1 text-sm text-gray-600">{{ $loan->loan_product->name }} Loan</p>
                <p class="mt-1 text-xs text-gray-500">Applied on {{ $loan->created_at->toFormattedDateString() }}</p>
              </div>
            </div>

            <!-- Middle section with repayment info -->
            <div class="md:w-1/5">
              <p class="text-xs text-gray-600">Payback in <span class="font-medium">{{ $loan->repayment_plan }}</span> Months</p>
            </div>

            <!-- Right section with action button -->
            <div class="justify-end md:w-1/5">
              <a class="btn bg-primary" href="{{ route('loan-details',['id' => $loan->id]) }}"
                 class="p-2 text-white transition-colors bg-blue-600 rounded-md hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="py-10 text-center col-span-full">
          <p class="text-gray-500">No loan requests found</p>
        </div>
      @endforelse
    </div>
  </div>

  <!-- Animation styles -->
  <style>
    @keyframes slide-fade-up {
      0% {
        transform: translateY(20px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .animate-slide-fade {
      opacity: 0;
      animation: slide-fade-up 0.5s ease-out forwards;
    }
  </style>

  <!-- Staggered animation script -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const cards = document.querySelectorAll(".animate-slide-fade");

      cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 150}ms`;
      });
    });
  </script>