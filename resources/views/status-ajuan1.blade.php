<!DOCTYPE html>
<html>
<head>
	<title>Sistem Legalisir Online</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/status-ajuan1.css') }}">
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
		<h5>Status pengajuan berkas ID : NBH-29298</h5>
	</div>

    <div class="status">

        <div class="container">
           <div class="col"><p>Berkas telah diterima admin prodi</p></div>
           <div class="col1"><b><p>Passed</p></b></div>
        </div>
        <div class="container">
           <div class="col"><p>Berkas sedang direview oleh admin</p></div>
           <div class="col1"><b><p>Passed</p></b></div>
        </div>
        <div class="container">
           <div class="col"><p>Berkas telah dilegalisir</p></div>
           <div class="col2"><b><p>Failed</p></b></div>
           <div class="error"><p>Berkas yang Anda Ajukan Tidak Valid, Silahkan lakukan upload berkas kembali!</p></div>
        </div>
        <div class="container">
           <div class="col"><p>Berkas sedang dalam pengiriman</p></div>
           <div class="col3"><b><p>Pending</p></b></div>
        </div>
        <div class="container">
           <div class="col"><p>Berkas telah diterima</p></div>
           <div class="col3"><b><p>Pending</p></b></div>
        </div>
        
    </div>


    <div class="footer">
    <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </div>
</body>
</html>