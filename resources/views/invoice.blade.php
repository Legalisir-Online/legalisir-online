<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/invoice.css') }}">
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
			<li class="nav-item">
				<a href="#" class="nav-link">Ajuan</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Profile</a>
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
                    <th>Keterangan</th>
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
                    <td>Total</td>
                    <td></td><td></td><td></td>
                    <td>XX</td>
                </tr>
            </table> 
        </div> <hr>
        <div class="payment">
            <div class="payment-item">
                <span>Dibayarkan kepada:
            </div>
            <div class="payment-item">
                <span>Nama Rekening:</span>
                <span>[Nama Rekening]</span>
            </div>
            <div class="payment-item">
                <span>Nomor Rekening:</span>
                <span>[Nomor Rekening]</span>
            </div>
        </div>
        <div class="buttons">
            <button class="bayar-btn">
                <span>Tagihan harap dibayar dalam 24 jam !</span><br>
                <span>Tanggal kadaluarsa :[Tenggat Waktu]</span>
            </button><br>
            <a href="#"><button class="batal-btn">Batalkan Legalisir</button></a>
            <a href="#"><button class="download-btn">Download Invoice</button></a>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </footer>
</body>
</html>