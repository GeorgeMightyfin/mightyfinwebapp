<x-jet-action-section class="card profile-card card-bx pt-4">
    <div class="card-header pt-3">
        <x-slot name="title">
            {{ __('') }}
        </x-slot>

        <x-slot name="description">
            {{ __('') }}
        </x-slot>
    <div>
    <x-slot name="content">
        <!-- Security Settings Container -->
        <div class="container-fluid p-0">
            <div class="row">
                <!-- Left Column: Update Credentials -->
                <div class="col-xxl-6 col-xl-6 col-lg-6 mb-4">
                    <div class="card security-card shadow-sm">
                        <div class="card-header d-flex align-items-center bg-light">
                            <i class="fas fa-lock text-primary me-3"></i>
                            <h4 class="card-title mb-0">Update Credentials</h4>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">New Email</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text bg-light">
                                                <i class="fas fa-envelope text-muted"></i>
                                            </span>
                                            <input
                                                type="email"
                                                class="form-control"
                                                placeholder="Enter new email address"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">New Password</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text bg-light">
                                                <i class="fas fa-key text-muted"></i>
                                            </span>
                                            <input
                                                type="password"
                                                class="form-control"
                                                placeholder="Enter new password"
                                            />
                                        </div>
                                        <small class="text-muted mt-2 mb-0 d-block">
                                            <i class="fas fa-shield-alt me-1"></i> Enable two factor authentication on the security page
                                        </small>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button class="btn btn-success px-4 waves-effect">
                                            <i class="fas fa-save me-2"></i> Save Changes
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Sessions Management -->
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="card security-card shadow-sm">
                        <div class="card-header d-flex align-items-center bg-light">
                            <i class="fas fa-shield-alt text-primary me-3"></i>
                            <h4 class="card-title mb-0">Browser Sessions</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info p-3 mb-4">
                                <i class="fas fa-info-circle me-2"></i>
                                <span class="text-sm">
                                    {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
                                </span>
                            </div>

                            @if (count($this->sessions) > 0)
                                <div class="mt-4 mb-4">
                                    <!-- Other Browser Sessions -->
                                    @foreach ($this->sessions as $session)
                                        <div class="d-flex align-items-center p-3 mb-3 border rounded @if ($session->is_current_device) bg-light @endif">
                                            <div class="me-3">
                                                @if ($session->agent->isDesktop())
                                                    <svg style="width: 2rem" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500">
                                                        <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                @else
                                                    <svg style="width: 2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500">
                                                        <path d="M0 0h24v24H0z" stroke="none"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><path d="M11 5h2M12 17v.01"></path>
                                                    </svg>
                                                @endif
                                            </div>

                                            <div class="flex-grow-1">
                                                <div class="fw-medium">
                                                    {{ $session->agent->platform() ? $session->agent->platform() : 'Unknown' }} - {{ $session->agent->browser() ? $session->agent->browser() : 'Unknown' }}
                                                </div>

                                                <div class="text-muted small">
                                                    {{ $session->ip_address }},

                                                    @if ($session->is_current_device)
                                                        <span class="badge bg-success">{{ __('This device') }}</span>
                                                    @else
                                                        {{ __('Last active') }} {{ $session->last_active }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="d-flex mt-4">
                                <x-jet-button wire:click="confirmLogout" wire:loading.attr="disabled" class="btn btn-primary d-flex align-items-center justify-content-center">
                                    <i class="fas fa-sign-out-alt me-2"></i>
                                    {{ __('Log Out Other Browser Sessions') }}
                                </x-jet-button>

                                <x-jet-action-message class="btn btn-light ms-3" on="loggedOut">
                                    {{ __('Done.') }}
                                </x-jet-action-message>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingLogout">
            <x-slot name="title">
                <div class="d-flex align-items-center">
                    <i class="fas fa-sign-out-alt text-primary me-2"></i>
                    {{ __('Log Out Other Browser Sessions') }}
                </div>
            </x-slot>

            <x-slot name="content">
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    {{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}
                </div>

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    <div class="input-group">
                        <span class="input-group-text bg-light">
                            <i class="fas fa-lock text-muted"></i>
                        </span>
                        <x-jet-input type="password" class="form-control input-default"
                                    placeholder="{{ __('Password') }}"
                                    x-ref="password"
                                    wire:model.defer="password"
                                    wire:keydown.enter="logoutOtherBrowserSessions" />
                    </div>

                    <x-jet-input-error for="password" class="mt-2 text-danger" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <div class="d-flex justify-content-end">
                    <x-jet-secondary-button wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled" class="btn btn-light me-2">
                        {{ __('Cancel') }}
                    </x-jet-secondary-button>

                    <x-jet-button class="btn-primary"
                                wire:click="logoutOtherBrowserSessions"
                                wire:loading.attr="disabled">
                        <i class="fas fa-sign-out-alt me-2"></i>
                        {{ __('Log Out Other Browser Sessions') }}
                    </x-jet-button>
                </div>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>

<!-- Additional styles -->
<style>
    .security-card {
        transition: all 0.3s;
        border-radius: 0.5rem;
        overflow: hidden;
        height: 100%;
    }
    .security-card:hover {
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .card-header {
        border-bottom: 1px solid rgba(0,0,0,.125);
    }
    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    .btn-primary:hover {
        background-color: #2e59d9;
        border-color: #2653d4;
    }
    .btn-success {
        background-color: #1cc88a;
        border-color: #1cc88a;
    }
    .btn-success:hover {
        background-color: #17a673;
        border-color: #169b6b;
    }
    .text-primary {
        color: #4e73df !important;
    }
    .bg-light {
        background-color: #f8f9fc !important;
    }
    .badge.bg-success {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
</style>

<!-- Include Font Awesome from CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">