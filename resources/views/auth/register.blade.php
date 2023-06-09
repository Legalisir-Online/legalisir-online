<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" href="{{ asset('css/logindkk.css') }}">
</head>


<body>
    <div class="logo">
        <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
    </div>
    <div class="container">
        <div class="image-wrapper">
            <img src="{{ asset('images/ppl.png') }}" alt="ppl">
            <div class="group-overlay">
                <div class="overlay">
                    <a href="/login">
                        <p>Log In</p>
                    </a>
                </div>
                <div class="overlay overlay-active">
                    <a href="/register">
                        <p>Register</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="login-box">
            <div class="form">
                <h2>Register Account</h2>
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input id="name" type="text" name="name" placeholder="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <input id="email" type="email" name="email" placeholder="email" :value="old('email')"
                            required autocomplete="username" />
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" name="password" placeholder="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="form-group">
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="password_confirmation" required autocomplete="new-password" />
                    </div>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="form-group">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <div class="form-group">
                        <button type="submit">Register</a></button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
