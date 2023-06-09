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
                                                <input type="text" class="form-control" id="inputPertanyaan"
                                                    name="pertanyaan">
                                            </div>
                                            <div class="right-options">
                                                <select id="questionType" onchange="showAnswerOptions()"
                                                    style="background-color: #D9D9D9; width: auto; height: auto; padding: 10px; border-radius: 5px;">
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
                                            <input type="radio" id="option5" name="pilihan"
                                                value="sangat_tidak_setuju">
                                            <label for="option5"> Sangat Tidak Setuju</label><br>
                                        </div>

                                        <div class="form-group" id="answerEssay" style="display: none;">
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
                        </div>
                        <div class="text-center">
                            <button onclick="addQuestionBox()"
                                style="background-color: black; color:white;">+</button><br><br>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <a href="/pertanyaan"><button class="btn btn-primary"
                                style="background-color:#5676E1; float: right; margin-right:10px">Simpan</button></a><br>
                    </div>
                </div>
            </div>
        </div>

        <!-- <footer class="footer">
            <div class="container">
                <p class="footer-text">
                    &copy; Fakultas Teknologi Informasi Dan Sains Data - 2023
                </p>
            </div>
        </footer> -->
</body>

</html>

<script>
      function showAnswerOptions() {
      var questionType = document.getElementById("questionType").value;
      var answerOptions = document.getElementById("answerOptions");
      var answerEssay = document.getElementById("answerEssay");

      if (questionType === "pilihan") {
        answerOptions.style.display = "block";
        answerEssay.style.display = "none";
      } else if (questionType === "essai") {
        answerOptions.style.display = "none";
        answerEssay.style.display = "block";
      }
    }
    </script>
<!-- <script>
  var questionCount = 1; // Menghitung jumlah kotak pertanyaan yang ditambahkan

  function addQuestionBox() {
    questionCount++; // Menambah jumlah kotak pertanyaan yang ditambahkan

    var questionContainer = document.getElementById("questionContainer");

    // Membuat elemen kotak pertanyaan baru
    var newQuestionBox = document.createElement("div");
    newQuestionBox.id = "questionBox" + questionCount;
    newQuestionBox.className = "box";
    newQuestionBox.style.border = "0.5px solid";
    newQuestionBox.style.borderRadius = "10px";

    // Menyalin isi dari kotak pertama ke kotak baru
    var questionBoxTemplate = document.getElementById("questionBox");
    newQuestionBox.innerHTML = questionBoxTemplate.innerHTML;

    // Menambahkan kotak pertanyaan baru ke dalam kontainer
    questionContainer.appendChild(newQuestionBox);

    // Mengupdate ID elemen-elemen dalam kotak baru
    updateElementIds(newQuestionBox, questionCount);
  }

  function updateElementIds(questionBox, questionIndex) {
    var elements = questionBox.getElementsByTagName("*");
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var id = element.id;
      if (id !== "") {
        var newId = id + questionIndex;
        element.id = newId;
        // Mengupdate atribut 'for' pada label
        if (element.tagName === "LABEL") {
          var htmlFor = element.getAttribute("for");
          if (htmlFor !== null && htmlFor !== "") {
            var newFor = htmlFor + questionIndex;
            element.setAttribute("for", newFor);
          }
        }
      }
    }
  }

  function showAnswerOptions() {
    var questionType = document.getElementById("questionType").value;
    var answerOptions = document.getElementById("answerOptions" + questionCount);
    var answerEssay = document.getElementById("answerEssay" + questionCount);

    if (questionType === "pilihan") {
      answerOptions.style.display = "block";
      answerEssay.style.display = "none";
    } else if (questionType === "essai") {
      answerOptions.style.display = "none";
      answerEssay.style.display = "block";
    }
  }
</script> -->
