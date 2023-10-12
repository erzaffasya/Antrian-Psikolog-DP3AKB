<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
    @include('admin.partials.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            @include('admin.partials.navbar')

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">

                <div class="content-wrapper">
                    @include('admin.partials.sidebar')
                    <!-- Content wrapper -->
                    {{ $slot }}
                    <!--/ Content wrapper -->

                    <!-- Footer -->
                    @include('admin.partials.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
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
    @include('admin.partials.scripts')
</body>

</html>
