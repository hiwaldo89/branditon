<article class="branditon-article">
    <div class="flex flex-wrap">
        <div class="lg:w-3/12 text-right branditon-article__prev">
            <?php $prevPost = get_previous_post(); ?>
            <?php if(isset($prevPost)) : ?>
                <a href="<?php echo $prevPost->url; ?>">
                    ANTERIOR
                </a>
            <?php endif; ?>
        </div>
        <div class="lg:w-4/12 mx-auto">
            <h1 class="text-center mt-6 text-3xl px-12"><?php the_title(); ?></h1>
        </div>
        <div class="lg:w-3/12"></div>
    </div>
</article>