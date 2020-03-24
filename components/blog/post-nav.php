<div class="post-nav flex flex-wrap">
    <?php $prevPost = get_previous_post(); ?>
    <?php if($prevPost == '') : ?>
        <?php $prevPost = get_posts()[0]; ?>
    <?php endif; ?>
    <a href="<?php echo get_permalink($prevPost->ID); ?>" class="w-full lg:w-1/2 post-nav__prev lg:text-right pt-24 px-20 pb-20">
        <span class="text-sm tracking-widest">ANTERIOR</span>
        <h3 class="text-xl font-secondary tracking-widest"><?php echo $prevPost->post_title; ?></h3>
    </a>
    <?php $nextPost = get_next_post(); ?>
    <?php if($nextPost == '') : ?>
        <?php $nextPost = get_posts( 'numberposts=1&order=ASC' )[0]; ?>
    <?php endif; ?>
    <a href="<?php echo get_permalink($nextPost->ID); ?>" class="w-full lg:w-1/2 post-nav__next pt-24 px-20 pb-20">
        <span class="text-sm tracking-widest">SIGUIENTE</span>
        <h3 class="text-xl font-secondary tracking-widest"><?php echo $nextPost->post_title; ?></h3>
    </a>
</div>