@extends('layouts.app')

@section('title', 'Kontak | Desa Rumbio')

@section('content')

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
