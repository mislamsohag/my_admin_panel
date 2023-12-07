<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/images')}}/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images')}}/logo-dark.png" alt="" height="17" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/images')}}/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images')}}/logo-light.png" alt="" height="17" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                
                <!-- Dashboard Menu -->
                @include('Components.LeftMenu.dashboard_menu')
                @include('Components.LeftMenu.task_menu')
                @include('Components.LeftMenu.app_menu')
                @include('Components.LeftMenu.layout_menu')
                <!-- Dashboard Menu -->
                
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">Pages</span>
                </li>
                
                @include('Components.LeftMenu.authentic_menu')         
                @include('Components.LeftMenu.pages_menu')         
                @include('Components.LeftMenu.landing_menu')         
                
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-components">Components</span>
                </li>
                
                @include('Components.LeftMenu.baseUi_menu')
                @include('Components.LeftMenu.advanceUi_menu')
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i data-feather="copy" class="icon-dual"></i>
                        <span data-key="t-widgets">Widgets</span>
                    </a>
                </li>
                
                @include('Components.LeftMenu.forms_menu')
                @include('Components.LeftMenu.tables_menu')
                @include('Components.LeftMenu.charts_menu')
                @include('Components.LeftMenu.icons_menu')
                @include('Components.LeftMenu.maps_menu')
                @include('Components.LeftMenu.multiLavel_menu')

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>