
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
                        <h1>Edit Jenis Sukan</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/sukan">Sukan</a></li>
                          <li class="breadcrumb-item active">Edit Jenis sukan</li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
        </div>
    </div>
{{-- <h1>Tambah Markah</h1> --}}
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
<form action="/jenissukan/{{$datas->id}}" 
    method="post" >    
    @csrf
    @method('PATCH') 
    <div class="form-group">
        <label >Jenis sukan</label>
        <input type="text" name="jenissukan" value="{{$datas->jenissukan}}" class="form-control @error('updatejenissukan') is-invalid  @enderror">
        @error('updatejenissukan')
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
