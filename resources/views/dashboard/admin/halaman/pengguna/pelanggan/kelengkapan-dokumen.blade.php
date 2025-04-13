@extends('dashboard.admin.layouts.main')

@section('content')
    <div class="container pt-3">
        <div class="d-flex justify-content-between align-items-center">
            <h4>Kelengkapan Dokumen</h4>
            <a href="/admin/pelanggan" class="btn btn-secondary">Kembali</a>
        </div>
        <hr>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-capitalize" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <main class="mb-3">
            <form action="/admin/pelanggan/{{ $pelanggan->id }}/kelengkapan-dokumen" method="POST">
                @csrf
                @method('PUT')
                <table class="table table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Dokumen</th>
                            <th class="text-center">Invalid</th>
                            <th class="text-center">Valid</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle">
                                <a href="{{ asset('storage/' . $kelengkapanDokumen?->ktp) }}" target="_blank">
                                    Kartu Tanda Penduduk
                                </a>
                            </th>
                            <td class="text-center align-middle">
                                <input type="radio" name="ktp_status" value="Invalid" @checked($kelengkapanDokumen?->ktp_status == 'Invalid')
                                    @checked($kelengkapanDokumen?->ktp_status == 'Invalid') required>
                            </td>
                            <td class="text-center align-middle">
                                <input type="radio" name="ktp_status" value="Valid" @checked($kelengkapanDokumen?->ktp_status == 'Valid') required>
                            </td>
                            <td class="text-center align-middle">
                                <textarea name="ktp_keterangan" rows="3" class="w-100" required>{{ $kelengkapanDokumen?->ktp_keterangan ?? '-' }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">
                                <a href="{{ asset('storage/' . $kelengkapanDokumen?->slip_gaji) }}" target="_blank">
                                    Slip Gaji
                                </a>
                            </th>
                            <td class="text-center align-middle">
                                <input type="radio" name="slip_gaji_status" value="Invalid" @checked($kelengkapanDokumen?->slip_gaji_status == 'Invalid') required>
                            </td>
                            <td class="text-center align-middle">
                                <input type="radio" name="slip_gaji_status" value="Valid" @checked($kelengkapanDokumen?->slip_gaji_status == 'Valid') required>
                            </td>
                            <td class="text-center align-middle">
                                <textarea name="slip_gaji_keterangan" rows="3" class="w-100" required>{{ $kelengkapanDokumen?->slip_gaji_keterangan ?? '-' }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">
                                <a href="{{ asset('storage/' . $kelengkapanDokumen?->buku_rekening) }}" target="_blank">
                                    Buku Rekening Bank
                                </a>
                            </th>
                            <td class="text-center align-middle">
                                <input type="radio" name="buku_rekening_status" value="Invalid"
                                    @checked($kelengkapanDokumen?->buku_rekening_status == 'Invalid') required>
                            </td>
                            <td class="text-center align-middle">
                                <input type="radio" name="buku_rekening_status" value="Valid"
                                    @checked($kelengkapanDokumen?->buku_rekening_status == 'Valid') required>
                            </td>
                            <td class="text-center align-middle">
                                <textarea name="buku_rekening_keterangan" rows="3" class="w-100" required>{{ $kelengkapanDokumen?->buku_rekening_keterangan ?? '-' }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">
                                <a href="{{ asset('storage/' . $kelengkapanDokumen?->npwp) }}" target="_blank">
                                    Nomor Pokok Wajib Pajak (NPWP)
                                </a>
                            </th>
                            <td class="text-center align-middle">
                                <input type="radio" name="npwp_status" value="Invalid" @checked($kelengkapanDokumen?->npwp_status == 'Invalid') required>
                            </td>
                            <td class="text-center align-middle">
                                <input type="radio" name="npwp_status" value="Valid" @checked($kelengkapanDokumen?->npwp_status == 'Valid') required>
                            </td>
                            <td class="text-center align-middle">
                                <textarea name="npwp_keterangan" rows="3" class="w-100" required>{{ $kelengkapanDokumen?->npwp_keterangan ?? '-' }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">
                                <a href="{{ asset('storage/' . $kelengkapanDokumen?->ktp_pasangan) }}" target="_blank">
                                    Kartu Tanda Penduduk (KTP) Pasangan
                                </a>
                            </th>
                            <td class="text-center align-middle">
                                <input type="radio" name="ktp_pasangan_status" value="Invalid"
                                    @checked($kelengkapanDokumen?->ktp_pasangan_status == 'Invalid') required>
                            </td>
                            <td class="text-center align-middle">
                                <input type="radio" name="ktp_pasangan_status" value="Valid"
                                    @checked($kelengkapanDokumen?->ktp_pasangan_status == 'Valid') required>
                            </td>
                            <td class="text-center align-middle">
                                <textarea name="ktp_pasangan_keterangan" rows="3" class="w-100" required>{{ $kelengkapanDokumen?->ktp_pasangan_keterangan ?? '-' }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">
                                <a href="{{ asset('storage/' . $kelengkapanDokumen?->surat_nikah_cerai) }}" target="_blank">
                                    Surat Nikah / Surat Cerai
                                </a>
                            </th>
                            <td class="text-center align-middle">
                                <input type="radio" name="surat_nikah_cerai_status" value="Invalid"
                                    @checked($kelengkapanDokumen?->surat_nikah_cerai_status == 'Invalid') required>
                            </td>
                            <td class="text-center align-middle">
                                <input type="radio" name="surat_nikah_cerai_status" value="Valid"
                                    @checked($kelengkapanDokumen?->surat_nikah_cerai_status == 'Valid') required>
                            </td>
                            <td class="text-center align-middle">
                                <textarea name="surat_nikah_cerai_keterangan" rows="3" class="w-100" required>{{ $kelengkapanDokumen?->surat_nikah_cerai_keterangan ?? '-' }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </main>
    </div>
@endsection
