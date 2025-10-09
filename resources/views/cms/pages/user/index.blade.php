@extends('cms.layouts.main', ['title' => 'Pengguna'])

@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">Pengguna</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Pengguna</li>
            </ul>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->

    <!-- [ Persentase Pendaftaran ] start -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Daftar Pengguna</h5>
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
                                        <h6>Admin Tata Usaha</h6>
                                    </td>
                                    <td>
                                        <h6>tatausaha@gmail.com</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-muted">
                                            ADMIN
                                        </h6>
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
