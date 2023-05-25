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

    @include('alumni.includes.footer')
</body>

</html>
