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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">

</head>



<body>
    @include('alumni.includes.navbar')
    <div class="container">
        <div class="container-head">
            Biodata Alumni
        </div> <br><br>

        <div class="content">
            <form id="form">

                <!-- Details -->
                @foreach ($alumnis as $alumni)
                    <div class="tab">
                        <div class="form-control">
                            <label for="name" id="label-name">
                                Nama
                            </label>

                            <!-- Input Type Text -->
                            <input type="text" id="name" value="{{ $alumni->nama }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="nim" id="label-nim">
                                NIM
                            </label>

                            <!-- Input Type Email-->
                            <input type="text" id="nim" value="{{ $alumni->nim }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="tempat-lahir" id="label-tempatlahir">
                                Tempat Lahir
                            </label>

                            <!-- Input Type Text -->
                            <input type="text" id="age" value="{{ $alumni->tempat_lahir }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="age" id="label-age">
                                Tanggal Lahir
                            </label>

                            <input type="text" value="{{ $alumni->tgl_lahir }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="agama" id="label-agama">
                                Agama
                            </label>

                            <input type="text" value="{{ $alumni->agama }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="nik" id="label-nik">
                                NIK
                            </label>

                            <input type="text" value="{{ $alumni->nik }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="jenis-kelamin" id="label-jenis-kelamin">
                                Jenis Kelamin
                            </label>

                            <input type="text" value="{{ $alumni->jenis_kelamin }}" readonly />
                        </div>

                        <div class="form-control">
                            <label for="jenis-alamat" id="label-alamat">
                                Alamat
                            </label>

                            <input type="text"
                                value="{{ $alumni->alamat}} {{ $alumni->provinsi}} {{ $alumni->rt}} {{ $alumni->rw}}"
                                readonly />
                        </div>
                    </div>
                @endforeach

            </form>
        </div>


        <!-- <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul> -->
    </div>

</body>

@include('alumni.includes.footer')

</html>
