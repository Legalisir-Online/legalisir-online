@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<!-- Isi konten halaman admin -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Kuesioner</li>
            <li class="active">Tambah</li>
          </ol>
        </section> -->
        
        <section class="content-header">
          <h1>
            Kuesioner
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/kuesioner-admin">Kuesioner</a></li>
            <li class="active">Tambah</li>
          </ol>
        </section>

@include('admin.includes.footer')
