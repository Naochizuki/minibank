<div class="navbar-content">
    <div class="navbar-item-container group {{ Request::is('nasabah/dashboard') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('/nasabah/dashboard') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Dashboard</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-house-user nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('nasabah/dashboard/tabungan') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('nasabah/dashboard/tabungan') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Tabungan</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-sack-dollar nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('nasabah/dashboard/transaksi') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('nasabah/dashboard/transaksi') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Transaksi</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-money-bill-transfer nav-icon"></i>
            </div>
        </a>
    </div>
</div>