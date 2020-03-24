<?php 
/* Template Name: Press */ 
get_header();
?>
    <main>
        <div class="container mx-auto">
            <h2 class="text-center text-xl py-24" data-aos="fade-up">Nota más reciente</h2>
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
            <h2 class="text-center text-xl py-24" data-aos="fade-up">Encuentra más notas</h2>
            <?php 
                $pressArgs = array(
                    'post_type' => 'press',
                    //'offset' => 1,
                    'posts_per_page' => 2,
                    'paged' => (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1
                );
                $pressQuery = new WP_Query($pressArgs);
            ?>
            <div class="flex flex-wrap -mx-4">
                <?php if($pressQuery->have_posts()) : ?>
                    <?php while($pressQuery->have_posts()) : $pressQuery->the_post(); ?>
                    <div class="w-full lg:w-4/12 px-4">
                        <?php get_template_part('components/press/press-preview'); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php
					$total_pages = $pressQuery->max_num_pages;
					if ($total_pages > 1) {
						$current_page = max(1, get_query_var( 'paged' ));
						echo paginate_links( array(
							'base' => get_pagenum_link( 1 ) . '%_%',
							'format' => 'page/%#%',
							'current' => $current_page,
							'total' => $total_pages,
							'prev_text' => __('PREVIOUS'),
							'next_text' => __('NEXT'),
						) );
					}
					?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>