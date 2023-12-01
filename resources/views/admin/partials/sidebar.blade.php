<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">

        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
            <li class="menu-item {{ Request::routeIs('panggilan-antrian.index') ? 'active' : '' }}">
                <a href="{{ route('panggilan-antrian.index') }}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-human-queue"></i>
                    <div data-i18n="Antrian">Antrian</div>
                </a>
            </li>

            @if (Auth::user()->role == 'Dokter')
                <li class="menu-item {{ Request::routeIs('antrian-dokter.index') ? 'active' : '' }}">
                    <a href="{{ route('antrian-dokter.index') }}" class="menu-link ">
                        <i class="menu-icon tf-icons mdi mdi-doctor"></i>
                        <div data-i18n="Antrian Dokter">Antrian Dokter</div>
                    </a>
                </li>
            @endif


            <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                    <div data-i18n="Setting">Setting</div>
                </a>
                <ul class="menu-sub">
                    @if (Auth::user()->role == 'Admin')
                        <li class="menu-item {{ Request::routeIs('spesialis.*') ? 'active' : '' }}">
                            <a href="{{ route('spesialis.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                                <div data-i18n="Layanan">Layanan</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::routeIs('dokter.*') ? 'active' : '' }}">
                            <a href="{{ route('dokter.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                                <div data-i18n="Psikolog">Psikolog</div>
                            </a>
                        </li>

                        <li class="menu-item ">
                            <a href="{{ route('user.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                                <div data-i18n="Akun">Akun</div>
                            </a>
                        </li>
                    @endif
                    <li class="menu-item ">
                        <a href="{{ route('antrian.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                            <div data-i18n="Riwayat Antrian">Riwayat Antrian</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                            <div data-i18n="Riwayat Tindakan">Riwayat Tindakan</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        </li>



        <!-- Charts & Maps -->
        {{-- <li class="menu-item {{ Request::routeIs('dokter.*') ? 'active' : '' }}">
                <a href="{{ route('dokter.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                    <div data-i18n="Dokter">Dokter</div>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>
<!-- / Menu -->
