<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelangganKelengkapanDokumen extends Model
{
    use HasFactory;

    protected $table = 'pelanggan_kelengkapan_dokumen';
    protected $guarded = ['id'];
}
