<div class="navbar-content">
    <div class="navbar-item-container group {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('admin/dashboard') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Dashboard</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-house-user nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admin/dashboard/bank') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('admin/dashboard/bank') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Informasi Bank</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-building-columns nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admin/dashboard/nasabah') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('admin/dashboard/nasabah') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Info Nasabah</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-address-card nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admin/dashboard/cs') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('admin/dashboard/cs') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Informasi CS</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-headset nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admin/dashboard/teller') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('admin/dashboard/teller') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Informasi Teller</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-id-card-clip nav-icon"></i>
            </div>
        </a>
    </div>
</div>