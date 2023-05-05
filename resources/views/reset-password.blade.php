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
