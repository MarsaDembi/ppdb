@extends('cms.layouts.main', ['title' => 'Berkas'])
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">Berkas Persyaratan</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Berkas</li>
            </ul>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Form Upload ] start -->
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('file.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-12 gap-3 mb-3">
                            <div class="col-span-12 md:col-span-6">
                                <label class="form-label" for="family_card">Kartu Keluarga <span
                                        class="text-danger">*</span></label>
                                <input type="file" name="family_card" id="family_card" class="form-control"
                                    accept="image/jpeg,image/png,image/jpg"
                                    onchange="previewPhoto(event, 'family-preview')">
                                <small class="text-muted d-block mt-1">
                                    Maksimal 2MB. Ekstensi yang diizinkan: jpg, jpeg, png.
                                </small>

                                @error('family_card')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror

                                <div class="mt-2">
                                    <img id="family-preview"
                                        src="{{ $data->file->family_card ? route('getImage', ['path' => 'file', 'imageName' => $data->file->family_card]) : asset('asset/cms/images/user/avatar-2.jpg') }}"
                                        alt="Preview Foto"
                                        style="max-width: 150px; max-height: 150px; {{ $data->file->family_card ? '' : ' display:none;' }}">
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <label class="form-label" for="birth_certificate">Akta Kelahiran <span
                                        class="text-danger">*</span></label>
                                <input type="file" name="birth_certificate" id="birth_certificate" class="form-control"
                                    accept="image/jpeg,image/png,image/jpg" onchange="previewPhoto(event, 'birth-preview')">
                                <small class="text-muted d-block mt-1">
                                    Maksimal 2MB. Ekstensi yang diizinkan: jpg, jpeg, png.
                                </small>

                                @error('birth_certificate')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror

                                <div class="mt-2">
                                    <img id="birth-preview"
                                        src="{{ $data->file->birth_certificate ? route('getImage', ['path' => 'file', 'imageName' => $data->file->birth_certificate]) : asset('asset/cms/images/user/avatar-2.jpg') }}"
                                        alt="Preview Foto"
                                        style="max-width: 150px; max-height: 150px; {{ $data->file->birth_certificate ? '' : ' display:none;' }}">
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <label class="form-label" for="school_certificate">Ijazah / SKL <span
                                        class="text-danger">*</span></label>
                                <input type="file" name="school_certificate" id="school_certificate" class="form-control"
                                    accept="image/jpeg,image/png,image/jpg"
                                    onchange="previewPhoto(event, 'school-preview')">
                                <small class="text-muted d-block mt-1">
                                    Maksimal 2MB. Ekstensi yang diizinkan: jpg, jpeg, png.
                                </small>

                                @error('school_certificate')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror

                                <div class="mt-2">
                                    <img id="school-preview"
                                        src="{{ $data->file->school_certificate ? route('getImage', ['path' => 'file', 'imageName' => $data->file->school_certificate]) : asset('asset/cms/images/user/avatar-2.jpg') }}"
                                        alt="Preview Foto"
                                        style="max-width: 150px; max-height: 150px; {{ $data->file->school_certificate ? '' : ' display:none;' }}">
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <label class="form-label" for="proof_payment">Bukti Pembayaran <span
                                        class="text-danger">*</span></label>
                                <input type="file" name="proof_payment" id="proof_payment" class="form-control"
                                    accept="image/jpeg,image/png,image/jpg"
                                    onchange="previewPhoto(event, 'payment-preview')">
                                <small class="text-muted d-block mt-1">
                                    Maksimal 2MB. Ekstensi yang diizinkan: jpg, jpeg, png.
                                </small>

                                @error('proof_payment')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror

                                <div class="mt-2">
                                    <img id="payment-preview"
                                        src="{{ $data->file->proof_payment ? route('getImage', ['path' => 'file', 'imageName' => $data->file->proof_payment]) : asset('asset/cms/images/user/avatar-2.jpg') }}"
                                        alt="Preview Foto"
                                        style="max-width: 150px; max-height: 150px; {{ $data->file->proof_payment ? '' : ' display:none;' }}">
                                </div>
                            </div>

                            @if ($data->profile->is_transfer == '1')
                                <div class="col-span-12 md:col-span-6">
                                    <label class="form-label" for="transfer_letter">Surat Pindah <span
                                            class="text-danger">*</span></label>
                                    <input type="file" name="transfer_letter" id="transfer_letter" class="form-control"
                                        accept="image/jpeg,image/png,image/jpg"
                                        onchange="previewPhoto(event, 'transfer-preview')">
                                    <small class="text-muted d-block mt-1">
                                        Maksimal 2MB. Ekstensi yang diizinkan: jpg, jpeg, png.
                                    </small>

                                    @error('transfer_letter')
                                        <small class="text-danger mt-1">{{ $message }}</small>
                                    @enderror

                                    <div class="mt-2">
                                        <img id="transfer-preview"
                                            src="{{ $data->file->transfer_letter ? route('getImage', ['path' => 'file', 'imageName' => $data->file->transfer_letter]) : asset('asset/cms/images/user/avatar-2.jpg') }}"
                                            alt="Preview Foto"
                                            style="max-width: 150px; max-height: 150px; {{ $data->file->transfer_letter ? '' : ' display:none;' }}">
                                    </div>
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-upload"></i> Upload Berkas
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Form Upload ] end -->
@endsection

@push('custom-scripts')
    <script>
        function previewPhoto(event, previewId) {
            const input = event.target;
            const file = input.files && input.files[0];
            const preview = document.getElementById(previewId);

            if (file && preview) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else if (preview) {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
@endpush
