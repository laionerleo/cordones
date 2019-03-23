<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simulor/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:57:04 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Simulor - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>application/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>application/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                  
                                  <H1>LOGIN</H1>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                 <form method="post" action="<?=$url?>login">
                                <div class="form-group">
                                    <label for="username">Telefono</label>
                                    <input id="username" name="username" class="form-control form-control-rounded" type="number">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" name="password" class="form-control form-control-rounded" type="password">
                                </div>
                                <button   class="btn btn-rounded btn-primary btn-block mt-2" >Entrar</button>
                               

                            </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted"> <a href="pages-register.html" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- App js -->
        <script src="<?php echo base_url(); ?>application/assets/js/vendor.min.js"></script>
        <script src="<?php echo base_url(); ?>application/assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/simulor/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:57:04 GMT -->
</html>