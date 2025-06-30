@extends('layouts.app')

@section('title', 'Form Pengajuan Surat | Desa Rumbio')

@section('content')
@if (session('success'))
  <script>
    Swal.fire({
      title: "Berhasil",
      text: "{{ session('success') }}",
      icon: "success"
    });
  </script>
@endif

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-5">
                    <h2 class="mb-2 text-center fw-bold text-dark">Form Pengajuan Surat</h2>
                        <p class="text-center text-muted fst-italic mb-3 fs-6">
                            Silakan isi form pengajuan surat dengan lengkap dan benar. Dokumen pendukung wajib diunggah sesuai kebutuhan jenis surat.
                        </p>
                        <hr class="mx-auto" style="width: 100px; border-top: 3px solid #007bff;">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="mb-0 mt-2 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                            <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                        </div>

                        <div class="mb-4">
                            <label for="nik" class="form-label fw-semibold">NIK</label>
                            <input type="text" name="nik" id="nik" maxlength="16" class="form-control form-control-lg @error('nik') is-invalid @enderror" value="{{ old('nik') }}" required>
                            <div class="invalid-feedback">NIK harus terdiri dari 16 digit.</div>
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="form-label fw-semibold">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control form-control-lg @error('alamat') is-invalid @enderror" required>{{ old('alamat') }}</textarea>
                            <div class="invalid-feedback">Alamat wajib diisi.</div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Email (opsional)</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            <div class="invalid-feedback">Masukkan email yang valid.</div>
                        </div>

                        <div class="mb-4">
                            <label for="jenis_surat" class="form-label fw-semibold">Jenis Surat</label>
                            <select name="jenis_surat" id="jenis_surat" class="form-select form-select-lg @error('jenis_surat') is-invalid @enderror" required>
                                <option value="" disabled {{ old('jenis_surat') ? '' : 'selected' }}>-- Pilih Jenis Surat --</option>
                                <option value="Surat Keterangan Miskin" {{ old('jenis_surat') == 'Surat Keterangan Miskin' ? 'selected' : '' }}>Surat Keterangan Miskin</option>
                                <option value="Surat Keterangan Domisili" {{ old('jenis_surat') == 'Surat Keterangan Domisili' ? 'selected' : '' }}>Surat Keterangan Domisili</option>
                                <option value="Surat Pengantar SKCK" {{ old('jenis_surat') == 'Surat Pengantar SKCK' ? 'selected' : '' }}>Surat Pengantar SKCK</option>
                                <option value="Surat Keterangan Usaha" {{ old('jenis_surat') == 'Surat Keterangan Usaha' ? 'selected' : '' }}>Surat Keterangan Usaha</option>
                                <option value="Surat Kematian" {{ old('jenis_surat') == 'Surat Kematian' ? 'selected' : '' }}>Surat Kematian</option>
                            </select>
                            <div class="invalid-feedback">Pilih salah satu jenis surat.</div>
                        </div>

                        <div class="mb-4">
                            <label for="dokumen_pendukung" class="form-label fw-semibold">Upload Dokumen Pendukung</label>
                            <input type="file" name="dokumen_pendukung[]" id="dokumen_pendukung" class="form-control form-control-lg" multiple accept=".pdf,.jpg,.jpeg,.png">
                            <small class="text-muted">Anda dapat mengunggah lebih dari satu file. Format: PDF, JPG, PNG. Max 2MB per file.</small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-semibold">Kirim Pengajuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Bootstrap 5 client-side validation
    (() => {
      'use strict'

      const forms = document.querySelectorAll('.needs-validation')

      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
</script>

@endsection
