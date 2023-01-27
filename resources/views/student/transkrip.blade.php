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
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-cart text-info text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="ni ni-credit-card text-warning text-gradient"></i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
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
  <div style="margin-top: 5%">
    <a href="/studentform" target="popout" onclick="createPopupWin('/studentform','studentform','width=600,height=600'); return false;" class="btn btn-primary btn-md active px-5 text-white" target="_blank" role="button" aria-pressed="true">
        Mohon Transkrip</a>
  </div>
</center>

@endsection