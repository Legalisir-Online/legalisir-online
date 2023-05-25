@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<style>
    .content-pertanyaan{
        background-color: #D9D9D9;
        width: 70%;
        height: auto;
        padding: 10px 10px 10px 10px;
        border: solid 1px #B6BAC8;
        border-radius: 10px;
    }
    .form-group {
        display: flex;
        align-items: center;
    }
    .content-pertanyaan {
        flex-grow: 1;
    }
    .right-options {
        margin-left: 20px;
        background-color: #D9D9D9;
    }

    /* .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

h2 {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
} */

</style>
<body>
    <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xs-12">
                                <h1>
                                    Kuesioner
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
            <span><a href="#"><button class="btn btn" style="background-color: black; color:white;"><i class="fa fa-plus"> Pertanyaan Baru</i></button></a></span>
        </div></div>

        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12">
                        <div class="box" style="border: 0.5px solid; border-radius: 10px;">
                            <div class="row" style="width: 90%; margin:auto;">
                                <form id="questionForm"><br>
                                <div class="form-group">
                                    <div class="content-pertanyaan">
                                        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?                              <!-- <input type="text" id="age" placeholder="Masukkan Pertanyaan" /> -->
                                    </div>
                                    <div class="right-options">
                                        <select id="questionType" onchange="showAnswerOptions()">
                                        <option value="pilihan">Pilihan Ganda</option>
                                        <option value="essai">Esai</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" id="answerOptions">
                                    <select id="options">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    </select>
                                </div>

                                <div class="form-group" id="answerEssay" style="display: none;">
                                    <label for="essay">Jawaban Essai</label>
                                    <textarea id="essay" rows="4"></textarea>
                                </div>
                                
                                <a href="#"><button class="btn btn-danger" style="float: right; margin-right:10px">Tidak Valid</i></button></a>
                                <a href="#"><i class="fa fa-trash fa-2x" style="float: right; margin-right:10px; color:red;"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="box" style="border: 0.5px solid; border-radius: 10px;">
                            <div class="row" style="width: 90%; margin:auto;">
                                <form id="questionForm"><br>
                                <div class="form-group">
                                    <div class="content-pertanyaan">
                                        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?                              <!-- <input type="text" id="age" placeholder="Masukkan Pertanyaan" /> -->
                                    </div>
                                    <div class="right-options">
                                        <select id="questionType" onchange="showAnswerOptions()">
                                        <option value="pilihan">Pilihan Ganda</option>
                                        <option value="essai">Esai</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" id="answerOptions">
                                    <select id="options">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    </select>
                                </div>

                                <div class="form-group" id="answerEssay" style="display: none;">
                                    <label for="essay">Jawaban Essai</label>
                                    <textarea id="essay" rows="4"></textarea>
                                </div>
                                
                                <a href="#"><button class="btn btn-danger" style="float: right; margin-right:10px">Tidak Valid</i></button></a>
                                <a href="#"><i class="fa fa-trash fa-2x" style="float: right; margin-right:10px; color:red;"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@include('admin.includes.footer')