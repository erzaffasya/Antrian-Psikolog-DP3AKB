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

                                @if (isset($Antrian) != null)
                                <div class="card card-border-shadow-info h-100 col-md-3 mb-4">
                                    <div class="card-body">
                                        <p class="mb-2 text-heading">Nomor Antrian</p>
                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <div class="avatar me-2">
                                                <span class="avatar-initial rounded bg-label-info"><i class="mdi mdi-timer-outline mdi-20px"></i></span>
                                            </div>
                                            <h4 class="ms-1 mb-0 display-5">{{$Antrian->urut}}</h4>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <p class="card-text">Selamat datang di PUSPAGA, silahkan ambil antrian untuk mendapatkan
                                    pelayanan</p>
                                @endif

                                @if (Auth::user()->role == 'Member')
                                <a href="{{ route('ambil-antrian.index') }}" class="btn btn-primary">Ambil
                                    Antrian</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                            <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                <img src="{{ asset('tadmin/assets/img/illustrations/illustration-john-light.png') }}" height="180" alt="View Profile" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Gamification Card -->
        </div>
        <!--/ Content -->

</x-app-layout>