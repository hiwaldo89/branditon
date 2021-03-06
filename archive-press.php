<?php get_header(); ?>
    <main>
        <div class="container mx-auto px-4 lg:px-0">
            <h2 class="text-center text-2xl py-20 my-12 tracking-widest font-secondary">Nota más reciente</h2>
            <?php 
                $recentPostArgs = array(
                    'post_type' => 'press',
                    'posts_per_page' => 1,
                );
                $recentPost = new WP_Query($recentPostArgs);
            ?>
            <?php if($recentPost->have_posts()) : while($recentPost->have_posts()) : $recentPost->the_post(); ?>
                <?php get_template_part('components/press/featured-press'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            <h2 class="text-center text-xl py-24 tracking-widest font-secondary">Encuentra más notas</h2>
            <?php 
                $pressArgs = array(
                    'post_type' => 'press',
                    'posts_per_page' => 6,
                    'paged' => (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1
                );
                $pressQuery = new WP_Query($pressArgs);
            ?>
            <div class="flex flex-wrap -mx-4">
                <?php if($pressQuery->have_posts()) : ?>
                    <?php while($pressQuery->have_posts()) : $pressQuery->the_post(); ?>
                    <div class="w-full md:w-1/2 lg:w-4/12 px-4">
                        <?php get_template_part('components/press/press-preview'); ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div>
            <?php $customQuery = $pressQuery; ?>
            <?php include(locate_template('components/blog/pagination.php', false, false)); ?>
        </div>
    </main>
<?php get_footer(); ?>