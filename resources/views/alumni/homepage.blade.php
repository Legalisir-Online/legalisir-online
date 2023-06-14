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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>


<body>
@include('alumni.includes.navbar')

  <section class="features">
    <div class="feature1">
      <img src="{{ asset('images/alumni.png') }}" alt="Alumni">
    </div>
    <div class="feature2">
        <h1>Selamat Datang</h1>
        <h1>SISTEM LEGALISIR ONLINE FATISDA UNIVERSITAS SEBELAS MARET</h1><br><br>
        
        <div class="feature2-content">
            <p>Sistem legalisir online merupakan sistem yang dibuat dengan tujuan memberikan kemudahan bagi alumni Fakulltas Teknologi Informasi dan Sains Data UNS untuk melakukan legalisir secara online.</p>
        </div>

        <br><br>
        <div class="button">
            <a href="#">Ajukan Legalisir</a>
        </div>
    </div>
  </section>
</body>
</html>

@include('alumni.includes.footer')