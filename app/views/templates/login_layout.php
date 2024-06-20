<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Admin Login'; ?></title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="/project/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/project/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/project/public/css/adminlte.min.css">
    <!-- Tambahkan link CSS lainnya di sini jika diperlukan -->
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <?php include $content; ?>
            </div>
        </div>
    </div>
    <!-- AdminLTE JavaScript -->
    <script src="/project/public/plugins/jquery/jquery.min.js"></script>
    <script src="/project/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/project/public/js/adminlte.min.js"></script>
    <!-- Tambahkan script JavaScript lainnya di sini jika diperlukan -->
</body>
</html>
