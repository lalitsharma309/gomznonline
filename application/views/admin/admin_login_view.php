<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smart City Muzaffarnagar </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>admin_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>admin_assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>admin_assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>admin_assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>

    <?php if(isset($error)){?>
        <div class="container">
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="<?php echo base_url();?>admin-panel" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> <?php echo $error;?>
        </div>
    </div>
    <?php }?>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="<?php echo base_url();?>admin-login">
                    <h1>Admin Panel</h1>
                    <div>
                        <input type="text" class="form-control" name="email" placeholder="email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Log in</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">


                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-home" aria-hidden="true"></i> Smart City Muzaffarnagar !</h1>
                            <p>©2016 All Rights Reserved. Smart City Muzaffarnagar. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>


    </div>
</div>
</body>
</html>