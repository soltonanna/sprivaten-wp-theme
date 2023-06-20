<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri()."/css/style.min.css" ); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <?php get_template_part( 'templates/header' ); ?>

        <div id="content" class="site-content">
