<?php if(!defined('BASEPATH')) exit('Direct script access not allowed');?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="initial-scale=1">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/fav.png';?>">
    <!-- css files -->
    <link rel="stylesheet" href= <?php echo base_url()."assets/css/bootstrap.min.css";?> />
    <link rel="stylesheet" type="text/css" href= <?php echo base_url()."assets/css/font-awesome.min.css";?> />
    <?php
    if(is_array($css_link) && count($css_link)!=0) {
        foreach ($css_link as $link) {
            echo "<link rel='stylesheet' type='text/css' href= '".base_url()."assets/css/".$link."'/>";
        }
    }
    ?>
</head>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#">Inventory Management System</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#signup" data-toggle="modal" data-target=".bs-modal-sm">ADMIN</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".about">ABOUT US</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".contact">CONTACT</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<body>
