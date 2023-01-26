
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
                        <h1>edit Jawatan uniform</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/jawatanuniform">Jawatan Badan Uniform</a></li>
                          <li class="breadcrumb-item active">Edit Jawatan uniform</li>
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

<form action="/jawatanuniform/{{$datas->id}}" method="post" >
  @csrf
  @method('PATCH') 
    
      <div class="form-group">
        <label >Nama Jawatan Uniform</label>
        <input style="text-transform: uppercase" type="text" name="jawatanuniform" value="{{$data->jawatanuniform}}" class="form-control @error('jawatanuniform') is-invalid  @enderror">
        @error('jawatanuniform')
        <span class="invalid-feedback">
            {{$message}}
        </span>
        @enderror
        
    </div>    
   
        
        <label>Pilih Badan Beruniform untuk dikemaskini</label>
        <select id="badanuniform" name="badanuniform" class="select2 select2-hidden-accessible" style="width: 100%;" placeholder="Pilccih Uniform">            
          <option value="{{ $data->idbu }}" selected>{{ $data->badanuniform }}</option>   
            @foreach($badanuniform as $m)
            @if ($m->badanuniform != $data->badanuniform )
            <option value="{{$m->id}}">{{$m->badanuniform}}</option>    
            @endif         
            @endforeach
        </select>        

    <button type="submit" class="btn btn-primary my-3">Update</button>

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
