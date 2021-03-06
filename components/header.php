<header class="branditon-header py-4">
    <div class="container mx-auto flex items-center px-4 lg:px-0">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mr-auto branditon-header__logo w-1/2 lg:w-3/12">
            <img src="<?php bloginfo('template_url'); ?>/img/branditon-logo.svg" alt="branditon">
        </a>
        <div class="lg:hidden w-1/2 text-right branditon-header__hamburger">
            <button class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <nav id="main-navigation" class="mr-3 w-full lg:w-1/2 flex items-center">
            <?php global $post; ?>
            <?php $pageSlug = $post->post_name; ?>
            <ul class="flex flex-col lg:flex-row w-full justify-between">
                <li class="relative">
                    <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="text-4xl<?php if($pageSlug == 'about') : ?> active<?php endif; ?>">
                        about
                    </a>
                    <span class="absolute inset-0 z-10">ABOUT</span>
                </li>
                <li class="relative">
                    <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="text-4xl<?php if($pageSlug == 'blog' || is_home()) : ?> active<?php endif; ?>">
                        blog
                    </a>
                    <span class="absolute inset-0 z-10">BLOG</span>
                </li>
                <li class="relative">
                    <a href="<?php echo get_permalink(get_page_by_path('press')); ?>" class="text-4xl<?php if($pageSlug == 'press' || is_post_type_archive('press')) : ?> active<?php endif; ?>">
                        press
                    </a>
                    <span class="absolute inset-0 z-10">PRESS</span>
                </li>
                <li class="relative">
                    <a href="<?php echo get_permalink(get_page_by_path('contacto')); ?>" class="text-4xl<?php if($pageSlug == 'contacto') : ?> active<?php endif; ?>">
                        contacto
                    </a>
                    <span class="absolute inset-0 z-10">CONTACTO</span>
                </li>
            </ul>
        </nav>
        <div class="branditon-header__social hidden lg:flex lg:w-3/12 justify-end items-center">
            <a href="https://www.instagram.com/brand.it.on/" target="_blank" class="mr-4"><img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="brand.it.on"></a>
            <a href="https://www.facebook.com/branditon.mx/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="branditon.mx"></a>
        </div>
    </div>
</header>