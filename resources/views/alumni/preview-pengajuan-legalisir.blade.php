<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/homepage" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle">Ajuan</a>
				<ul class="dropdown-menu">
					<li><a href="/status-ajuan1">Status Ajuan</a></li>
					<li><a href="/riwayat-ajuan">Riwayat Ajuan</a></li>
					<li><a href="/invoice">Invoice</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle">Profile</a>
				<ul class="dropdown-menu">
					<li><a href="/biodata">Biodata</a></li>
					<li><a href="/kuesioner">Kuesioner</a></li>
					<li><a href="/login">Logout</a></li>
				</ul>
			</li>
        </ul>
    </nav>

    <!-- Body -->
    <div class="title">
        <h1>Preview Pengajuan</h1>
    </div>

    <div class="container2">
        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Nama</span>
            </div>
            <div class="flex-column">
                <span>:  Akajsdnkjnx Pxcjknb</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>NIM</span>
            </div>
            <div class="flex-column">
                <span>:  M0520000</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>No. HP</span>
            </div>
            <div class="flex-column">
                <span>:  1234567890</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Alamat</span>
            </div>
            <div class="flex-column">
                <span>:  jalan jalan jalan no 7, dimana aja, 50502</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Berkas yang dilegalisir</span>
            </div>
            <div class="flex-column">
                <span>:  Ijazah & transkrip nilai</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Jumlah berkas dilegalisir</span>
            </div>
            <div class="flex-column">
                <span>:  5</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Pengambilan berkas</span>
            </div>
            <div class="flex-column">
                <span>:  Dikirim</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Ekspedisi</span>
            </div>
            <div class="flex-column">
                <span>:  JNE</span>
            </div>
        </div>

        <input type="submit" value="Ajukan Legalisir">

    </div>

    <div class="footer">
        <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </div>
</body>

</html>
