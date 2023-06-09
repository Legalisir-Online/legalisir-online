<!DOCTYPE html>
<html lang="en">

<head>
  {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <title>Sistem Legalisir Online</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/biodata.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">

</head>



<body>
  @include('alumni.includes.navbar')
  <div class="container">
    <div class="container-head">
      Isi Biodata
    </div> <br><br>

    <div class="content">
      <form id="form">

        <!-- Details -->
        <div class="form-control">
          <label for="name" id="label-name">
            Nama
          </label>

          <!-- Input Type Text -->
          <input type="text" id="name" placeholder="Nama lengkap" />
        </div>

        <div class="form-control">
          <label for="nim" id="label-nim">
            NIM
          </label>

          <!-- Input Type Email-->
          <input type="text" id="nim" placeholder="NIM Tanpa Spasi contoh M0520001" />
        </div>

        <div class="form-control">
          <label for="tempat-lahir" id="label-tempatlahir">
            Tempat Lahir
          </label>

          <!-- Input Type Text -->
          <input type="text" id="age" placeholder="Tempat Lahir" />
        </div>

        <div class="form-control">
          <label for="age" id="label-age">
            Tanggal Lahir
          </label>

          <input type="date" id="Test_DatetimeLocal">
        </div>

        <div class="form-control">
          <label for="role" id="label-role">
            Agama
          </label>

          <!-- Dropdown options -->
          <select name="agama" id="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katholik">Katholik</option>
            <option value="konghucu">Konghucu</option>
            <option value="budha">Budha</option>
            <option value="hindu">Hindu</option>
          </select>
        </div>

        <!-- Multi-line Text Input Control -->
        <!-- <button type="submit" value="submit">
          Submit
        </button> -->
        <!-- <div class="pagination_rounded">
          <ul>
            <li>
              <a href="#" class="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> Prev </a>
            </li>
            <li><a href="#">1</a>
            </li>
            <li class="hidden-xs"><a href="#">2</a>
            </li>
            <li class="hidden-xs"><a href="#">3</a>
            </li>
            <li class="hidden-xs"><a href="#">4</a>
            </li>
            <li class="hidden-xs"><a href="#">5</a>
            </li>
            <li class="visible-xs"><a href="#">...</a>
            </li>
            <li><a href="#">6</a>
            </li>
            <li><a href="#" class="next"> Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div> -->
      </form>
    </div>

    <div class="content" id="page2" style="display: none;">
      <form id="form">

        <!-- Details -->
        <div class="form-control">
          <label for="name" id="label-name">
            NIK
          </label>

          <!-- Input Type Text -->
          <input type="text" id="name" placeholder="NIK" />
        </div>

        <div class="form-control">
          <label for="nim" id="label-nim">
            Nomor WA
          </label>

          <!-- Input Type Email-->
          <input type="text" id="nim" placeholder="contoh 62xxxxxxx" />
        </div>

        <div class="form-control">
          <label for="tempat-lahir" id="label-tempatlahir">
            Jenis Kelamin
          </label>

          <!-- Dropdown options -->
          <select name="jenis kelamin" id="jenis kelamin">
            <option value="Lakilaki">Laki-laki</option>
            <option value="Perempuan">Peremppuan</option>
          </select>
        </div>

        <div class="form-control">
          <label for="age" id="label-age">
            Alamat
          </label>

          <!-- Input Type Email-->
          <input type="text" id="alamat" placeholder="Alamat" />
        </div>

        <div class="form-control">
          <label for="role" id="label-role">
            RT / RW
          </label>

          <!-- Input Type Email-->
          <input type="text" id="rtrw" placeholder="RT / RW" />
        </div>
      </form>
    </div>

    

    <!-- <ul class="pagination pagination-circular" role="navigation" aria-label="Pagination">
      <li class="disabled">« <span class="show-for-sr">Previous page</span></li>
      <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
      <li><a href="#" aria-label="Page 2">2</a></li>
      <li><a href="#" aria-label="Page 3">3</a></li>
      <li><a href="#" aria-label="Page 4">4</a></li>
      <li><a href="#" aria-label="Page 5">5</a></li>
      <li><a href="#" aria-label="Next page">» <span class="show-for-sr">Next page</span></a></li>
    </ul> -->

    <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
      <li><a href="#" id="button2" class="pagination-button" onclick="handlePageClick(2)">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>

  <!-- <footer class="footer">
    <div class="footer-text">
        &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
    </div>
  </footer> -->
</body>

@include('alumni.includes.footer')

</html>

<!-- ... Bagian sebelumnya ... -->

<script>
  function handlePageClick(pageNumber) {
    // Menghapus kelas 'active' dari semua tombol paginasi
    var paginationButtons = document.getElementsByClassName("pagination-button");
    for (var i = 0; i < paginationButtons.length; i++) {
      paginationButtons[i].classList.remove("active");
    }

    // Menghapus kelas 'active' dari semua halaman konten
    var contentPages = document.getElementsByClassName("content");
    for (var j = 0; j < contentPages.length; j++) {
      contentPages[j].style.display = "none";
    }

    // Menandai tombol dan halaman yang sesuai dengan kelas 'active'
    var selectedButton = document.getElementById("button" + pageNumber);
    var selectedPage = document.getElementById("page" + pageNumber);
    selectedButton.classList.add("active");
    selectedPage.style.display = "block";
  }
</script>

<!-- ... Bagian setelahnya ... -->
