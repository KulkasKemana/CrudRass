<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Sidebar Abu-Abu</title>
<!-- link bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<!-- font awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

<style>
  .bg-gradient-gray {
    background: linear-gradient(180deg, #6c757d 10%, #5a6268 100%);
  }
</style>
</head>
<body>

<ul class="navbar-nav bg-gradient-gray sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Wisata</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('departemen.index')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Pulau</span>
    </a>
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="{{route('karyawan.index')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Wisata</span>
    </a>
  </li>

  <!-- Divider -->
</ul>

<!-- bootstrap js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
