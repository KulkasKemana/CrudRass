@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Wisata</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <!-- contoh card info -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Destinasi</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengunjung Bulanan</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">1,200</div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pendapatan</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 25.000.000</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bisa ditambah content lain di bawah -->
</div>
@endsection
