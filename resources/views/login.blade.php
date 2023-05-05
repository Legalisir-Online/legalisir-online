<!DOCTYPE html>
<html lang="en">

<head>
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
                <h2>Login Account</h2>
                <form action="" method="POST">

                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <a href="/forgot-password">
                            <p>lupa password?</p>
                        </a>
                    </div>
                    <div class="form-group">
                        <button type="submit"><a href="/homepage">Login</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
