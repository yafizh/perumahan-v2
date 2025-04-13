<?php

namespace App\Http\Controllers\pelanggan;

use App\Http\Controllers\Controller;
use App\Models\PelangganKelengkapanDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelengkapanDokumenController extends Controller
{
    public function index()
    {
        $kelengkapanDokumen = Auth::user()->pelanggan->kelengkapanDokumen;
        return view('dashboard.pelanggan.halaman.kelengkapan_dokumen.index', [
            'kelengkapanDokumen' => $kelengkapanDokumen
        ]);
    }

    public function edit()
    {
        $kelengkapanDokumen = Auth::user()->pelanggan->kelengkapanDokumen;
        return view('dashboard.pelanggan.halaman.kelengkapan_dokumen.edit', [
            'kelengkapanDokumen' => $kelengkapanDokumen
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'ktp'               => 'nullable|file',
            'slip_gaji'         => 'nullable|file',
            'buku_rekening'     => 'nullable|file',
            'npwp'              => 'nullable|file',
            'ktp_pasangan'      => 'nullable|file',
            'surat_nikah_cerai' => 'nullable|file',
        ]);

        $timestamp = now()->timestamp;
        $kelengkapanDokumen = [];
        if ($request->file('ktp')) {
            $kelengkapanDokumen['ktp'] = $request->file('ktp')->store('kelengkapan-dokumen');
            $kelengkapanDokumen['ktp_status'] = 'Pending';
        }

        if ($request->file('slip_gaji')) {
            $kelengkapanDokumen['slip_gaji'] = $request->file('slip_gaji')->store('kelengkapan-dokumen');
            $kelengkapanDokumen['slip_gaji_status'] = 'Pending';
        }

        if ($request->file('buku_rekening')) {
            $kelengkapanDokumen['buku_rekening'] = $request->file('buku_rekening')->store('kelengkapan-dokumen');
            $kelengkapanDokumen['buku_rekening_status'] = 'Pending';
        }

        if ($request->file('npwp')) {
            $kelengkapanDokumen['npwp'] = $request->file('npwp')->store('kelengkapan-dokumen');
            $kelengkapanDokumen['npwp_status'] = 'Pending';
        }

        if ($request->file('ktp_pasangan')) {
            $kelengkapanDokumen['ktp_pasangan'] = $request->file('ktp_pasangan')->store('kelengkapan-dokumen');
            $kelengkapanDokumen['ktp_pasangan_status'] = 'Pending';
        }

        if ($request->file('surat_nikah_cerai')) {
            $kelengkapanDokumen['surat_nikah_cerai'] = $request->file('surat_nikah_cerai')->store('kelengkapan-dokumen');
            $kelengkapanDokumen['surat_nikah_cerai_status'] = 'Pending';
        }

        PelangganKelengkapanDokumen::updateOrCreate(
            ['id_pelanggan' => Auth::user()->pelanggan->id],
            $kelengkapanDokumen,
        );

        return redirect("/pelanggan/kelengkapan-dokumen")->with('berhasil', 'Berhasil Memperbaharui Kelengkapan Dokumen');
    }
}
