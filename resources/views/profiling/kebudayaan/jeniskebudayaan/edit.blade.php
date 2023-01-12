
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
                        <h1>Edit Jenis Anugerah/Sijil/Pingat</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/kebudayaan">Jenis Anugerah/Sijil/Pingat</a></li>
                          <li class="breadcrumb-item active">Edit Jenis Anugerah/Sijil/Pingat</li>
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
<form action="/jeniskebudayaan/{{$datas->id}}" 
    method="post" >    
    @csrf
    @method('PATCH') 
    <div class="form-group">
        <label >Jenis Anugerah/Sijil/Pingat</label>
        <input type="text" name="jeniskebudayaan" value="{{$datas->jeniskebudayaan}}" class="form-control @error('jeniskebudayaan') is-invalid  @enderror">
        @error('jeniskebudayaan')
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
