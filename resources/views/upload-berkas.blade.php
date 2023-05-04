<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" href="{{ asset('css/upload-berkas.css') }}">
</head>
<body>
    <h1>UNGGAH DOKUMEN</h1>
    <div class="box-container"> 
        <div class="box">
            <h2>Unggah Ijazah</h2>
            <div class="form-group">
                <label for="nama" class="judul">Nama Dokumen</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="dokumen" class="drop-container">
                    <img src="{{ asset('images/icons/upload.png') }}" alt="upload">
                    <span class="drop-title"> Drag and Drop here </span>
                     or  
                    <input type="file" id="dokumen" accept="image/*" required>
                </label>
            </div>
        </div>
        <div class="box">
            <h2>Unggah Transkrip Nilai</h2>
            <div class="form-group">
                <label for="nama" class="judul">Nama Dokumen</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="dokumen" class="drop-container">
                    <img src="{{ asset('images/icons/upload.png') }}" alt="upload">
                    <span class="drop-title"> Drag and Drop here </span>
                     or  
                    <input type="file" id="dokumen" accept="image/*" required>
                </label>
            </div>
        </div>
    
    </div>
    
        <button type="submit">Upload</button>
    
</body>
</html>
