<div class="grid grid-cols-12 gap-4">

    <div class="col-span-12 xl:col-span-4 md:col-span-4">
        <div class="card">
            <div class="card-header !pb-0 !border-b-0">
                <h5>Status Pendaftaran</h5>
            </div>
            <div class="card-body">
                <div class="flex items-center justify-between gap-3 flex-wrap">
                    <h3 class="font-light flex items-center mb-0">
                        <i class="feather icon-clock text-warning-500 text-[30px] mr-2"></i>
                        <div class="flex flex-col gap-1">
                            <p class="text-warning-600 font-semibold">Pending</p>
                            <p class="text-muted text-sm">Silahkan lengkapi data pendaftaran.</p>
                        </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-span-12 xl:col-span-8 md:col-span-8">
        <div class="card">
            <div class="card-header !pb-0 !border-b-0">
                <h5>Pengumuman</h5>
            </div>
            <div class="card-body">
                <div class="flex items-center justify-between gap-3 flex-wrap">
                    <h3 class="font-light flex items-center mb-0">
                        <i class="feather icon-volume-2 text-warning-500 text-[30px] mr-2"></i>
                        <div class="flex flex-col gap-1">
                            <p class="text-warning-600 font-semibold">Penutupan</p>
                            <p class="text-muted text-sm">Penutupan pendaftaran tanggal 31 juli 2025.</p>
                        </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-span-12 xl:col-span-6 md:col-span-6">
        <div class="card table-card">
            <div class="card-header">
                <h5>Biodata</h5>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-12 p-2">
                    <div class="col-span-12 xl:col-span-4 md:col-span-4">
                        <img src="{{ $data->profile->photo ? route('getImage', ['path' => 'profile', 'imageName' => $data->profile->photo]) : asset('asset/cms/images/user/avatar-2.jpg') }}"
                            alt="user-image" class="img-fluid rounded-start mx-auto">
                    </div>
                    <div class="col-span-12 xl:col-span-8 md:col-span-8">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="user"></i>
                                        </td>
                                        <td>
                                            <h6>{{ $data->name }}</h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="file-text"></i>
                                        </td>
                                        <td>
                                            <h6>{{ $data->profile->nisn ?? 'Belum diisi' }}</h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="file-text"></i>
                                        </td>
                                        <td>
                                            <h6>{{ $data->profile->nik ?? 'Belum diisi' }}</h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="users"></i>
                                        </td>
                                        <td>
                                            <h6>{{ $data->profile->gender == 'male' ? 'Laki-laki' : ($data->profile->gender == 'female' ? 'Perempuan' : 'Belum diisi') }}
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="calendar"></i>
                                        </td>
                                        <td>
                                            <h6>
                                                @php
                                                    $birthPlace = $data->profile->birth_place ?? null;
                                                    $birthDate = $data->profile->birth_date ?? null;
                                                @endphp
                                                @if ($birthPlace && $birthDate)
                                                    {{ $birthPlace }}, {{ $birthDate }}
                                                @elseif($birthPlace)
                                                    {{ $birthPlace }}
                                                @elseif($birthDate)
                                                    {{ $birthDate }}
                                                @else
                                                    Belum diisi
                                                @endif
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="map-pin"></i>
                                        </td>
                                        <td>
                                            <h6>{{ $data->profile->address ?? 'Belum diisi' }}</h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="phone"></i>
                                        </td>
                                        <td>
                                            <h6>{{ $data->profile->phone ?? 'Belum diisi' }}</h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="user"></i>
                                        </td>
                                        <td>
                                            <p>Nama Ayah</p>
                                            <h6>{{ $data->profile->father_name ?? 'Belum diisi' }}</h6>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="w-10">
                                            <i data-feather="user"></i>
                                        </td>
                                        <td>
                                            <p>Nama Ibu</p>
                                            <h6>{{ $data->profile->mother_name ?? 'Belum diisi' }}</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-span-12 xl:col-span-6 md:col-span-6">
        <div class="card table-card">
            <div class="card-header">
                <h5>Berkas Persyaratan</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr class="unread">
                                <td class="w-10">
                                    <i data-feather="{{ $data->file->family_card ? 'check-circle' : 'x-circle'}}" class="text-{{ $data->file->family_card ? 'success' : 'danger'}}"></i>
                                </td>
                                <td>
                                    <h6>Kartu Keluarga</h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td class="w-10">
                                    <i data-feather="{{ $data->file->birth_certificate ? 'check-circle' : 'x-circle'}}" class="text-{{ $data->file->birth_certificate ? 'success' : 'danger'}}"></i>
                                </td>
                                <td>
                                    <h6>Akta Kelahiran</h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td class="w-10">
                                    <i data-feather="{{ $data->file->school_certificate ? 'check-circle' : 'x-circle'}}" class="text-{{ $data->file->school_certificate ? 'success' : 'danger'}}"></i>
                                </td>
                                <td>
                                    <h6>Ijazah / SKL</h6>
                                </td>
                            </tr>
                            <tr class="unread">
                                <td class="w-10">
                                    <i data-feather="{{ $data->file->proof_payment ? 'check-circle' : 'x-circle'}}" class="text-{{ $data->file->proof_payment ? 'success' : 'danger'}}"></i>
                                </td>
                                <td>
                                    <h6>Bukti Pembayaran</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
