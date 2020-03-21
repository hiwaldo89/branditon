<?php 
/* Template Name: Home */ 
get_header();
?>
<main>
    <?php get_template_part('components/homepage/about'); ?>
    <?php get_template_part('components/homepage/recent-posts'); ?>
    <?php get_template_part('components/homepage/instagram-feed'); ?>
</main>
<?php get_footer(); ?>
