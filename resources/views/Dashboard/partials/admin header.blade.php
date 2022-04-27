<div class="navbar-content">
    <div class="navbar-item-container group {{ Request::is('admindashboard') ? 'active' : '' }}">
        <a id="navbar-content" href="/admindashboard" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Dashboard</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-house-user nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admindashboard/bank') ? 'active' : '' }}">
        <a id="navbar-content" href="/admindashboard/bank" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Informasi Bank</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-building-columns nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admindashboard/cs') ? 'active' : '' }}">
        <a id="navbar-content" href="/admindashboard/cs" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Informasi CS</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-headset nav-icon"></i>
            </div>
        </a>
    </div>
    <div class="navbar-item-container group {{ Request::is('admindashboard/teller') ? 'active' : '' }}">
        <a id="navbar-content" href="/admindashboard/teller" class="navbar-item-link transition-all-500">
            <span id="navbar-content-name" class="navbar-item-name transition-transform-500">Informasi Teller</span>
            <div class="navbar-item-icon">
                <i class="fa-solid fa-user nav-icon"></i>
            </div>
        </a>
    </div>
</div>