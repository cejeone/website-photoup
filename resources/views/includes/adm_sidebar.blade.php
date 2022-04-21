<div class="page-container">
    <div class="page-header">
        <nav class="navbar navbar-expand-lg d-flex justify-content-between">
            <div class="" id="navbarNav">
                <ul class="navbar-nav" id="leftNav">
                    <li class="nav-item">
                        <a class="nav-link" id="sidebar-toggle" href="#"><i class='bx bx-left-arrow-alt'></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <span>PHOTO UP</span>
            </div>
            <div class="" id="headerNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                src="{{ url(auth()->user()->foto ?? '') }}" class="avatar"
                                alt="User Image"></a>
                        <div class="dropdown-menu dropdown-menu-end profile-drop-menu"
                            aria-labelledby="profileDropDown">
                            <span> Hi, {{ auth()->user()->name }}</span>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i>Pengaturan</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    data-feather="log-out"></i>{{ __('Keluar') }}</a>

                            <form action="{{ route('logout') }}" method="post" id="logout-form"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="page-sidebar">
        <ul class="list-unstyled accordion-menu">
            <li class="sidebar-title">
                Utama
            </li>
            <li class="{{ request()->is('dashboard') ? 'active-page' : '' }}">
                <a href=" {{ route('admin-dashboard') }}"><i data-feather="home"></i>Dashboard</a>
            </li>
            <li class="sidebar-title">
                Halaman
            </li>

            @if (auth()->user()->roles == 'admin')
                <li class="{{ request()->is('dashboard/profil*') ? 'active-page' : '' }}">
                    <a href="{{ route('profil.index') }}"><i data-feather="user"></i>Profil</a>
                </li>
                <li class="{{ request()->is('dashboard/galeri*') ? 'active-page' : '' }}">
                    <a href="{{ route('galeri.index') }}"><i data-feather="image"></i>Galeri</a>
                </li>
                <li class="{{ request()->is('dashboard/kontak*') ? 'active-page' : '' }}">
                    <a href="{{ route('kontak.index') }}"><i data-feather="phone"></i>Kontak</a>
                </li>
                <li class="{{ request()->is('dashboard/acara*') ? 'active-page' : '' }}">
                    <a href="{{ route('acara.index') }}"><i data-feather="calendar"></i>Acara</a>
                </li>
                <li class="sidebar-title">
                    Lainnya
                </li>
                <li class="{{ request()->is('dashboard/user*') ? 'active-page' : '' }}">
                    <a href="{{ route('user.index') }}"><i data-feather="user"></i>Pengguna</a>
                </li>
                <li>
                    <a href="#"><i data-feather="code"></i>Tautan<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                        <li><a href="{{ route('testimonial.index') }}"><i class="far fa-circle"></i>Testimonial</a>
                        </li>
                        <li><a href="#"><i class="far fa-circle"></i>FAQ?</a></li>
                    </ul>
                </li>
            @endif

            @if (auth()->user()->roles == 'user')
                <li class="{{ request()->is('dashboard/galeri*') ? 'active-page' : '' }}">
                    <a href="{{ route('galeri.index') }}"><i data-feather="image"></i>Galeri</a>
                </li>
                <li class="{{ request()->is('dashboard/acara*') ? 'active-page' : '' }}">
                    <a href="{{ route('acara.index') }}"><i data-feather="calendar"></i>Acara</a>
                </li>
            @endif
        </ul>
    </div>

    {{-- content --}}
    @yield('content')

</div>
