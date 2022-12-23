@extends('layouts.master')

@section('title')
Jawatan
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
                    <h1>Jawatan</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>
                      <li class="breadcrumb-item active">Jawatan</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
    

        <div class="card">
           
        <div class="card-body">
            <h4 class="card-header d-flex justify-content-between align-items-center">Jawatan 
                <a href=" {{ route('jawatan.create') }}"><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
            </h4>
             
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
            @endif
            <table id="dtjawatan" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Jawatan</th>
                    <th>Singkatan</th>
                    <th>Action</th>                        
                </tr>
                </thead>

                <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->jawatan}}</td>
                    <td>{{$d->singkatan}}</td>
                    <td>
                        <form action="{{ route('jawatan.destroy',$d->id) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                            @csrf
                            @method('delete')
                            <a href="{{ route('jawatan.edit',$d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div></div>
</div>
@endsection

@section('css')
@endsection


@section('script')
<script>
    $(function() {
        $('#dtjawatan').DataTable({
            processing: true,
            responsive: true,
            length:20,           
            dom: 'Bfrtip',
            "buttons": ["copy", "csv", "print"]
        }).buttons().container().appendTo('#dtjawatan_wrapper .col-md-6:eq(0)');
    });
</script>

@endsection