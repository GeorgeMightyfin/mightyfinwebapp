<h1 style="font-size:3svh; color:#792db8 !important " class="text-white">
    @if (\Route::current())
        @php
            $routeName = \Route::currentRouteName();
            $formattedRouteName = str_replace('-', ' ', $routeName);
            $capitalizedRouteName = ucwords($formattedRouteName);
        @endphp


        @switch($capitalizedRouteName)
            @case('Profile.show')
                My Profile
                @break
            @case('Transaction.item')
                My Repayment Transactions
                @break
            @default
                {{ $capitalizedRouteName }}
        @endswitch
    @endif
</h1>