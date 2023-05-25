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
    </section>

    <div class="content">
    <div class="container" style="background: #D9D9D9; border-radius: 10px;">
        <div class="row justify-content-center">
            <div class="col-xs-12"> 
                <div class="panel" style="width: 90%; margin-left: auto; margin-right: auto;">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Name of Title
                        <div id="summary-header" class="pull-right"></div>
                    </div>
                    <div class="panel-body">
                        <iframe src="https://uns.ac.id/id/wp-content/uploads/kaldik-uns-2022-a.pdf" width="100%" height="600" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>


@include('admin.includes.footer')