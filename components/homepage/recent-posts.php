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
        <?php if($recentPostsQuery->have_posts()) : while($recentPostsQuery->have_posts()) : $recentPostsQuery->the_post(); ?>
            <div class="">
                a new post
            </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</div>