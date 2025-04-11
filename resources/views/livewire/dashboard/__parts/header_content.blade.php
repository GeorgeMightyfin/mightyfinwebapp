@unless (request()->routeIs('dashboard'))
    <div  class="header" style="z-index: 999">
        <div style="margin-top:2svh" class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="header-content">
                        <div class="header-left">
                            <div class="page-title-content">
                                @include('livewire.dashboard.__parts.header-titles')
                            </div>
                        </div>

                        <div class="header-right">
                            <div class="dark-light-toggle" onclick="themeToggle()">
                                <span class="dark"><i class="bi bi-moon"></i></span>
                                <span class="light"><i class="bi bi-brightness-high"></i></span>
                            </div>
                            @include('livewire.dashboard.__parts.notifcations_part')
                            @include('livewire.dashboard.__parts.profile_part')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endunless
