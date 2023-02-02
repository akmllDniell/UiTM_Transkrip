@extends('layouts.master')

@section('title')
SENARAI PELAJAR Page
@endsection

@section('content')

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pelajar (Pemohonan Transkrip)</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Pelajar</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
    <!-- /.content-wrapper -->
    <div class="card">
      <div class="card-header">
        <!-- Content Header (Page header) -->
        <div class="card">
          <div class="card-body">
            <h4 class="card-header d-flex justify-content-between align-items-center">SENARAI PELAJAR</h4>            
            @if ($message = Session::get('decline'))
            <div class="alert alert-danger">
              <p>{{ $message }}</p>
            </div>
            @elseif ($message = Session::get('accept'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <table id="dtUniform" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No Pelajar</th>
                  <th>Nama Pelajar</th>
                  <th>Tarikh Pemohonan</th>
                  <th>Status</th>
                  <th>Transkrip Pelajar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$d->username}}</td>
                  <td>{{$d->name}}</td>
                  <td>{{$d->tarikh}}</td>                                                      
                  <td>
                    @if ($d->status == "rejected")
                  <button type="button" class="btn btn-danger" >
                    Permohonan Ditolak
                  </button>
                  @elseif ($d->status == "completed")
                  <button type="button" class="btn btn-success" >
                    Disahkan
                  </button>   
                  @else
                  <button type="button" class="btn btn-warning" >
                    Belum disahkan
                  </button>             
                  @endif                  
                </td>                                 
                  <td><a href="{{ route('showstudent',$d->userid) }}">Mini transkrip pelajar</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
  
@endsection

@section('hh')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>SENARAI PELAJAR</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Senarai Pelajar</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <h4 class="card-header d-flex justify-content-between align-items-center">
                SENARAI PELAJAR        
                
                <table id="dtUniform" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><b>NAMA PELAJAR</b></th>
                    <th><b>NOMBOR MARTIK</b></th>
                    <th><b>Action</b></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $d)
                    <tr>
                    <td><center>{{$d->name}}</center></td>
                    <td><center>{{$d->userid}}</center></td>
                    <td><center><a href="{{ route('showstudent',$d->userid) }}" class="button-88" role="button">SHOW DATA</a></center></td>
                    {{-- <td>{{$d->badanuniform}}</td>showstudent
                    <td>{{$d->singkatan}}</td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                

            
                      
            </tr>
            
          </table>
          </div>
        </div>
      </div>
    </div>

      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
@endsection


@section('script')
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
<script src="../../plugins/select2/js/select2.full.min.js">
</script> 
<script>
    $(function () {
      $('.select2').select2()
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('css')

  
@endsection