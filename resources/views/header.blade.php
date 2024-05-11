<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('images/sib_logo.png') }}">
            <span class="d-none d-lg-block">SIBPM</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"
                        alt="Profile" class="rounded-circle mx-2">
                <span class="d-none d-md-block dropdown-toggle ps-2 text-capitalize">{{ __('message.welcome') }}, {{ Auth::user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        @php
                            $user = Auth::user();
                        @endphp

                        <h6 class="text-capitalize">{{ $user->name }}</h6>

                        <span class="text-capitalize badge {{ $user->role === 'admin' ? 'bg-warning' : ($user->profile && $user->profile->member_type === 'tetap' ? 'bg-primary' : ($user->profile && $user->profile->member_type === 'bersekutu' ? 'bg-success' : '')) }}">
                            {{ $user->role === 'admin' ? 'Administrator' : ($user->profile ? $user->profile->member_type : 'Unknown') }}
                        </span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.index', Auth::user()->id) }}">
                            <i class="bi bi-person"></i>
                            <span>{{ __('message.my profile') }}</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('account-setting.index') }}">
                            <i class="bi bi-gear"></i>
                            <span>{{ __('message.account setting') }}</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>{{ __('message.logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
