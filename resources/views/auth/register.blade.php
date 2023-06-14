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
                <h2>{{ __('Register Account') }}</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror"
                            name="nim" value="{{ old('nim') }}" required autocomplete="nim" placeholder="NIM"
                            autofocus>

                        @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required placeholder="email"
                            autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            placeholder="password" autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror"
                            name="date" required placeholder="Tanggal Lahir" placeholder="Tanggal Lahir">

                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <div class="form-group">
                        <button type="submit"><a href="/akun-terverifikasi">{{ __('Register') }}</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
