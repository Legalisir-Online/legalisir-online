@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit-ajuan.css') }}">
</head>

<body>
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row justify-content-center">
        <div class="col-xs-12">
          <h1>Ajuan Legalisir</h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Ajuan</li>
          </ol>
        </div>
      </div>
    </section>

  <div class="container" style=" width: 70%; height: 80vh; margin-top: 10px; margin-bottom: 10px; background: #D9D9D9; border-radius: 26px;">
    <div class="info" style="margin-top: 10px; margin-left: 60px; padding: 10px; font-size: 15px">
        <table style="">
            <tr>
                <td style="padding-right:30px;">Nama </td>
                <td>: Budi Santoso Sejati </td>
            </tr>
            <tr>
                <td>NIM </td>
                <td>: M0520000090</td>
            </tr>
            <tr>
                <td>Jenis berkas </td>
                <td>: Ijazah</td>
            </tr>
        </table>
    </div>
   
    <div class="title" style="color: #000000; margin-top: 5px; margin-left: 65px; font-size: 15px;">
        <h5> <b>Status pengajuan berkas ID : NBH-29298</b> </h5>
    </div>

    <div class="status">
        <div class="container" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95;margin-left: 65px; margin-top: 5px; margin-bottom: 25px; ">
          <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px; margin-top: 13px; float: left;">
            <p>Menerima berkas</p>
          </div>
          <div class="btn-group" style=" widht: 50px; height: 30px; top: 7px; left: 20px; border-radius: 15px">
            <select id="color" name="color" class="form-control">
              <option value="green">Passed</option>
              <option value="yellow">Pending</option>
              <option value="red">Failed</option>
            </select>
          </div>
        </div>

        <div class="container" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95;margin-left: 65px; margin-top: 5px; margin-bottom: 25px; ">
          <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px; margin-top: 13px; float: left;">
            <p>Review berkas</p>
          </div>
          <div class="btn-group" style=" widht: 50px; height: 30px; top: 7px; left: 20px; border-radius: 15px">
            <select id="color" name="color" class="form-control">
              <option value="green">Passed</option>
              <option value="yellow">Pending</option>
              <option value="red">Failed</option>
            </select>
          </div>
        </div>

        <div class="container" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95;margin-left: 65px; margin-top: 5px; margin-bottom: 25px; ">
          <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px; margin-top: 13px; float: left;">
            <p>Legalisir berkas</p>
          </div>
          <div class="btn-group" style=" widht: 50px; height: 30px; top: 7px; left: 20px; border-radius: 15px">
            <select id="color" name="color" class="form-control">
              <option value="green">Passed</option>
              <option value="yellow">Pending</option>
              <option value="red">Failed</option>
            </select>
          </div>
        </div>

        <div class="container" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95;margin-left: 65px; margin-top: 5px; margin-bottom: 25px; ">
          <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px; margin-top: 13px; float: left;">
            <p>Kirim berkas</p>
          </div>
          <div class="btn-group" style=" widht: 50px; height: 30px; top: 7px; left: 20px; border-radius: 15px">
            <select id="color" name="color" class="form-control">
              <option value="green">Passed</option>
              <option value="yellow">Pending</option>
              <option value="red">Failed</option>
            </select>
          </div>
        </div>

        <div class="container" style="width:600px; height:50px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95;margin-left: 65px; margin-top: 5px; margin-bottom: 25px; ">
          <div class="col" style="width: 450px; height: 30px; background: #fff; border-radius: 15px; margin-top: 13px; float: left;">
            <p>Berkar diterima alumni</p>
          </div>
          <div class="btn-group" style=" widht: 50px; height: 30px; top: 7px; left: 20px; border-radius: 15px">
            <select id="color" name="color" class="form-control">
              <option value="green">Passed</option>
              <option value="yellow">Pending</option>
              <option value="red">Failed</option>
            </select>
          </div>
        </div>    
    </div>

  </div>

    </div>
</body>

@include('admin.includes.footer')
