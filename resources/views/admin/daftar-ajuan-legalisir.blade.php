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
            <li class="active">Daftar Ajuan Legalisir</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12">
        <div class="input-group">
          <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;"
            placeholder="Search" />
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
                  <th style="background-color: black; color: white; width: 10%; padding-left: 25px;">
                    No
                  </th>
                  <th style="background-color: black; color: white; width: 25%;">Nama</th>
                  <th style="background-color: black; color: white; width: 15%;">NIK</th>
                  <th style="background-color: black; color: white; width: 15%;">Status</th>
                  <th style="background-color: black; color: white; width: 20%;">Keterangan</th>
                  <th style="background-color: black; color: white; width: 15%;">Pembayaran</th>
                </tr>
                @foreach ($alumni as $a)
                  @foreach ($a->dokumen as $d)
                  <tr>
                    <td style="padding-left: 25px;">{{ $d->id }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->nik }}</td>
                    @if ($d->status == 'Valid' || $d->status == 'Pass')
                      <td><span class="label label-success">{{ $d->status }}</span></td>
                    @elseif ($d->status == 'Invalid' || $d->status == 'Fail')
                        <td><span class="label label-danger">{{ $d->status }}</span></td>
                    @else
                        <td><span class="label label-warning">{{ $d->status }}</span></td>
                    @endif
                    <td>
                      <span><a href="#"><button class="btn btn-primary"><i class="fa fa-edit">
                              Detail</i></button></a></span>
                      <span><a href="{{ route('admin.legalisir.edit', ['id' => $d->id]) }}"><button class="btn btn-success"><i class="fa fa-edit">
                              Edit</i></button></a></span>
                    </td>
                    <td><span class="label label-info">Lunas</span></td>
                  </tr>
                  @endforeach
                @endforeach
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
    </div>
  </section>
</div>
@include('admin.includes.footer')
