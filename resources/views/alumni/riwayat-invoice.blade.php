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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/invoice.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
@include('alumni.includes.navbar')

    <div class="container">
        <div class="overlay">
            <h1>Invoice</h1>
        </div> 
        <div class="info">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>: [Nama Mahasiswa]</td>
                </tr>
                <tr>
                    <td>NIM </td>
                    <td>: [Nomor Induk Mahasiswa]</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>: [Alamat Mahasiswa]</td>
                </tr>
            </table>
        </div> <hr>
        <div class="table">
            <table>
                <tr>
                    <th style="text-align: left; padding-left: 20px; ">Keterangan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tarif</th>
                </tr>
                <tr>
                    <td>Bekas Ijazah</td>
                    <td>1</td>
                    <td>XXXX</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>Bekas Transkrip Nilai</td>
                    <td>2</td>
                    <td>XXXX</td>
                    <td>XX</td>
                </tr>
            </table>
        </div> <hr>
        <div class="table">
            <table>
                <tr>
                    <td>Ongkos Kirim</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <td>XX</td>
                </tr>
            </table>
        </div> <hr>
        <div class="table">
            <table>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                    <td><b>Total</b></td>
                    <td></td><td></td><td></td>
                    <td>XX</td>
                </tr>
            </table> 
        </div> <hr>
        <div class="buttons">
            <a href="#"><button class="lunas-btn">Lunas</button></a>&nbsp;
            <img src="{{ asset('images/icons/download2.png') }}" alt="cancel" width="30px" height="30px" >
        </div>
    </div>
    @include('alumni.includes.footer')
</body>
</html>