@include('administrator.includes.header')
@include('administrator.includes.topbar')
@include('administrator.includes.sidebar')

<!-- <head>
    <style>
        #role option:hover {
            background-color: #E3E3E3;
        }
    </style>
</head> -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <h1>
                        Daftar Users
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/administrator"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Users</li>
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
        <span><a href="#"><button id="addUserButton" class="btn btn" style="background-color: black; color:white;"><i class="fa fa-plus"> Tambah</i></button></a></span>
    </div>

    <!-- modal tambah user -->
    <div id="addUserModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 10px;"">
            <div class="modal-header d-flex justify-content-between">
                <h3 class="modal-title text-center">Tambah User</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" required>
                    <option value="admin">Superadmin</option>
                    <option value="user">Admin</option>
                    <option value="admin">Alumni</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn" style="background-color: #5676E1; color:white; border-radius: 10px;"">Simpan</button>
                    </div>
                    </div>                
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- modal edit user -->
    <div id="editUserModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 10px;"">
            <div class="modal-header d-flex justify-content-between">
                <h3 class="modal-title text-center">Edit User</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" required>
                    <option value="admin">Superadmin</option>
                    <option value="user">Admin</option>
                    <option value="admin">Alumni</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn" style="background-color: #5676E1; color:white; border-radius: 10px;"">Simpan</button>
                    </div>
                    </div>                
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- modal hapus user -->
    <div class="modal fade" id="hapusUserModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus item ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="hapusItemButton">Hapus</button>
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
                                    <th style="background-color: black; color: white; width: 15%;">Email</th>
                                    <th style="background-color: black; color: white; width: 15%;">Role</th>
                                    <th style="background-color: black; color: white; width: 20%;">Aksi</th>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">1</td>
                                    <td>John Doe</td>
                                    <td>admin1@uns.ac.id</td>
                                    <td>admin</td>
                                    <td>
                                        <span><a href="#"><button id="editUserButton" class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                        <span><a href="#"><button id="hapusUserButton" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">1</td>
                                    <td>Budi Santoso Sejati</td>
                                    <td>student@uns.ac.id</td>
                                    <td>alumni</td>
                                    <td>
                                        <span><a href="#"><button id="editUserButton" class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                        <span><a href="#"><button id="hapusUserButton" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">1</td>
                                    <td>John Doe</td>
                                    <td>admin1@uns.ac.id</td>
                                    <td>admin</td>
                                    <td>
                                        <span><a href="#"><button id="editUserButton" class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                        <span><a href="#"><button id="hapusUserButton" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 25px;">1</td>
                                    <td>Budi Santoso Sejati</td>
                                    <td>student@uns.ac.id</td>
                                    <td>alumni</td>
                                    <td>
                                        <span><a href="#"><button id="editUserButton" class="btn btn-success"><i class="fa fa-edit"> Edit</i></button></a></span>
                                        <span><a href="#"><button id="hapusUserButton" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button></a></span>
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
        </div>
    </section>
</div>

@include('administrator.includes.footer')
