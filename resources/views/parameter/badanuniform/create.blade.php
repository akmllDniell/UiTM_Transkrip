
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
                        <h1>Tambah Badan Beruniform</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/badanuniform">Badan Beruniform</a></li>
                          <li class="breadcrumb-item active">Tambah Badan Beruniform</li>
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

<form action="/badanuniform" method="post">
    @csrf

    <div class="form-group">
        <label >Nama Uniform</label>
        <input type="text" name="uniform" value="{{old('uniform')}}" class="form-control @error('uniform') is-invalid  @enderror">
        @error('uniform')
        <span class="invalid-feedback">
            {{$message}}
        </span>
        @enderror
        <label >Singkatan</label>
        <input type="text" name="singkatanuniform" value="{{old('singkatanuniform')}}" class="form-control @error('singkatanuniform') is-invalid  @enderror">
        @error('singkatanuniform')
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
