@extends('cms.layouts.main', ['title' => 'Tahun Ajaran'])

@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">Tahun Ajaran</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Tahun Ajaran</li>
            </ul>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->

    <!-- [ Persentase Pendaftaran ] start -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12">
            <div class="card table-card">
                <div class="card-header flex items-center justify-between">
                    <h5>Daftar Tahun Ajaran</h5>
                    <a href="#!" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr class="unread">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <h6>2024/2025</h6>
                                    </td>
                                    <td>
                                        <h6>Tidak Aktif</h6>
                                    </td>
                                    <td>
                                        <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px] mx-2">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px]">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <h6>2025/2026</h6>
                                    </td>
                                    <td>
                                        <h6>Aktif</h6>
                                    </td>
                                    <td>
                                        <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px] mx-2">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px]">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection
