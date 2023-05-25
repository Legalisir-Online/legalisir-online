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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form-legalisir.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>



<body style="background-color: white !important;">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/flow" class="nav-link">Flow</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
        </ul>
    </nav>
    <img src="../images/flow.png" style="max-width: 100%;
    height: auto;"
        alt="Flow pengajuan legalisir">
</body>
</html>
@include('alumni.includes.footer')
