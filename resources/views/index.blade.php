@extends('layouts.app')

@section('title', 'Beranda | Desa Rumbio')

@section('content')

<section id="hero" class="hero" aria-label="Hero section Desa Rumbio">
  <div id="heroCarousel" class="carousel slide carousel-fade h-100 w-100" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner h-100 w-100">

      <!-- Slide 1 -->
      <div class="carousel-item active h-100">
        <img src="{{ asset('assets/img/bg.jpg') }}" 
             alt="Pemandangan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg2.jpg') }}" 
             alt="Aktivitas masyarakat di Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg3.jpg') }}" 
             alt="Pemandangan alam Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg5.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg6.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <!-- Slide 6 -->
      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg7.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <!-- Slide 7 -->
      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg8.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg9.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg10.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg11.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg12.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg13.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg14.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg15.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg16.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

      <div class="carousel-item h-100">
        <img src="{{ asset('assets/img/bg17.jpeg') }}" 
             alt="Kegiatan Desa Rumbio" 
             class="d-block w-100 h-100"
             style="object-fit: cover;">
      </div>

    </div>

    <!-- Navigasi Carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Selanjutnya</span>
    </button>
  </div>

  <!-- Teks di atas Gambar -->
  <div class="hero-text">
    <h2 class="fade-in">Desa Rumbio</h2>
    <p class="small fst-italic fade-in" style="animation-delay: 0.5s;">Mudah, cepat, dan terpercaya</p>
    <p class="fade-in" style="animation-delay: 0.7s;">Pelayanan Administrasi Surat Online</p>
    <a href="/surat" class="btn btn-primary btn-lg rounded-pill fade-in" style="animation-delay: 1s;">
      <i class="bi bi-envelope-fill me-2"></i> Pelayanan Surat
    </a>
  </div>
</section>

<section id="contact" class="py-5">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-4">
            <h2 class="fw-bold">Kontak</h2>
            <p class="text-muted">Hubungi kontak person apabila ada kendala dan masalah!</p>
            <hr style="width: 80px; border: 2px solid #0d6efd; margin: auto;">
        </div>

        <!-- Map -->
        <div class="mb-4 rounded shadow" data-aos="fade-up" data-aos-delay="100">
            <iframe
                style="border:0; width: 100%; height: 300px; border-radius: 10px;"
                src="https://www.google.com/maps?q=0.90400000,99.52700000&hl=id&z=15&output=embed"
                frameborder="0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Contact Info -->
        <div class="row g-4 justify-content-center mt-4">

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-light p-4 rounded shadow-sm h-100 d-flex align-items-start gap-3">
                    <i class="bi bi-geo-alt fs-3 text-primary"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Alamat</h5>
                        <p class="mb-0">Desa Rumbio, Kec. Panyabungan Utara,<br>Kab. Mandailing Natal, Sumatera Utara</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-light p-4 rounded shadow-sm h-100 d-flex align-items-start gap-3">
                    <i class="bi bi-telephone fs-3 text-primary"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Telepon</h5>
                        <p class="mb-0">+62 812-6574-4179</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-light p-4 rounded shadow-sm h-100 d-flex align-items-start gap-3">
                    <i class="bi bi-envelope fs-3 text-primary"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Email</h5>
                        <p class="mb-0">sitimaharanipulungan@gmail.com</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
