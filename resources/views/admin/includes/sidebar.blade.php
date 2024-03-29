      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Tetra</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="/admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="/daftar-berkas">
                <i class="fa fa-folder"></i> <span>Berkas</span>
              </a>
            </li>
            <li class="treeview">
              <a href="/daftar-ajuan-legalisir">
                <i class="fa fa-files-o"></i>
                <span>Ajuan Legalisir</span>
              </a>
            </li>
            <li class="treeview">
              <a href="/kuesioner-admin">
                <i class="fa fa-edit"></i> <span>Kuisioner</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>