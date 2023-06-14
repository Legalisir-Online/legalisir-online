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

            <div class="form">
                <h2>{{ __('Login Account') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input type="email" id="email" placeholder="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" placeholder="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <div class="space"></div>
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <p>{{ __('Forgot Your Password?') }}</p>
                            </a>
                        @endif
                        {{-- <a href="/forgot-password">
                            <p>lupa password?</p>
                        </a> --}}
                    </div>
                    <div class="form-group">
                        <button type="submit"><a href="/homepage">{{ __('Login') }}</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
