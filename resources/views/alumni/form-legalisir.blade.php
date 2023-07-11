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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>
<body>
@include('alumni.includes.navbar')

	<!-- Body -->
	<div class="title">
		<h1>Formulir pengajuan legalisir online</h1>
	</div>

    <div class="container" >
        <form action="{{ route('legalisir.ajuan') }}" method="POST">
            @csrf
            <label for="pberkas">Pilih berkas yang di legalisir :</label> <br>
            <select id="pberkas" name="jenis" >
                <option value="Ijazah">Ijazah</option>
                <option value="Transkrip">Transkrip nilai</option>
            </select>

            <label for="cberkas">Cetak berkas</label> <br>
            <select id="cberkas" name="cetakberkas">
                <option value="cetak sendiri">Cetak sendiri</option>
                <option value="dicetak oleh prodi">Dicetak oleh prodi</option>
            </select>

            <label for="jumlah">Jumlah</label> <br>
                <input type="number" min="1" max="5" name="jumlah" /><br>

                <label for="pengberkas">Pengambilan berkas :</label> <br> <br>
                    <input type="radio" name="pengambilan_berkas" value="kirim_berkas" onclick="toggleEkspedisi(this)" /> Kirim berkas <br> <br>
                    <input type="radio" name="pengambilan_berkas" value="cetak_berkas" onclick="toggleEkspedisi(this)" /> Cetak berkas <br> <br>

            <label for="pekspedisi">Pilih ekspedisi</label> <br>
            <select id="pekspedisi" name="pilihekspedisi" disabled>
                <option value="jne">JNE</option>
                <option value="pos indonesia">POS Indonesia</option>
                <option value="tiki">TIKI</option>
            </select>
            <input type="submit" value="Ajukan Legalisir">

        </form>

    </div>

    @include('alumni.includes.footer')
</body>
<script>
        function toggleEkspedisi(radioButton) {
            var ekspedisiSelect = document.getElementById("pekspedisi");
            ekspedisiSelect.disabled = (radioButton.value === "cetak_berkas");
        }
    </script>
</html>
