@extends('layouts.master')


@section('title')
Main Page
@endsection


@section('content')
    
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
      <table>
        <tr>
          <td>
              <left><img src="https://logos-download.com/wp-content/uploads/2017/11/UiTM_Universiti_Teknologi_MARA_logo-700x295.png" alt="UiTM logo" width="337" height="160" ></left>
          </td>

          <td>&nbsp;</td>

          <td>
              <div class="line"></div>
          </td>
          
          <td >
            {{-- <table>
              <tr> --}} 
                
                 <td >
                  
                  <div class="typewriter-container">
                    <h1 class="typewriter" style="--n:57"><span>SELAMAT DATANG KE WEBSITE</span> <br>
                      UiTM MINI TRANSKRIP</span></h1></div>
                 
                </td>
        
                
             {{-- </tr>
           </table> --}}
          </td>
       
         
        </tr>
      </table>
      
<br>
<br>
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
                    <center><h2><b>{{ $userCount }}</b></h2></center>
                  
    
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
  






@endsection

@section('css')

<style>

.typewriter {
  
  display: inline;
  color:#0000;
  font-size: 60px;
  background:
    linear-gradient(-90deg,#080909 5px,#0000 0) 10px 0,
    linear-gradient(#0c0c0c 0 0) 0 0;
  background-size:calc(var(--n)*1ch) 200%;
  -webkit-background-clip:padding-box,text;
  background-clip:padding-box,text;
  background-repeat:no-repeat;
  animation: 
 
   writetext calc(var(--n)*.1s) steps(var(--n)) forwards;
}

@keyframes writetext {
  from {background-size:0 200%}
}


</style>
    
@endsection