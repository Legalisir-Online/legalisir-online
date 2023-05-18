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
            <li class="active">Legalisir Pending</li>
          </ol>
        </section>
        <section class="content">        
        <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-tools">
                        
                        <div class="input-group">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th style="background-color: black; color: white; width: 10px;">No</th>
                            <th style="background-color: black; color: white;">Nama</th>
                            <th style="background-color: black; color: white;">NIM</th>
                            <th style="background-color: black; color: white;">Status</th>
                            <th style="background-color: black; color: white;">Keterangan</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>M0520001</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>
                                <span><a><button class="btn btn-primary">Edit</button></a></span> 
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Doe</td>
                            <td>M0520001</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>
                                <span><a><button class="btn btn-primary">Edit</button></a></span> 
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John Doe</td>
                            <td>M0520001</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>
                                <span><a><button class="btn btn-primary">Edit</button></a></span> 
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>John Doe</td>
                            <td>M0520001</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>
                                <span><a><button class="btn btn-primary">Edit</button></a></span> 
                            </td>
                        </tr>
                    </table>
                    </div><!-- /.box-body -->
                    <div class="text-center">
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></1i>
                            <li><a href="#">3</a></1i>
                            <li><a href="#">&raquo;</a></l1>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.box -->
                </div>
            </div>
        </section>
</div>

@include('admin.includes.footer')