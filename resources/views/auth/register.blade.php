<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('tadmin/assets/img/pemkot.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />

    <!-- Page CSS -->

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('tadmin/assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('tadmin/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('tadmin/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('tadmin/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="index.html" class="auth-cover-brand d-flex align-items-center gap-2">
            {{-- <span class="app-brand-text demo text-heading fw-bold">Materialize</span> --}}
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">
            <!-- Left Text -->
            <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 mt-5 mt-xxl-0">
                <img alt="register-multi-steps-illustration"
                    src="{{ asset('tadmin/assets/img/illustrations/auth-register-multi-steps-illustration.png') }}"
                    class="h-auto mh-100 w-px-200" />
            </div>
            <!-- /Left Text -->

            <!--  Multi Steps Registration -->
            <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-5">
                <div class="w-px-700 mt-5 mt-lg-0">
                    <div id="multiStepsValidation" class="bs-stepper wizard-numbered">
                        <div class="bs-stepper-header border-bottom-0">
                            <div class="step" data-target="#accountDetailsValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-number">01</span>
                                        <span class="d-flex flex-column gap-1 ms-2">
                                            <span class="bs-stepper-title">Account</span>
                                            <span class="bs-stepper-subtitle">Account Details</span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#personalInfoValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-number">02</span>
                                        <span class="d-flex flex-column gap-1 ms-2">
                                            <span class="bs-stepper-title">Personal</span>
                                            <span class="bs-stepper-subtitle">Enter Information</span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#billingLinksValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-number">03</span>
                                        <span class="d-flex flex-column gap-1 ms-2">
                                            <span class="bs-stepper-title">Finish</span>
                                            <span class="bs-stepper-subtitle">Term and Condition</span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form id="multiStepsForm" onSubmit="return false" method="post"
                                action="{{ route('register') }}">
                                @csrf
                                <!-- Account Details -->
                                <div id="accountDetailsValidation" class="content">
                                    <div class="content-header mb-3">
                                        <h4 class="mb-0">Account Information</h4>
                                        <small>Enter Your Account Details</small>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" name="name" id="multiStepsUsername"
                                                    class="form-control" placeholder="johndoe" />
                                                <label for="multiStepsUsername">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="email" name="email" id="multiStepsEmail"
                                                    class="form-control" placeholder="john.doe@email.com"
                                                    aria-label="john.doe" />
                                                <label for="multiStepsEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-password-toggle">
                                            <div class="input-group input-group-merge">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="password" id="multiStepsPass" name="password"
                                                        class="form-control"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="multiStepsPass2" />
                                                    <label for="multiStepsPass">Password</label>
                                                </div>
                                                <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-password-toggle">
                                            <div class="input-group input-group-merge">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="password" id="multiStepsConfirmPass"
                                                         class="form-control"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="multiStepsConfirmPass2" />
                                                    <label for="multiStepsConfirmPass">Confirm Password</label>
                                                </div>
                                                <span class="input-group-text cursor-pointer"
                                                    id="multiStepsConfirmPass2"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" name="nama_lengkap" id="multiStepsURL"
                                                    class="form-control" placeholder="johndoe/profile"
                                                    aria-label="johndoe" />
                                                <label for="multiStepsURL">Nama Lengkap</label>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-secondary btn-prev" disabled>
                                                <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-primary btn-next">
                                                <span
                                                    class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="mdi mdi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal Info -->
                                <div id="personalInfoValidation" class="content">
                                    <div class="content-header mb-3">
                                        <h4 class="mb-0">Personal Information</h4>
                                        <small>Enter Your Personal Information</small>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="multiStepsFirstName" name="nik"
                                                    class="form-control" placeholder="" />
                                                <label for="multiStepsFirstName">NIK</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="date" name="tgl_lahir" class="form-control" />
                                                <label for="multiStepsPincode">Tanggal Lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <select id="multiStepsState" name="jenis_kelamin"
                                                    class="select2 form-select" data-allow-clear="true">
                                                    <option value="">Select</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <label for="multiStepsState">Jenis Kelamin</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-merge">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="multiStepsMobile" name="hp"
                                                        class="form-control multi-steps-mobile"
                                                        placeholder="815 3333 3111" />
                                                    <label for="multiStepsMobile">Nomor HP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="multiStepsLastName" name="pekerjaan"
                                                    class="form-control" placeholder="Doe" />
                                                <label for="multiStepsLastName">Pekerjaan</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" name="agama" class="form-control"
                                                    placeholder="Doe" />
                                                <label>Agama</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating form-floating-outline">
                                                <select class="form-select" id="kecamatan" name="kecamatan">
                                                    @foreach ($kota as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="multiStepsCity">Kecamatan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <select class="form-select" name="kelurahan" id="desa" required>
                                                    <option>==Pilih Salah Satu==</option>
                                                </select>
                                                <label for="multiStepsArea">Kelurahan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="multiStepsAddress" name="alamat"
                                                    class="form-control" placeholder="Address" />
                                                <label for="multiStepsAddress">Alamat</label>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-secondary btn-prev">
                                                <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-primary btn-next">
                                                <span
                                                    class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="mdi mdi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Billing Links -->
                                <div id="billingLinksValidation" class="content">

                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-secondary btn-prev">
                                            <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="submit"
                                            class="btn btn-primary btn-next btn-submit">Submit</button>
                                    </div>
                                </div>
                                <!--/ Credit Card Details -->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Multi Steps Registration -->
    </div>
    </div>

    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();
    </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>==Pilih Salah Satu==</option>');

                    $.each(data, function(key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        $(function() {
            $('#kecamatan').on('change', function() {
                onChangeSelect('{{ route('villages') }}', $(this).val(), 'desa');
            })
        });
    </script>
    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('tadmin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('tadmin/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('tadmin/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('tadmin/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('tadmin/assets/js/pages-auth-multisteps.js') }}"></script>
</body>

</html>
