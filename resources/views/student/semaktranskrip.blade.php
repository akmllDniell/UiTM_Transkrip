@extends('layouts.studentmaster')

@section('title')
    Semak Transkrip
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Semak Mini Transkrip</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pelajar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Disahkan oleh</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarikh Permohonan</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>                                                   
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{Auth::user()->name}}</h6>
                          <p class="text-xs text-secondary mb-0">{{Auth::user()->email}}</p>
                        </div>
                      </div>
                    </td>
                    @if ($data->status == "ongoing")
                    <td>
                      <p class="text-xs font-weight-bold mb-0"></p>                      
                    </td>
                    @else
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Admin</p>                      
                    </td>
                    @endif     
                    @if ($data->status == "rejected")
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-danger">Ditolak</span>
                    </td>
                    @elseif($data->status == "completed")
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Disahkan</span>
                    </td>
                    @else                    
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Dalam Proses</span>
                    </td>
                    @endif                                   
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$data->created_at}}</span>
                    </td>
                    @if ($data->status == "completed")
                    <td class="align-middle">
                      <a  href=" {{ route('showstudent',$data->userid) }}" class="text-primary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Cetak
                      </a>
                    </td>
                    @else
                    <td class="align-middle">
                      <a href="/transkrip" class="text-secondary font-weight-bold text-xs" >                      
                      </a>
                    </td>
                    @endif                   
                  </tr>                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
@endsection