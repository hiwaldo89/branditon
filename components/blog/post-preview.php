<div class="post-preview">
    <a href="<?php the_permalink(); ?>" class="flex flex-wrap">
        <div class="post-preview__img post-preview__col relative w-full lg:w-1/2">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full top-0 left-0 object-cover">
        </div>
    </a>
</div>