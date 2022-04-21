<!-- Navbar -->
<nav class="navbar-fixed-top fixed-top">
    <div class="navbar-photoup">
        <i class='bx bx-menu-alt-left sidebarOpen'></i>
        <span class="logo d-flex align-items-center">
            <img src="{{ url('frontend/assets/img/logopu.svg') }}" alt="" width="40px" style="margin-right: 10px">
            <a href="{{ route('home') }}">PHOTO UP</a>
        </span>
        <div class="menu">
            <div class="logo-toggle">
                <span class="logo d-flex align-items-center">
                    <img src="{{ url('frontend/assets/img/logopu.svg') }}" alt="" width="40px"
                        style="margin-right: 10px">
                    <a href="{{ route('home') }}"> PHOTO UP</a>
                </span>
                <i class='bx bx-x sidebarClose'></i>
            </div>
            <ul class="nav-link">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a class="{{ request()->is('/') ? 'active' : '' }}"
                        href="{{ route('home') }}">{{ trans('user/navbar.link.beranda') }}</a>
                </li>
                <li class="{{ request()->is('profil') ? 'active' : '' }}">
                    <a class="{{ request()->is('profil') ? 'active' : '' }}"
                        href="{{ route('profil') }}">{{ trans('user/navbar.link.profil') }}</a>
                </li>
                <li class="{{ request()->is('galeri') ? 'active' : '' }}">
                    <a class="{{ request()->is('galeri') ? 'active' : '' }}" href="
                        {{ route('view_galeri') }}">{{ trans('user/navbar.link.galeri') }}</a>
                </li>
                <li class="{{ request()->is('kontak') ? 'active' : '' }}">
                    <a class="{{ request()->is('kontak') ? 'active' : '' }}"
                        href="{{ route('kontak') }}">{{ trans('user/navbar.link.kontak') }}</a>
                </li>
                {{-- <li class="{{ request()->is('kontak') ? 'active' : '' }}">
                    <a class="{{ request()->is('kontak') ? 'active' : '' }}"
                        href="{{ route('kontak') }}">{{ trans('user/navbar.link.kontak') }}</a>
                </li> --}}
                <li class="{{ request()->is('acara') ? 'active' : '' }}">
                    <a class="{{ request()->is('acara') ? 'active' : '' }}"
                        href="{{ route('acara') }}">{{ trans('user/navbar.link.acara') }}</a>
                </li>
            </ul>
        </div>
        <div class="darkLight-searchBox">
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>
            <div class="lang">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                                href="{{ route('localization.switch', ['language' => 'id']) }}">{{ trans('localization.id') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="{{ route('localization.switch', ['language' => 'en']) }}">{{ trans('localization.en') }}</a>
                        </li>
                    </ul>
                </li>
            </div>

            {{-- <div class="searchBox">
                <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                </div>
                <div class="search-field">
                    <input type="text" placeholder="Cari">
                    <i class='bx bx-search'></i>
                </div>
            </div> --}}
        </div>

    </div>
</nav>
<!-- Navbar -->
