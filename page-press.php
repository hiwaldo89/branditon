<?php 
/* Template Name: Press */ 
get_header();
?>
    <main>
        <div class="container mx-auto">
            <h2 class="text-center text-xl py-24">Nota más reciente</h2>
            <?php 
                $recentPostArgs = array(
                    'post_type' => 'press',
                    'posts_per_page' => 1
                );
                $recentPost = new WP_Query($recentPostArgs);
            ?>
            <?php if($recentPost->have_posts()) : while($recentPost->have_posts()) : $recentPost->the_post(); ?>
                <?php get_template_part('components/press/featured-press'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            <h2 class="text-center text-xl py-24">Encuentra más notas</h2>
            <?php 
                $pressArgs = array(
                    'post_type' => 'press',
                    'offset' => 1,
                    'posts_per_page' => 6
                );
                $pressQuery = new WP_Query($pressArgs);
            ?>
            <?php if($pressQuery->have_posts()) : while($pressQuery->have_posts()) : $pressQuery->the_post(); ?>
                <?php get_template_part('components/press/press-preview'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </main>
<?php get_footer(); ?>