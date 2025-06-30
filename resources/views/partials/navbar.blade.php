<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    {{-- Logo --}}
    <a href="{{ url('/') }}" class="logo d-flex align-items-center text-decoration-none">
      <img src="{{ asset('assets/img/logo_DESA.png') }}" alt="Logo Desa Rumbio" style="height: 60px; margin-right: 10px;">
      <h1 class="sitename mb-0 fs-4">Desa Rumbio</h1>
    </a>

    {{-- Navigation Menu --}}
    <nav id="navmenu" class="navmenu">
      <ul class="d-flex align-items-center gap-3 mb-0">

        {{-- Link Umum --}}
        <li><a href="{{ url('/') }}" class="text-decoration-none">Beranda</a></li>
        <li><a href="{{ url('/about') }}" class="text-decoration-none">Tentang Desa</a></li>
        <li><a href="{{ url('/surat') }}" class="text-decoration-none">Layanan Surat</a></li>
        <li><a href="{{ url('/struktur') }}" class="text-decoration-none">Struktur Organisasi</a></li>

        {{-- Link User Autentikasi --}}
        @auth
          <li><a href="{{ route('pengajuan.success', auth()->id()) }}" class="text-decoration-none">Riwayat Saya</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ Auth::user()->photo ? asset(Auth::user()->photo) : asset('assets/img/profil.png') }}" 
                  alt="User"
                  class="rounded-circle me-2"
                  style="width: 30px; height: 30px; object-fit: cover;">
              <span>Halo, {{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item text-decoration-none" href="{{ route('profile.show') }}">Profil Saya</a></li>
              <li>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="dropdown-item text-decoration-none">Keluar</button>
                </form>
              </li>
            </ul>
          </li>
        @endauth

        @guest
          <li>
            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary rounded-pill d-flex align-items-center px-3 py-1 text-decoration-none">
              <i class="bi bi-box-arrow-in-right me-2"></i> Masuk
            </a>
          </li>
        @endguest

      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>
