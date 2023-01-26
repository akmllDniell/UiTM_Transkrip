
@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
            
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1>Add Jenis Program Tertentu </h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/programtertentu">Jenis Program tertentu </a></li>
                          <li class="breadcrumb-item active">Jenis Program tertentu </li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
        </div>
    </div>
<div class="card">
    <div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $e )
        {{$e}}
        <br>
    @endforeach
</div>
@endif

<form action="/jenisprogramtertentu" method="post">
    @csrf

    <div class="form-group">
        <label >Jenis Program tertentu </label>
        <input style="text-transform: uppercase" type="text" name="jenisprogramtertentu" value="{{old('jenisprogramtertentu')}}" class="form-control @error('jenisprogramtertentu') is-invalid  @enderror">
        @error('jenisprogramtertentu')
        <span class="invalid-feedback">
            {{$message}}
        </span>
        @enderror
        
    </div>    
    <button type="submit" class="btn btn-primary my-3">Simpan</button>
</form>
</div></div>
</div>
@endsection


@section('css')

@endsection


@section('script')

@endsection
