<div class="navbar-content">
    <div class="navbar-item-container group {{ Request::is('cs/dashboard') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('cs/dashboard') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Dashboard</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-house-user nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('cs/dashboard/tambah/nasabah') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('cs/dashboard/tambah/nasabah') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Daftar Akun</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-user-plus nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('cs/dashboard/tambah/rekening') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('cs/dashboard/tambah/rekening') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Daftar Rekening</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-credit-card nav-icon"></i>
            </div>
        </a>
    </div>
</div>