<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @if (Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home*') ? '' : 'collapsed' }}" href="{{ route('home.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link {{ Request::is('profile*') ? '' : 'collapsed' }}"
                href="{{ route('profile.index') }}">
                <i class="bi bi-people-fill"></i>
                <span>Profile</span>
            </a>
        </li>

        @if (Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('news*') ? '' : 'collapsed' }}" href="{{ route('news.index') }}">
                    <i class="bi bi-newspaper"></i>
                    <span>News</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link {{ Request::is('account-setting*') ? '' : 'collapsed' }}"
                href="{{ route('account-setting.index', Auth::user()->id) }}">
                <i class="bi bi-nut-fill"></i>
                <span>Setting</span>
            </a>
        </li>

    </ul>

</aside>
