<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<div class="post-preview mb-12">
    <article>
        <a href="<?php the_permalink(); ?>" class="flex flex-wrap">
            <div class="post-preview__img post-preview__col relative w-full lg:w-1/2">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full top-0 left-0 object-cover">
            </div>
            <div class="post-preview__col w-full lg:w-1/2">
                <div class="flex flex-wrap post-preview__info h-full">
                    <div class="post-preview__desc w-full lg:w-8/12">
                        <div class="post-preview__info-inner pt-8 flex flex-col">
                            <?php $categories = get_the_category(); ?>
                            <div class="post-preview__cat text-center text-lg mb-8 uppercase"><?php echo $categories[0]->name; ?></div>
                            <h3 class="text-center text-2xl mb-4"><?php the_title(); ?></h3>
                            <div class="text-left">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="text-center mt-auto">
                                <span class="post-preview__more mx-auto"></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-preview__meta w-full lg:w-4/12">
                        <div class="post-preview__info-inner pt-8">
                            <div class="text-center">
                                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <br>
                                <?php echo $f->format(get_the_time('Y')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </article>
</div>