<div class="homepage-recent-posts py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl text-center">
            Últimas entradas 
            <br> 
            del blog
        </h2>
        <?php 
            $args = array(
                'posts_per_page' => 12
            ); 
            $recentPostsQuery = new WP_Query($args);
        ?>
        <?php if($recentPostsQuery->have_posts()) : ?>
            <div class="flex flex-wrap homepage-recent-posts__wrapper">
                <?php while($recentPostsQuery->have_posts()) : $recentPostsQuery->the_post(); ?>
                    <div class="homepage-recent-posts__article w-full">
                        <a href="<?php the_permalink(); ?>">
                            <div class="homepage-recent-posts__article-img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="text-center mt-8 mb-4">
                                <?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
                                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <br>
                                <?php echo $f->format(get_the_time('Y')); ?>
                            </div>
                            <h3 class="text-center text-3xl"><?php the_title(); ?></h3>
                            <span class="homepage-recent-posts__article-deco"></span>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>