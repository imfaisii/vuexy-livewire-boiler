<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="flex-row nav navbar-nav">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><span
                        class="brand-logo">
                        {{-- <img src="#"> --}}
                    </span>
                    <h2 class="brand-text">{{ env('APP_NAME') }}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
                        data-ticon="disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="@if (Route::is('dashboard')) active @endif nav-item"><a class="d-flex align-items-center"
                    href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboard</span></a>
            </li>

            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Companies Section</span><i
                    data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item"><a class="d-flex align-items-center" href="#">
                    <i class="fas fa-building"></i><span class="menu-title text-truncate"
                        data-i18n="Invoice">Companies</span></a>
                <ul class="menu-content">
                    <li class=""><a class=" d-flex align-items-center"
                            href="#"><i data-feather="plus"></i><span
                                class="menu-item text-truncate" data-i18n="List">Create A New Company</span></a>
                    </li>
                    <li class=""><a class="d-flex align-items-center"
                            href="#"><i data-feather="eye"></i><span
                                class="menu-item text-truncate" data-i18n="Preview">View Companies</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
        <h6 class="mb-3 text-center">Crafted with ❤️ by <a href="#">FAST | DEVs</a></h6>
    </div>
</div>
<!-- END: Main Menu-->
