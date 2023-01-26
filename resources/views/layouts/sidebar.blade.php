  
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo mencantikkan lagi kegemilangan -->
    <a href="home" class="brand-link">
    <!--  <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <center><span class="brand-text font-weight-light"><strong>UiTM Mini Transcript</strong></span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="https://cdn-icons-png.flaticon.com/512/560/560277.png" class="" alt="User Image">
        </div>
        <div class="info">
         <a class="d-block">
          @if(Auth::check())
          {{ Auth::user()->name }}
          @endif
        </a>
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
                <a href="/penerbitan" class="nav-link {{ request()->is('*penerbitan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENERBITAN</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/padu" class="nav-link {{ request()->is('*padu*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROGRAM PADU</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/programtertentu" class="nav-link {{ request()->is('*programtertentu*') ? 'active' : '' }}">
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
                <a href="/jawatan" class="nav-link {{ request()->is('*/jawatan*') ? 'active' : '' }}">
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
                <a href="/jawatanuniform" class="nav-link {{ request()->is('*jawatanuniform*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jawatan Badan Beruniform</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="/try" class="nav-link {{ request()->is('*try*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>try</p>
                </a>
              </li>
            </ul>
        
            
      
       </li> 

       {{-- //Pelajar --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              PELAJAR
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item ">
              <a href="/senaraipelajar" class="nav-link {{ request()->is('*senaraipelajar*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>SENARAI PELAJAR</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- //pelajar --}}
       


    </ul>
          
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>