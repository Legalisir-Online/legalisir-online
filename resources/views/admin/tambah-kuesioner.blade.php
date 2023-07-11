@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<style>
    .left-align {
        text-align: left;
    }
</style>

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
                        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li>Kuesioner</li>
                        <li class="active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <div class="box" style="background: #D9D9D9; border-radius: 10px; margin-bottom: 30px">
                        <form class="form-horizontal" style="margin-top: 30px;" method="POST"
                            action="{{ route('kuesioner.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputKuesioner" class="col-xs-2 control-label">Kuesioner</label>
                                <div class="col-xs-8">
                                    <input type="kuesioner" class="form-control" id="inputKuesioner" name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPeriodeMulai" class="col-xs-2 control-label">Periode Mulai</label>
                                <div class="col-xs-8">
                                    <input type="date" class="form-control" id="inputPeriodeMulai" name="periode_mulai">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPeriodeSelesai" class="col-xs-2 control-label">Periode Selesai</label>
                                <div class="col-xs-8">
                                    <input type="date" class="form-control" id="inputPeriodeSelesai" name="periode_selesai">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus" class="col-xs-2 control-label">Status</label>
                                <div class="col-xs-2">
                                    <select class="form-control " name="status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPeriode" class="col-xs-2 control-label">Pertanyaan</label>
                                <div class="col-xs-8">
                                    <a href="/pertanyaan" class="btn"
                                        style="background-color: #404852; color:whitesmoke">
                                        Buat <i class="fa fa-plus" aria-hidden="true" style="margin-left: 30px"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary pull-right"
                                        style="margin-right: 90px; padding-right: 45px; padding-left: 45px;">Simpan</button>
                                </div>
                            </div>
                        </form>
                        <div style="margin: 10px"><br></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.includes.footer')
