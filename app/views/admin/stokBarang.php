<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <link rel="stylesheet" href="/project/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/project/public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="/project/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/project/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo isset($data['user']['username']) ? $data['user']['username'] : 'Guest'; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="/project/public/admin/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/project/public/admin/stokBarang" class="nav-link active">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Stok Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/project/public/admin/stokGudang" class="nav-link">
                            <i class="nav-icon fas fa-warehouse"></i>
                            <p>Stok Gudang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/project/public/admin/logout" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Stok Barang</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <p>Selamat datang, <?php echo isset($data['user']['username']) ? $data['user']['username'] : 'Guest'; ?>. Ini adalah halaman stok barang.</p>
                <!-- Tambahkan konten stok barang di sini -->
                <a href="/project/public/admin/barangMasuk" class="btn btn-primary">Tambah Barang Masuk</a>
                <a href="/project/public/admin/barangKeluar" class="btn btn-secondary">Barang Keluar</a>
                <a href="/project/public/admin/stokGudang" class="btn btn-secondary">Lihat Stok Gudang</a>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Hak Cipta &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        Seluruh hak cipta dilindungi.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/project/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/project/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/project/public/dist/js/adminlte.min.js"></script>
</body>
</html>
