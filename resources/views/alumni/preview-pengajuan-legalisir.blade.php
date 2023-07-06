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
        @foreach ($alumnis as $alumni)
            <div class="flex-column" style="width: 200px">
                <span>Nama</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $alumni->nama }}</span>
            </div>
        </div>

        <div class="flex-row">
        @foreach ($users as $user)
            <div class="flex-column" style="width: 200px">
                <span>NIM</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $user->nim }}</span>
            </div>
        </div>
        @endforeach

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>No. HP</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $alumni->nomor_wa }}</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Alamat</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $alumni->alamat }}</span>
            </div>
        </div>
        @endforeach

        <div class="flex-row">
        @foreach ($transaksis as $transaksi)
            <div class="flex-column" style="width: 200px">
                <span>Berkas yang dilegalisir</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $transaksi->id_dokumen }}</span>
            </div>
        </div>
        

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Jumlah berkas dilegalisir</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $transaksi->jumlah_berkas }}</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Pengambilan berkas</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $transaksi->pengambilan_berkas }}</span>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-column" style="width: 200px">
                <span>Ekspedisi</span>
            </div>
            <div class="flex-column">
                <span>:  {{ $transaksi->ekspedisi }}</span>
            </div>
        </div>
        @endforeach

        <input type="submit" value="Ajukan Legalisir">

    </div>

    
</body>
@include('alumni.includes.footer')
</html>