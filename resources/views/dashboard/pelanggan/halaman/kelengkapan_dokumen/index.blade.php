@extends('dashboard.pelanggan.layouts.main')

@section('content')
    <div class="container pt-3">
        <div class="d-flex justify-content-between align-items-center">
            <h4>Kelengkapan Dokumen</h4>
            <a href="/pelanggan/kelengkapan-dokumen/edit" class="btn btn-primary">Perbaharui</a>
        </div>
        <hr>
        @if (session('berhasil'))
            <div class="alert alert-success text-capitalize" role="alert">
                {{ session('berhasil') }}
            </div>
        @endif
        <main class="p-3 mb-3 row justify-content-center">
            <table class="table table-bordered w-100">
                <thead>
                    <tr>
                        <th class="text-center fit">Dokumen</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="align-middle text-nowrap">
                            <a href="{{ asset('storage/' . $kelengkapanDokumen?->ktp) }}" target="_blank">
                                Kartu Tanda Penduduk
                            </a>
                        </th>
                        <td class="text-center align-middle">
                            @if ($kelengkapanDokumen?->ktp_status == 'Valid')
                                <span class="badge text-bg-success">{{ $kelengkapanDokumen?->ktp_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Invalid')
                                <span class="badge text-bg-danger">{{ $kelengkapanDokumen?->ktp_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Pending')
                                <span class="badge text-bg-warning">{{ $kelengkapanDokumen?->ktp_status }}</span>
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            {{ $kelengkapanDokumen?->ktp_keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle text-nowrap">
                            <a href="{{ asset('storage/' . $kelengkapanDokumen?->slip_gaji) }}" target="_blank">
                                Slip Gaji
                            </a>
                        </th>
                        <td class="text-center align-middle">
                            @if ($kelengkapanDokumen?->slip_gaji_status == 'Valid')
                                <span class="badge text-bg-success">{{ $kelengkapanDokumen?->slip_gaji_status }}</span>
                            @elseif ($kelengkapanDokumen?->slip_gaji_status == 'Invalid')
                                <span class="badge text-bg-danger">{{ $kelengkapanDokumen?->slip_gaji_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Pending')
                                <span class="badge text-bg-warning">{{ $kelengkapanDokumen?->slip_gaji_status }}</span>
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            {{ $kelengkapanDokumen?->slip_gaji_keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle text-nowrap">
                            <a href="{{ asset('storage/' . $kelengkapanDokumen?->buku_rekening) }}" target="_blank">
                                Buku Rekening Bank
                            </a>
                        </th>
                        <td class="text-center align-middle">
                            @if ($kelengkapanDokumen?->buku_rekening_status == 'Valid')
                                <span class="badge text-bg-success">{{ $kelengkapanDokumen?->buku_rekening_status }}</span>
                            @elseif ($kelengkapanDokumen?->buku_rekening_status == 'Invalid')
                                <span class="badge text-bg-danger">{{ $kelengkapanDokumen?->buku_rekening_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Pending')
                                <span class="badge text-bg-warning">{{ $kelengkapanDokumen?->buku_rekening_status }}</span>
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            {{ $kelengkapanDokumen?->buku_rekening_keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle text-nowrap">
                            <a href="{{ asset('storage/' . $kelengkapanDokumen?->npwp) }}" target="_blank">
                                Nomor Pokok Wajib Pajak (NPWP)
                            </a>
                        </th>
                        <td class="text-center align-middle">
                            @if ($kelengkapanDokumen?->npwp_status == 'Valid')
                                <span class="badge text-bg-success">{{ $kelengkapanDokumen?->npwp_status }}</span>
                            @elseif ($kelengkapanDokumen?->npwp_status == 'Invalid')
                                <span class="badge text-bg-danger">{{ $kelengkapanDokumen?->npwp_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Pending')
                                <span class="badge text-bg-warning">{{ $kelengkapanDokumen?->npwp_status }}</span>
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            {{ $kelengkapanDokumen?->npwp_keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle text-nowrap">
                            <a href="{{ asset('storage/' . $kelengkapanDokumen?->ktp_pasangan) }}" target="_blank">
                                Kartu Tanda Penduduk (KTP) Pasangan
                            </a>
                        </th>
                        <td class="text-center align-middle">
                            @if ($kelengkapanDokumen?->ktp_pasangan_status == 'Valid')
                                <span class="badge text-bg-success">{{ $kelengkapanDokumen?->ktp_pasangan_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_pasangan_status == 'Invalid')
                                <span class="badge text-bg-danger">{{ $kelengkapanDokumen?->ktp_pasangan_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Pending')
                                <span class="badge text-bg-warning">{{ $kelengkapanDokumen?->ktp_pasangan_status }}</span>
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            {{ $kelengkapanDokumen?->ktp_pasangan_keterangan }}
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle text-nowrap">
                            <a href="{{ asset('storage/' . $kelengkapanDokumen?->surat_nikah_cerai) }}" target="_blank">
                                Surat Nikah / Surat Cerai
                            </a>
                        </th>
                        <td class="text-center align-middle">
                            @if ($kelengkapanDokumen?->surat_nikah_cerai_status == 'Valid')
                                <span
                                    class="badge text-bg-success">{{ $kelengkapanDokumen?->surat_nikah_cerai_status }}</span>
                            @elseif ($kelengkapanDokumen?->surat_nikah_cerai_status == 'Invalid')
                                <span
                                    class="badge text-bg-danger">{{ $kelengkapanDokumen?->surat_nikah_cerai_status }}</span>
                            @elseif ($kelengkapanDokumen?->ktp_status == 'Pending')
                                <span
                                    class="badge text-bg-warning">{{ $kelengkapanDokumen?->surat_nikah_cerai_status }}</span>
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            {{ $kelengkapanDokumen?->surat_nikah_cerai_keterangan }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
@endsection
