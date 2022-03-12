@extends('layouts.admin')
@section('content')

<h1 class="h3 mb-3"><strong>Daftar</strong> Order</h1>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>ID Transaksi</th>
            <th>Kursus</th>
            <th>Total</th>
            @can('confirm order')
              <th>Konfirmasi</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>TRX-0000001</td>
            <td>Kursus Pemrograman PHP</td>
            <td>Rp. 1.000.000</td>
            @can('confirm order')
            <td>
              <button class="btn btn-success btn-sm"><i class="me-1" data-feather="check-circle"></i> Konfirmasi</button>
            </td>
            @endcan
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    
@endsection