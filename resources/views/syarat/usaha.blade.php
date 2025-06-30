@extends('layouts.app')

@section('title', 'Syarat Usaha | Desa Rumbio')

@section('content')

<!-- Syarat Section -->
<section id="faq" class="faq section bg-light py-5">
    <div class="container">
        <div class="row gy-5 justify-content-center">

            <!-- Judul Utama -->
            <div class="col-12 text-center">
                <h2 class="fw-bold text-success mb-3">Syarat Membuat Surat Keterangan Usaha</h2>
                <p class="text-secondary lead">
                    Berikut ini adalah informasi lengkap mengenai pengajuan Surat Keterangan Usaha di Desa Rumbio.
                </p>
            </div>

            <!-- Keterangan Surat -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Apa itu Surat Keterangan Usaha?</h4>
                    <p class="text-secondary mb-3">
                        Surat Keterangan Usaha (SKU) adalah dokumen resmi yang dikeluarkan oleh desa untuk menyatakan keberadaan dan legalitas suatu usaha milik warga. Dokumen ini biasanya dibutuhkan dalam pengurusan perizinan, pengajuan pinjaman, atau keperluan administratif lainnya.
                    </p>
                    <p class="text-secondary">
                        Pengajuan SKU bisa dilakukan secara online melalui layanan resmi Desa Rumbio.
                    </p>

                    <div class="d-grid mt-4">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Login untuk Mengajukan
                            </a>
                        @endguest

                        @auth
                            <a href="{{ route('pengajuan.create') }}" class="btn btn-success btn-lg shadow-sm">
                                <i class="bi bi-file-earmark-text me-2"></i> Ajukan Surat Sekarang
                            </a>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Accordion Persyaratan -->
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-success text-center fw-bold mb-4">Persyaratan Pengajuan Surat</h3>

                <div class="accordion" id="faqAccordion">

                    <!-- KTP -->
                    <div class="accordion-item mb-3 border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="bi bi-person-vcard me-2 text-success"></i> Scan KTP Pemohon
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Digunakan untuk verifikasi identitas pemilik usaha.
                            </div>
                        </div>
                    </div>

                    <!-- KK -->
                    <div class="accordion-item mb-3 border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-people-fill me-2 text-success"></i> Scan Kartu Keluarga (KK)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Untuk memastikan bahwa pemohon terdaftar sebagai penduduk Desa Rumbio.
                            </div>
                        </div>
                    </div>

                    <!-- Surat Pernyataan Usaha -->
                    <div class="accordion-item border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <i class="bi bi-pencil-square me-2 text-success"></i> Surat Pernyataan Usaha
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Surat yang menyatakan jenis dan alamat usaha yang ditandatangani oleh pemohon.
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->
            </div>

        </div>
    </div>
</section>

@endsection
