<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<article class="branditon-article">
    <div class="flex flex-wrap pt-20 mb-12">
        <div class="lg:w-1/12 text-right branditon-article__prev">
            <?php $prevPost = get_previous_post(); ?>
            <?php if(isset($prevPost) && strlen($prevPost->post_title) > 0) : ?>
                <a href="<?php echo get_permalink($prevPost->ID) ?>" class="block relative text-lg overflow-hidden tracking-widest">
                    ANTERIOR
                    <span class="absolute right-0 top-0 text-2xl font-secondary"><?php echo $prevPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="lg:w-4/12 mx-auto">
            <h1 class="text-center mt-6 text-3xl px-12 font-secondary tracking-widest"><?php the_title(); ?></h1>
        </div>
        <div class="lg:w-1/12 branditon-article__next">
            <?php $nextPost = get_next_post(); ?>
            <?php if(isset($nextPost) && strlen($nextPost->post_title) > 0) : ?>
                <a href="<?php echo get_permalink($nextPost->ID); ?>" class="block relative text-lg overflow-hidden tracking-widest">
                    SIGUIENTE
                    <span class="absolute left-0 top-0 text-2xl font-secondary"><?php echo $nextPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="branditon-article__meta text-center mb-16">
            <div class="branditon-article__cat uppercase text-xl tracking-widest">
                <?php $categories = get_the_category(); ?>
                <?php echo $categories[0]->name; ?>
            </div>
            <div class="branditon-article__date tracking-widest mb-8">
                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <?php echo $f->format(get_the_time('Y')); ?>.
            </div>
            <?php if(strlen(get_field('reading_time')) > 0) : ?>
                <div class="branditon-article__reading-time flex items-center justify-center tracking-widest">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/img/reloj.svg" alt="reloj" class="mr-2">
                    </div>
                    <span>Lectura de <?php the_field('reading_time'); ?></span>
                </div>
            <?php endif; ?>
        </div>
        <?php if(strlen(get_the_post_thumbnail_url()) > 0) : ?>
            <div class="branditon-article__img relative mb-8">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full top-0 left-0 object-cover">
            </div>
        <?php endif; ?>
        <div class="-mx-6 flex flex-wrap">
            <div class="w-full lg:w-7/12 px-6">
                <div class="branditon-article__content text-lg">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php if(get_field('gallery')) : ?>
                <div class="w-full lg:w-4/12 px-6 ml-auto">
                    <?php foreach(get_field('gallery') as $image) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full mb-8">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>