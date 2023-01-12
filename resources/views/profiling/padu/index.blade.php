@extends('layouts.master')

@section('title')
Program PADU Page
@endsection

@section('content')
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
                Program PADU        
                <a href=" {{ route('jenispadu.create') }}"><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
              <tr>
                <th>Jenis Program PADU</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($jenispadu as $d)
            <tr>              
            <td>{{$d->jenispadu}}</td>
            <td>
              <form action="{{ route('jenispadu.destroy',$d->id) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                      @csrf
                      @method('delete')
                      <a href="{{ route('jenispadu.edit',$d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
            </td>
            @endforeach             
            </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <div class="card">
      <div class="card-header">
        <!-- Content Header (Page header) -->
        <div class="card">
          <div class="card-body">
            <h4 class="card-header d-flex justify-content-between align-items-center">Program PADU
              <a href=" {{ route('padu.create') }}"><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
            </h4>
            <br>

            <table id="dtUniform" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Tahap Pencapaian</th>
                  <th>Markah</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$d->pencapaian}}</td>
                  <td>{{$d->markah}}</td>
                  <td>
                    <form action="{{ route('padu.destroy',$d->id) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                      @csrf
                      @method('delete')
                      <a href="{{ route('padu.edit',$d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
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