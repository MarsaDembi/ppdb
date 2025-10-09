<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header flex items-center py-4 px-6 h-header-height">
            <a href="{{ route('dashboard') }}" class="b-brand flex items-center gap-3">
                <!-- ========   Change your logo from here   ============ -->
                {{-- <img src="{{ asset('asset/cms/images/logo-white.svg') }}" class="img-fluid logo logo-lg" alt="logo" />
                <img src="{{ asset('asset/cms/images/favicon.svg') }}" class="img-fluid logo logo-sm" alt="logo" /> --}}
                <h4 class="text-white">PKBM Bela Warga</h4>
            </a>
        </div>
        <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
            <ul class="pc-navbar">

                <li class="pc-item {{ Route::is('dashboard') ? 'active' : ''}}">
                    <a href="{{ route('dashboard') }}" class="pc-link">
                        <span class="pc-micon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                @hasrole('user')
                    <li class="pc-item pc-caption">
                        <label>Data Peserta</label>
                        <i data-feather="feather"></i>
                    </li>
                    <li class="pc-item pc-hasmenu {{ Route::is('profile.index') ? 'active' : ''}}">
                        <a href="{{ route('profile.index') }}" class="pc-link">
                            <span class="pc-micon"> <i data-feather="user"></i></span>
                            <span class="pc-mtext">Profil</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu {{ Route::is('file.index') ? 'active' : ''}}">
                        <a href="{{ route('file.index') }}" class="pc-link">
                            <span class="pc-micon"> <i data-feather="file-text"></i></span>
                            <span class="pc-mtext">Berkas</span>
                        </a>
                    </li>
            
                @endhasrole

                @hasrole('admin|kepalasekolah')
                    <li class="pc-item pc-caption">
                        <label>Laporan</label>
                        <i data-feather="monitor"></i>
                    </li>
                <li class="pc-item pc-hasmenu">
                        <a href="" class="nav-link">
                            <span class="pc-micon"> <i data-feather="lock"></i></span>
                            <span class="pc-mtext">Calon Peserta</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                            <span class="pc-micon"> <i data-feather="lock"></i></span>
                            <span class="pc-mtext">Data Peserta</span>
                        </a>
                    </li>
                @endhasrole

                {{-- <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i data-feather="sidebar"></i>
                </li>

                <li class="pc-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="button" class="pc-link" id="logout-btn">
                            <span class="pc-micon">
                                <i data-feather="sidebar"></i>
                            </span>
                            <span class="pc-mtext">Logout</span>
                        </button>
                    </form>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
