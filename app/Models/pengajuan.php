<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    // Nama tabel (opsional jika nama model == nama tabel jamak)
    protected $table = 'pengajuans';

    // Field yang dapat diisi (mass assignment)
    protected $fillable = [
        'user_id',
        'nama',
        'nik',
        'alamat',
        'email',
        'jenis_surat',
        'dokumen_pendukung',
        'status',
        'dokumen_surat',
    ];

    // Tanggal yang diperlakukan sebagai Carbon instance (opsional, tapi umum)
    protected $dates = ['created_at', 'updated_at'];

    protected static function booted()
    {
        static::creating(function ($pengajuan) {
            if (is_null($pengajuan->status)) {
                $pengajuan->status = 'Menunggu';
            }
        });
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
