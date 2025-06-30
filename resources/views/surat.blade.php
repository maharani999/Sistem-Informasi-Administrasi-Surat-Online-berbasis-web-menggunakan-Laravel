@extends('layouts.app')

@section('title', 'Layanan | Desa Rumbio')

@section('content')
<section id="services" class="services section py-5 bg-light">

  <!-- Section Title with Logo -->
    <div class="text-center mb-4">
        <img src="{{ asset('assets/img/logo_DESA.png') }}" alt="Logo Desa Rumbio" style="height: 80px;" class="mb-3">
        <h2 class="fw-bold">Layanan Administrasi</h2>
        <p class="text-muted">Ajukan permintaan administrasi surat Anda secara online dengan mudah dan cepat.</p>
        <hr style="width: 80px; border: 2px solid #0d6efd; margin: auto;">
    </div>

  <div class="container">
    <div class="row g-4 justify-content-center">

      @php
        $layanan = [
          [
            'route' => 'syarat.miskin',
            'icon' => 'bi-envelope-fill',
            'color' => 'primary',
            'title' => 'Surat Keterangan Miskin',
            'desc' => 'Ajukan surat pengantar, surat keterangan, dan dokumen lainnya secara online.'
          ],
          [
            'route' => 'syarat.domisili',
            'icon' => 'bi-house-fill',
            'color' => 'success',
            'title' => 'Surat Keterangan Domisili',
            'desc' => 'Ajukan surat domisili secara online dengan cepat dan mudah.'
          ],
          [
            'route' => 'syarat.kematian',
            'icon' => 'bi-file-earmark-medical-fill',
            'color' => 'danger',
            'title' => 'Surat Keterangan Kematian',
            'desc' => 'Ajukan surat keterangan kematian dengan proses cepat dan aman.'
          ],
          [
            'route' => 'syarat.skck',
            'icon' => 'bi-file-earmark-person-fill',
            'color' => 'warning',
            'title' => 'Surat Pengantar SKCK',
            'desc' => 'Pengajuan Surat Pengantar SKCK (Surat Keterangan Catatan Kepolisian) untuk keperluan resmi Anda.'
          ],
          [
            'route' => 'syarat.usaha',
            'icon' => 'bi-briefcase-fill',
            'color' => 'info',
            'title' => 'Surat Keterangan Usaha',
            'desc' => 'Ajukan surat keterangan usaha sebagai legalitas bisnis Anda.'
          ],
        ];
      @endphp

      @foreach ($layanan as $index => $item)
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
        <div class="card border-0 shadow h-100 hover-shadow transition rounded-4">
          <div class="card-body d-flex align-items-start p-4">
            <div class="me-3">
              <i class="bi {{ $item['icon'] }} fs-1 text-{{ $item['color'] }}"></i>
            </div>
            <div>
              <h5 class="card-title mb-1">
                <a href="{{ route($item['route']) }}" class="text-decoration-none stretched-link text-dark">
                  {{ $item['title'] }}
                </a>
              </h5>
              <p class="card-text text-muted small">{{ $item['desc'] }}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

<style>
  .hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
  }
  .transition {
    transition: all 0.3s ease-in-out;
  }
</style>
@endsection
