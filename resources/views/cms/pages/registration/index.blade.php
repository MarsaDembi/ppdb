@extends('cms.layouts.main', ['title' => 'Peserta'])

@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">Data Peserta</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Peserta</li>
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
                    <h5>Daftar Peserta Didik Baru</h5>
                    @hasrole('kepalasekolah')
                        <a href="#!" class="btn btn-primary flex items-center gap-2"><i data-feather="download-cloud"></i> Unduh</a>
                    @endhasrole
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr class="unread">
                                    <td>
                                        <img class="rounded-full max-w-10" style="width: 40px"
                                            src="{{ asset('asset/cms/images/user/avatar-1.jpg') }}" alt="activity-user">
                                    </td>
                                    <td>
                                        <h6>Isabella Christensen</h6>
                                    </td>
                                    <td>
                                        <h6>Paket A</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-muted">
                                            11 MAY 12:56
                                        </h6>
                                    </td>
                                    @hasrole('admin')
                                        <td>
                                            <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Tolak</a>
                                            <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px]">Terima</a>
                                        </td>
                                    @endhasrole
                                </tr>
                                <tr class="unread">
                                    <td>
                                        <img class="rounded-full max-w-10" style="width: 40px"
                                            src="{{ asset('asset/cms/images/user/avatar-2.jpg') }}" alt="activity-user">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Mathilde Andersen</h6>
                                    </td>
                                    <td>
                                        <h6>Paket A</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-muted">
                                            11 MAY 10:35
                                        </h6>
                                    </td>
                                    @hasrole('admin')
                                        <td>
                                            <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Tolak</a>
                                            <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px]">Terima</a>
                                        </td>
                                    @endhasrole
                                </tr>
                                <tr class="unread">
                                    <td>
                                        <img class="rounded-full max-w-10" style="width: 40px"
                                            src="{{ asset('asset/cms/images/user/avatar-3.jpg') }}" alt="activity-user">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Karla Sorensen</h6>
                                    </td>
                                    <td>
                                        <h6>Paket C</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-muted">
                                            9 MAY 17:38
                                        </h6>
                                    </td>
                                    @hasrole('admin')
                                        <td>
                                            <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Tolak</a>
                                            <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px]">Terima</a>
                                        </td>
                                    @endhasrole
                                </tr>
                                <tr class="unread">
                                    <td>
                                        <img class="rounded-full max-w-10" style="width: 40px"
                                            src="{{ asset('asset/cms/images/user/avatar-4.jpg') }}" alt="activity-user">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6>Paket B</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-muted f-w-300">
                                            19 MAY 12:56
                                        </h6>
                                    </td>
                                    @hasrole('admin')
                                        <td>
                                            <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Tolak</a>
                                            <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px]">Terima</a>
                                        </td>
                                    @endhasrole
                                </tr>
                                <tr class="unread">
                                    <td>
                                        <img class="rounded-full max-w-10" style="width: 40px"
                                            src="{{ asset('asset/cms/images/user/avatar-5.jpg') }}" alt="activity-user">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Albert Andersen</h6>
                                    </td>
                                    <td>
                                        <h6>Paket B</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-muted">
                                            21 July 12:56
                                        </h6>
                                    </td>
                                    @hasrole('admin')
                                        <td>
                                            <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Tolak</a>
                                            <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px]">Terima</a>
                                        </td>
                                    @endhasrole
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
