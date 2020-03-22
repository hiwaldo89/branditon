<?php get_header(); ?>
    <main>
        <?php if(have_posts()) : ?>
            <div class="container mx-auto text-center">
                <h2 class="text-3xl pt-20 mb-12"><?php the_field('headline', get_option('page_for_posts')); ?></h2>
            </div>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>