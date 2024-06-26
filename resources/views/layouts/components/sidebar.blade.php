<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('index.html') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin<sup>Paslon</sup></div>
    </a>    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}" style="color: white;"><i class="fas fa-home" style="color: white;"></i> Home</a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;"><i class="fas fa-user-circle" style="color: white;"></i> Profil</a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="visiMisiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            <i class="fas fa-eye" style="color: white;"></i> Profil Paslon
        </a>
        <div class="dropdown-menu" aria-labelledby="visiMisiDropdown" style="background-color: #333333;">
            <a class="dropdown-item" href="{{route('admin.paslon.bupati')}}" style="color: white;">Calon Bupati</a>
            <a class="dropdown-item" href="{{route('admin.paslon.wakil-bupati')}}" style="color: white;">Calon Wakil Bupati</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.program')}}" style="color: white;"><i class="fas fa-history" style="color: white;"></i> Program</a>
    </li>
    <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="visiMisiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            <i class="fas fa-eye" style="color: white;"></i> Visi Misi
        </a>
        <div class="dropdown-menu" aria-labelledby="visiMisiDropdown" style="background-color: #333333;">
            <a class="dropdown-item" href="{{route('admin.visi')}}" style="color: white;">Visi</a>
            <a class="dropdown-item" href="{{route('admin.misi')}}" style="color: white;">Misi</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.galeri')}}" style="color: white;"><i class="fas fa-tasks" style="color: white;"></i> Galeri</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.official')}}" style="color: white;"><i class="fas fa-users" style="color: white;"></i>Kontak/Official</a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Custom Nav Items -->
    
</ul>
