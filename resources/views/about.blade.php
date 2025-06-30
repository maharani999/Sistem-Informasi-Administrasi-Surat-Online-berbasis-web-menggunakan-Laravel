@extends('layouts.app')

@section('title', 'Tentang Desa | Desa Rumbio')

@section('content')

<section id="about" class="about section py-5 bg-light">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">
      <!-- Konten teks -->
      <div class="col-12">
        <h2 class="fw-bold text-success mb-3">Tentang Desa Rumbio</h2>
        <hr style="width: 100px; border: 2px solid #28a745; margin-bottom: 20px;">

        <p class="lead text-secondary mb-4">
          Desa Rumbio adalah sebuah desa yang terletak di Kecamatan Panyabungan Utara, Kabupaten Mandailing Natal, Sumatera Utara. Terkenal dengan keindahan alamnya yang memikat dan kehidupan masyarakatnya yang harmonis, Desa Rumbio tumbuh sebagai desa yang menjunjung tinggi nilai-nilai budaya dan kearifan lokal.
        </p>

        <p class="text-secondary mb-3">
          Menurut penuturan para tetua, Desa Rumbio berdiri sejak awal abad ke-19 dan merupakan salah satu permukiman awal di wilayah Mandailing Natal. Nama "Rumbio" diambil dari jenis pohon rumbia yang dahulu tumbuh subur di sekitar perkampungan. Desa ini awalnya dihuni oleh para petani dan nelayan sungai yang hidup berdampingan secara sederhana. Dari masa ke masa, Rumbio berkembang dengan mempertahankan nilai-nilai adat, terutama dalam hal musyawarah dan gotong royong yang menjadi ciri khas warganya hingga kini.
        </p>
        <!-- Cerita Aek Batang Gadis -->
        <p class="text-secondary mb-4">
          Salah satu pesona alami yang menjadi kebanggaan masyarakat Rumbio adalah <strong>Aek Batang Gadis</strong> — sungai yang mengalir tenang membelah desa, menyimpan banyak cerita dan sejarah. Dulu, anak-anak bermain dan belajar berenang di sana, sementara para orang tua mencuci pakaian sambil bercengkrama. Pada musim panas, banyak warga dan pendatang berdatangan hanya untuk menikmati kesegaran airnya yang jernih dan batu-batu alam yang memikat. Sungai ini bukan sekadar tempat, melainkan bagian dari kenangan kolektif warga Rumbio yang terus hidup dari generasi ke generasi.
        </p>
      </div>

      <!-- Layanan Aplikasi -->
      <div class="col-12 mt-4">
        <h3 class="fw-semibold text-success mb-3">Layanan Administrasi Surat Online</h3>
        <p class="text-secondary mb-4">
          Untuk meningkatkan pelayanan publik, Desa Rumbio kini menyediakan layanan administrasi surat secara online. Masyarakat dapat mengajukan berbagai jenis surat seperti keterangan domisili, usaha, maupun surat keterangan miskin, langsung dari rumah hanya dalam beberapa langkah mudah.
        </p>

        <ul class="list-unstyled mb-4">
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check-circle-fill text-success fs-5 me-3"></i>
            <div><strong>Cepat & Mudah:</strong> Semua pengajuan cukup dilakukan secara digital.</div>
          </li>
          <li class="d-flex align-items-start mb-3">
            <i class="bi bi-check-circle-fill text-success fs-5 me-3"></i>
            <div><strong>Tanpa Antri:</strong> Tidak perlu datang ke kantor desa, cukup dari rumah.</div>
          </li>
          <li class="d-flex align-items-start">
            <i class="bi bi-check-circle-fill text-success fs-5 me-3"></i>
            <div><strong>Transparan & Efisien:</strong> Proses pengajuan dan verifikasi lebih transparan.</div>
          </li>
        </ul>

        <div class="alert alert-success fw-semibold" role="alert" style="font-size: 1.05rem;">
          <i class="bi bi-lightning-charge-fill me-2"></i> Sekarang, urus surat cukup satu klik saja!
        </div>
      </div>

      <!-- Gambar di bawah deskripsi -->
      <div class="col-12">
        <div class="text-center mt-4">
          <img src="{{ asset('assets/img/alur.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Alur Aplikasi Desa Rumbio" style="max-width: 800px; border-radius: 16px;">
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
