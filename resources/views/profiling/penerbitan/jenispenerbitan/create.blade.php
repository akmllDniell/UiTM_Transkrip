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
                        <h1>Add PENERBITAN/MAJALAH</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/kelab">Jenis PENERBITAN/MAJALAH</a></li>
                          <li class="breadcrumb-item active">Jenis PENERBITAN/MAJALAH</li>
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

<form action="/jenispenerbitan" method="post">
    @csrf

    <div class="form-group">
        <label >Jenis Penerbitan/Majalah</label>
        <input type="text" name="jenispenerbitan" value="{{old('jenispenerbitan')}}" class="form-control @error('jenispenerbitan') is-invalid  @enderror">
        @error('jenispenerbitan')
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