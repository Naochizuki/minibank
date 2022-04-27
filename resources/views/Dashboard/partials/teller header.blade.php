<div class="navbar-content">
    <div class="navbar-item-container group {{ Request::is('tellerdashboard') ? 'active' : '' }}">
        <a id="navbar-content" href="/tellerdashboard" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Dashboard</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-house-user nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('tellerdashboard/transaksi') ? 'active' : '' }}">
        <a id="navbar-content" href="/tellerdashboard/transaksi" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Transaksi</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-money-bill-transfer nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('tellerdashboard/mutasi') ? 'active' : '' }}">
        <a id="navbar-content" href="/tellerdashboard/mutasi" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Mutasi</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-chart-column nav-icon"></i>
            </div>
        </a>
    </div>
</div>