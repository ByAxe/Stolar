<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stolar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta HTTP-EQUIV="Content-Type" Content="text/html" charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <meta name="keywords" content="">

    <meta http-equiv="Content-Language" content="ru">
    <meta name="copyright" Content="StolarBy">

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/fav.ico" type="image/x-icon">

    <!--TODO fonts don't work on Android and iOS devices-->
    <link
        href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700'
        rel='stylesheet' type='text/css'>


    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dist/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css"
          href="<?php bloginfo('template_url'); ?>/dist/font-awesome/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dist/css/style.css"/>

    <meta name='yandex-verification' content=''/>
    <meta name="google-site-verification" content=""/>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Open Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>/"><i class="fa fa-home fa-fw"></i>&nbsp; Столяр.by</a>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/">Главная</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/profile">Выполняемые работы</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/gallery">Галерея</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/achievements">Наши Преимущества</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/contacts">Контакты</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/order-form">Форма заказа</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div id="content" class="site-content">