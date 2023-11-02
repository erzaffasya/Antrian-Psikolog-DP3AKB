<x-app-layout>
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Gamification Card -->
            <div class="col-md-12 col-lg-12">
                <div class="card h-100">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="card-body">
                                <h4 class="card-title pb-xl-2">Selamat Datang {{ Auth::user()->name }}!🎉</h4>
                                <p class="mb-0">You have done <span class="h6 mb-0">68%</span>😎 more sales
                                    today.</p>
                                <p>Check your new badge in your profile.</p>
                                <a href="javascript:;" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                            <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                <img src="{{ asset('tadmin/assets/img/illustrations/illustration-john-light.png') }}"
                                    height="180" alt="View Profile" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Gamification Card -->


            <!-- Project Statistics -->
            <div class="col-md-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Dokter Tersedia</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="projectStatus" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between py-2 px-4 border-bottom">
                        <h6 class="mb-0 small">NAME</h6>
                        <h6 class="mb-0 small">BUDGET</h6>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="{{ asset('tadmin/assets/img/icons/misc/3d-illustration.png') }}"
                                                alt="User" class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">3D Illustration</h6>
                                        <small>Blender Illustration</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$6,500</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="{{ asset('tadmin/assets/img/icons/misc/finance-app-design.png') }}"
                                                alt="User" class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Finance App Design</h6>
                                        <small>Figma UI Kit</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$4,290</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="{{ asset('tadmin/assets/img/icons/misc/4-square.png') }}"
                                                alt="User" class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">4 Square</h6>
                                        <small>Android Application</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$44,500</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="{{ asset('tadmin/assets/img/icons/misc/delta-web-app.png') }}"
                                                alt="User" class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Delta Web App</h6>
                                        <small>React Dashboard</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$12,690</div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                    <div class="avatar-initial bg-lighter rounded">
                                        <div>
                                            <img src="{{ asset('tadmin/assets/img/icons/misc/ecommerce-website.png') }}"
                                                alt="User" class="h-25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">eCommerce Website</h6>
                                        <small>Vue + Laravel</small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">$10,850</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Project Statistics -->

            <!-- Multiple widgets -->
            <div class="col-md-6 col-xl-4">
                <div class="row g-4">
                    <!-- Total Revenue chart -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded">
                                            <i class="mdi mdi-cart-plus mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1">+22%</p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                                    <h5 class="mb-2">155k</h5>
                                    <p class="mb-lg-2 mb-xl-3">Total Kunjungan Offline</p>
                                    <div class="badge bg-label-secondary rounded-pill">Hari Ini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Revenue chart -->

                    <div class="col-md-6 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-success rounded">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1">+38%</p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-3">
                                    <h5 class="mb-2">$13.4k</h5>
                                    <p class="text-body">Total Sales</p>
                                    <div class="badge bg-label-secondary rounded-pill mt-1">Last Six Month</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded">
                                            <i class="mdi mdi-cart-plus mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1">+22%</p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                                    <h5 class="mb-2">155k</h5>
                                    <p class="mb-lg-2 mb-xl-3">Total Kunjungan Offline</p>
                                    <div class="badge bg-label-secondary rounded-pill">Hari Ini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- overview Radial chart -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded">
                                            <i class="mdi mdi-cart-plus mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-success me-1">+22%</p>
                                        <i class="mdi mdi-chevron-up text-success"></i>
                                    </div>
                                </div>
                                <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                                    <h5 class="mb-2">155k</h5>
                                    <p class="mb-lg-2 mb-xl-3">Total Kunjungan Offline</p>
                                    <div class="badge bg-label-secondary rounded-pill">Hari Ini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ overview Radial chart -->
                </div>
            </div>
            <!--/ Multiple widgets -->

            <!-- Sales Country Chart -->
            <div class="col-12 col-xl-4 col-md-6">
                <div class="card-body">
                    <div class="bg-label-info rounded-3 text-center mb-3 pt-4">
                        <img class="img-fluid" src="{{asset('tadmin/assets/img/illustrations/card-ratings-illustration.png')}}"
                            alt="Boy card image" width="130">
                    </div>
                    <h4 class="mb-2 pb-1">Ambil Antrian</h4>
                    <p>Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                    <div class="row mb-3 g-3">
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="avatar flex-shrink-0 me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="mdi mdi-calendar-alert mdi-24px"></i></span>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                    <small>Date</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="avatar flex-shrink-0 me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="mdi mdi-clock-time-four-outline mdi-24px"></i></span>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">32 minutes</h6>
                                    <small>Duration</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="{{ route('ambil-antrian.index') }}"
                            class="btn btn-primary w-100 d-grid waves-effect waves-light">Ambil Antrian</a>
                    </div>
                </div>
            </div>
            <!--/ Sales Country Chart -->

        </div>
    </div>
    <!--/ Content -->

</x-app-layout>
