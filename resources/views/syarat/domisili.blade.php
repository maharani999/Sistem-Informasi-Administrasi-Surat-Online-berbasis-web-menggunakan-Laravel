@extends('layouts.app')

@section('title', 'Syarat Domisili | Desa Rumbio')

@section('content')

<!-- Syarat Section -->
<section id="faq" class="faq section bg-light py-5">
    <div class="container">
        <div class="row gy-5 justify-content-center">

            <!-- Judul Utama -->
            <div class="col-12 text-center">
                <h2 class="fw-bold text-success mb-3">Syarat Membuat Surat Keterangan Domisili</h2>
                <p class="text-secondary lead">
                    Berikut ini adalah informasi dan persyaratan lengkap untuk mengajukan Surat Keterangan Domisili di Desa Rumbio.
                </p>
            </div>

            <!-- Keterangan Surat -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Apa itu Surat Keterangan Domisili?</h4>
                    <p class="text-secondary mb-3">
                        Surat Keterangan Domisili adalah dokumen resmi yang dikeluarkan oleh pemerintah desa yang menyatakan bahwa seseorang benar berdomisili di wilayah administratif tertentu. Surat ini biasanya digunakan sebagai pelengkap administrasi seperti pembukaan rekening, pengurusan izin usaha, sekolah, dan dokumen lainnya.
                    </p>
                    <p class="text-secondary">
                        Pengajuan surat ini dapat dilakukan secara online melalui website resmi Desa Rumbio.
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
                                <i class="bi bi-person-vcard me-2 text-success"></i> Scan Asli Kartu Tanda Penduduk (KTP)
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Digunakan untuk mencocokkan identitas dan alamat domisili pemohon.
                            </div>
                        </div>
                    </div>

                    <!-- KK -->
                    <div class="accordion-item mb-3 border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-people-fill me-2 text-success"></i> Scan Asli Kartu Keluarga (KK)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Untuk membuktikan susunan keluarga dan tempat tinggal yang sesuai.
                            </div>
                        </div>
                    </div>

                    <!-- Bukti Domisili -->
                    <div class="accordion-item border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <i class="bi bi-house-door me-2 text-success"></i> Bukti Domisili Tambahan
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                <ul class="mb-0">
                                    <li>Foto rumah tempat tinggal saat ini</li>
                                    <li>Surat pernyataan domisili ditandatangani pemohon</li>
                                    <li>Bukti pendukung lain seperti rekening listrik/air (jika ada)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->
            </div>

        </div>
    </div>
</section>

@endsection
