@include('administrator.includes.header')
@include('administrator.includes.topbar')
@include('administrator.includes.sidebar')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <h1>
                        Dashboard
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/administrator"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
        
        <section class="container">
          <!-- Small boxes (Stat box) -->
          <section class="content">
          <div class="row">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #8B7B95;">
                <div class="inner" style="color: white;">
                  <h3>3</h3>
                  <p>ADMIN</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="/user-admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #8B7B95;">
                <div class="inner" style="color: white;">
                  <h3>100</h3>
                  <p>ALUMNI</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="/user-alumni" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          </section>
          <!-- Main row -->
            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->
          </div>

        </section><!-- /.content -->

@include('administrator.includes.footer')