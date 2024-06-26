<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img src="{{ url('logo.png') }}" alt="logo" width="50">
        </div>
        <div class="sidebar-brand-text mx-3">SIMPSB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @if (auth()->user()->level == 'admin')
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.kelas.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.kelas.index') }}">
                <i class="fas fa-house-flag"></i>
                <span>Data Kelas</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.pendaftaran.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.pendaftaran.index') }}">
                <i class="fas fa-user"></i>
                <span>Pendaftaran Siswa baru</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.siswa.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.siswa.index') }}">
                <i class="fas fa-user-graduate"></i>
                <span>Siswa baru</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.daftar_ulang.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.daftar_ulang.index') }}">
                <i class="fas fa-arrows-rotate"></i>
                <span>Daftar Ulang</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.galeri.index') }}">
                <i class="fas fa-images"></i>
                <span>Data Galeri</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.info.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.info.index') }}">
                <i class="fab fa-blogger"></i>
                <span>Data Info</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('admin.user.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.user.index') }}">
                <i class="fas fa-user-gear"></i>
                <span>Data Admin</span>
            </a>
        </li>
    @else
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('siswa.pendaftaran.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('siswa.pendaftaran.index') }}">
                <i class="fas fa-tablet"></i>
                <span>Data Pendaftaran</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->routeIs('siswa.dokumen.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('siswa.dokumen.index') }}">
                <i class="fas fa-upload"></i>
                <span>Upload Dokumen</span>
            </a>
        </li>
        @if (isset($siswa_sidebar) && $siswa_sidebar->status == 'Diterima')
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->routeIs('siswa.daftar_ulang.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.daftar_ulang.index') }}">
                    <i class="fas fa-arrows-rotate"></i>
                    <span>Daftar Ulang</span>
                </a>
            </li>
        @endif
    @endif
</ul>
<!-- End of Sidebar -->
