@extends('layouts.master')


@section('title')
Anugerah Page
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

@endsection
  
