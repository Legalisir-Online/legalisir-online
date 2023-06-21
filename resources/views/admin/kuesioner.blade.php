@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/preview-kuesioner.css') }}">
</head>

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
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Kuesioner</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <div class="input-group">
                    <input type="text" name="table_search" class="form-control input-sm pull-right"
                        style="width: 150px;" placeholder="Search" />
                    <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="col-xs-12">
        <span><a href="/tambah-kuesioner"><button class="btn btn" style="background-color: black; color:white;"><i class="fa fa-plus"> Tambah</i></button></a></span>
    </div></div>

<!-- Modal Kuesioner -->
<div class="modal fade" id="kuesionerModal" tabindex="-1" role="dialog" aria-labelledby="kuesionerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container1">
            <h5 class="modal-title" id="kuesionerModalLabel">Kuesioner</h5><br><br>  
            <div class="content1">
                <div class="content-pertanyaan">
                    Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                </div>
                <div class="content-essay">
                    <ul>
                        <li><label for="modal-radio-1">Sangat tidak Setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-1" /> </li>
                        <li><label for="modal-radio-2">Tidak setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-2" /> </li>
                        <li><label for="modal-radio-3">Netral</label> <input type="radio" name="modal-opinions" id="modal-radio-3" /> </li>
                        <li><label for="modal-radio-4">Setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-4" /> </li>
                        <li><label for="modal-radio-5">Sangat setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-5" /> </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="content1">
                <div class="content-pertanyaan">
                Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                </div>
                <div class="content-essay">
                <ul>
                    <li><label for="modal-radio-6">Sangat tidak Setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-6" /> </li>
                    <li><label for="modal-radio-7">Tidak setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-7" /> </li>
                    <li><label for="modal-radio-8">Netral</label> <input type="radio" name="modal-opinions" id="modal-radio-8" /> </li>
                    <li><label for="modal-radio-9">Setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-9" /> </li>
                    <li><label for="modal-radio-10">Sangat setuju</label> <input type="radio" name="modal-opinions" id="modal-radio-10" /> </li>
                </ul>
                </div>
            </div>
            <br>
            <div class="content1">
                <div class="content-pertanyaan">
                Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
                </div>
                <div>
                <input type="text" class="content-essay" placeholder="Jawaban">
                </div>
            </div>
            <br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>


    <section class="content">
    <div style="margin-top: 10px" class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="background-color: black; color: white; width: 10px; padding-left: 25px;">No</th>
                                <th style="background-color: black; color: white;">Nama</th>
                                <th style="background-color: black; color: white;">Periode</th>
                                <th style="background-color: black; color: white;">Jumlah<br>Pertanyaan</th>
                                <th style="background-color: black; color: white;">Jumlah<br>Responden</th>
                                <th style="background-color: black; color: white;">Created At</th>
                                <th style="background-color: black; color: white;">Status</th>
                                <th style="background-color: black; color: white;">Keterangan</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Fasilitas Prodi</td>
                                <td>2022 - 2023</td>
                                <td>15</td>
                                <td>15</td>
                                <td>24 - 05- 2023</td>
                                <td><span class="label label-success">Aktif</span></td>
                                <td>
                                    <span><a href="/respon"><button class="btn btn-primary"><i class="fa fa-comments"> Respon</i></button></a></span>
                                    <span><a href="/edit-kuesioner"><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;" data-toggle="modal" data-target="#kuesionerModal"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Fasilitas Prodi</td>
                                <td>2022 - 2023</td>
                                <td>15</td>
                                <td>15</td>
                                <td>24 - 05- 2023</td>
                                <td><span class="label label-success">Aktif</span></td>
                                <td>
                                    <span><a href="/respon"><button class="btn btn-primary"><i class="fa fa-comments"> Respon</i></button></a></span>
                                    <span><a href="/edit-kuesioner"><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;" data-toggle="modal" data-target="#kuesionerModal"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Fasilitas Prodi</td>
                                <td>2022 - 2023</td>
                                <td>15</td>
                                <td>15</td>
                                <td>24 - 05- 2023</td>
                                <td><span class="label label-danger">Tidak Aktif</span></td>
                                <td>
                                    <span><a href="/respon"><button class="btn btn-primary"><i class="fa fa-comments"> Respon</i></button></a></span>
                                    <span><a href="/edit-kuesioner"><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;" data-toggle="modal" data-target="#kuesionerModal"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Fasilitas Prodi</td>
                                <td>2022 - 2023</td>
                                <td>15</td>
                                <td>15</td>
                                <td>24 - 05- 2023</td>
                                <td><span class="label label-danger">Tidak Aktif</span></td>
                                <td>
                                    <span><a href="/respon"><button class="btn btn-primary"><i class="fa fa-comments"> Respon</i></button></a></span>
                                    <span><a href="/edit-kuesioner"><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;" data-toggle="modal" data-target="#kuesionerModal"></i></a></span>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="text-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
</body>

@include('admin.includes.footer')