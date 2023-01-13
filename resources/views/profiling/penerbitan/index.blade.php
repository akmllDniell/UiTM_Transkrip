@extends('layouts.master')

@section('title')
PENERBITAN/MAJALAH
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

            <table id="dtpenerbitan" class="table table-bordered table-striped">
              <thead>
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
                    <form action="{{ route('penerbitan.destroy',$d->id) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                      @csrf
                      @method('delete')
                      <a href="{{ route('penerbitan.edit',$d->id) }}" class="btn btn-sm btn-warning">Edit</a>
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