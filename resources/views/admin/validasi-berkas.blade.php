@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<!-- <head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/edit-ajuan.css') }}">
</head> -->

<body>
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-12">
                            <h1>
                                Validasi Berkas
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li>Validasi Berkas</li>
                                <li class="active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

    <div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <div class="box" style="background: #D9D9D9; border-radius: 10px;">
                <div class="row" style="width: 90%; margin:auto;">
                    <br>
                    <table>
                        <tr>
                            <td style="padding-right: 25px;">Nama</td>
                            <td>: [Nama Alumni]</td>
                        </tr>
                        <tr>
                            <td style="padding-right: 25px;">NIM </td>
                            <td>: [NIM]</td>
                        </tr>
                        <tr>
                            <td style="padding-right: 25px;">Jenis Berkas </td>
                            <td>: Ijazah / Trranskrip Nilai</td>
                        </tr>
                    </table>
                    <br><p>Preview Berkas</p>
                    <div class="panel">
                        <div class="panel-heading" style="background-color: #323639; color:white">
                            <i class="fa fa-list"></i> Name of Title
                            <div id="summary-header" class="pull-right"></div>
                        </div>
                        <div class="panel-body" style="background-color: #525659;">
                            <iframe src="{{ asset('images/contohberkas.png') }}" width="100%" height="600" allow="autoplay"></iframe>
                        </div>
                    </div><br>
                            <a href="#"><button class="btn btn" style="float: right; background-color: #5676E1; color:white">Valid</i></button></a></span>
                            <a href="#"><button class="btn btn-danger" style="float: right; margin-right:10px">Tidak Valid</i></button></a></span><br>
                     </div><br>
                </div>
                </div> 
            </div>
        </div>
    </div>
    </div>
</body>


@include('admin.includes.footer')