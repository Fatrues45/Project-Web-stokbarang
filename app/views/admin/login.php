<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/project/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/project/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/project/public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="/project/public/admin/loginProcess" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
            <?php if (isset($data['error'])): ?>
                <p class="text-danger"><?php echo $data['error']; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="/project/public/plugins/jquery/jquery.min.js"></script>
<script src="/project/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/project/public/dist/js/adminlte.min.js"></script>
</body>
</html>
