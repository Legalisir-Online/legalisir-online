<!DOCTYPE html>
<html lang="en">

<head>
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

        <div class="content" id="page1">
            <form id="form1">
                <!-- Details -->
                <div class="form-control">
                    <label for="name" id="label-name">
                        Nama
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="nama" name="nama" placeholder="Nama lengkap" />
                </div>

                <div class="form-control">
                    <label for="nik" id="label-nik">
                        NIK
                    </label>
                    <!-- Input Type Email-->
                    <input type="text" id="nik" name="nik" placeholder="Nomor NIK" />
                </div>

                <div class="form-control">
                    <label for="WA" id="label-WA">
                        Nomor Whatsapp
                    </label>
                    <!-- Input Type Email-->
                    <input type="text" id="nomor_wa" name="nomor_wa" placeholder="Nomor WA misal 082************" />
                </div>

                <div class="form-control">
                    <label for="tempat-lahir" id="label-tempatlahir">
                        Tempat Lahir
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" />
                </div>

                <div class="form-control">
                    <label for="age" id="label-age">
                        Tanggal Lahir
                    </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" name="Test_DatetimeLocal">
                </div>
            </form>
        </div>

        <div class="content" id="page2" style="display: none;">
            <form id="form2">
                <!-- Details -->
                <div class="form-control">
                    <label for="role" id="label-role">
                        Agama
                    </label>
                    <!-- Dropdown options -->
                    <select name="agama" id="agama" name="agama">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katholik">Katholik</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="role" id="label-role">
                        Jenis Kelamin
                    </label>
                    <!-- Dropdown options -->
                    <select name="jenis-kelamin" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="kode-prodi" id="label-kodeprodi">
                        Kode Prodi
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="kode_prodi" name="kode_prodi" placeholder="Kode Prodi" />
                </div>

                <div class="form-control">
                    <label for="rt-rw" id="label-rtrw">
                        RT
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="rt" name="rt" placeholder="RT" />
                </div>
                <div class="form-control">
                    <label for="rw" id="label-rtrw">
                        RW
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="rw" name="rw" placeholder="RW" />
                </div>
                <div class="form-control">
                    <label for="kelurahan" id="label-kelurahan">
                        Kelurahan
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="kelurahan" name="kelurahan" placeholder="Kelurahan" />
                </div>

                
            </form>
        </div>

        <div class="content" id="page3" style="display: none;">
            <form id="form3">
                <!-- Details -->
                
                <div class="form-control">
                    <label for="kecamatan" id="label-kecamatan">
                        Kecamatan
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" />
                </div>

                <div class="form-control">
                    <label for="kota" id="label-kota">
                        Kota
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="kota" name="kota" placeholder="Kota" />
                </div>

                <div class="form-control">
                    <label for="provinsi" id="label-provinsi">
                        Provinsi
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" />
                </div>

                <div class="form-control">
                    <label for="kode-pos" id="label-kodepos">
                        Kode Pos
                    </label>
                    <!-- Input Type Text -->
                    <input type="text" id="kode_pos" name="kode_pos" placeholder="Kode Pos" />
                </div>

                <div class="form-control">
                    <label for="alamat" id="label-alamat">
                        Alamat
                    </label>
                    <!-- Input Type Textarea -->
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat" />
                </div>
                <br>
                <input type="submit" value="Simpan" class="submit-button">
            </form>
        </div>

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
                document.getElementById("prevBtn").style.display = "block";
            }
            if (pageNumber === maxPage) {
                document.getElementById("nextBtn").style.display = "none";
            } else {
                document.getElementById("nextBtn").style.display = "block";
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
