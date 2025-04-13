@extends('dashboard.pelanggan.layouts.main')

@section('content')
    <div class="container pt-3">
        <h4>Kelengkapan Dokumen</h4>
        <hr>
        <main class="mb-3 row justify-content-center">
            <div class="col-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-capitalize" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <form action="/pelanggan/kelengkapan-dokumen" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="ktp" class="form-label">
                                Kartu Kanda Penduduk (KTP)
                            </label>
                            <input type="file" name="ktp" id="ktp" class="form-control" @disabled($kelengkapanDokumen?->ktp_status === 'Valid')>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="slip_gaji" class="form-label">
                                Slip Gaji
                            </label>
                            <input type="file" name="slip_gaji" id="slip_gaji" class="form-control" @disabled($kelengkapanDokumen?->slip_gaji_status === 'Valid')>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="buku_rekening" class="form-label">
                                Buku Rekening Bank
                            </label>
                            <input type="file" name="buku_rekening" id="buku_rekening" class="form-control" @disabled($kelengkapanDokumen?->buku_rekening_status === 'Valid')>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="npwp" class="form-label">
                                Nomor Pokok Wajib Pajak (NPWP)
                            </label>
                            <input type="file" name="npwp" id="npwp" class="form-control" @disabled($kelengkapanDokumen?->npwp_status === 'Valid')>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="ktp_pasangan" class="form-label">
                                Kartu Tanda Penduduk (KTP) Pasangan
                            </label>
                            <input type="file" name="ktp_pasangan" id="ktp_pasangan" class="form-control" @disabled($kelengkapanDokumen?->ktp_pasangan_status === 'Valid')>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="surat_nikah_cerai" class="form-label">
                                Surat Nikah / Surat Cerai
                            </label>
                            <input type="file" name="surat_nikah_cerai" id="surat_nikah_cerai" class="form-control" @disabled($kelengkapanDokumen?->surat_nikah_cerai_status === 'Valid')>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Perbaharui Kelengkapan Dokumen</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
