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
                                    <li>Pertanyaan</li>
                                    <li class="active">Pertanyaan Baru</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-xs-12">
                        <div id="questionContainer">
                            <div id="questionBox" class="box" style="border: 0.5px solid; border-radius: 10px;">
                                <div class="row" style="width: 90%; margin:auto;">
                                    <form id="questionForm"><br>
                                    <div class="form-group">
                                        <div style="width: 95%; margin:auto;">
                                            <input type="pertanyaan" class="form-control" id="inputPertanyaan">
                                        </div>
                                        <div class="right-options">
                                            <select id="questionType" onchange="showAnswerOptions()" style="background-color: #D9D9D9; width: auto; height: auto; padding: 10px; border-radius: 5px;">
                                            <option value="pilihan">Pilihan Ganda</option>
                                            <option value="essai">Esai</option>
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

                                    <div class="form-group" id="answerEssay" style="display: none;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;Long Answer Text
                                    </div>
                                    
                                    <label class="switch" style="float: right; margin-right: 10px;">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                    <a href="#"><i class="fa fa-trash fa-2x" style="float: right; margin-right:10px; color:red;"></i></a>
                                    </form>
                                </div><br>
                            </div>
                        </div>
                        <div class="text-center">
                            <button onclick="addQuestionBox()" style="background-color: black; color:white;">+</button><br><br>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <a href="/pertanyaan"><button class="btn btn-primary" style="background-color:#5676E1; float: right; margin-right:10px">Simpan</i></button></a></span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('admin.includes.footer')
</html>

