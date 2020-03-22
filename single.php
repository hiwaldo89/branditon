<?php get_header(); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php get_template_part('components/blog/branditon-article'); ?>
        <?php get_template_part('components/blog/share-article'); ?>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>