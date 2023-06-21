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
  <link rel="stylesheet" href="{{ asset('css/aktivasi-akun.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <div class="logo">
    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
  </div>
  <div class="container">
    <img src="{{ asset('images/ppl.png') }}" alt="ppl">

    <div class="login-box">
      <i class="material-symbols-outlined">check_circle</i>
      <div class="card">
        <h4 class="verified">Selamat akun Anda telah aktif!</h4>
        <a href="/login" class="nav-link"><strong>Back to Login Page</strong></a>
      </div>
    </div>
  </div>
</body>

</html>
