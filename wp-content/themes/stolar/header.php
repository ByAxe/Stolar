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
        <?php include "common-components/main-navigation.php"; ?>
    </header>

    <div id="content" class="site-content">