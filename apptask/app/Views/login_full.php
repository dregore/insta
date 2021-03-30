<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Private Area</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE LOGIN TO APP</h3>
                    <p>This is the best app ever!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-header">
                        <div id="infoMessage"><?php echo $message;?></div>
                    </div>
                    <div class="panel-body">
                        <form action="<?= base_url('login');?>" id="loginForm" method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <label class="control-label" for="identity">Email</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you email" required="" value="" name="identity" id="identity" class="form-control">
                                <span class="help-block small">Your login email</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <button class="btn btn-success btn-block loginbtn" type="submit" name="submit" value="Login">Login</button>
                            <a class="btn btn-default btn-block" href="<?= base_url('register');?>">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2021 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>
    
    <!-- jquery
		============================================ -->
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/scrollbar/mCustomScrollbar-active.js"></script>
</body>
</html>