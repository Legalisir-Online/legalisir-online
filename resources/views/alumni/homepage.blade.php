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
    <div class="homepage">
		<div class="icon">
		<img src="{{ asset('images/alumni.png') }}" alt="Alumni" width="250px" height="auto">
		</div>
        <div class="container">
		<h1>Selamat Datang di <br> SISTEM LEGALISIR ONLINE FATISDA UNS <br> <br> </h1>
            <div class="container-content">
                <h2>Sistem legalisir online merupakan sistem yang dibuat dengan tujuan memberikan kemudahan bagi alumni Fakulltas Teknologi Informasi dan Sains Data UNS untuk melakukan legalisir secara online</h2>
            </div>
			<br>
			<div class="button-ajukan">
				<a href="form-legalisir">Ajukan Legalisir<a\>
            </div>
        </div>
	</div>
</body>
</html>

@include('alumni.includes.footer')