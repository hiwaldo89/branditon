<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<div class="homepage-recent-posts py-12">
    <div class="container mx-auto px-4 lg:px-0">
        <h2 class="text-2xl text-center font-secondary tracking-widest mb-24" data-aos="fade-up">
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
                <?php $counter = 1; ?>
                <?php while($recentPostsQuery->have_posts()) : $recentPostsQuery->the_post(); ?>
                    <div class="homepage-recent-posts__article w-full" data-aos="fade-up" data-aos-delay="<?php echo 50 * $counter; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div class="homepage-recent-posts__article-img">
                                <img data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="lazy">
                            </div>
                            <div class="text-center mt-8 mb-4 tracking-widest">
                                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <br>
                                <?php echo $f->format(get_the_time('Y')); ?>
                            </div>
                            <h3 class="text-center text-xl mb-6 font-secondary tracking-widest"><?php the_title(); ?></h3>
                            <span class="homepage-recent-posts__article-deco"></span>
                        </a>
                    </div>
                    <?php $counter = $counter + 1; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
    <?php 
        $totalPosts = $recentPostsQuery->found_posts; 
        $totalDots = ceil($totalPosts / 3);
    ?>
    <div class="homepage-recent-posts__dots text-center mt-8">
        <div class="relative inline-block">
            <ul class="flex justify-center">
                <?php for ($i = 1; $i <= $totalDots; $i++) : ?>
                <li class="mr-3 relative text-xl"><button type="button" class="tracking-widest <?php if ($i == 1) : ?>active<?php endif; ?>" data-slide="<?php echo $i - 1; ?>"><?php echo $f->format($i); ?></button></li>
                <?php endfor; ?>
            </ul>
            <a href="" class="absolute homepage-recent-posts__all text-xl">>></a>
        </div>
    </div>
</div>