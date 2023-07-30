<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
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
                <li class="menu-title"><span>@lang('translation.menu')</span></li>

                <li class="nav-item">
                    <a href="index" class="nav-link">
                         <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link"
                    href="#sidebarWarehouse"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarWarehouse">
                        <i class="las la-warehouse"></i> <span>@lang('translation.settingWarehouses')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarWarehouse">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="warehouse-show" class="nav-link">@lang('translation.warehouses') </a>
                            </li>
                            <li class="nav-item">
                                <a href="warehouses-moving" class="nav-link"> @lang('translation.warehousesMoving')  </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link"
                    href="#sidebarSetting"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarSetting">
                        <i class="ri-layout-grid-line"></i> <span>@lang('translation.settingTable')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSetting">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="setting-praduct" class="nav-link"> @lang('translation.settingPraduk') </a>
                            </li>
                            <li class="nav-item">
                                <a href="setting-currencies" class="nav-link"> @lang('translation.settingCurrencies') </a>
                            </li>
                            <li class="nav-item">
                                <a href="setting-paymentTypes" class="nav-link"> @lang('translation.settingPaymentTypes') </a>
                            </li>
                            <li class="nav-item">
                                <a href="setting-costs" class="nav-link"> @lang('translation.settingCosts') </a>
                            </li>
                            <li class="nav-item">
                                <a href="setting-guruh" class="nav-link"> @lang('translation.settingGuruh') </a>
                            </li>
                            <li class="nav-item">
                                <a href="setting-warehouses" class="nav-link" > @lang('translation.settingWarehouses') </a>
                            </li>
                                <li class="nav-item">
                                <a href="setting-measurement" class="nav-link">@lang('translation.settingMeasurement') </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link"
                    href="#sidebarUsers"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarUsers">
                        <i class="ri-shield-user-line"></i> <span>@lang('translation.hrTitle')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUsers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="hr-users" class="nav-link"> @lang('translation.hrUsers') </a>
                            </li>
                            <li class="nav-item">
                                <a href="hr-rol" class="nav-link"> @lang('translation.hrRol') </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a href="login" class="nav-link">
                         <i class="mdi mdi-logout"></i> <span>@lang('translation.logout')</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
