@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<!-- <head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit-ajuan.css') }}">
</head> -->

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
                  <div class="box" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px; padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Menerima berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="green">Passed</option>
                        <option value="yellow">Pending</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Review berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="green">Passed</option>
                        <option value="yellow">Pending</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px; ">
                    <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Legalisir berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="green">Passed</option>
                        <option value="yellow">Pending</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Kirim berkas</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="green">Passed</option>
                        <option value="yellow">Pending</option>
                        <option value="red">Failed</option>
                      </select>
                    </div>
                  </div>

                  <div class="box" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-bottom: 10px;">
                    <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px;  padding-left: 20px; margin-top: 13px; float: left;">
                      <p>Berkar diterima alumni</p>
                    </div>
                    <div class="btn-group" style="height: 30px; top: 7px; left: 20px; border-radius: 15px">
                      <select id="color" name="color" class="form-control">
                        <option value="green">Passed</option>
                        <option value="yellow">Pending</option>
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
