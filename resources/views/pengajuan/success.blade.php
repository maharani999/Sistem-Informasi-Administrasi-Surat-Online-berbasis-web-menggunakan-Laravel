@extends('layouts.app')

@section('title', 'Riwayat Pengajuan Surat | Desa Rumbio')

@section('content')

@if(session('success'))
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Riwayat Pengajuan Surat</h2>
                <p class="text-muted">Berikut adalah daftar semua pengajuan Anda:</p>
                <hr style="width: 80px; border: 2px solid #0d6efd; margin: auto;">
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Jenis Surat</th>
                            <th>Status</th>
                            <th>Dokumen Pendukung</th>
                            <th>Dokumen Surat</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengajuans as $index => $pengajuan)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $pengajuan->nama }}</td>
                                <td>{{ $pengajuan->nik }}</td>
                                <td>{{ $pengajuan->alamat }}</td>
                                <td>{{ $pengajuan->email ?? '-' }}</td>
                                <td class="text-center">{{ $pengajuan->jenis_surat }}</td>
                                <td class="text-center">
                                    <span class="badge rounded-pill 
                                        @if($pengajuan->status == 'Menunggu') bg-secondary
                                        @elseif($pengajuan->status == 'Diproses') bg-warning text-dark
                                        @elseif($pengajuan->status == 'Selesai') bg-success
                                        @else bg-danger @endif">
                                        {{ $pengajuan->status }}
                                    </span>
                                </td>

                                {{-- Dokumen Pendukung --}}
                                <td class="text-center">
                                    @if($pengajuan->dokumen_pendukung)
                                        @foreach(json_decode($pengajuan->dokumen_pendukung, true) as $file)
                                            @php
                                                $ext = pathinfo($file, PATHINFO_EXTENSION);
                                                $filename = basename($file);
                                                $url = asset('shared_storage/dokumen/' . $filename);
                                            @endphp

                                            @if(in_array(strtolower($ext), ['jpg', 'jpeg', 'png']))
                                                <img src="{{ $url }}" alt="Dokumen Gambar" width="100" class="img-thumbnail mb-2 d-block mx-auto">
                                            @elseif(strtolower($ext) === 'pdf')
                                                <iframe src="{{ $url }}" width="100%" height="250px" class="mb-2" style="border: 1px solid #ccc;"></iframe>
                                            @else
                                                <p class="text-muted">File: <a href="{{ $url }}" target="_blank">{{ $filename }}</a></p>
                                            @endif
                                        @endforeach
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>

                                {{-- Dokumen Surat --}}
                                <td class="text-center">
                                    @if($pengajuan->dokumen_surat)
                                        <a href="{{ asset('storage/' . $pengajuan->dokumen_surat) }}" target="_blank" class="btn btn-sm btn-outline-info">Lihat</a>
                                        <a href="{{ asset('storage/' . $pengajuan->dokumen_surat) }}" download class="btn btn-sm btn-outline-success mt-1">Download</a>
                                    @else
                                        <span class="text-muted">Belum tersedia</span>
                                    @endif
                                </td>

                                <td class="text-center">{{ $pengajuan->created_at->format('d-m-Y H:i') }}</td>
                                <td class="text-center">
                                    @if($pengajuan->status != 'Selesai')
                                        <a href="{{ route('pengajuan.edit', $pengajuan->id) }}" class="btn btn-sm btn-primary mb-1">Edit</a>
                                        <form action="{{ route('pengajuan.destroy', $pengajuan->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus pengajuan ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    @else
                                        <span class="text-muted">Tidak bisa diedit</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center text-muted">Belum ada pengajuan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-4">
                <a href="{{ route('pengajuan.create') }}" class="btn btn-lg btn-primary">
                    + Ajukan Surat Baru
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
