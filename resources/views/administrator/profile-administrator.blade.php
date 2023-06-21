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
                        Profile
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div style="margin-top: 10px" class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <div class="box" style="border-radius: 5;">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <td>Nama</td>
                                    <td>Administrator</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>administrator@gmail.com</td>
                                </tr>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin.includes.footer')