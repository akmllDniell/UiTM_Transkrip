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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
    

            
        <!-- /.card-header -->
        
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Jenis Anugerah
                <div class="btn"> 
                  <button id="btnOpenForm" class="btn"><i class="fa fa-plus-square" style="font-size:35px; color:green;"></i></button>
      <div class="form-popup-bg">
    <div class="form-container">
      <button id="btnCloseForm" class="close-button">X</button>
      <form method="POST" action="{{url('/SimpanJenisAnugerah')}}" >
              @csrf
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Anugerah</h3>
              </div>          
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Jenis Anugerah:</label>
                  <input name="jenisanugerah" id="jenisanugerah" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
                </div>
                  <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                  

                  <!-- /.input group -->              
                </form>
              </div>

              
             
              </div>
              </div>

              
                
              </th>
            </tr>
            </thead>
            <tbody>
              @foreach($jenisanugerah as $d)
            <tr>
            <td>{{$d->jenisanugerah}}</td>
      @endforeach
              {{-- <td>Other browsers</td>
              <td>All others</td>
              <td>-</td> --}}
            </tr>
            </tbody>

          </table>
          <form method="POST" action="{{url('/Simpananugerah')}}" >
            @csrf
         

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tahap Pencapaian dan markah
                 
                  <div class="btn"> 
                    <button id="btnOpenForm1" class="btn"><i class="fa fa-plus-square" style="font-size:35px; color:green;"></i></button>
        <div class="form-popup-bg1">
      <div class="form-container1">
        <button id="btnCloseForm1" class="close-button1">X</button>
       
            
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">TAHAP PENCAPAIAN DAN MARKAH ANUGERAH</h3>
                    </div>
                    <div class="card-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Tahap dan Markah Anugerah:</label>
                        <select id="TPanugerah" name="TPanugerah">
                          @foreach($tahappencapaian as $d)
                                  <option value="{{$d->tahapid}}">{{$d->namatahap}}</option>            
                            @endforeach
                          {{-- <option value="2">GRASSY COURT</option>
                          <option value="3">CAGE COURT</option>
                          <option value="4">GOLDY COURT</option>
                          <option value="5">OUTDOOR COURT</option> --}}
                        </select>
                        <select id="MarkahAnugerah" name="MarkahAnugerah">
                          @foreach($markah as $d)
                                  <option value="{{$d->markahid}}">{{$d->markah}}</option>            
                            @endforeach
                        </select>
                      </div>
        
                        <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                        <!-- /.input group -->
                      </form>
                      </div>
                  {{-- @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif --}}
  
          
                <div class="card card-info">
                        {{-- <div class="card-header">
                          <h3 class="card-title">SUKAN</h3>
                        </div>
                        <div class="card-body">
                          <!-- Color Picker -->
                          <div class="form-group">
                            <label>Jenis Sukan:</label>
                            <input name="AktivitiCode" id="AktivitiCode" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
                          </div>
                          <div class="form-group">
                              <label>Tahap pencapaian:</label>
                              <input name="AktivitiCode" id="AktivitiCode" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
                            </div>
                          <!-- /.form group -->
          
                          <!-- Color Picker -->                
                          <div class="form-group">
                            <label>Markah:</label>
          
                            <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                              <input name="NamaAktiviti" id="NamaAktiviti" type="text" class="form-control" >
          
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                              </div>
                            </div> --}}
                            {{-- <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button> --}}
                            <!-- /.input group -->
                          </div>
                        
                </div>
                </div>
                  

        

                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tahap</th>
                    <th>Markah</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $d)
                  <tr>
                  <td>{{$d->namatahap}}</td>
                  <td>{{$d->markah}}</td>
                  <td><button onclick="window.location='editTPManugerah/{{$d->anugerahid}}'">edit</button></td>
            @endforeach
                    {{-- <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td> --}}
                  </tr>
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>







            
            <!-- /.card -->
        
                        <!-- /.form group -->
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- SCRIPT UNTUK POPUP FORM -->
<script>
  function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });
</script>

<script>
  function closeForm1() {
  $('.form-popup-bg1').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm1').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg1').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg1').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg1') || $(event.target).is('#btnCloseForm1')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });
</script>
<!-- END SCRIPT UNTUK POPUP FORM -->
</body>
</html>
