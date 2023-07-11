<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add this line -->
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
    <style>
        .pagination {
            display: block;
            text-align: center;
        }

        .pagination .btn {
            display: inline-block;
            margin: 5px 150px 5px 135px;
            padding: 8px 16px;
            border: none;
            background-color: #5676E1;
            color: #ffffff;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .pagination .btn:hover {
            background-color: #5676e1cb;
        }

        .pagination #prevBtn {
            float: left;
        }

        .pagination #nextBtn {
            float: right;
        }


        .submit-button {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    @include('alumni.includes.navbar')
    <div class="container">
        <div class="container-head">
            Isi Biodata
        </div> <br><br>
        <form id="biodataForm" method="POST" action="{{ route('biodata.store') }}">
            @csrf
            <!-- Details -->
            <div class="content" id="page1">
                <div class="form-control">
                    <label for="name" id="label-name">
                        Nama
                    </label>
                    <input type="text" id="nama" name="nama" placeholder="Nama lengkap"
                        value="{{ $alumnis->nama ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="nik" id="label-nik">
                        NIK
                    </label>
                    <input type="text" id="nik" name="nik" placeholder="Nomor NIK"
                        value="{{ $alumnis->nik ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="WA" id="label-WA">
                        Nomor Whatsapp
                    </label>
                    <input type="text"id="nomor_wa" name="nomor_wa" placeholder="Nomor WA misal 082************"
                        value="{{ $alumnis->nomor_wa ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="tempat-lahir" id="label-tempatlahir">
                        Tempat Lahir
                    </label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                        value="{{ $alumnis->tempat_lahir ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="age" id="label-age">
                        Tanggal Lahir
                    </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" name="Test_DatetimeLocal"
                        value="{{ date('Y-m-d', $alumnis->tanggal_lahir) ?? '' }}">
                </div>
            </div>

            <div class="content" id="page2" style="display: none;">
                <div class="form-control">
                    <label for="role" id="label-role">
                        Agama
                    </label>
                    <select name="agama" id="agama" value="{{ $alumnis->agama ?? '' }}">
                        <option value="islam" {{ $alumnis->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                        <option value="kristen" {{ $alumnis->agama == 'kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="katholik" {{ $alumnis->agama == 'katholik' ? 'selected' : '' }}>Katholik
                        </option>
                        <option value="konghucu" {{ $alumnis->agama == 'konghucu' ? 'selected' : '' }}>Konghucu
                        </option>
                        <option value="budha" {{ $alumnis->agama == 'budha' ? 'selected' : '' }}>Budha</option>
                        <option value="hindu" {{ $alumnis->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="role" id="label-role">
                        Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin" id="jenis-kelamin">
                        <option value="L" {{ $alumnis->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="P" {{ $alumnis->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="kode-prodi" id="label-kodeprodi">
                        Prodi
                    </label>
                    <select name="kode_prodi" id="prodi">
                        <option value="09" {{ $alumnis->kode_prodi == '09' ? 'selected' : '' }}>Informatika
                        </option>
                        <option value="10" {{ $alumnis->kode_prodi == '10' ? 'selected' : '' }}>Sains Data
                        </option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="alamat" id="label-alamat">
                        Alamat
                    </label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat"
                        value="{{ $alumnis->alamat ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="rt-rw" id="label-rtrw">
                        RT
                    </label>
                    <input type="text" id="rt" name="rt" placeholder="RT"
                        value="{{ $alumnis->rt ?? '' }}" />
                </div>
                <div class="form-control">
                    <label for="rw" id="label-rtrw">
                        RW
                    </label>
                    <input type="text" id="rw" name="rw" placeholder="RW"
                        value="{{ $alumnis->rw ?? '' }}" />
                </div>
            </div>

            <div class="content" id="page3" style="display: none;">
                <div class="form-control">
                    <label for="kelurahan" id="label-kelurahan">
                        Kelurahan
                    </label>
                    <input type="text" id="kelurahan" name="kelurahan" placeholder="Kelurahan"
                        value="{{ $alumnis->kelurahan ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="kecamatan" id="label-kecamatan">
                        Kecamatan
                    </label>
                    <input type="text" id="kecamatan" name="kecamatan"placeholder="Kecamatan"
                        value="{{ $alumnis->kecamatan ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="kota" id="label-kota">
                        Kota/Kabupaten
                    </label>
                    <input type="text" id="kota" name="kota" placeholder="Kota"
                        value="{{ $alumnis->kota ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="provinsi" id="label-provinsi">
                        Provinsi
                    </label>
                    <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi"
                        value="{{ $alumnis->provinsi ?? '' }}" />
                </div>

                <div class="form-control">
                    <label for="kode-pos" id="label-kodepos">
                        Kode Pos
                    </label>
                    <input type="text" id="kode_pos" name="kode_pos" placeholder="Kode Pos"
                        value="{{ $alumnis->kode_pos ?? '' }}" />
                </div>

                <br>
                <button type="submit" class="submit-button">Simpan</button>
            </div>
        </form>


        <div class="pagination">
            <button class="btn" id="prevBtn" onclick="previousPage()">Previous</button>
            <button class="btn" id="nextBtn" onclick="nextPage()">Next</button>
        </div>
    </div>

    <script>
        var currentPage = 1;
        var maxPage = 3;

        function showPage(pageNumber) {
            var pages = document.getElementsByClassName("content");
            for (var i = 0; i < pages.length; i++) {
                pages[i].style.display = "none";
            }
            document.getElementById("page" + pageNumber).style.display = "block";

            // Update button visibility
            if (pageNumber === 1) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline-block";
            }

            if (pageNumber === maxPage) {
                document.getElementById("nextBtn").style.display = "none";
            } else {
                document.getElementById("nextBtn").style.display = "inline-block";
            }
        }

        function nextPage() {
            if (currentPage < maxPage) {
                currentPage++;
                showPage(currentPage);
            }
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        }

        showPage(currentPage);
    </script>
</body>

@include('alumni.includes.footer')

</html>
