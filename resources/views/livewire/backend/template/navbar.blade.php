<div>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('back.index') }}" class="logo d-flex align-items-center">
                <img src="{{ asset("back-assets/assets/img/logo.png")}}" alt="">
                <span class="d-none d-lg-block">Kost-18</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        @if (!empty($photo))
                            <img src="{{ Storage::url($photo) }}" class="rounded-circle">
                        @else
                            <img src="{{ asset('back-assets/assets/img/usernew.png') }}" alt="profile" class="rounded-circle">
                        @endif
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name ?? 'user' }}</span>
                    </a><!-- End Profile Image Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->name ?? 'user' }}</h6>
                            <span>{{ auth()->user()->role ?? 'role' }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('userAdmin.data') }}" wire:navigate>
                                <i class="bi bi-person"></i>
                                <span>Profil Saya</span>
                            </a>
                        </li>
                        
                        <li>
                            @livewire('auth.logout')
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

</div>
