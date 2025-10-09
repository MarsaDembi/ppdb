
@extends('cms.layouts.main', ['title' => 'Profile'])
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">Profile</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Profile</li>
            </ul>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <h5>Form Detail Profile</h5>
            </div>
            <form action="{{ route('profile.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Nama Lengkap <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Masukkan Nama Lengkap" value="{{ old('name', $data->name) }}" required>
                                @error('name')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="nisn">NISN <span class="text-danger">*</span></label>
                                <input type="number" name="nisn" id="nisn" class="form-control" minlength="1"
                                    maxlength="10" placeholder="Masukkan NISN"
                                    value="{{ old('nisn', $data->profile->nisn) }}" required>
                                @error('nisn')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="nik">NIK <span class="text-danger">*</span></label>
                                <input type="number" name="nik" id="nik" class="form-control" minlength="1"
                                    maxlength="16" placeholder="Masukkan NIK" value="{{ old('nik', $data->profile->nik) }}"
                                    required>
                                @error('nik')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="gender">Jenis Kelamin <span
                                        class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="male" {{ $data->profile->gender == 'male' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="female" {{ $data->profile->gender == 'female' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="birth_place">Tempat Lagir <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="birth_place" id="birth_place" class="form-control"
                                    placeholder="Masukkan Tempat Lahir"
                                    value="{{ old('birth_place', $data->profile->birth_place) }}" required>
                                @error('birth_place')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="birth_date">Tanggal Lagir <span
                                        class="text-danger">*</span></label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir"
                                    value="{{ old('birth_date', $data->profile->birth_date) }}" max="{{ date('Y-m-d') }}"
                                    required>
                                @error('birth_date')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="address">Alamat Lengkap <span
                                        class="text-danger">*</span></label>
                                <textarea name="address" id="address" rows="3" class="form-control" placeholder="Masukkan Alamat Lengkap"
                                    required>{{ old('address', $data->profile->address) }}</textarea>
                                @error('address')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="father_name">Nama Ayah <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="father_name" id="father_name" class="form-control"
                                    placeholder="Masukkan Nama Ayah"
                                    value="{{ old('father_name', $data->profile->father_name) }}" required>
                                @error('father_name')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="mother_name">Nama Ibu <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="mother_name" id="mother_name" class="form-control"
                                    placeholder="Masukkan Nama Ibu"
                                    value="{{ old('mother_name', $data->profile->mother_name) }}" required>
                                @error('mother_name')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="program">Program <span
                                        class="text-danger">*</span></label>
                                <select name="program" id="program" class="form-select">
                                    <option value="" selected disabled>Pilih Program Paket</option>
                                    <option value="a" {{ $data->profile->program == 'a' ? 'selected' : '' }}>
                                        Paket A</option>
                                    <option value="b" {{ $data->profile->program == 'b' ? 'selected' : '' }}>
                                        Paket B</option>
                                    <option value="c" {{ $data->profile->program == 'c' ? 'selected' : '' }}>
                                        Paket C</option>
                                </select>
                                @error('program')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="is_transfer">Pindahan <span
                                        class="text-danger">*</span></label>
                                <select name="is_transfer" id="is_transfer" class="form-select">
                                    <option value="" selected disabled>Pilih Status Pindahan</option>
                                    <option value="1" {{ $data->profile->is_transfer == '1' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="0" {{ $data->profile->is_transfer == '0' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                                @error('is_transfer')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 grid grid-cols-12 gap-3" id="transfer" style="display: none;">
                            <div class="col-span-12 md:col-span-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="previous_school">Sekolah Sebelumnya <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="previous_school" id="previous_school"
                                        class="form-control" placeholder="Masukkan Nama Sekolah Sebelumnya"
                                        value="{{ old('previous_school', $data->profile->previous_school) }}" required>
                                    @error('previous_school')
                                        <small class="text-danger mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="class">Kelas <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="class" id="class" class="form-control"
                                        placeholder="Masukkan Kelas" value="{{ old('class', $data->profile->class) }}"
                                        required>
                                    @error('class')
                                        <small class="text-danger mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="phone">Nomor Telepon/Whatsapp <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Masukkan Nomor Telepon/Whatsapp"
                                    value="{{ old('phone', $data->profile->phone) }}" minlength="1" maxlength="15"
                                    required>
                                @error('phone')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="photo">Foto <span class="text-danger">(Jangan
                                        ubah jika tidak ingin diganti)</span></label>
                                <input type="file" name="photo" id="photo" class="form-control"
                                    accept="image/jpeg,image/png,image/jpg" onchange="previewPhoto(event)">
                                <small class="text-muted d-block mt-1">
                                    Maksimal 2MB. Ekstensi yang diizinkan: jpg, jpeg, png.
                                </small>

                                @error('photo')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror

                                <div class="mt-2">
                                    <img id="photo-preview"
                                        src="{{ $data->profile->photo ? route('getImage', ['path' => 'profile', 'imageName' => $data->profile->photo]) : '' }}"
                                        alt="Preview Foto"
                                        style="max-width: 150px; max-height: 150px; " {{ $data->profile->photo ? '' : ' display:none;' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- [ Main Content ] end -->
@endsection

@push('custom-scripts')
    <script>
        function previewPhoto(event) {
            const input = event.target;
            const preview = document.getElementById('photo-preview');
            if (input.files && input.files[0]) {
                const file = input.files[0];
                const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Ekstensi file tidak diizinkan. Hanya jpg, jpeg, png.');
                    input.value = '';
                    preview.style.display = 'none';
                    return;
                }
                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran file maksimal 2MB.');
                    input.value = '';
                    preview.style.display = 'none';
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = '';
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }

        function toggleTransfer() {
            const isTransfer = document.getElementById('is_transfer').value;
            const transferDiv = document.getElementById('transfer');
            if (isTransfer === '1') {
                transferDiv.style.display = '';
                // set required
                document.getElementById('previous_school').required = true;
                document.getElementById('class').required = true;
            } else {
                transferDiv.style.display = 'none';
                // remove required
                document.getElementById('previous_school').required = false;
                document.getElementById('class').required = false;
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            toggleTransfer();
            document.getElementById('is_transfer').addEventListener('change', toggleTransfer);
        });
    </script>
@endpush
