<nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header flex items-center py-4 px-6 h-header-height">
                <a href="../dashboard/index.html" class="b-brand flex items-center gap-3">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="{{ asset('asset/cms/images/logo-white.svg') }}" class="img-fluid logo logo-lg" alt="logo" />
                    <img src="{{ asset('asset/cms/images/favicon.svg') }}" class="img-fluid logo logo-sm" alt="logo" />
                </a>
            </div>
            <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
                <ul class="pc-navbar">
                     @hasrole('admin')
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item">
                   
                    <li class="pc-item">
                        <a href="{{ route('dashboard.home') }}" class="pc-link">
                            <span class="pc-micon">
                                <i data-feather="home"></i>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    @endhasrole

                    @hasrole('user')
                    <li class="pc-item pc-caption">
                        <label>Data Peserta</label>
                        <i data-feather="feather"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="../elements/bc_color.html" class="pc-link">
                            <span class="pc-micon"> <i data-feather="edit"></i></span>
                            <span class="pc-mtext">profile</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="../elements/bc_typography.html" class="pc-link">
                            <span class="pc-micon"> <i data-feather="type"></i></span>
                            <span class="pc-mtext">Persyaratan</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="../elements/icon-feather.html" class="pc-link">
                            <span class="pc-micon"> <i data-feather="feather"></i></span>
                            <span class="pc-mtext">Pengumuman</span>
                        </a>
                    </li>
                    @endhasrole

                    @hasrole('admin|kepalasekolah')
                    <li class="pc-item pc-caption">
                        <label>Laporan</label>
                        <i data-feather="monitor"></i>
                    </li>
                   
                    <li class="pc-item pc-hasmenu">
                        <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                            <span class="pc-micon"> <i data-feather="lock"></i></span>
                            <span class="pc-mtext">Data Peserta</span>
                        </a>
                    </li>
                     @endhasrole

                    <li class="pc-item pc-caption">
                        <label>Other</label>
                        <i data-feather="sidebar"></i>
                    </li>
                    
                    <li class="pc-item">
                        <a href="../other/sample-page.html" class="pc-link">
                            <span class="pc-micon">
                                <i data-feather="sidebar"></i>
                            </span>
                            <span class="pc-mtext">logout</span>
                        </a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>