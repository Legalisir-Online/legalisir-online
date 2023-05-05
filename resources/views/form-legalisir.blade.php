<!DOCTYPE html>
<html>
<head>
	<title>Sistem Legalisir Online</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/form-legalisir.css') }}">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar">
		<div class="navbar-logo">
			<a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Ajuan</a>
			</li>
			<li class="nav-item">
				<a href="/login" class="nav-link">Profile</a>
			</li>
		</ul>
	</nav>

	<!-- Body -->
	<div class="title">
		<h1>Formulir pengajuan legalisir online</h1>
	</div>

    <div class="container">
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
            <select id="pekspedisi" name="pilihekspedisi">
            <option value="jne">JNE</option>
            <option value="pos indonesia">POS Indonesia</option>
            <option value="tiki">Tiki</option>
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