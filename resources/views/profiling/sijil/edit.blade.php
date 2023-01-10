
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
                        <h1>Add 
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
                        <h1>Add ANUGERAH/SIJIL KECEMRLANGAN/PINGAT</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/sukan">ANUGERAH/SIJIL KECEMRLANGAN/PINGAT</a></li>
                          <li class="breadcrumb-item active">Add ANUGERAH/SIJIL KECEMRLANGAN/PINGAT</li>
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

<form action="/sukan" method="post">
    @csrf
    <center>
    <div class="form-group" style="width:50%; float: left; padding: 20px;  ">
       
        <label>PILIH ANUGERAH/SIJIL KECEMRLANGAN/PINGAT ANDA</label>
        <select id="TP" name="TP" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">        
            @foreach($tahappencapaian as $d)
            <option value="{{$d->id}}">{{$d->pencapaian}}</option>            
            @endforeach
            <option value="{{$data->idTP}}" selected>ddddd</option>
        </select>
    
    </div>
    <div class="form-group" style="width:50%; float: left; padding: 20px; ">
        
        <label>PILIH MARKAH ANDA</label>
        <select id="markah" name="markah" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">
            <option value="{{$data->idmarkah}}" selected>hahaha</option>
            @foreach($markah as $m)
            <option value="{{$m->id}}">{{$m->markah}}</option>            
            @endforeach
        </select>        
    
    </div>
    <button type="submit" class="btn btn-primary my-3">Simpan</button>
</center>
</form>
</div></div>
</div>
@endsection


@section('css')

@endsection


@section('script')
<script src="../../plugins/select2/js/select2.full.min.js">
</script> 
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
@endsection
</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/sukan">sukan</a></li>
                          <li class="breadcrumb-item active">Add sukan</li>
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

<form action="/sukan" method="post">
    @csrf
    <center>
    <div class="form-group" style="width:50%; float: left; padding: 20px;  ">
       
        <label>PILIH TAHAP PENCAPAIAN ANDA</label>
        <select id="TP" name="TP" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">        
            @foreach($tahappencapaian as $d)
            <option value="{{$d->id}}">{{$d->pencapaian}}</option>            
            @endforeach
            <option value="{{$data->idTP}}" selected>ddddd</option>
        </select>
    
    </div>
    <div class="form-group" style="width:50%; float: left; padding: 20px; ">
        
        <label>PILIH MARKAH ANDA</label>
        <select id="markah" name="markah" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">
            <option value="{{$data->idmarkah}}" selected>hahaha</option>
            @foreach($markah as $m)
            <option value="{{$m->id}}">{{$m->markah}}</option>            
            @endforeach
        </select>        
    
    </div>
    <button type="submit" class="btn btn-primary my-3">Simpan</button>
</center>
</form>
</div></div>
</div>
@endsection


@section('css')

@endsection


@section('script')
<script src="../../plugins/select2/js/select2.full.min.js">
</script> 
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
@endsection
