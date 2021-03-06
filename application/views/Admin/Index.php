<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="suffe/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/scss/style.css">

    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?php echo site_url('login/apro');?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pw" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" value="Signin" class="btn btn-sucess">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url('assets/');?>suffe/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/plugins.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/main.js"></script>


</body>
</html>
