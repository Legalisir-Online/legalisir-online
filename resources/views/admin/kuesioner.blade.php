@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

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

    <section class="content"">
    <div style="margin-top: 10px" class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="background-color: black; color: white;">No</th>
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
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"> Detail</i></button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;"></i></a></span>
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
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"> Detail</i></button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;"></i></a></span>
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
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"> Detail</i></button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;"></i></a></span>
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
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"> Detail</i></button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                    <span><a href="#"><i class="fa fa-eye" style="font-size: 24px; color:black;"></i></a></span>
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

@include('admin.includes.footer')