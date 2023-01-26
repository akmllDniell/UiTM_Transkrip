
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
                        <h1>Add Jawatan</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/jawatan">Jawatan</a></li>
                          <li class="breadcrumb-item active">Add Jawatan</li>
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

<form action="/jawatan" method="post">
    @csrf

    <div class="form-group">
        <label >Nama Jawatan</label>
        <input style="text-transform: uppercase" type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid  @enderror">
        @error('name')
        <span class="invalid-feedback">
            {{$message}}
        </span>
        @enderror
        <label >Singkatan</label>
        <input style="text-transform: uppercase" type="text" name="singkatan" value="{{old('singkatan')}}" class="form-control @error('singkatan') is-invalid  @enderror">
        @error('singkatan')
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
