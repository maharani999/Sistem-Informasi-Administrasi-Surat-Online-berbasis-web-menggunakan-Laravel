@extends('layouts.app')

@section('title', 'Profil | Desa Rumbio')

@section('content')
<div class="container mt-4">

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonColor: "#3085d6",
            });
        </script>
    @endif

    {{-- Judul Profil --}}
    <div class="text-center mb-4">
        <h2 class="fw-bold">Profil Saya</h2>
        <p class="text-muted">Lihat informasi akun Anda di bawah ini</p>
        <hr style="width: 80px; border: 2px solid #0d6efd; margin: auto;">
    </div>

    {{-- Kartu Profil --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4">
                <div class="card-body text-center">
                    <img src="{{ $user->photo ? asset($user->photo) : asset('assets/img/profil.png') }}"
                        alt="Foto Profil"
                        class="rounded-circle mb-3"
                        style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #ccc;">

                    <h4 class="mb-1">{{ $user->name }}</h4>
                    <p class="text-muted">{{ $user->email }}</p>

                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary mt-3 px-4">
                        <i class="bi bi-pencil-square"></i> Edit Profil
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
