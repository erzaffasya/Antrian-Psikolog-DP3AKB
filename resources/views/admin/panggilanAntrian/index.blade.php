<x-app-layout>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <span style="color: var(--bs-primary)">
                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                        fill="currentColor" />
                      <path
                        d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                        fill="url(#paint0_linear_2989_100980)"
                        fill-opacity="0.4" />
                      <path
                        d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                        fill="currentColor" />
                      <path
                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                        fill="currentColor" />
                      <path
                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                        fill="url(#paint1_linear_2989_100980)"
                        fill-opacity="0.4" />
                      <path
                        d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                        fill="currentColor" />
                      <defs>
                        <linearGradient
                          id="paint0_linear_2989_100980"
                          x1="5.36642"
                          y1="0.849138"
                          x2="10.532"
                          y2="24.104"
                          gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-opacity="1" />
                          <stop offset="1" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient
                          id="paint1_linear_2989_100980"
                          x1="5.19475"
                          y1="0.849139"
                          x2="10.3357"
                          y2="24.1155"
                          gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-opacity="1" />
                          <stop offset="1" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                </span>
                <span class="app-brand-text demo menu-text fw-bold">Antrian Psikolog</span>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="mdi mdi-close align-middle"></i>
              </a>
            </div>

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{asset('tadmin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{asset('tadmin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="mdi mdi-logout me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
              <input
                type="text"
                class="form-control search-input border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="mdi mdi-close search-toggler cursor-pointer"></i>
            </div>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4 mb-4">
                <!-- Congratulations card -->
                <!-- <div class="col-xl-4">
                  <div class="card h-100">
                    <div class="card-body text-nowrap">
                      <h4 class="card-title mb-1 d-flex gap-2 flex-wrap">Congratulations Norris! 🎉</h4>
                      <p class="pb-0">Best seller of the month</p>
                      <h4 class="text-primary mb-1">$42.8k</h4>
                      <p class="mb-2 pb-1">78% of target 🚀</p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                    </div>
                    <img
                      src="../../assets/img/illustrations/trophy.png"
                      class="position-absolute bottom-0 end-0 me-3"
                      height="140"
                      alt="view sales" />
                  </div>
                </div> -->
                <!--/ Congratulations card -->

                <!-- Total Profit -->
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <div class="card h-100">
                    <div class="row mt-4">
                      <div class="col-6">
                        <div class="card-body">
                          <div class="card-info  pb-2">
                            <h3 class="text-warning"><strong>8</strong></h3>
                            <!-- <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div> -->
                          </div>
                          <div class="">
                            <h4 class="mb-0 me-2">Jumlah Antrian</h4>

                          </div>
                        </div>
                      </div>
                      <div class="col-6 text-end d-flex align-items-end">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60" style="fill: orange;">
                            <title>account-multiple</title>
                            <path d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z" />
                            </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Profit -->

                <!-- Total Expenses -->
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <div class="card h-100">
                    <div class="row mt-4">
                      <div class="col-8">
                        <div class="card-body">
                          <div class="card-info  pb-2">
                            <h3 class="" style="color: green"><strong>002</strong></h3>
                            <!-- <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div> -->
                          </div>
                          <div class="">
                            <h4 class="mb-0 me-2">Antrian Sekarang</h4>

                          </div>
                        </div>
                      </div>
                      <div class="col-4 text-end d-flex align-items-end">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60" style="fill: green;">
  <title>account-multiple-check</title>
  <path d="M19 17V19H7V17S7 13 13 13 19 17 19 17M16 8A3 3 0 1 0 13 11A3 3 0 0 0 16 8M19.2 13.06A5.6 5.6 0 0 1 21 17V19H24V17S24 13.55 19.2 13.06M18 5A2.91 2.91 0 0 0 17.11 5.14A5 5 0 0 1 17.11 10.86A2.91 2.91 0 0 0 18 11A3 3 0 0 0 18 5M7.34 8.92L8.5 10.33L3.75 15.08L1 12.08L2.16 10.92L3.75 12.5L7.34 8.92" />
</svg>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Expenses -->

                <!-- Total Profit chart -->
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <div class="card">
                    <div class="row mt-4">
                      <div class="col-8">
                        <div class="card-body">
                          <div class="card-info  pb-2">
                            <h3 style="color:blue"><strong>045</strong></h3>
                            <!-- <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div> -->
                          </div>
                          <div class="">
                            <h4 class="mb-0 me-2">Antrian Selanjutnya</h4>

                          </div>
                        </div>
                      </div>
                      <div class="col-4 text-end d-flex align-items-end">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60" style="fill: blue;">
                        <title>account-multiple-plus</title>
                        <path d="M19 17V19H7V17S7 13 13 13 19 17 19 17M16 8A3 3 0 1 0 13 11A3 3 0 0 0 16 8M19.2 13.06A5.6 5.6 0 0 1 21 17V19H24V17S24 13.55 19.2 13.06M18 5A2.91 2.91 0 0 0 17.11 5.14A5 5 0 0 1 17.11 10.86A2.91 2.91 0 0 0 18 11A3 3 0 0 0 18 5M8 10H5V7H3V10H0V12H3V15H5V12H8Z" />
                        </svg>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Profit chart -->

                <!-- Total Growth chart -->
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <div class="card h-100">
                    <div class="row mt-4">
                      <div class="col-6">
                        <div class="card-body">
                          <div class="card-info  pb-2">
                            <h3 class="" style="color:red"><strong>4</strong></h3>
                            <!-- <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div> -->
                          </div>
                          <div class="">
                            <h4 class="mb-0 me-2">Sisa Antrian</h4>

                          </div>
                        </div>
                      </div>
                      <div class="col-6 text-end d-flex align-items-end">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60" style="fill: red;">
                        <title>account</title>
                        <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                        </svg>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Sales chart -->
              </div>

              <div class="row gy-4 mb-4">

                <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="card">
                    <div class="row">
                      <div class="col-5" style="background-color: #666cff; border-radius: 12px 0 0 12px;">
                        <div class="card-body">
                            <h2 class="" style="color:white; padding-left: 12px; padding-top: 26px;">003</h2>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="card-body">
                          <div class="card-info mb-4 mt-2">
                            <h4 style="color: #666cff;"><b>Loket 1</b></h4>
                          </div>
                          <div class="">
                            <h3>2</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>


                </div>



                <div class="col-lg-9 col-12">
                  <div class="card">
                    <div class="table-responsive rounded-3">
                      <table class="datatables-crm table table-sm">
                        <thead class="table-light">
                          <tr>
                            <th></th>
                            <th class="py-3">Nomor Antrian</th>
                            <th class="py-3">Loket</th>
                            <th></th>
                            <th class="py-3">Panggil</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>


                <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="card">
                    <div class="row">
                      <div class="col-5" style="background-color: #e91e63; border-radius: 12px 0 0 12px;">
                        <div class="card-body">
                            <h2 class="" style="color:white; padding-left: 12px; padding-top: 26px;">007</h2>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="card-body">
                          <div class="card-info mb-4 mt-2">
                            <h4 style="color: #e91e63;"><b>Loket 2</b></h4>
                          </div>
                          <div class="">
                            <h3>1</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>

              </div>

              <div class="row gy-4 mb-4">
              <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="card">
                    <div class="row">
                      <div class="col-5" style="background-color: #009688; border-radius: 12px 0 0 12px;">
                        <div class="card-body">
                            <h2 class="" style="color:white; padding-left: 12px; padding-top: 26px;">003</h2>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="card-body">
                          <div class="card-info mb-4 mt-2">
                            <h4 style="color: #009688;"><b>Loket 3</b></h4>
                          </div>
                          <div class="">
                            <h3>6</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              </div>

              <div class="row gy-4 mb-4">
              <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="card">
                    <div class="row">
                      <div class="col-5" style="background-color: #00bcd4; border-radius: 12px 0 0 12px;">
                        <div class="card-body">
                            <h2 class="" style="color:white; padding-left: 12px; padding-top: 26px;">005</h2>
                        </div>
                      </div>
                      <div class="col-7">
                        <div class="card-body">
                          <div class="card-info mb-4 mt-2">
                            <h4 style="color: #00bcd4;"><b>Loket 4</b></h4>
                          </div>
                          <div class="">
                            <h3>5</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
              </div>


            </div>


            <!--/ Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-crm.js"></script>
  </body>
</x-app-layout>
