@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

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
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right"
                                style="width: 150px;" placeholder="Search" />
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="background-color: black; color: white;">No</th>
                                <th style="background-color: black; color: white;">Nama</th>
                                <th style="background-color: black; color: white;">NIM</th>
                                <th style="background-color: black; color: white;">Status</th>
                                <th style="background-color: black; color: white;">Keterangan</th>
                                <th style="background-color: black; color: white;">Pembayaran</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>M0520001</td>
                                <td><span class="label label-success">Passed</span></td>
                                <td>
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"></i> Detail</button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></span>
                                </td>
                                <td><span class="label label-info">lunas</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>M0520001</td>
                                <td><span class="label label-success">Passed</span></td>
                                <td>
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"></i> Detail</button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></span>
                                </td>
                                <td><span class="label label-info">lunas</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>M0520001</td>
                                <td><span class="label label-success">Passed</span></td>
                                <td>
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"></i> Detail</button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></span>
                                </td>
                                <td><span class="label label-info">lunas</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>M0520001</td>
                                <td><span class="label label-success">Passed</span></td>
                                <td>
                                    <span><a><button class="btn btn-primary"><i class="fa fa-edit"></i> Detail</button></a></span>
                                    <span><a><button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a></span>
                                </td>
                                <td><span class="label label-info">lunas</span></td>
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
