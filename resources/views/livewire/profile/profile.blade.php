<div>
    <x-slot name="page_pretitle">
        {{ __('profile.header.page_pretitle') }}
    </x-slot>

    <x-slot name="page_title">
        {{ __('profile.header.page_title') }}
    </x-slot>

    <div class="container-xl">
        <div class="row">
            <div class="col">
                <x-status />
                <div class="content">
                    <div class="row row-cards">
                        <div class="col-12">

                            @if (session('status') === 'two-factor-authentication-enabled')
                                {{-- Show SVG QR Code, After Enabling 2FA --}}
                                <div class="alert alert-success" id="enable2fa">
                                    <p class="mb-2">
                                        {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                                    </p>
                                    <div>{!! auth()->user()->twoFactorQrCodeSvg() !!}</div>
                                </div>
                                <style>
                                    #enable2fa svg {
                                        border: 10px solid #fff;
                                    }
                                </style>
                            @endif

                            @include('livewire.profile.update-user-avatar')

                            @include('livewire.profile.update-profile-information-form')

                            @include('livewire.profile.update-password-form')

                            @include('livewire.profile.browser-sessions')

                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
                                @include('livewire.profile.two-factor-authentication-form')
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
