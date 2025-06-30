@extends('layouts.app')

@section('title', 'Edit Profile | Desa Rumbio')

@section('content')
<div class="container">
    <h3>Edit Profil</h3>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password Baru (opsional)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Konfirmasi Password (untuk dapat mengubah profil)</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <label>Foto Profil</label><br>
            @if($user->photo)
                <img src="{{ asset($user->photo) }}" width="100"><br><br>
            @endif
            <input type="file" name="photo" class="form-control">
        </div>
        <button class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('profile.show') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
