
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
                        <h1>Add ANUGERAH/SIJIL KECEMRLANGAN</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/sukan">ANUGERAH/SIJIL KECEMRLANGAN</a></li>
                          <li class="breadcrumb-item active">Add ANUGERAH/SIJIL KECEMRLANGAN</li>
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
<center>    
  <label>DATA ASAL ANDA</label>
</center>
<div style="margin-top: 2%" >
  <center>    
    <div class="form-group" style="width:50%; float: left; padding: 10px;  ">
      <input class="form-control" type="text" value="{{ $data->pencapaian }}" readonly>    
    </div>
    <div class="form-group" style="width:50%; float: left; padding: 10px;  "> 
      <input class="form-control" type="text" value="{{ $data->markah }}" readonly>
    </div>
  </center>
</div>

<form action="/sijil/{{$datas->id}}" method="post" >
  @csrf
  @method('PATCH') 
    <center>
    <div class="form-group" style="width:50%; float: left; padding: 20px; margin-top:5%" >
       
        <label>PILIH ANUGERAH/SIJIL KECEMRLANGAN ANDA</label>
        <select id="idTP" name="idTP" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">        
            @foreach($tahappencapaian as $d)
            <option value="{{$d->id}}">{{$d->pencapaian}}</option>            
            @endforeach            
        </select>
    
    </div>
    <div class="form-group" style="width:50%; float: left; padding: 20px; margin-top:5% ">
        
        <label>PILIH MARKAH ANDA</label>
        <select id="idmarkah" name="idmarkah" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">            
            @foreach($markah as $m)
            <option value="{{$m->id}}">{{$m->markah}}</option>            
            @endforeach
        </select>        
    
    </div>
    <button type="submit" class="btn btn-primary my-3">Update</button>
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