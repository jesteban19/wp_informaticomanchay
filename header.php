<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php bloginfo('description')?>">

    <title><?php bloginfo('name');?> |
        <?php  is_front_page() ? bloginfo('description') : wp_title();?></title>

        <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <?php wp_head();?>
</head>
<body>


   
    <nav id="navigation" class="main-nav">

        <div class="brand">
            <img src="<?php bloginfo('template_url');?>/img/logo-text.png" alt="">
        </div>               

            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navigation',
                //'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'menu',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
        <div class="cabecera_separadora"></div>
    </nav>