@extends('layouts.studentmaster')

@section('title')
Transkrip
@endsection

@section('content')
<center>
<div class="col-lg-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h6>Tatacara membuat Mini Transkrip</h6>
        <p class="text-sm">
          <i class="fa fa-user " aria-hidden="true"></i>
          <span class="font-weight-bold">By</span> UiTM developers
        </p>
      </div>
      <div class="card-body p-3">
        <div class="timeline timeline-one-side">
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-bell-55 text-success text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Pelajar Perlu Mengisi kesemua form yang disediakan</h6>              
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-html5 text-danger text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Pelajar Perlu memilih aktiviti dengan Tahap Pencapaian tertinggi</h6>            
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-cart text-info text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Menunggu kelulusan transkrip daripada admin</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">2 hingga 3 hari bekerja</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-credit-card text-warning text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Pelajar boleh mencetak transkrip selepas mendapat kelulusan</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">sekiranya permohonan gagal/ditolak sila contact admin</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script>
        function createPopupWin(pageURL, pageTitle,
                    popupWinWidth, popupWinHeight) {
            var left = (screen.width - popupWinWidth) / 2;
            var top = (screen.height - popupWinHeight) / 4;
             
            var myWindow = window.open(pageURL, pageTitle,
                    'resizable=yes, width=' + popupWinWidth
                    + ', height=' + popupWinHeight + ', top='
                    + top + ', left=' + left);
        }
    </script>
    @if (Auth::user()->countreq >= '1' )
  <div style="margin-top: 5%">
    <a href="/studentform" target="popout" onclick="createPopupWin('/studentform','studentform','width=600,height=600'); return false;" class="btn btn-primary btn-md active px-5 text-white disabled" target="_blank" role="button" aria-pressed="true">
        Mohon Transkrip</a>
        <p>***Anda telah memohon transkrip, sila contact admin jika terdapat sebarang kesilapan</p>
  </div>
  @else
  <div style="margin-top: 5%">
    <a href="/studentform" target="popout" onclick="createPopupWin('/studentform','studentform','width=600,height=600'); return false;" class="btn btn-primary btn-md active px-5 text-white" target="_blank" role="button" aria-pressed="true">
        Mohon Transkrip</a>
  </div>
  @endif
</center>

@endsection