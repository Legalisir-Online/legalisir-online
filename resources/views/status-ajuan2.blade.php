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
			<img src="{{ asset('images/logo.png') }}" alt="Logo">
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="/homepage" class="nav-link">Home</a>
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
         <!-- <label class="col4"> Berkas diterima
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
         </label> -->
      </div>
      
      <div class="container1">
            <input type="checkbox">
            <span class="checkmark"></span>
            <b><p>Berkas diterima</p></b>
        </div>
         
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