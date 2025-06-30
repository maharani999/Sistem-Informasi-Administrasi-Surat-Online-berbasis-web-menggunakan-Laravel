<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    /**
     * Tampilkan form pengajuan surat.
     */
    public function create()
    {
        return view('pengajuan.create');
    }

    /**
     * Simpan data pengajuan ke database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'jenis_surat' => 'required|in:Surat Keterangan Miskin,Surat Keterangan Domisili,Surat Pengantar SKCK,Surat Keterangan Usaha,Surat Kematian',
            'dokumen_pendukung.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Simpan dokumen jika ada
        $paths = [];

        if ($request->hasFile('dokumen_pendukung')) {
            foreach ($request->file('dokumen_pendukung') as $file) {
                $paths[] = $file->store('dokumen', 'shared_public');
            }
        }

        // Simpan data ke database
        $pengajuan = Pengajuan::create([
            'user_id' => Auth::id(),
            'nama' => $validatedData['nama'],
            'nik' => $validatedData['nik'],
            'alamat' => $validatedData['alamat'],
            'email' => $validatedData['email'],
            'jenis_surat' => $validatedData['jenis_surat'],
            'status' => 'Menunggu',
            'dokumen_pendukung' =>  json_encode($paths),
        ]);

        return redirect()->route('pengajuan.success')
                         ->with('success', 'Pengajuan surat berhasil dikirim.');
    }

    /**
     * Tampilkan halaman success yang berisi daftar pengajuan user.
     */
    public function success()
    {
        $pengajuans = Pengajuan::where('user_id', Auth::id())
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('pengajuan.success', compact('pengajuans'));
    }

    /**
     * Tampilkan form edit pengajuan.
     */
    public function edit($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        if ($pengajuan->user_id !== Auth::id()) {
            abort(403, 'Anda tidak diizinkan mengedit pengajuan ini.');
        }

        return view('pengajuan.edit', compact('pengajuan'));
    }

    /**
     * Update data pengajuan.
     */
    public function update(Request $request, $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        if ($pengajuan->user_id !== Auth::id()) {
            abort(403, 'Anda tidak diizinkan memperbarui pengajuan ini.');
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'jenis_surat' => 'required|in:Surat Keterangan Miskin,Surat Keterangan Domisili,Surat Pengantar SKCK,Surat Keterangan Usaha,Surat Kematian',
            'dokumen_pendukung.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('dokumen_pendukung')) {
            $paths = [];
            foreach ($request->file('dokumen_pendukung') as $file) {
                $paths[] = $file->store('dokumen', 'shared_public');
            }
            $validatedData['dokumen_pendukung'] = json_encode($paths);
        }

        $pengajuan->update($validatedData);

        return redirect()->route('pengajuan.success')->with('success', 'Pengajuan berhasil diperbarui.');
    }

    /**
     * Hapus data pengajuan.
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        if ($pengajuan->user_id !== Auth::id()) {
            abort(403, 'Anda tidak diizinkan menghapus pengajuan ini.');
        }

        $pengajuan->delete();

        return redirect()->route('pengajuan.success')->with('success', 'Pengajuan berhasil dihapus.');
    }
}
