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
      <link rel="stylesheet" type="text/css" href="{{ asset('css/status-ajuan1.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
   </head>

   <body>
      @include('alumni.includes.navbar')

      <!-- Body -->
      <div class="title">
         <h5>Status pengajuan berkas ID : NBH-29298</h5>
      </div>

      <div class="box-wrapper">
         <div id="box1">
            <div class="status">
               <div class="container">
                  <div class="col"><p>Berkas telah diterima admin prodi</p></div>
                  <div class="col1">
                     <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 10px;">
                     <b><p>Passed</p></b>
                  </div>
               </div>
               <div class="container">
                  <div class="col"><p>Berkas sedang direview oleh admin</p></div>
                  <div class="col1">
                     <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 10px;">
                     <b><p>Passed</p></b>
                  </div>
               </div>
               <div class="container">
                  <div class="col"><p>Berkas telah dilegalisir</p></div>
                  <div class="col2">
                     <img src="{{ asset('images/icons/cross.png') }}" alt="cross" style="position: relative; top: 6px; left: 10px;">
                     <b><p>Failed</p></b>
                  </div>
                  <div class="error">
                     <p>Berkas yang Anda Ajukan Tidak Valid, Silahkan lakukan <span> upload berkas </span> kembali!</p>
                  </div>
               </div>
               <div class="container">
                  <div class="col"><p>Berkas sedang dalam pengiriman</p></div>
                  <div class="col3">
                     <img src="{{ asset('images/icons/pending.png') }}" alt="pending" style="position: relative; top: 6px; left: 10px;">
                     <b><p>Pending</p></b>
                  </div>
               </div>
               <div class="container">
                  <div class="col"><p>Berkas telah diterima</p></div>
                  <div class="col3">
                     <img src="{{ asset('images/icons/pending.png') }}" alt="pending" style="position: relative; top: 6px; left: 10px;">
                     <b><p>Pending</p></b>
                  </div>
               </div> 
            </div> <!-- End status -->
         </div> <!-- End box1 -->

         <div id="box2">
            <div class="icon">
                  <img src="{{ asset('images/ajuan.png') }}" alt="Alumni" width="280px">
            </div> 
         </div> <!-- End-box2-->
      </div> <!-- End Box-Wrapper -->
         

      <!-- Footer -->
      @include('alumni.includes.footer')
   </body>
</html>