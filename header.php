<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>


</head>

<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo home_url(); ?>" class="navbar-brand visible-lg"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo"
                        id="logo-with-text"></a>
                <a href="<?php echo home_url(); ?>" class="navbar-brand visible-sm visible-xs visible-md"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo-square.png" alt="Logo" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">News</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/category/news">All</a></li>
                            <li><a href="<?php echo home_url(); ?>/category/campus">Campus</a></li>
                            <li><a href="<?php echo home_url(); ?>/category/exchange">Exchange</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/about-us">About Us</a></li>
                            <li><a href="<?php echo home_url(); ?>/contact-us">Contact Us</a></li>
                            <li><a href="<?php echo home_url(); ?>/history">History</a></li>
                            <li><a href="<?php echo home_url(); ?>/campus-tour">Campus Tour</a></li>
                            <li><a href="<?php echo home_url(); ?>/location">Location</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Academics</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/curriculum-overview">Curriculum Overview</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Activities</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/clubs">Clubs</a></li>
                            <li><a href="<?php echo home_url(); ?>/arts">Arts</a></li>
                            <li><a href="<?php echo home_url(); ?>/athletics">Athletics</a></li>
                            <li><a href="<?php echo home_url(); ?>/studentgov">Student Ambassadors</a></li>
                        </ul>
                    </li>
                    <li><a href="http://www.sdshiyan.cn/"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>中文</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<!-- /header -->
