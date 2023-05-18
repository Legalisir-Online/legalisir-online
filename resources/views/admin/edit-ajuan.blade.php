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
              <h1>
                Daftar Ajuan Legalisir
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Daftar Ajuan Legalisir</li>
              </ol>
            </section>

            <div class="container" style=" width: 70%; height: 70vh; margin-top: 35px; background: #D9D9D9; border-radius: 26px;">
              <div class="title" style="color: #000000; margin-top: 35px; margin-left: 50px; font-size: 15px;">
                  <h5>Status pengajuan berkas ID : NBH-29298</h5>
              </div>

                <div class="status">
                    <div class="container" style="width:400px; height:40px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95;margin-left: 50px; margin-top: 5px; margin-bottom: 25px; ">
                      <div class="col" style="width: 250px; height: 30; background: #fff; border-radius: 15px; margin-top: 7px; float: left;">
                        <p>Menerima berkas</p>
                      </div>
                      <form action="action_page.php">
                          <label for="pberkas">Pilih berkas yang di legalisir :</label> <br>
                            <select id="pberkas" name="pilihberkas" >
                                <option value="ijazah">Ijazah</option>
                                <option value="transkrip nilai">Transkrip nilai</option>
                                <option value="ijazah & transkrip nilai">Ijazah & Transkrip nilai</option>
                            </select>
                      </form>
                      <!-- <div class="col1" style="width: 90px; height: 27px; background: #DEF2EC; border-radius: 10px; margin-top: 5px; float: right; border:solid 1px #68B984;">
                          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="margin-left: 5px">
                          <b><p style=" position: relative; text-align: center; color: #68B984; font-size: 13px; vertical-align: middle; display: flex; /* left: 2%; */;top: 15%; right: 13%; float: right;">
                                Passed</p></b>
                      </div> -->
                    </div>

                    <div class="container" style="width:400px; height:40px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-left: 50px; margin-top: 5px; margin-bottom: 25px; ">
                      <div class="col" style="width: 250px; height: 30; background: #fff;border-radius: 15px;margin-top: 7px;float: left;">
                        <p>Review berkas</p>
                      </div>
                        <div class="col1" style="width: 90px;height: 27px; background: #DEF2EC; border-radius: 10px; margin-top: 5px;float: right; border:solid 1px #68B984;">
                          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="margin-left: 5px">
                          <b><p style=" position: relative; text-align: center; color: #68B984; font-size: 13px;vertical-align: middle;display: flex; /* left: 2%; */; top: 15%; right: 13%; float: right;">
                                Passed</p></b>
                      </div>
                    </div>

                    <div class="container" style="width:400px;height:40px; background: #fff; border-radius: 15px;border:solid 1px #8B7B95;margin-left: 50px; margin-top: 5px; margin-bottom: 25px; ">
                      <div class="col" style="width: 250px; height: 30; background: #fff; border-radius: 15px;margin-top: 7px; float: left;">
                        <p>Legalisir berkas</p></div>
                      <div class="col3" style="width: 90px;height: 27px;background: #fcfdb6; border-radius: 10px; margin-top: 5px; float: right; border:solid 1px #FFD966;">
                          <img src="{{ asset('images/icons/pending.png') }}" alt="pending" style="margin-left: 5px">
                          <b><p style=" position: relative;text-align: center;color: #FFD966;font-size: 13px;vertical-align: middle;display: flex; /* left: 2%; */; top: 15%; right: 5%;float: right;">
                          Pending</p></b>
                      </div>
                    </div>

                    <div class="container" style="width:400px;height:40px;background: #fff;border-radius: 15px;border:solid 1px #8B7B95; margin-left: 50px;margin-top: 5px;margin-bottom: 25px; ">
                      <div class="col" style="width: 250px; height: 30;background: #fff; border-radius: 15px;margin-top: 7px; float: left;">
                        <p>Kirim berkas</p></div>
                      <div class="col3" style="width: 90px; height: 27px;background: #fcfdb6;border-radius: 10px; margin-top: 5px;float: right;border:solid 1px #FFD966;">
                          <img src="{{ asset('images/icons/pending.png') }}" alt="pending" style="margin-left: 5px">
                          <b><p style=" position: relative; text-align: center;color: #FFD966; font-size: 13px;vertical-align: middle;display: flex; /* left: 2%; */ top: 15%; right: 5%; float: right;">
                          Pending</p></b>
                      </div>
                    </div>

                    <div class="container" style="width:400px; height:40px; background: #fff; border-radius: 15px; border:solid 1px #8B7B95; margin-left: 50px; margin-top: 5px;margin-bottom: 25px; ">
                      <div class="col" style="width: 250px; height: 30; background: #fff; border-radius: 15px; margin-top: 7px; float: left;">
                        <p>Berkas diterima alumni</p></div>
                      <div class="col3" style="width: 90px;height: 27px; background: #fcfdb6; border-radius: 10px; margin-top: 5px;float: right;border:solid 1px #FFD966;">
                          <img src="{{ asset('images/icons/pending.png') }}" alt="pending" style="margin-left: 5px">
                          <b><p style=" position: relative;text-align: center;color: #FFD966;font-size: 13px;vertical-align: middle; display: flex;/* left: 2%; */;top: 15%;right: 5%; float: right;">
                          Pending</p></b>
                      </div>
                    </div>    
                </div>
                    </div>

    </div>
</body>

@include('admin.includes.footer')
