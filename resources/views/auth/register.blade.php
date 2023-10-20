<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Multi Steps Sign-up - Pages | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('tadmin/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/fonts/materialdesignicons.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/node-waves/node-waves.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />

    <!-- Page CSS -->

    <!-- Page -->
    <link rel="stylesheet" href="{{asset('tadmin/assets/vendor/css/pages/page-auth.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('tadmin/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('tadmin/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('tadmin/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <!-- Logo -->
      <a href="index.html" class="auth-cover-brand d-flex align-items-center gap-2">
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
        <span class="app-brand-text demo text-heading fw-bold">Materialize</span>
      </a>
      <!-- /Logo -->
      <div class="authentication-inner row m-0">
        <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 mt-5 mt-xxl-0">
          <img
            alt="register-multi-steps-illustration"
            src="{{asset('tadmin/assets/img/illustrations/auth-register-multi-steps-illustration.png')}}"
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
                        <span class="bs-stepper-title">Billing</span>
                        <span class="bs-stepper-subtitle">Payment Details</span>
                      </span>
                    </span>
                  </button>
                </div>
              </div>
              <div class="bs-stepper-content">
                <form id="multiStepsForm" onSubmit="return false">
                  <!-- Account Details -->
                  <div id="accountDetailsValidation" class="content">
                    <div class="content-header mb-3">
                      <h4 class="mb-0">Account Information</h4>
                      <small>Enter Your Account Details</small>
                    </div>
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            name="multiStepsUsername"
                            id="multiStepsUsername"
                            class="form-control"
                            placeholder="johndoe" />
                          <label for="multiStepsUsername">Username</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="email"
                            name="multiStepsEmail"
                            id="multiStepsEmail"
                            class="form-control"
                            placeholder="john.doe@email.com"
                            aria-label="john.doe" />
                          <label for="multiStepsEmail">Email</label>
                        </div>
                      </div>
                      <div class="col-sm-6 form-password-toggle">
                        <div class="input-group input-group-merge">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="password"
                              id="multiStepsPass"
                              name="multiStepsPass"
                              class="form-control"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              aria-describedby="multiStepsPass2" />
                            <label for="multiStepsPass">Password</label>
                          </div>
                          <span class="input-group-text cursor-pointer" id="multiStepsPass2"
                            ><i class="mdi mdi-eye-off-outline"></i
                          ></span>
                        </div>
                      </div>
                      <div class="col-sm-6 form-password-toggle">
                        <div class="input-group input-group-merge">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="password"
                              id="multiStepsConfirmPass"
                              name="multiStepsConfirmPass"
                              class="form-control"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              aria-describedby="multiStepsConfirmPass2" />
                            <label for="multiStepsConfirmPass">Confirm Password</label>
                          </div>
                          <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"
                            ><i class="mdi mdi-eye-off-outline"></i
                          ></span>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            name="multiStepsURL"
                            id="multiStepsURL"
                            class="form-control"
                            placeholder="johndoe/profile"
                            aria-label="johndoe" />
                          <label for="multiStepsURL">Profile Link</label>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev" disabled>
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                          <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
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
                          <input
                            type="text"
                            id="multiStepsFirstName"
                            name="multiStepsFirstName"
                            class="form-control"
                            placeholder="John" />
                          <label for="multiStepsFirstName">First Name</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsLastName"
                            name="multiStepsLastName"
                            class="form-control"
                            placeholder="Doe" />
                          <label for="multiStepsLastName">Last Name</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">US (+1)</span>
                          <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="multiStepsMobile"
                              name="multiStepsMobile"
                              class="form-control multi-steps-mobile"
                              placeholder="202 555 0111" />
                            <label for="multiStepsMobile">Mobile</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsPincode"
                            name="multiStepsPincode"
                            class="form-control multi-steps-pincode"
                            placeholder="Postal Code"
                            maxlength="6" />
                          <label for="multiStepsPincode">Pincode</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsAddress"
                            name="multiStepsAddress"
                            class="form-control"
                            placeholder="Address" />
                          <label for="multiStepsAddress">Address</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsArea"
                            name="multiStepsArea"
                            class="form-control"
                            placeholder="Area/Landmark" />
                          <label for="multiStepsArea">Landmark</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input type="text" id="multiStepsCity" class="form-control" placeholder="Jackson" />
                          <label for="multiStepsCity">City</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                            <option value="">Select</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                          </select>
                          <label for="multiStepsState">State</label>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev">
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                          <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                          <i class="mdi mdi-arrow-right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Billing Links -->
                  <div id="billingLinksValidation" class="content">
                    <div class="content-header mb-3">
                      <h4 class="mb-0">Select Plan</h4>
                      <small>Select plan as per your requirement</small>
                    </div>
                    <!-- Custom plan options -->
                    <div class="row gap-md-0 gap-3 mb-4">
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="basicOption">
                            <span class="custom-option-body">
                              <span class="fs-4 d-block fw-medium text-heading">Basic</span>
                              <small>A simple start for start ups & Students</small>
                              <span class="d-flex justify-content-center py-2">
                                <sup class="text-primary fs-6 lh-1 mt-2">$</sup>
                                <span class="fw-medium display-5 text-primary">0</span>
                                <sub class="lh-1 fs-big mt-auto mb-2">/month</sub>
                              </span>
                            </span>
                            <input
                              name="customRadioIcon"
                              class="form-check-input"
                              type="radio"
                              value=""
                              id="basicOption" />
                          </label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="standardOption">
                            <span class="custom-option-body">
                              <span class="fs-4 d-block fw-medium text-heading">Standard</span>
                              <small>For small to medium businesses</small>
                              <span class="d-flex justify-content-center py-2">
                                <sup class="text-primary fs-6 lh-1 mt-2">$</sup>
                                <span class="fw-medium display-5 text-primary">99</span>
                                <sub class="lh-1 fs-big mt-auto mb-2">/month</sub>
                              </span>
                            </span>
                            <input
                              name="customRadioIcon"
                              class="form-check-input"
                              type="radio"
                              value=""
                              id="standardOption"
                              checked />
                          </label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="enterpriseOption">
                            <span class="custom-option-body">
                              <span class="fs-4 d-block fw-medium text-heading">Enterprise</span>
                              <small>Solution for enterprise & organizations</small>
                              <span class="d-flex justify-content-center py-2">
                                <sup class="text-primary fs-6 lh-1 mt-2">$</sup>
                                <span class="fw-medium display-5 text-primary">499</span>
                                <sub class="lh-1 fs-big mt-auto mb-2">/year</sub>
                              </span>
                            </span>
                            <input
                              name="customRadioIcon"
                              class="form-check-input"
                              type="radio"
                              value=""
                              id="enterpriseOption" />
                          </label>
                        </div>
                      </div>
                    </div>
                    <!--/ Custom plan options -->
                    <div class="content-header mb-3">
                      <h4 class="mb-0">Payment Information</h4>
                      <small>Enter your card information</small>
                    </div>
                    <!-- Credit Card Details -->
                    <div class="row g-3">
                      <div class="col-md-12">
                        <div class="input-group input-group-merge">
                          <div class="form-floating form-floating-outline">
                            <input
                              id="multiStepsCard"
                              class="form-control multi-steps-card"
                              name="multiStepsCard"
                              type="text"
                              placeholder="1356 3215 6548 7898"
                              aria-describedby="multiStepsCardImg" />
                            <label for="multiStepsCard">Card Number</label>
                          </div>
                          <span class="input-group-text cursor-pointer" id="multiStepsCardImg"
                            ><span class="card-type"></span
                          ></span>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsName"
                            class="form-control"
                            name="multiStepsName"
                            placeholder="John Doe" />
                          <label for="multiStepsName">Name On Card</label>
                        </div>
                      </div>
                      <div class="col-6 col-md-4">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsExDate"
                            class="form-control multi-steps-exp-date"
                            name="multiStepsExDate"
                            placeholder="MM/YY" />
                          <label for="multiStepsExDate">Expiry Date</label>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="input-group input-group-merge">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="multiStepsCvv"
                              class="form-control multi-steps-cvv"
                              name="multiStepsCvv"
                              maxlength="3"
                              placeholder="654" />
                            <label for="multiStepsCvv">CVV Code</label>
                          </div>
                          <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"
                            ><i
                              class="mdi mdi-help-circle-outline text-muted"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="Card Verification Value"></i
                          ></span>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev">
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="submit" class="btn btn-primary btn-next btn-submit">Submit</button>
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

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('tadmin/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('tadmin/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
    <script src="{{asset('tadmin/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('tadmin/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('tadmin/assets/js/pages-auth-multisteps.js')}}"></script>
  </body>
</html>
