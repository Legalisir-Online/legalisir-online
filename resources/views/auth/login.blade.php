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
                <div class="overlay overlay-active">
                    <a href="/login">
                        <p>Log In</p>
                    </a>
                </div>
                <div class="overlay">
                    <a href="/register">
                        <p>Register</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="login-box">
            {{-- <x-guest-layout> --}}

            

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="form">
                <h2>Login Account</h2>
                <x-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input id="email" type="email" name="email" placeholder="email" :value="old('email')"
                            required autofocus autocomplete="username" />
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" name="password" placeholder="password" required
                            autocomplete="current-password" />
                    </div>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    @if (session('show_captcha'))
                        <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }} row mb-3">
                            <label for="CaptchaCode" class="col-md-4 col-form-label text-md-end">Captcha</label>
                            <div class="col-md-6">
                                {!! captcha_image_html('ContactCaptcha') !!}
                                <input class="form-control" type="text" id="CaptchaCode" name="CaptchaCode"
                                    style="margin-top:5px;">
                                @if ($errors->has('CaptchaCode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CaptchaCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                    @endif

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-black-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <div class="form-group">
                            <button type="submit">Login</button>
                           
                        </div>
                    </div>
                </form>
            </div>
            {{-- </x-guest-layout> --}}
        </div>
    </div>
</body>
