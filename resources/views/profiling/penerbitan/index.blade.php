@extends('layouts.master')

@section('title')
PENERBITAN/MAJALAH
@endsection

@section('css')
<style>
  body {font-family: Arial;}
  
  /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }
  
  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }
  
  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }
  
  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #ccc;
  }
  
  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
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
                Jenis Penerbitan
                <a href=" {{ route('jenispenerbitan.create') }}"><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
              <tr>
                <th>Jenis Penerbitan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($jenispenerbitan as $d)
            <tr>              
            <td>{{$d->jenispenerbitan}}</td>
            <td>
              <form action="{{ route('jenispenerbitan.destroy',$d->id) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                      @csrf
                      @method('delete')
                      <a href="{{ route('jenispenerbitan.edit',$d->id) }}" class="btn btn-sm btn-warning">Edit</a>
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
            <h4 class="card-header d-flex justify-content-between align-items-center">Penerbitan
              <a href=" {{ route('penerbitan.create') }}"><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
            </h4>
            <br>

            
              {{-- <thead>
                <tr>
                  <th>Tahap Pencapaian</th>
                  <th>Markah</th>
                  <th>Jawatan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$d->pencapaian}}</td>
                  <td>{{$d->markah}}</td>
                  <td>{{$d->jawatan}}</td>
                  <td>
                    <form action="{{ route('penerbitan.destroy',$d->penerbitandtid) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                      @csrf
                      @method('delete')
                      <a href="{{ route('penerbitan.edit',$d->penerbitandtid) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach --}}

                <br>
                <br>
                <h2>Tabs</h2>
                  <p>Click on the buttons inside the tabbed menu:</p>

                  <div class="tab">

                    {{-- @foreach ($data as $d)
                    <button class="tablinks" onclick="openjawatan(event,'{{$d->jawatan}}')">{{$d->jawatan}}</button>
                    @endforeach  --}}
                    {{-- <button class="tablinks" onclick="openjawatan(event,'LEBIHAN ERROR')">ERROR</button> --}}

                    <button class="tablinks" onclick="openjawatan(event,'KETUA EDITOR')">KETUA EDITOR</button>
                    <button class="tablinks" onclick="openjawatan(event,'EDITOR')">EDITOR</button>
                    <button class="tablinks" onclick="openjawatan(event,'SETIAUSAHA')">SETIAUSAHA</button>
                    <button class="tablinks" onclick="openjawatan(event,'PENULIS ARTIKEL')">PENULIS ARTIKEL</button>
                    <button class="tablinks" onclick="openjawatan(event,'AHLI JAWATANKUASA')">AHLI JAWATANKUASA</button>

                  </div>

                  

                    <div id="KETUA EDITOR" class="tabcontent">
                      @include('profiling.penerbitan.info',['name' => 'KETUA EDITOR'])
                    </div>

                  <div id="EDITOR" class="tabcontent">
                    @include('profiling.penerbitan.info',['name' => 'EDITOR'])
                  </div>

                  <div id="SETIAUSAHA" class="tabcontent">
                    @include('profiling.penerbitan.info',['name' => 'SETIAUSAHA'])
                  </div>

                  <div id="PENULIS ARTIKEL" class="tabcontent">
                    @include('profiling.penerbitan.info',['name' => 'PENULIS ARTIKEL'])
                  </div>

                  <div id="AHLI JAWATANKUASA" class="tabcontent">
                    @include('profiling.penerbitan.info',['name' => 'AHLI JAWATANKUASA'])
                  </div>

                  <div id="LEBIHAN ERROR" class="tabcontent">
                    @include('layouts.infoerror')
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
  function openjawatan(evt, jawatan) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(jawatan).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
@endsection



