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
                        Daftar Ajuan Legalisir
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li>Daftar Ajuan Legalisir</li>
                        <li class="active">Selesai</li>
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

    <section class="content">
        <div style="margin-top: 10px" class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th style="background-color: black; color: white; width: 10px; padding-left: 25px;">
                                        No</th>
                                    <th style="background-color: black; color: white;">Nama</th>
                                    <th style="background-color: black; color: white;">NIM</th>
                                    <th style="background-color: black; color: white;">Status</th>
                                </tr>
                                <tr>
                                    @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td style="padding-left: 25px;">{{ $loop->iteration }}</td>
                                    @foreach ($alumnis as $alumni)
                                        @if ($transaksi->id_alumni == $alumni->id)
                                            <td>{{ $alumni->nama }}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($users as $user)
                                        @if ($user->id == $alumni->id_user)
                                            <td>{{ $user->nim }}</td>
                                        @endif
                                    @endforeach
                                    <td><span class="label label-success">Selesai</span></td>
                                    @endforeach
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
