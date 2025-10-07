@extends('cms.layouts.main', ['title' => 'Dashboard'])

@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="page-header-title">
                <h5 class="mb-0 font-medium">Dashboard</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    @hasrole('user')
        @include('cms.pages.dashboard.user')
    @endhasrole

    @hasrole('admin|kepalasekolah')
        @include('cms.pages.dashboard.admin')
    @endhasrole

    <!-- [ Main Content ] end -->
@endsection
