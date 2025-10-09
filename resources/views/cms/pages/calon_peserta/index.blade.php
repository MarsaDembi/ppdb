@extends('cms.layouts.main', ['title' => 'Calon_Peserta'])

@section('content')

<div class="pc-container">
  <div class="pcoded-content">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Verifikasi Calon Peserta PPDB PKBM Bela Warga</h5>
              <p class="text-muted">Halaman untuk memverifikasi data calon peserta didik.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Filter --}}
    <div class="mb-3">
      <div class="d-flex justify-content-between">
        <div>
          <select class="form-select" style="width:200px;">
            <option>Filter Program</option>
            <option>Paket A</option>
            <option>Paket B</option>
            <option>Paket C</option>
          </select>
        </div>
        <div>
          <input type="text" class="form-control" placeholder="Cari berdasarkan nama...">
        </div>
      </div>
    </div>

    {{-- Table --}}
    <div class="card">
      <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-light text-center">
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>NISN</th>
              <th>NIK</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Program</th>
              <th>Kelas</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img src="{{ asset('assets/images/avatar1.png') }}" width="50" class="rounded-circle"></td>
              <td>1234567890</td>
              <td>3201234567890001</td>
              <td>Ahmad</td>
              <td>Siti</td>
              <td>Paket C</td>
              <td>XII</td>
              <td><span class="badge bg-warning text-dark">Belum Diverifikasi</span></td>
              <td><button class="btn btn-sm btn-primary">Verifikasi</button></td>
            </tr>
            <tr>
              <td>2</td>
              <td><img src="{{ asset('assets/images/avatar2.png') }}" width="50" class="rounded-circle"></td>
              <td>9876543210</td>
              <td>3201987654321002</td>
              <td>Budi</td>
              <td>Rina</td>
              <td>Paket B</td>
              <td>IX</td>
              <td><span class="badge bg-success">Terverifikasi</span></td>
              <td><button class="btn btn-sm btn-secondary" disabled>Sudah Diverifikasi</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
