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
{{-- <head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit-ajuan.css') }}">
</head> --}}

<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xs-12">
            <h1>
              Validasi Berkas
            </h1>
            <ol class="breadcrumb">
              <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
              <li>Validasi Berkas</li>
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
                <br>
                <table>
                  <tr>
                    <td style="padding-right: 25px;">Nama</td>
                    <td>: {{ $alumni->nama }}</td>
                  </tr>
                  <tr>
                    <td style="padding-right: 25px;">NIK </td>
                    <td>: {{ $alumni->nik }}</td>
                  </tr>
                  <tr>
                    <td style="padding-right: 25px;">Jenis Berkas </td>
                    <td>: {{ $dokumen->jenis }}</td>
                  </tr>
                </table>
                <br>
                <p>Preview Berkas</p>
                <div class="panel">
                  <div class="panel-heading" style="background-color: #323639; color:white">
                    <i class="fa fa-list"></i> Name of Title
                    <div id="summary-header" class="pull-right"></div>
                  </div>
                  <div class="panel-body" style="background-color: #525659;">
                    <iframe src="{{ asset($dokumen->path) }}" width="100%" height="600" allow="autoplay"></iframe>
                  </div>
                </div><br>
                <form action="{{ route('admin.berkas.update.valid', ['id' => $dokumen->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                  <button type="submit" class="btn btn" style="float: right; background-color: #5676E1; color:white">Valid</button>
                </form>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg"
                  style="float: right; margin-right:10px">Tidak Valid</button><br>
                <div class="modal fade" id="modal-lg" style="display: none" aria-hidden="true">
                  <form action="{{ route('admin.berkas.update.invalid', ['id' => $dokumen->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Berkas tidak valid</h4>
                        </div>
                        <div class="modal-body">
                          <input type="text" class="form-control" name="keterangan" id="pesan"
                            placeholder="Tuliskan pesan">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </form>
                </div><!-- /.modal fade -->
              </div><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@include('admin.includes.footer')
