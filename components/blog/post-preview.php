<div class="post-preview mb-12">
    <a href="<?php the_permalink(); ?>" class="flex flex-wrap">
        <div class="post-preview__img post-preview__col relative w-full lg:w-1/2">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full top-0 left-0 object-cover">
        </div>
        <div class="post-preview__col w-full lg:w-1/2">
            <div class="flex flex-wrap">
                <div class="post-preview__desc w-full lg:w-8/12 pt-8">
                    <div class="post-preview__cat text-center text-lg mb-12">BRANDING</div>
                    <h3 class="text-center text-xl"><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </a>
</div>