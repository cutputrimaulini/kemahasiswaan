<div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
            <img src="../../assets/img/brand/logo1.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
            <!-- Sidenav toggler -->
            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
               <li class="nav-item">
               <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="ni ni-shop text-primary"></i>
                        <span class="nav-link-text">Dashboards</span>
                    </a>
                </li>
               
                <li class="nav-item">
              <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-maps">
                <i class="ni ni-map-big text-primary"></i>
                <span class="nav-link-text">Simpeda</span>
              </a>
              <div class="collapse show" id="navbar-maps" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('simpeda.show') }}" class="nav-link">Sistem Pelayanan Dokumen Akademik</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('simpeda.aktifkuliah') }}" class="nav-link">Bertanda Tangan Surat Keterangan Aktif Kuliah</a>
                  </li>
                </ul>
              </div>
            </li>
                
            </ul>
        </div>
    </div>
</div>