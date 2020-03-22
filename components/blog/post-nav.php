<div class="post-nav flex flex-wrap">
    <div class="w-full lg:w-1/2 post-nav__prev text-right">
        <?php $prevPost = get_previous_post(); ?>
        <span>ANTERIOR</span>
        <h3><?php echo $prevPost->post_title; ?></h3>
    </div>
    <div class="w-full lg:w-1/2 post-nav__next">
        <?php $nextPost = get_next_post(); ?>
        <span>SIGUIENTE</span>
        <h3><?php echo $nextPost->post_title; ?></h3>
    </div>
</div>