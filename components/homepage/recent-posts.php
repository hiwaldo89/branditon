<div class="homepage-recent-posts py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl text-center">
            Últimas entradas 
            <br> 
            del blog
        </h2>
        <?php 
            $args = array(
                'posts_per_page' => 3
            ); 
            $recentPostsQuery = new WP_Query($args);
        ?>
        <?php if($recentPostsQuery->have_posts()) : ?>
            <div class="flex flex-wrap homepage-recent-posts__wrapper">
                <?php while($recentPostsQuery->have_posts()) : $recentPostsQuery->the_post(); ?>
                    <div class="homepage-recent-posts__article w-full md:w-4/12">
                        <div class="homepage-recent-posts__article-img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="text-center">
                            <?php $f = new NumberFormatter("en", NumberFormatter::SPELLOUT); ?>
                            <?php echo (int)the_time('d'); ?>
                            <?php echo the_time('F'); ?> <?php echo $f->format((int)the_time('d')); ?>, <br>
                            <?php echo $f->format((int)the_time('Y')); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>