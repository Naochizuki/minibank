<div class="navbar-content">
    <div class="navbar-item-container group {{ Request::is('teller/dashboard') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('teller/dashboard') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Dashboard</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-house-user nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('teller/dashboard/transaksi') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('teller/dashboard/transaksi') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Transaksi</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-money-bill-transfer nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('teller/dashboard/mutasi') ? 'active' : '' }}">
        <a id="navbar-content" href="{{ url('teller/dashboard/mutasi') }}" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Mutasi</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-chart-column nav-icon"></i>
            </div>
        </a>
    </div>
</div>