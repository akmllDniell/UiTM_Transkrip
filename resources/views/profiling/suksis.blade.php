@extends('layouts.master')

@section('title')
Suksi Page
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

 
        <!-- /.card-header -->
        
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Jawatan disadang

                <div class="btn"> 
                    <button id="btnOpenForm" class="btn"><i class="fa fa-plus-square" style="font-size:35px; color:green;"></i></button>
        <div class="form-popup-bg">
      <div class="form-container">
        <button id="btnCloseForm" class="close-button">X</button>
        <form method="POST" action="{{url('/SimpanJawatansuksis')}}" >
                @csrf
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Jawatan SUKSIS</h3>
                </div>          
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Jawatan SUKSIS:</label>
                    <input name="jawatansuksis" id="jawatansuksis" type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
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
              @foreach($jawatansuksis as $d)
            <tr>
            <td>{{$d->jawatansuksis}}</td>
      @endforeach
              {{-- <td>Other browsers</td>
              <td>All others</td>
              <td>-</td> --}}
            </tr>
            </tbody>

          </table>
          
              <!-- /.form group -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jawatan SUKSIS dan Markah

                <div class="btn"> 
                    <button id="btnOpenForm1" class="btn"><i class="fa fa-plus-square" style="font-size:35px; color:green;"></i></button>
                    <div class="form-popup-bg1">
                    <div class="form-container1">
                <button id="btnCloseForm1" class="close-button1">X</button>
       
                    <form method="POST" action="{{url('/SimpanJawatandanMarkahsuksis')}}" >
                    @csrf
                    <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">JAWATAN DAN MARKAH SUKSIS</h3>
                    </div>
                    <div class="card-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <label>Jawatan dan Markah SUKSIS:</label>
                        <select id="TPjawatan" name="TPjawatan">
                          @foreach($jawatansuksis as $d)
                                  <option value="{{$d->jawatansuksisid}}">{{$d->jawatansuksis}}</option>            
                            @endforeach
                          
                        </select>
                        <select id="Markahsuksis" name="Markahsuksis">
                          @foreach($markah as $d)
                                  <option value="{{$d->markahid}}">{{$d->markah}}</option>            
                            @endforeach
                        </select>
                      </div>
        
                        <button type="submit" class="btn btn-block bg-gradient-success">SAVE</button>
                        <!-- /.input group -->
                      </div>
               
  
          
                        
                        
                          </div>
                          </form>
                    </div>
             
                


                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Jawatan</th>
                    <th>Markah</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $d)
                  <tr>
                  <td>{{$d->jawatansuksis}}</td>
                  <td>{{$d->markah}}</td>
                  
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
