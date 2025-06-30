@extends('layouts.app')

@section('title', 'Struktur Organisasi | Desa Rumbio')

@section('content')

<section id="struktur" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Struktur Pemerintahan Desa</h2>
      <p class="text-muted">Berikut adalah struktur organisasi pemerintahan Desa Rumbio.</p>
      <hr style="width: 80px; border: 2px solid #0d6efd; margin: auto;">
    </div>

    <div class="org-chart">
      <!-- Kepala Desa -->
      <div class="node">
        <div class="title">Dra. Syafruddin Pulungan</div>
        <div class="position">Kepala Desa</div>
        <div class="description">Pemimpin dan penanggung jawab utama pemerintahan desa serta pengambilan keputusan strategis.</div>
      </div>

      <!-- Panah ke bawah -->
      <div class="connector vertical"></div>

      <!-- Level 2 -->
      <div class="level-2">
        <!-- Sekretaris -->
        <div class="node">
          <div class="title">Ahmad Habibi Matondang</div>
          <div class="position">Sekretaris Desa</div>
          <div class="description">Mengelola administrasi dan pelaksanaan pelayanan umum serta membantu Kepala Desa.</div>
        </div>
      </div>

      <!-- Panah ke bawah -->
      <div class="connector vertical"></div>

      <!-- Level 3 -->
      <div class="level-3 d-flex justify-content-center gap-5">
        <div class="node">
          <div class="title">Armansyah</div>
          <div class="position">Kaur Keuangan</div>
          <div class="description">Mengelola keuangan dan anggaran desa secara transparan dan akuntabel.</div>
        </div>
        <div class="node">
          <div class="title">Rusta Hatami</div>
          <div class="position">Kaur Umum & Perencanaan</div>
          <div class="description">Mengelola administrasi umum serta menyusun perencanaan program desa.</div>
        </div>
      </div>

      <!-- Panah ke bawah -->
      <div class="connector vertical"></div>

      <!-- Level 4 -->
      <div class="level-4 d-flex justify-content-center gap-5">
        <div class="node">
          <div class="title">Muhammad Danil HSB</div>
          <div class="position">Kasi Pemerintahan</div>
          <div class="description">Mengurus urusan pemerintahan desa dan menjaga hubungan antar lembaga.</div>
        </div>
        <div class="node">
          <div class="title">Asnawi Rangkuti</div>
          <div class="position">Kasi Pelayanan & Kesejahteraan</div>
          <div class="description">Melayani masyarakat dan mengelola program kesejahteraan sosial.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .org-chart {
    max-width: 900px;
    margin: auto;
    text-align: center;
  }

  .node {
    background: #28a745;
    color: white;
    padding: 15px 25px;
    border-radius: 8px;
    min-width: 200px;
    box-shadow: 0 4px 10px rgb(13 110 253 / 0.4);
  }

  .node .title {
    font-weight: 700;
    font-size: 18px;
  }

  .node .position {
    font-weight: 600;
    font-size: 14px;
    margin-top: 4px;
    opacity: 0.9;
  }

  .node .description {
    font-weight: 400;
    font-size: 13px;
    margin-top: 8px;
    opacity: 0.8;
    color: #d4edda; /* sedikit lebih terang dari putih */
  }

  /* Connector Panah vertikal */
  .connector.vertical {
    width: 2px;
    height: 40px;
    background: #28a745;
    margin: 20px auto;
    position: relative;
  }

  /* Connector panah horizontal antara node level 3 dan 4 */
  .level-3, .level-4 {
    gap: 60px;
  }

  /* Panah bawah di connector */
  .connector.vertical::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    border: 8px solid transparent;
    border-top-color: #28a745;
  }
</style>

@endsection
