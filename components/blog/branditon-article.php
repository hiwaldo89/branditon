<article class="branditon-article">
    <div class="flex flex-wrap">
        <div class="lg:w-1/12 text-right branditon-article__prev">
            <?php $prevPost = get_previous_post(); ?>
            <?php if(isset($prevPost) && strlen($prevPost->post_title) > 0) : ?>
                <a href="<?php echo get_permalink($prevPost->ID) ?>" class="block relative text-lg overflow-hidden">
                    ANTERIOR
                    <span class="absolute right-0 top-0 text-2xl"><?php echo $prevPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="lg:w-4/12 mx-auto">
            <h1 class="text-center mt-6 text-3xl px-12"><?php the_title(); ?></h1>
        </div>
        <div class="lg:w-1/12 branditon-article__next">
            <?php $nextPost = get_next_post(); ?>
            <?php if(isset($nextPost) && strlen($nextPost->post_title) > 0) : ?>
                <a href="<?php echo get_permalink($nextPost->ID); ?>" class="block relative text-lg overflow-hidden">
                    SIGUIENTE
                    <span class="absolute left-0 top-0 text-2xl"><?php echo $nextPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>