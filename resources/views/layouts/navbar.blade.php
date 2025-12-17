<style>
    .navbar-nav .nav-link {
    color: #333;
    transition: color 0.3s ease, background-color 0.3s ease;
    border-radius: 6px;
    padding: 8px 18px; /* atur jarak antar menu */
    font-weight: 500;
    }

    /* Hover effect */
    .navbar-nav .nav-link:hover {
        background-color: #1E3A8A;
        color: #fff !important;
    }

    /* Active menu */
    .navbar-nav .nav-link.active {
        background-color: #3B82F6;
        color: #fff !important;
    }

    /* Navbar center */
    .navbar-nav {
        display: flex;
        justify-content: center; /* posisi ke tengah */
        gap: 30px; /* jarak antar menu */
        width: 100%;
    }
    .content {
        margin-left: 220px; /* kasih space biar konten tidak ketutup sidebar */
        padding: 20px;
    }
</style>

{{-- Guest & User pakai navbar atas --}}
@guest
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('noauth.pengurus.index') ? 'active' : '' }}" href="{{ route('noauth.pengurus.index') }}">Profile</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('noauth.regulasi.index') ? 'active' : '' }}" href="{{ route('noauth.regulasi.index') }}">Regulasi</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('noauth.umkm.index') ? 'active' : '' }}"
                    href="{{ route('noauth.umkm.index') }}"
                    id="navbarUmkm"
                    role="button"
                    data-bs-toggle="{{ request()->routeIs('noauth.umkm.index') ? 'dropdown' : '' }}"
                    aria-expanded="false">
                        UMKM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarUmkm">
                        <li>
                            <a class="dropdown-item {{ request('daerah_id') ? '' : 'active' }}" 
                            href="{{ route('noauth.umkm.index', ['kategori_id' => request('kategori_id')]) }}">
                                Semua Daerah
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        @foreach ($daerahList as $daerah)
                            <li>
                                <a class="dropdown-item {{ request('daerah_id') == $daerah->id ? 'active' : '' }}" 
                                href="{{ route('noauth.umkm.index', [
                                        'daerah_id' => $daerah->id,
                                        'kategori_id' => null
                                ]) }}">
                                    {{ $daerah->nama }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>        
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('noauth.news.index') ? 'active' : '' }}" href="{{ route('noauth.news.index') }}">Berita</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('noauth.lowongan.index') ? 'active' : '' }}" href="{{ route('noauth.lowongan.index') }}">Lowongan</a></li>
    </ul>
@endguest

@auth
    @if(auth()->user()->isUser())
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}"><i class="fas fa-user me-1"></i>Profile</a></li>
        </ul>
    @endif
    @endauth