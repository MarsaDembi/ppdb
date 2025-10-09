@extends('cms.layouts.main', ['title' => 'File'])
@section('content')

<!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">persyaratan</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Persyaratan</li>
            </ul>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
        


        <!-- [ Form Upload ] start -->
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action=" " method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                            <div class="mb-3">
                                <label for="family_card" class="form-label fw-semibold">Kartu Keluarga (KK)</label>
                                <input type="file" name="family_card" id="family_card" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="birth_certificate" class="form-label fw-semibold">Akte Kelahiran</label>
                                <input type="file" name="birth_certificate" id="birth_certificate" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="school_certificate" class="form-label fw-semibold">Ijazah / SKL Sekolah</label>
                                <input type="file" name="school_certificate" id="school_certificate" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="transfer_letter" class="form-label fw-semibold">Surat Pindah Sekolah (jika ada)</label>
                                <input type="file" name="transfer_letter" id="transfer_letter" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="transfer_letter" class="form-label fw-semibold">Bukti Pembayaran</label>
                                <input type="file" name="transfer_letter" id="transfer_letter" class="form-control">
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

    </div>
</div>

@endsection
