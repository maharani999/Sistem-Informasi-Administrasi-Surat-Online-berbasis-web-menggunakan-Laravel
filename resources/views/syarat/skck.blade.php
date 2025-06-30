@extends('layouts.app')

@section('title', 'Syarat SKCK | Desa Rumbio')

@section('content')

<!-- Syarat Section -->
<section id="faq" class="faq section bg-light py-5">
    <div class="container">
        <div class="row gy-5 justify-content-center">

            <!-- Judul Utama -->
            <div class="col-12 text-center">
                <h2 class="fw-bold text-success mb-3">Syarat Membuat Surat Pengantar SKCK</h2>
                <p class="text-secondary lead">
                    Berikut ini adalah informasi dan persyaratan lengkap untuk mengajukan Surat Pengantar SKCK di Desa Rumbio.
                </p>
            </div>

            <!-- Keterangan Surat -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Apa itu Surat Pengantar SKCK?</h4>
                    <p class="text-secondary mb-3">
                        Surat Pengantar SKCK adalah dokumen resmi dari pemerintah desa yang digunakan sebagai syarat untuk membuat Surat Keterangan Catatan Kepolisian (SKCK) di kantor kepolisian. <strong>SKCK</strong> sendiri adalah singkatan dari <em>Surat Keterangan Catatan Kepolisian</em>. Surat ini menyatakan bahwa pemohon adalah warga yang berdomisili di desa dan tidak memiliki catatan kriminal.
                    </p>
                    <p class="text-secondary mb-3">
                        SKCK biasanya digunakan sebagai salah satu persyaratan untuk berbagai keperluan administratif seperti melamar pekerjaan, mendaftar sebagai calon pegawai negeri sipil (CPNS), membuat visa, mengikuti seleksi anggota TNI/POLRI, serta keperluan lainnya yang memerlukan bukti tidak memiliki catatan kriminal.
                    </p>
                    <p class="text-secondary">
                        Surat ini dapat diajukan secara online melalui sistem layanan Desa Rumbio.
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
                                Digunakan untuk verifikasi identitas pemohon.
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
                                Untuk melihat data keluarga dan tempat tinggal pemohon.
                            </div>
                        </div>
                    </div>

                    <!-- Pas Foto -->
                    <div class="accordion-item mb-3 border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-camera me-2 text-success"></i> Pas Foto Terbaru (4x6) Background Merah
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Foto ini digunakan untuk keperluan dokumen SKCK di kepolisian.
                            </div>
                        </div>
                    </div>

                    <!-- Surat Pernyataan -->
                    <div class="accordion-item border-0 rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <i class="bi bi-file-earmark-text me-2 text-success"></i> Surat Permohonan atau Pernyataan Diri
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Berisi maksud dan tujuan pengajuan SKCK, ditandatangani oleh pemohon di atas materai.
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->
            </div>
        </div>
    </div>
</section>

@endsection
