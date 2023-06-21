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
      <button type="submit" class="btn btn" style="background-color: #5676E1; color:white; border-radius: 10px;"">Ajukan Legalisir</button>
      </div>
    </div>
  </section>

  <!-- Modal Upload Berkas -->
  <div id="uploadBerkas" class="modal">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 10px; padding: 10px;">
        <div class="modal-header d-flex justify-content-between">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="">
            <strong>Mohon maaf, Anda belum mengupload berkas legalisir.
            Silakukan upload berkas terlebih dahulu</strong>
          </h4>
        </div>

        <div class="form-group row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn" style="background-color: #5676E1; color:white; border-radius: 10px;"">Upload Berkas</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

@include('alumni.includes.footer')
