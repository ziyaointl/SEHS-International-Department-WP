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
                <a href="<?php echo home_url(); ?>" class="navbar-brand visible-lg visible-md"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo"
                        id="logo-with-text"></a>
                <a href="<?php echo home_url(); ?>" class="navbar-brand visible-sm visible-xs"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo-square.png" alt="Logo" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">新闻</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/category/news">全部</a></li>
                            <li><a href="<?php echo home_url(); ?>/category/campus">校园</a></li>
                            <li><a href="<?php echo home_url(); ?>/category/exchange">交流</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">关于</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/about-us">关于我们</a></li>
                            <li><a href="<?php echo home_url(); ?>/contact-us">联系我们</a></li>
                            <li><a href="<?php echo home_url(); ?>/history">历史</a></li>
                            <li><a href="<?php echo home_url(); ?>/campus-tour">校园一览</a></li>
                            <li><a href="<?php echo home_url(); ?>/location">位置</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">学术</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/faculty">教师团队</a></li>
                            <li><a href="<?php echo home_url(); ?>/curriculum-overview">课程简介</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">活动</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url(); ?>/clubs">社团</a></li>
                            <li><a href="<?php echo home_url(); ?>/arts">艺术</a></li>
                            <li><a href="<?php echo home_url(); ?>/athletics">体育</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>English</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<!-- /header -->
