<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Admin Page'; ?></title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="/project/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/project/public/css/adminlte.min.css">
    <!-- Tambahkan link CSS lainnya di sini jika diperlukan -->
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include 'navbar.php'; ?>
        <?php include 'sidebar.php'; ?>
        <div class="content-wrapper">
            <section class="content">
                <?php include $content; ?>
            </section>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <!-- AdminLTE JavaScript -->
    <script src="/project/public/plugins/jquery/jquery.min.js"></script>
    <script src="/project/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/project/public/js/adminlte.min.js"></script>
    <!-- Tambahkan script JavaScript lainnya di sini jika diperlukan -->
</body>
</html>
