@extends('layouts.master')

@section('title')
Markah
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
                    <h1>Markah</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>
                      <li class="breadcrumb-item active">Markah</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
    

        <div class="card">
           
        <div class="card-body">
            <h4 class="card-header d-flex justify-content-between align-items-center">Markah
                <a href=" {{ route('markah.create') }}"><button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-plus-circle"></i></button></a>
            </h4>
             
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
            @endif
            <table id="dtmarkah" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Markah</th>
                    <th>Action</th>                        
                </tr>
                </thead>

                <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->markah}}</td>
                    <td>
                        <form action="{{ route('markah.destroy',$d->id) }}" method="post" onsubmit="return confirm('Are sure to delete?')">
                            @csrf
                            @method('delete')
                            <a href="{{ route('markah.edit',$d->id) }}" class="btn btn-sm btn-warning">Edit</a>
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
        $('#dtmarkah').DataTable({
            processing: true,
            responsive: true,
            length:20,           
            dom: 'Bfrtip',
            "buttons": ["copy", "csv", "print"]
        }).buttons().container().appendTo('#dtmarkah_wrapper .col-md-6:eq(0)');
    });
</script>

@endsection