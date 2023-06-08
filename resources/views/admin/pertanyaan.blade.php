@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pertanyaan-kuesioner.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12">
                        <h1>
                            Pertanyaan
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li>Kuesioner</li>
                            <li class="active">Pertanyaan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="col-xs-12">
                <span><a href="/pertanyaan-baru"><button class="btn btn"
                            style="background-color: black; color:white;"><i class="fa fa-plus"> Pertanyaan
                                Baru</i></button></a></span>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12">
                        <div class="box" style="border: 0.5px solid; border-radius: 10px;">
                            <div class="row" style="width: 95%; margin:auto;">
                                <form id="questionForm"><br>
                                    <div class="form-group">
                                        <div class="content-pertanyaan">
                                            Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh
                                            Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                                            <!-- <input type="text" id="age" placeholder="Masukkan Pertanyaan" /> -->
                                        </div>
                                        <div class="right-options">
                                            <select id="questionType" onchange="showAnswerOptions()"
                                                style="background-color: #D9D9D9; width: auto; height: auto; padding: 10px; border-radius: 5px;">
                                                <option value="pilihan">Pilihan Ganda</option>
                                                <option value="essai" disabled>Esai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="answerOptions">
                                        <input type="radio" id="option1" name="pilihan" value="sangat_setuju">
                                        <label for="option1"> Sangat Setuju</label><br>
                                        <input type="radio" id="option2" name="pilihan" value="setuju">
                                        <label for="option2"> Setuju</label><br>
                                        <input type="radio" id="option3" name="pilihan" value="netral">
                                        <label for="option3"> Netral</label><br>
                                        <input type="radio" id="option4" name="pilihan" value="tidak_setuju">
                                        <label for="option4"> Tidak Setuju</label><br>
                                        <input type="radio" id="option5" name="pilihan" value="sangat_tidak_setuju">
                                        <label for="option5"> Sangat Tidak Setuju</label><br>
                                    </div>

                                    <label class="switchX" style="float: right; margin-right: 10px">
                                        <input type="checkbox" id="toggleSwitchX" />
                                        <span class="sliderX"></span>
                                    </label>
                                    <a href="#"><i class="fa fa-trash fa-2x"
                                            style="float: right; margin-right:10px; color:red;"></i></a>
                                </form>
                            </div><br>
                        </div>
                        <div class="box" style="border: 0.5px solid; border-radius: 10px;">
                            <div class="row" style="width: 95%; margin:auto;">
                                <form id="questionForm"><br>
                                    <div class="form-group">
                                        <div class="content-pertanyaan">
                                            Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh
                                            Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                                            <!-- <input type="text" id="age" placeholder="Masukkan Pertanyaan" /> -->
                                        </div>
                                        <div class="right-options">
                                            <select id="questionType" onchange="showAnswerOptions()"
                                                style="background-color: #D9D9D9; width: auto; height: auto; padding: 10px; border-radius: 5px;">
                                                <option value="pilihan">Pilihan Ganda</option>
                                                <option value="essai" disabled>Esai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="answerOptions">
                                        <input type="radio" id="option1" name="pilihan" value="sangat_setuju">
                                        <label for="option1"> Sangat Setuju</label><br>
                                        <input type="radio" id="option2" name="pilihan" value="setuju">
                                        <label for="option2"> Setuju</label><br>
                                        <input type="radio" id="option3" name="pilihan" value="netral">
                                        <label for="option3"> Netral</label><br>
                                        <input type="radio" id="option4" name="pilihan" value="tidak_setuju">
                                        <label for="option4"> Tidak Setuju</label><br>
                                        <input type="radio" id="option5" name="pilihan"
                                            value="sangat_tidak_setuju">
                                        <label for="option5"> Sangat Tidak Setuju</label><br>
                                    </div>

                                    <label class="switchX" style="float: right; margin-right: 10px">
                                        <input type="checkbox" id="toggleSwitchX" />
                                        <span class="sliderX"></span>
                                    </label>
                                    <a href="#"><i class="fa fa-trash fa-2x"
                                            style="float: right; margin-right:10px; color:red;"></i></a>
                                </form>
                            </div><br>
                        </div>
                        <div class="box" style="border: 0.5px solid; border-radius: 10px;">
                            <div class="row" style="width: 95%; margin:auto;">
                                <form id="questionForm"><br>
                                    <div class="form-group">
                                        <div class="content-pertanyaan">
                                            Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh
                                            Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                                            <!-- <input type="text" id="age" placeholder="Masukkan Pertanyaan" /> -->
                                        </div>
                                        <div class="right-options">
                                            <select id="questionType" onchange="showAnswerOptions()"
                                                style="background-color: #D9D9D9; width: auto; height: auto; padding: 10px; border-radius: 5px;">
                                                <option value="pilihan" disabled>Pilihan Ganda</option>
                                                <option value="essai">Esai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="answerEssay">
                                        &nbsp;&nbsp;&nbsp;&nbsp;Long Answer Text
                                    </div>

                                    <label class="switchX" style="float: right; margin-right: 10px">
                                        <input type="checkbox" id="toggleSwitchX" />
                                        <span class="sliderX"></span>
                                    </label>
                                    <a href="#"><i class="fa fa-trash fa-2x"
                                            style="float: right; margin-right:10px; color:red;"></i></a>
                                </form>
                            </div><br>
                        </div>
                        <div class="box" style="border: 0.5px solid; border-radius: 10px;">
                            <div class="row" style="width: 95%; margin:auto;">
                                <form id="questionForm"><br>
                                    <div class="form-group">
                                        <div class="content-pertanyaan">
                                            Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh
                                            Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                                            <!-- <input type="text" id="age" placeholder="Masukkan Pertanyaan" /> -->
                                        </div>
                                        <div class="right-options">
                                            <select id="questionType" onchange="showAnswerOptions()"
                                                style="background-color: #D9D9D9; width: auto; height: auto; padding: 10px; border-radius: 5px;">
                                                <option value="pilihan" disabled>Pilihan Ganda</option>
                                                <option value="essai">Esai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="answerEssay">
                                        &nbsp;&nbsp;&nbsp;&nbsp;Long Answer Text
                                    </div>

                                    <label class="switchX" style="float: right; margin-right: 10px">
                                        <input type="checkbox" id="toggleSwitchX" />
                                        <span class="sliderX"></span>
                                    </label>
                                    <a href="#"><i class="fa fa-trash fa-2x"
                                            style="float: right; margin-right:10px; color:red;"></i></a>
                                </form>
                            </div><br>
                        </div>
                        <a href="#"><button class="btn btn-primary"
                                style="background-color:#5676E1; float: right; margin-right:10px">Simpan</i></button></a></span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="footer-text">
                &copy; Fakultas Teknologi Informasi Dan Sains Data - 2023
            </p>
        </div>
    </footer>
</body>

</html>
