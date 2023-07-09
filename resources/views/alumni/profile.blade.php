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
            Biodata
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
                        @foreach ($users as $user)

                        <!-- Input Type Email-->
                        <input type="text" id="nim" value="{{ $user->nim }}" readonly />
                        @endforeach
                    </div>

                    <div class="form-control">
                        <label for="nik" id="label-nik">
                            NIK
                        </label>

                        <input type="text" value="{{ $alumni->nik }}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="no-wa" id="nomor_wa">
                            Nomor WhatsApp
                        </label>

                        <!-- Input Type Text -->
                        <input type="text" id="age" value="{{ $alumni->nomor_wa }}" readonly />
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
                        <label for="jenis-kelamin" id="label-jenis-kelamin">
                            Jenis Kelamin
                        </label>

                        <input type="text" value="@if ($alumni -> jenis_kelamin == 'P') Perempuan
                        @else Laki-laki
                        @endif" readonly />
                    </div>

                    <div class="form-control">
                        <label for="kode-prodi" id="kode_prodi">
                            Prodi
                        </label>

                        <input type="text" value="@if ($alumni -> kode_prodi == '05') Informatika
                        @else Bukan Informatika
                        @endif" readonly />
                    </div>

                    <div class="form-control">
                        <label for="jenis-alamat" id="label-alamat">
                            Alamat
                        </label>

                        <input type="text" value="{{ $alumni->alamat}}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="rt" id="rt">
                            RT
                        </label>

                        <input type="text" value="{{ $alumni->rt}}" readonly />
                    </div>

                        <div class="form-control">
                            <label for="rw" id="rw">
                                RW
                            </label>

                        <input type="text" value="{{ $alumni->rw}}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="kelurahan" id="kelurahan">
                            Kelurahan
                        </label>

                        <input type="text" value="{{ $alumni->kelurahan}}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="kecamatan" id="kecamatan">
                            Kecamatan
                        </label>

                        <input type="text" value="{{ $alumni->kecamatan}}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="kota" id="kota">
                            Kota / Kabupaten
                        </label>

                        <input type="text" value="{{ $alumni->kota}}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="provinsi" id="provinsi">
                            Provinsi
                        </label>

                        <input type="text" value="{{ $alumni->provinsi}}" readonly />
                    </div>

                    <div class="form-control">
                        <label for="kode-pos" id="kode_pos">
                            Kode Pos
                        </label>

                        <input type="text" value="{{ $alumni->kode_pos}}" readonly />
                    </div>

                    <br><br>
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