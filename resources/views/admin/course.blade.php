@extends('layouts.admin')
@section('content')

<h1 class="h3 mb-3"><strong>Daftar</strong> Kursus</h1>
<div class="card">
  <div class="card-body">
    @can('create course')
      <a href="" class="btn btn-primary"><i class="me-1" data-feather="plus-circle"></i>Tambah</a>
    @endcan

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Harga</th>
            <th>Pendaftar</th>
            @can('edit course|delete course')
              <th>Aksi</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kursus Pemrograman PHP</td>
            <td>Rp. 1.000.000</td>
            <td>100</td>
            <td>
              @can('edit course')
                <a href="" class="btn btn-sm btn-primary"><i data-feather="edit"></i></a>
              @endcan
              
              @can('delete course')
                <a href="" class="btn btn-sm btn-danger"><i data-feather="trash"></i></a>
              @endcan
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    
@endsection