<!DOCTYPE html>
<html lang="en">

<head>
    @include('landingpage.partials.head')
</head>

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <!-- <img src="{{ asset('tlandingpage/assets/img/ediya.png') }}" alt="logo" style="width: 40px;"> -->
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
       <header class="header">
            @include('landingpage.partials.header')
       </header>
        <!-- Header Ends -->

        {{ $slot }}

        <!-- Footer Section Starts -->
            @include('landingpage.partials.footer')
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    @include('landingpage.partials.scripts')


</body>

</html>
