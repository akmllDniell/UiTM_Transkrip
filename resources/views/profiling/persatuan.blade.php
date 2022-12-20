@extends('layouts.master')

@section('title')
Persatuan Page
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
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
    <button id="btnOpenForm">Open Form</button>
    <div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
    <form method="POST" action="{{url('/SimpanJenisPersatuan')}}" >
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">PERSATUAN</h3>
            </div>          
              <!-- Color Picker -->
              <div class="form-group">
                <label>Jenis Persatuan:</label>
                <input name="persatuan" id="persatuan" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
              </div>

                <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                <!-- /.input group -->              
              </form>
            </div>

            </div>
            </div>
        <!-- /.card-header -->
        
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Jenis  </th>
            </tr>
            </thead>
            <tbody>
              @foreach($jenispersatuan as $d)
            <tr>
            <td>{{$d->namapersatuan}}</td>
      @endforeach
              {{-- <td>Other browsers</td>
              <td>All others</td>
              <td>-</td> --}}
            </tr>
            </tbody>

          </table>
          <form method="POST" action="{{url('/SimpanJenisPersatuan')}}" >
            @csrf
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Persatuan</h3>
            </div>
            <div class="card-body">
              <!-- Color Picker -->
              <div class="form-group">
                <label>Jenis persatuan:</label>
                <input name="persatuan" id="persatuan" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
              </div>

                <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                <!-- /.input group -->
              </div>
              </form>
              <!-- /.form group -->
</div>
        </div>
        <!-- /.card-body -->
      </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tahap Pencapaian dan Markah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> </th>
                    <th colspan="6" >Tahap</th>
                  </tr>
                 
                    
                  <tr>
                    
                    <th>Jawatan</th>  
                    @foreach($jawatan as $j)                  
                    <th>{{$j->jawatan}}</th>
                    @endforeach
                  </tr>
                  <tbody>
                    @foreach($tahappencapaian as $d)  
                  <tr>
                  <td>{{$d->namatahap}}</td>
                  @foreach ($data as $e )
                                   
                  @if (($d->tahapid == $e->tahapid))
                    
                      <td>{{$e->markah}}</td>
                   
                    
                    @endif
                
                    @endforeach
                  @endforeach
                
                
                  
          </tr>
                    {{-- <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td> --}}
                
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>







            
            <!-- /.card -->
            <form method="POST" action="{{url('/Simpanjawatan')}}" >
                @csrf
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">TAHAP PENCAPAIAN DAN MARKAH SUKAN</h3>
                  </div>
                  <div class="card-body">
                    <!-- Color Picker -->
                    <div class="form-group">
                      <label>Tahap dan Markah Sukan:</label>
                      <select id="TPpersatuan" name="TPpersatuan">
                        @foreach($tahappencapaian as $d)
                                <option value="{{$d->tahapid}}">{{$d->namatahap}}</option>            
                          @endforeach
                      </select>
                      <select id="jawatanPersatuan" name="jawatanPersatuan">
                        @foreach($jawatan as $d)
                                <option value="{{$d->jawatanid}}">{{$d->jawatan}}</option>            
                          @endforeach
                      </select>
                      <select id="MarkahPersatuan" name="MarkahPersatuan">
                        @foreach($markah as $d)
                                <option value="{{$d->markahid}}">{{$d->markah}}</option>            
                          @endforeach
                      </select>
                    </div>
      
                      <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                      <!-- /.input group -->
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
@endsection

