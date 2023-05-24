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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/kuesioner.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
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

  <div class="container">
    <div class="container-head">
      Isi Kuesioner
    </div> <br> <br>

    <div class="content">
      <div class="content-pertanyaan">
        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
      </div>
      <div class="content-essay">
        <ul>
          <li><label for="radio-1">Sangat tidak Setuju</label> <input type="radio" name="opinions" id="radio-1" /> </li>
          <li><label for="radio-2">Tidak setuju</label> <input type="radio" name="opinions" id="radio-2" /> </li>
          <li><label for="radio-3">Netral</label> <input type="radio" name="opinions" id="radio-3" /> </li>
          <li><label for="radio-4">Setuju</label> <input type="radio" name="opinions" id="radio-4" /> </li>
          <li><label for="radio-5">Sangat setuju</label> <input type="radio" name="opinions" id="radio-5" /> </li>
          <ul>
            <!-- <input type="text" class="content-essay" placeholder="Jawaban"> -->
      </div>
    </div>
    <br>
    <div class="content">
      <div class="content-pertanyaan">
        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
      </div>
      <div class="content-essay">
        <ul>
          <li><label for="radio-1">Sangat tidak Setuju</label> <input type="radio" name="opinions" id="radio-1" /> </li>
          <li><label for="radio-2">Tidak setuju</label> <input type="radio" name="opinions" id="radio-2" /> </li>
          <li><label for="radio-3">Netral</label> <input type="radio" name="opinions" id="radio-3" /> </li>
          <li><label for="radio-4">Setuju</label> <input type="radio" name="opinions" id="radio-4" /> </li>
          <li><label for="radio-5">Sangat setuju</label> <input type="radio" name="opinions" id="radio-5" /> </li>
          <ul>
            <!-- <input type="text" class="content-essay" placeholder="Jawaban"> -->
      </div>
    </div>
    <br>
    <div class="content">
      <div class="content-pertanyaan">
        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
      </div>
      <div>
        <input type="text" class="content-essay" placeholder="Jawaban">
      </div>
    </div>
    <br>
    <div class="content">
      <div class="content-pertanyaan">
        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
      </div>
      <div>
        <input type="text" class="content-essay" placeholder="Jawaban">
      </div>
    </div>


    <!-- <div class="selesai">
      <button>Selesai</button>
    </div> -->
    <!-- <div class="content-pilihan">
      <table>
        <tr>
          <td>Sangat tidak setuju</td>
          <td>Tidak setuju</td>
          <td>Netral</td>
          <td>Setuju</td>
          <td>Sangat Setuju</td>
        </tr>
      </table>
      <input type="radio">
      <input type="radio">
      <input type="radio">
      <input type="radio">
      <input type="radio">
      <input type="radio">
    </div> -->
  </div>

</body>

<footer class="footer">
  <div class="footer-text">
    &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
  </div>
</footer>

</html>