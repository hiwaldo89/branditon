<?php get_header(); ?>
    <main>
        <?php if(have_posts()) : ?>
            <div class="container mx-auto text-center pt-20 pb-8 px-4 lg:px-0">
                <h2 class="text-2xl mt-12 mb-12 pb-20 font-secondary tracking-widest" data-aos="fade-up"><?php the_field('headline', get_option('page_for_posts')); ?></h2>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('components/blog/post-preview'); ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php get_template_part('components/blog/pagination'); ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>