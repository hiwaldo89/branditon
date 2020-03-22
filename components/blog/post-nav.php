<div class="post-nav flex flex-wrap">
    <?php $prevPost = get_previous_post(); ?>
    <a href="<?php echo get_permalink($prevPost->ID); ?>" class="w-full lg:w-1/2 post-nav__prev text-right pt-24 px-20">
        <span>ANTERIOR</span>
        <h3><?php echo $prevPost->post_title; ?></h3>
    </a>
    <?php $nextPost = get_next_post(); ?>
    <a href="<?php echo get_permalink($nextPost->ID); ?>" class="w-full lg:w-1/2 post-nav__next pt-24 px-20">
        <span>SIGUIENTE</span>
        <h3><?php echo $nextPost->post_title; ?></h3>
    </a>
</div>