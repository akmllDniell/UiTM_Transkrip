
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
                        <h1>Edit Jenis Program PADU </h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/padu">Jenis Program PADU </a></li>
                          <li class="breadcrumb-item active">Edit Jenis Program PADU </li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
        </div>
    </div>
{{-- <h1>Tambah Tahap Pencapaian</h1> --}}
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $e )
        {{$e}}
        <br>
    @endforeach
</div>
@endif
<div class="card">
    <div class="card-body">
<form action="/jenispadu/{{$datas->id}}" 
    method="post" >    
    @csrf
    @method('PATCH') 
    <div class="form-group">
        <label >Jenis Program PADU /label>
        <input type="text" name="padu" value="{{$datas->padu}}" class="form-control @error('jenispadu') is-invalid  @enderror">
        @error('jenispadu')
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
