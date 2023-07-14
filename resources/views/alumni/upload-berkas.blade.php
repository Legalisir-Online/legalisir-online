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
  <link rel="stylesheet" href="{{ asset('css/upload-berkas.css') }}">
</head>

<body>
  <h1>UNGGAH DOKUMEN</h1>
  <form action="{{ route('legalisir.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="box-container">
      <div class="box">
        <h2>Unggah Ijazah</h2>
        <div class="form-group">
          <label for="nama" class="judul">Nama Dokumen</label>
          <input type="text" name="nama_ijazah" id="nama">
        </div>
        <div class="form-group">
          <label for="dokumen" class="drop-container">
            <img src="{{ asset('images/icons/upload.png') }}" alt="upload">
            <span class="drop-title"> Drag and Drop here <br>or</span>
            <input type="file" id="dokumen" name="ijazah" accept=".pdf" required>
          </label>
        </div>
      </div>
      <div class="box">
        <h2>Unggah Transkrip Nilai</h2>
        <div class="form-group">
          <label for="nama" class="judul">Nama Dokumen</label>
          <input type="text" name="nama_transkrip" id="nama">
        </div>
        <div class="form-group">
          <label for="dokumen" class="drop-container">
            <img src="{{ asset('images/icons/upload.png') }}" alt="upload">
            <span class="drop-title"> Drag and Drop here <br>or</span>
            <input type="file" id="dokumen" name="transkrip" accept=".pdf" required>
          </label>
        </div>
      </div>
    </div>
    <button type="submit">Upload</button>
  </form>

</body>

</html>
