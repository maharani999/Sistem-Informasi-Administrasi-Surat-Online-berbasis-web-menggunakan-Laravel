@extends('layouts.app')

@section('title', 'Edit Pengajuan | Desa Rumbio')

@section('content')
<div class="container mt-4">
    <h2>Edit Pengajuan Surat</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Validasi error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pengajuan.update', $pengajuan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $pengajuan->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ old('nik', $pengajuan->nik) }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat', $pengajuan->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="jenis_surat" class="form-label">Jenis Surat</label>
            <input type="text" name="jenis_surat" class="form-control" value="{{ old('jenis_surat', $pengajuan->jenis_surat) }}" required>
        </div>

        <div class="mb-3">
            <label for="dokumen_pendukung" class="form-label">Dokumen Pendukung (jika ingin diganti)</label>
            @if($pengajuan->dokumen_pendukung)
                <p>
                    File saat ini: 
                    <a href="{{ asset('storage/' . $pengajuan->dokumen_pendukung) }}" target="_blank">
                        {{ basename($pengajuan->dokumen_pendukung) }}
                    </a>
                </p>
            @endif
            <input type="file" name="dokumen_pendukung" class="form-control" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti dokumen pendukung.</small>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('pengajuan.success') }}" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>
@endsection
