<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('penjual') ?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Bakso Abah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('penjual') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Pesanan
    </div>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('penjual/pesanan') ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Pesanan</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('penjual/detail') ?>">
        <i class="fas fa-fw fa-sticky-note"></i>
        <span>Detail Pesanan</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('list_user') ?>">
        <i class="fas fa-fw fa-id-card-alt"></i>
        <span>Bukti Transfer</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  <!-- End of Sidebar -->