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
                        <h1>Edit PERSATUAN/KELAB</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/kelab">PERSATUAN/KELAB</a></li>
                          <li class="breadcrumb-item active">Edit Jenis PERSATUAN/KELAB</li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
        </div>
    </div>
{{-- <h1>Tambah PERSATUAN/KELAB</h1> --}}
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
<form action="/jeniskelab/{{$datas->id}}" 
    method="post" >    
    @csrf
    @method('PATCH') 
    <div class="form-group">
        <label >Jenis PERSATUAN/KELAB</label>
        <input type="text" name="jeniskelab" value="{{$datas->jeniskelab}}" class="form-control @error('jeniskelab') is-invalid  @enderror">
        @error('jeniskelab')
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