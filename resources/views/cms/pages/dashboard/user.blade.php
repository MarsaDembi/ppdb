<div class="grid grid-cols-12 gap-6">

    {{-- Status Pendaftaran --}}
    <div class="col-span-12 md:col-span-4">
        <div class="card">
            <div class="card-header !pb-0 !border-b-0">
                <h5>Status Pendaftaran</h5>
            </div>
            <div class="card-body text-center">
                @php
                    $status = Auth::user()->status_pendaftaran; // pastikan field ini ada di tabel users
                @endphp

                @if ($status == 'verifikasi')
                    <h2 class="text-lg font-bold text-green-600">Menunggu Verifikasi</h2>
                    <p class="text-gray-500 mt-2">Admin sedang memeriksa berkas Anda.</p>
                @elseif ($status == 'diterima')
                    <h2 class="text-lg font-bold text-blue-600">Diterima</h2>
                    <p class="text-gray-500 mt-2">Selamat, Anda telah diterima!</p>
                @elseif ($status == 'ditolak')
                    <h2 class="text-lg font-bold text-red-600">Ditolak</h2>
                    <p class="text-gray-500 mt-2">Maaf, Anda belum lolos seleksi.</p>
                @else
                    <h2 class="text-lg font-bold text-gray-600">Belum Ada Status</h2>
                    <p class="text-gray-500 mt-2">Status pendaftaran Anda belum ditentukan.</p>
                @endif
            </div>
        </div>
    </div>

    {{-- Biodata Singkat --}}
    <div class="col-span-12 md:col-span-4">
        <div class="card">
            <div class="card-header !pb-0 !border-b-0">
                <h5>Biodata Singkat</h5>
            </div>
            <div class="card-body">
                <ul class="list-disc list-inside text-gray-700">
                    <li><strong>Nama:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>NISN:</strong> {{ Auth::user()->nisn }}</li>
                    <li><strong>Sekolah Asal:</strong> {{ Auth::user()->sekolah_asal }}</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Pengumuman --}}
    <div class="col-span-12 md:col-span-4">
        <div class="card">
            <div class="card-header !pb-0 !border-b-0">
                <h5>Pengumuman</h5>
            </div>
            <div class="card-body">
                <p class="text-gray-700">
                    Silakan mengumpulkan berkas pendaftaran Anda sebelum <strong>8 Juli 2025</strong>.
                </p>
            </div>
        </div>
    </div>

    {{-- Cetak Kartu Pendaftaran --}}
    <div class="col-span-12">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="mb-3">Cetak Kartu Pendaftaran</h5>
                <a href="" target="_blank" class="btn btn-primary">
                    <i class="fas fa-print mr-2"></i> Cetak Kartu
                </a>
            </div>
        </div>
    </div>

    {{-- Jadwal Seleksi --}}
    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <h5>Jadwal Seleksi</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kegiatan</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10 Juli 2025</td>
                            <td>Tes Tulis</td>
                            <td>Aula SMAN 1</td>
                        </tr>
                        <tr>
                            <td>12 Juli 2025</td>
                            <td>Wawancara</td>
                            <td>Ruang BK</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
