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
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php get_footer(); ?>