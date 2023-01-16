  
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo mencantikkan lagi kegemilangan -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Log In System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                AKTIVITI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">                
                <a href="/sukan" class="nav-link {{ request()->is('*sukan*') ? 'active' : '' }}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>SUKAN</p>
                </a>
              </li>
            </ul>
  
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kelab" class="nav-link {{ request()->is('*persatuan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PERSATUAN/KELAB</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kebudayaan" class="nav-link {{ request()->is('*kebudayaan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KEBUDAYAAN</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              BERUNIFORM
              <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="pbsmm" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>PBSMM</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="palapes" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>PALAPES</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="APM" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p>PERTAHANAN AWAM</p>
              </a>
              </li>
              <li class="nav-item">
                <a href="suksis" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>SUKSIS</p>
                </a>
                </li>
              </ul>
            </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/sijil" class="nav-link {{ request()->is('*sijil*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ANUGERAH / SIJIL</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="penerbitan" class="nav-link {{ request()->is('*penerbitan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENERBITAN</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="padu" class="nav-link {{ request()->is('*padu*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROGRAM PADU</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="programtertentu" class="nav-link {{ request()->is('*programtertentu*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROGRAM TERTENTU</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/uniform" class="nav-link {{ request()->is('*uniform*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UNIFORM (TEST)</p>
                </a>
              </li>
            </ul>
            <!-- {{-- @foreach($data as $d)
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/{{$d->NamaAktiviti}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{$d->NamaAktiviti}}</p>
                </a>
              </li>
            </ul>
            @endforeach --}} -->

          </li>

        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PARAMETER
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/tahappencapaian" class="nav-link {{ request()->is('*tahappencapaian*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tahap Pencapaian</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/markah" class="nav-link {{ request()->is('*markah*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Markah</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/jawatan" class="nav-link {{ request()->is('*jawatan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jawatan</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/tahaphep" class="nav-link {{ request()->is('*tahaphep*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tahap Hep</p>
                </a>
              </li>
            </ul>


            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/badanuniform" class="nav-link {{ request()->is('*badanuniform*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Badan Beruniform</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/badanuniform" class="nav-link {{ request()->is('*n*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jawatan Badan Beruniform</p>
                </a>
              </li>
            </ul>

         

          </li>

       
        

              
    </ul>
          
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>