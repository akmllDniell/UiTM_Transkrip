<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MINI TRANSKRIP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../../dist/css/popup.css">
  <link rel="stylesheet" href="../../dist/css/popup2.css">
   
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li><a href="/logout">logout</a></li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo mencantikkan lagi kegemilangan -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Log In System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                AKTIVITI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="sukan" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SUKAN</p>
                </a>
              </li>
            </ul>
  
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="persatuan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PERSATUAN/KELAB</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kebudayaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KEBUDAYAAN</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              BERUNIFORM
              <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="pbsmm" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>PBSMM</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>PALAPES</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>PERTAHANAN AWAM</p>
              </a>
              </li>
              <li class="nav-item">
                <a href="suksis" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>SUKSIS</p>
                </a>
                </li>
              </ul>
            </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="anugerah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ANUGERAH / SIJIL</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="penerbitan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENERBITAN</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="khas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROGRAM KHAS HEP</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="programtertentu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROGRAM TERTENTU</p>
                </a>
              </li>
            </ul>
            <!-- {{-- @foreach($data as $d)
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/{{$d->NamaAktiviti}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{$d->NamaAktiviti}}</p>
                </a>
              </li>
            </ul>
            @endforeach --}} -->
          </li>
          <li class="nav-item">
            <a href="TahapPencapaian" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tahap Pencapaian
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Markah" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Markah
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="jawatan" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Jawatan
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Tahaphep" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tahap HEP
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        

              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Main page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Log in as : {{$user->name}}</h3>


          {{-- UNTUK ADMIN CEK PELAJAR --}}


          <div class="card-tools">
            
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        </div>

        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            {{-- PERTAMA MULA --}}

            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <center><h2><b>6969</b></h2></center>
                    {{-- <h3>{{$useradmin}}</h3> --}}
    
                    <p><center>JUMLAH ADMIN BERDAFTAR</center></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              {{-- PERTAMA HABIS --}}

              {{-- KEDUA MULA --}}
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <center><h2><b>9696</b></h2></center>
    
                    <p><center>JUMLAH PELAJAR DAFTAR</center></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              {{-- KEDUA HABIS --}}

              {{-- KETIGA MULA --}}
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><center><H2><b>420</b></H2></center></h3>
    
                    <p><center>JUMLAH USER</center></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              {{-- KETIGA HABIS --}}

              {{-- KEEMPAT MULA --}}
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3><center><H2><b>8</b></H2></center></h3>
    
                    <p><center>JUMLAH AKTIVITI</center></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              {{-- KEEMPAT HABIS --}}

              {{-- KALENDER BUKA  --}}
              <section class="col-lg-5 connectedSortable">
              <div class="card bg-gradient-success">
                <div class="card-header border-0">
  
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    kalendar 
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu" role="menu">
                       
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
              </div>
              </section>

              {{-- KALENDER TUTUP --}}
            </div>
          </div>

          
        </section>



        {{-- UNTUK ADMIN CEK PELAJAR TUTUP --}}





        <!-- /.card-body -->
        <div class="card-footer">
       
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      <form method="POST" action="{{url('/Simpan')}}" >
        @csrf
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="card card-info">
              
                
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
