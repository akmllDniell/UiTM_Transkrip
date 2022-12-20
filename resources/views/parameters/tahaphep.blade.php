@extends('layouts.master')

@section('title')
Tahap Hep
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
              <li class="breadcrumb-item"><a href="#">home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tahap HEP</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tahap HEP</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $d)
                  <tr>
                  <td>{{$d->tahaphepid}}</td>
                  <td>{{$d->tahaphepnama}}</td>
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
            <form method="POST" action="{{url('/SimpanTahaphepnama')}}" >
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
                      <div class="card-header">
                        <h3 class="card-title">Tahap HEP</h3>
                      </div>
                      <div class="card-body">
                        <!-- Color Picker -->                
                        <div class="form-group">
                            <label>Tahap HEP:</label>
                            <input name="tahaphepnama" id="tahaphepnama" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
                          </div>
                        <!-- /.form group -->
        
                        <!-- Color Picker -->                

                          <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                          <!-- /.input group -->
                        </div>
                        </form>
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
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection


@section('script')
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
@endsection

