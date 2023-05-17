<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/invoice.css') }}">
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
					<li><a href="/kuisioner">Kuisioner</a></li>
					<li><a href="/login">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>

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
    <footer class="footer">
        <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </footer>
</body>
</html>