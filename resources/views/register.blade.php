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
        <img src="{{ asset('images/ppl.png') }}" alt="ppl">
        <div class="login-box">
            <h2>Register Account</h2>
            <form action="" method="POST">
                
                <div class="form-group">
                    <input type="text" name="nim" id="nim" placeholder="NIM" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="password" required>
                </div>
                <div class="form-group">
                    <input type="date" name="date" id="date" placeholder="Tanggal Lahir" required>
                </div>
                <div class="form-group">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
