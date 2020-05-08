<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-dark mb-2" style="background-color:#3282B8">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <ul class="navbar-nav mr-auto font-weight-bold" >
        <li class="nav-item">
          <a href="/" class="nav-link bold">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile/home">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/organisasi/home">Organisasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/uks/home">UKS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog ">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kegiatan/home ">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/galeri/home ">Galeri</a>
        </li>
      </ul>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
      @if(Auth::user())
      <form class="nav-item" action="/logout" method="post" style="padding-right:50px">
        @csrf
        <div class="row float-right">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <button class="btn-light rounded-lg" type="submit" name="button">Logout</button>
          </div>
        </div>

      </form>
      @endif

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 shadow" style="background:#1B2626">
    <!-- Brand Logo -->
      <img src="/img/dashboardlogo.png" alt=" responsive image" style="display: block; margin-top:30px; width:200px; background-color:transparent;border:none" class="rounded img-thumbnail mb-4 container">
    <!-- Sidebar -->


      <!-- Sidebar Menu -->
      <nav class="mt-0">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/dashboard/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/artikel" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Daftar Artikel
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{count(\Laravel\Artikel::all())}}</span>  </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dashboard/profile" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{count(\Laravel\Profile::all())}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/organisasi" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Organisasi
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{count(\Laravel\Organisasi::all())}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dashboard/uks" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                UKS
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{count(\Laravel\Uks::all())}}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/kegiatan" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kegiatan
                <i class="right fas fa-angle-left"></i>
                 <span class="badge badge-info right">{{count(\Laravel\Kegiatan::all())}}</span>
              </p>
            </a>
          </li>




          <li class="nav-item has-treeview">
            <a href="/dashboard/banner" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Banner Awal
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{count(\Laravel\Banner::all())}}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/galeri" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{count(\Laravel\Galeri::all())}}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/santri" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Santri PPMU
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{count(\Laravel\Santri::all())}}</span>
              </p>
            </a>
          </li>

          <li class="nav-header">Account</li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e_commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project_add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project_edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project_detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Pengaturan Account
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/login" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/password/reset" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lupa Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="..examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>

          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>

          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong style="text-align:center">Copyright &copy; Pondok Pesantren Mahasiswa Universal 2019-2020 <a href="io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/js/demo.js"></script>
</body>
</html>
