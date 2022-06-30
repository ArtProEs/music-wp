<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php the_title();?></title>
</head>
<span id="json"><?php echo json_encode(carbon_get_theme_option( 'medias' ));?></span>
<body>
    <header>
        <div class="header__backg" style="background-image: url('<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_bg_img' ), 'full'); ?>');"></div>
        <div class="container">
            <div class="header">
                <img class="header__logo" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt="DrightLights">
                <nav id="header__nav" data-img-burger="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_burger' )); ?>" data-img-burger-closes="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_burger-closes' )); ?>">
                <!-- Рендер из Js--></nav>
            </div>
        </div>
    </header>
    <?php 
    echo '<pre>';
    print_r( carbon_get_theme_option( 'site_player-pause' )) ;
    echo '</pre>';
    ?>
