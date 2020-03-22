<article class="branditon-article">
    <div class="flex flex-wrap">
        <div class="lg:w-1/12 text-right branditon-article__prev">
            <?php $prevPost = get_previous_post(); ?>
            <?php if(isset($prevPost)) : ?>
                <a href="<?php echo get_permalink($prevPost->ID) ?>" class="block relative text-lg">
                    ANTERIOR
                    <span class="absolute right-0 bottom-0 text-2xl"><?php echo $prevPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="lg:w-4/12 mx-auto">
            <h1 class="text-center mt-6 text-3xl px-12"><?php the_title(); ?></h1>
        </div>
        <div class="lg:w-1/12 branditon-article__next">
            <?php $nextPost = get_next_post(); ?>
            <?php var_dump($nextPost); ?>
            <?php if(isset($nextPost)) : ?>
                <a href="<?php echo get_permalink($nextPost->ID); ?>" class="block relative text-lg">
                    SIGUIENTE
                    <span class="absolute left-0 bottom-0 text-2xl"><?php echo $nextPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>