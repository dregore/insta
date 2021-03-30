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

    
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="/logout" class="btn btn-info">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Static Table Start -->
    <div class="static-table-area mg-t-15">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline8-list mt-b-30">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>All Contacts</h1>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?foreach($contacts as $key => $item){?>
                                        <tr>
                                            <td><?= $key+1;?></td>
                                            <td><?= $item['first_name'];?></td>
                                            <td><?= $item['last_name'];?></td>
                                            <td><button type="button" class="add_to_list" data-id="<?= $item['id'];?>"> Add to Private List</button></td>
                                        </tr>
                                        <?}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline9-list mt-b-30">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Private List</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="static-table-list">
                                <table class="table sparkle-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?foreach($contacts_private as $key => $item){?>
                                        <tr>
                                            <td><?= $key+1;?></td>
                                            <td><?= $item['first_name'];?></td>
                                            <td><?= $item['last_name'];?></td>
                                            <td><button type="button" class="rm_from_list" data-rid="<?= $item['id'];?>"> Remove</button></td>
                                        </tr>
                                        <?}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Static Table End -->
    
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
    <script>
        (function ($) {
            $.scrollUp({
                scrollText: '<i class="fa fa-angle-up"></i>',
                easingType: 'linear',
                scrollSpeed: 900,
                animation: 'fade'
            });
    
            $('.add_to_list').on('click', function(e){
                e.preventDefault();
                var contact_id = $(this).attr("data-id");
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('home/ajax_add');?>",
                    data: {contact_id:contact_id},
                    success: function(data){
                        console.log(data);
                        if (data == 'OK') {
                            window.location.href = '/home';
                        }
                    }
                });
            });
            
            $('.rm_from_list').on('click', function(e){
                e.preventDefault();
                var contact_id = $(this).attr("data-rid");
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('home/ajax_rm');?>",
                    data: {contact_id:contact_id},
                    success: function(data){
                        console.log(data);
                        if (data == 'OK') {
                            window.location.href = '/home';
                        }
                    }
                });
            });
        })(jQuery); 
    </script>
</body>
</html>