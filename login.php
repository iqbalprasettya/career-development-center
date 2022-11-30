<?php
// session start();
if (!empty($_SESSION)) {
} else {
    session_start();
}
?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 pt-8 mt-5  mx-auto">
                <div id="logout">
                    <?php if (isset($_GET['signout'])) { ?>
                        <div class="alert alert-success">
                            <strong>Anda Berhasil Logout</strong>
                        </div>
                    <?php } ?>
                </div>
                <div id="notifikasi">
                    <div class="alert alert-danger">
                        <strong>Login Anda Gagal, Periksa Kembali Username dan Password</strong>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <i class="fa fa-sign-in pt-2"></i> Log In
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- form berfungsi mengirimkan data input 
                            dengan method post ke proses login dengan paramater get aksi login -->
                        <form method="post" action="proses.php?aksi=login" id="formlogin">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="user" class="form-control" autofocus placeholder="Username" type="text" required="required" autocomplete="off">
                            </div>
                            <!-- form-group -->
                            <div class="form-group">
                                <label>Password</label>
                                <input name="pass" class="form-control" placeholder="Password" type="password" required="required" autocomplete="off">
                            </div>
                            <!-- form-group -->
                            <div class="form-group">
                                <button style=" color: #fff;" type="submit" name="proses_login" class="btn btn-block bg-dark"> Login
                                </button>
                            </div>
                            <!-- form-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // notifikasi gagal di hide
        <?php if (empty($_GET['get'])) { ?>
            $("#notifikasi").hide();
        <?php } ?>
        var logingagal = function() {
            $("#logout").fadeOut('slow');
            $("#notifikasi").fadeOut('slow');
        };
        setTimeout(logingagal, 4000);
    </script>
</body>

</html>