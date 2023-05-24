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
		<h1>Formulir pengajuan legalisir online</h1>
	</div>

    <div class="container" >
        <form action="action_page.php">

            <label for="pberkas">Pilih berkas yang di legalisir :</label> <br>
            <select id="pberkas" name="pilihberkas" >
                <option value="ijazah">Ijazah</option>
                <option value="transkrip nilai">Transkrip nilai</option>
                <option value="ijazah & transkrip nilai">Ijazah & Transkrip nilai</option>
            </select>

            <label for="cberkas">Cetak berkas</label> <br>
            <select id="cberkas" name="cetakberkas">
                <option value="cetak sendiri">Cetak sendiri</option>
                <option value="dicetak oleh prodi">Dicetak oleh prodi</option>
            </select> 

            <label for="jumlah">Jumlah</label> <br>
                <input type="number" min="1" max="5" name="jumlah" /><br> 

            <label for="pengberkas">Pengambilan berkas :</label> <br> <br>
                <input type="radio" name="pengambilan_berkas" value="kirim berkas" /> Kirim berkas</label> <br> <br>
                <input type="radio" name="pengambilan_berkas" value="cetak berkas" /> Cetak berkas</label> <br> <br>

            <label for="pekspedisi">Pilih ekspedisi</label> <br>
            <select id="pekspedisi" name="pilihekspedisi" disabled>
                <option value="jne">JNE</option>
                <option value="pos indonesia">POS Indonesia</option>
                <option value="tiki">TIKI</option>
            </select> 
            <input type="submit" value="Ajukan Legalisir">

        </form>
        
    </div>

    <div class="footer">
    <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </div>
</body>
</html>