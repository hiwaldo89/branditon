<?php get_header(); ?>
    <main>
        <?php if(have_posts()) : ?>
            <div class="container mx-auto text-center">
                <h2 class="text-3xl pt-20 mb-12"><?php the_field('headline'); ?></h2>
            </div>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>