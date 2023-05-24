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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/status-ajuan2.css') }}">
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
		<h5>Status pengajuan berkas ID : NBH-29298</h5>
	</div>

   <div class="status">
      <div class="container">
         <div class="col"><p>Berkas telah diterima admin prodi</p></div>
         <div class="col1">
            <img src="{{ asset('images/icons/check.png') }}" alt="check">
            <b><p>Passed</p></b>
         </div>
      </div>
      <div class="container">
         <div class="col"><p>Berkas sedang direview oleh admin</p></div>
         <div class="col1">
            <img src="{{ asset('images/icons/check.png') }}" alt="check">
            <b><p>Passed</p></b>
         </div>
      </div>
      <div class="container">
         <div class="col"><p>Berkas telah dilegalisir</p></div>
         <div class="col1">
            <img src="{{ asset('images/icons/check.png') }}" alt="check">
            <b><p>Passed</p></b>
         </div>
      </div>
      <div class="container">
         <div class="col"><p>Berkas sedang dalam pengiriman</p></div>
         <div class="col1">
            <img src="{{ asset('images/icons/check.png') }}" alt="check">
            <b><p>Passed</p></b>
         </div>
      </div>
      <div class="container">
         <div class="col"><p>Berkas telah diterima</p></div>
         <div class="col3">
            <img src="{{ asset('images/icons/pending.png') }}" alt="pending">
            <b><p>Pending</p></b>
         </div>
      </div>  
   </div> 

   <div class="col4">
            <input type="checkbox"/> 
               <b><p>Berkas diterima</p></b>
            </input>
      </div>

   <div class="icon">
		<img src="{{ asset('images/ajuan.png') }}" alt="Alumni" width="250px" height="auto">
	</div>

   <!-- Footer -->
    <div class="footer">
    <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </div>
</body>
</html>