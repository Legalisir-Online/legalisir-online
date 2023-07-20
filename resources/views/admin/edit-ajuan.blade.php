@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<head>
  {{-- <link rel="stylesheet" href="{{ asset('plugins\jQuery\jQuery-2.1.3.min.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\jQueryUI\jquery-ui-1.10.3.min.js')}}"> --}}
  
  <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap\js\bootstrap.min.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\bootstrap-wysihtml5\bootstrap3-wysihtml5.min.css')}}">
  
  <link rel="stylesheet" href="{{ asset('plugins\datepicker\bootstrap-datepicker.js')}}">
  <link rel="stylesheet" href="{{ asset('dist\css\AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins\iCheck\flat\blue.css')}}">

  <link rel="stylesheet" href="{{ asset('dist\css\skins\_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins\morris\morris.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins\jvectormap\jquery-jvectormap-1.2.2.css')}}">
  
  <link rel="stylesheet" href="{{ asset('plugins\datepicker\datepicker3.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins\daterangepicker\daterangepicker-bs3.css')}}">
  <link rel="stylesheet" href="{{ asset('images\logo.png ')}}">

  <link rel="stylesheet" href="{{ asset('plugins\jQuery\jQuery-2.1.3.min.js')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap\js\bootstrap.min.js')}}">
  <link rel="stylesheet" href="{{ asset('dist\img\user2-160x160.jpg')}}">

  <link rel="stylesheet" href="{{ asset('plugins\morris\morris.min.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\sparkline\jquery.sparkline.min.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\jvectormap\jquery-jvectormap-1.2.2.min.js')}}">
  
  <link rel="stylesheet" href="{{ asset('plugins\jvectormap\jquery-jvectormap-world-mill-en.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\knob\jquery.knob.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\daterangepicker\daterangepicker.js')}}">
  
  <link rel="stylesheet" href="{{ asset('plugins\datepicker\bootstrap-datepicker.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\bootstrap-wysihtml5\bootstrap3-wysihtml5.all.min.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\iCheck\icheck.min.js')}}">
  
  <link rel="stylesheet" href="{{ asset('plugins\slimScroll\jquery.slimscroll.min.js')}}">
  <link rel="stylesheet" href="{{ asset('plugins\fastclick\fastclick.min.js')}}">
  <link rel="stylesheet" href="{{ asset('dist\js\app.min.js')}}">
  
  <link rel="stylesheet" href="{{ asset('dist\js\pages\dashboard.js')}}">
  <link rel="stylesheet" href="{{ asset('dist\js\demo.js')}}">
  {{-- <link rel="stylesheet" href="{{ asset('dist/js/app.min.js')}}"> --}}
</head>

<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xs-12">
            <h1>
              Ajuan Legalisir
            </h1>
            <ol class="breadcrumb">
              <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xs-12">
            <div class="box" style="background: #D9D9D9; border-radius: 10px;">
              <div class="row" style="width: 90%; margin:auto;">
                <div class="info">
                  <br>
                  <table>
                    <tr>
                      <td style="padding-right:40px;">Nama </td>
                      <td>: {{ $alumni->nama }}</td>
                    </tr>
                    <tr>
                      <td style="padding-right:40px;">NIK </td>
                      <td>: {{ $alumni->nik }}</td>
                    </tr>
                    <tr>
                      <td style="padding-right:40px;">Jenis berkas </td>
                      <td>: {{ $dokumen->jenis }}</td>
                    </tr>
                  </table>
                </div><br>
                <div class="title" style="color: #000000;">
                  <h5> <b>Status pengajuan berkas ID : NBH-29298</b> </h5>
                </div>

                <div class="status">
                  <div class="box"
                    style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col"
                      style="width: 450px; height: 30px; background: #fff; border-radius: 15px; padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Menerima berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="yellow">Pending</option>
                        <option value="green">Passed</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box"
                    style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col"
                      style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Review berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="yellow">Pending</option>
                        <option value="green">Passed</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box"
                    style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px; ">
                    <div class="col"
                      style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Legalisir berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                        <form action="{{ route('admin.legalisir.berkas.update', ['id' => $dokumen->id]) }}" method="POST">
                            @csrf
                            <select id="legalisir-berkas" name="legalisir-berkas" class="form-control" onchange="this.form.submit()">
                              <option value="pending">Pending</option>
                              <option value="pass">Passed</option>
                              <option value="fail">Failed</option>
                            </select>
                        </form>
                    </div>
                  </div>

                  <div class="box"
                    style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col"
                      style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Kirim berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="yellow">Pending</option>
                        <option value="green">Passed</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box"
                    style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col"
                      style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Berkar diterima alumni</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="yellow">Pending</option>
                        <option value="green">Passed</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div> <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

  </div>
</body>

@include('admin.includes.footer')
