<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <h4 class="mt-4">{{ config('app.name') }}</h4>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <h4 class="mt-4 text-white">{{ config('app.name') }}</h4>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::is('/') ? ' active' : '' }}" href="/">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::is('slide*') ? ' active' : '' }}" href="{{ route('slide.index') }}">
                        <i class="ri-building-4-line"></i> <span data-key="t-dashboards">Slide</span>
                    </a>
                </li>
                {{-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::is('finance*') ? ' active' : '' }}" href="{{ route('finance.index') }}">
                        <i class="ri-money-dollar-box-line"></i> <span data-key="t-dashboards">Keuangan</span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>