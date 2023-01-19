@extends('layouts.master')

@section('title')
UNIFORM PAGE
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Uniform</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/uniform">Uniform</a></li>
                            <li class="breadcrumb-item active">{{$uni->badanuniform}}</li>
                        </ol>
                    </div>                 
                </div>
                {{-- page uniform selected by admin --}}
                <div id="uniform" class="card" style="display: ">
                  <div class="card-header">
                    <!-- Content Header (Page header) -->
                    <div class="card">
                      <div class="card-body">
                        <h4 id="" class="card-header d-flex justify-content-between align-items-center">{{$uni->badanuniform}}
                          <a href="/uniform/add/{{$uni->id}}" ><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
                        </h4>
                        <br>
                      @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                      @endif
                      @if ($message = Session::get('delete'))
                      <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                      </div>
                      @endif
                        <table id="dtUniform" class="table table-bordered table-striped">
                          <thead>
                            <tr>       
                              <th>Badan Uniform</th>                       
                              <th>Markah</th>                              
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $d)
                            <tr>                     
                              <td>{{$d->jawatanuniform}}</td>         
                              <td>{{$d->markah}}</td>                            
                              <td>
                                <form action="{{ route('uniform.destroy',$d->iduniform) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                                  @csrf
                                  @method('delete')
                                  <a href="{{ route('uniform.edit',$d->iduniform) }}" class="btn btn-sm btn-warning">Edit</a>
                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </section>
            <!--END Content Header-->
        </div>
    </div>
</div>

    
@endsection