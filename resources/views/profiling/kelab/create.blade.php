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
                        <h2>Add Penerbitan/Majalah</h2>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/kelab">Persatuan/Kelab</a></li>
                          <li class="breadcrumb-item active">Add Persatuan/Kelab</li>
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








<form action="/kelab" method="post">
    @csrf
    <center>
    <div class="form-group" style="width:50%; float: left; padding: 20px;  ">
       
        <label>PILIH Persatuan/Kelab ANDA</label>
        <select id="TP" name="TP" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">
            @foreach($tahappencapaian as $d)
            <option value="{{$d->id}}">{{$d->pencapaian}}</option>            
            @endforeach
        </select>
    
    </div>
    <div class="form-group" style="width:50%; float: left; padding: 20px; ">
        
        <label>PILIH MARKAH ANDA</label>
        <select id="markah" name="markah" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">
            @foreach($markah as $m)
            <option value="{{$m->id}}">{{$m->markah}}</option>            
            @endforeach
        </select>        
    
    </div>
    <div class="form-group" style="width:50%; float: left; padding: 20px; ">
        
      <label>PILIH JAWATAN ANDA</label>
      <select id="jawatan" name="jawatan" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">
          @foreach($jawatan as $j)
          <option value="{{$j->id}}">{{$j->jawatan}}</option>            
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