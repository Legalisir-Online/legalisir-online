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
                    <p>Reset Password</p>
                </div>
            </div>
        </div>
        <div class="login-box">
            <div class="form">
                <h2>Reset Password</h2>
                <form action="" method="POST">

                    <div class="form-group">
                        <input type="password" name="new-password" id="new-password" placeholder="password baru"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="konfirm-password" id="konfirm-password"
                            placeholder="konfirmasi password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit"><a href="login">Reset</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
