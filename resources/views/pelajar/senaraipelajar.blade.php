@extends('layouts.master')

@section('title')
SENARAI PELAJAR Page
@endsection

@section('css')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

/* CSS */
.button-88 {
  display: flex;
  align-items: center;
  font-family: inherit;
  font-weight: 500;
  font-size: 10px;
  padding: 0.7em 1.4em 0.7em 1.1em;
  color: white;
  /* background: #ad5389; */
  background: linear-gradient(0deg, rgba(20,167,62,1) 0%, rgba(102,247,113,1) 100%);
  border: none;
  box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
  letter-spacing: 0.05em;
  border-radius: 20em;
  cursor: pointer;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-88:hover {
  box-shadow: 0 0.5em 1.5em -0.5em #000c0498;
}

.button-88:active {
  box-shadow: 0 0.3em 1em -0.5em #000c0498;
}

</style>
@endsection

@section('content')
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
@endsection