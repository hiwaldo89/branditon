<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="branditon-header">
    <div class="container mx-auto flex items-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mr-auto branditon-header__logo w-1/2 md:w-3/12">
            <img src="<?php bloginfo('template_url'); ?>/img/branditon-logo.svg" alt="branditon">
        </a>
        <nav class="mr-3 w-1/2 md:w-9/12 flex items-center">
            <ul class="flex w-full md:w-6/12">
                <li><a href="">ABOUT</a></li>
                <li><a href="">BLOG</a></li>
                <li><a href="">PRESS</a></li>
                <li><a href="">CONTACTO</a></li>
            </ul>
            <div class="branditon-header__social flex w-full md:w-6/12">
                <a href="https://www.instagram.com/brand.it.on/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="brand.it.on"></a>
                <a href="https://www.facebook.com/branditon.mx/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="branditon.mx"></a>
            </div>
        </nav>
    </div>
</header>