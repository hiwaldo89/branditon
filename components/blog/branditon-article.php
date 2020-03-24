<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<article class="branditon-article">
    <div class="flex flex-wrap pt-20 mb-12">
        <div class="w-1/2 lg:w-1/12 text-right branditon-article__prev order-0 hidden lg:block">
            <?php $prevPost = get_previous_post(); ?>
            <?php if($prevPost != '') : ?>
                <a href="<?php echo get_permalink($prevPost->ID) ?>" class="block relative text-lg overflow-hidden tracking-widest">
                    ANTERIOR
                    <span class="absolute right-0 top-0 text-2xl font-secondary"><?php echo $prevPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="lg:w-4/12 mx-auto order-2 lg:order-1">
            <h1 class="text-center mt-6 text-3xl px-12 font-secondary tracking-widest"><?php the_title(); ?></h1>
        </div>
        <div class="w-1/2 lg:w-1/12 branditon-article__next order-1 lg:order-2 hidden lg:block">
            <?php $nextPost = get_next_post(); ?>
            <?php if($nextPost != '') : ?>
                <a href="<?php echo get_permalink($nextPost->ID); ?>" class="block relative text-lg overflow-hidden tracking-widest">
                    SIGUIENTE
                    <span class="absolute left-0 top-0 text-2xl font-secondary"><?php echo $nextPost->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0">
        <div class="branditon-article__meta text-center mb-16" data-aos="fade-up">
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
                        <img data-src="<?php bloginfo('template_url'); ?>/img/reloj.svg" alt="reloj" class="mr-2 lazy">
                    </div>
                    <span>Lectura de <?php the_field('reading_time'); ?></span>
                </div>
            <?php endif; ?>
        </div>
        <?php if(strlen(get_the_post_thumbnail_url()) > 0) : ?>
            <div class="branditon-article__img relative mb-20" data-aos="fade-up">
                <img data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full top-0 left-0 object-cover lazy">
            </div>
        <?php endif; ?>
        <div class="lg:-mx-6 flex flex-wrap">
            <div class="w-full lg:w-7/12 lg:px-6">
                <div class="branditon-article__content text-lg" data-aos="fade-right">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php if(get_field('gallery')) : ?>
                <div class="w-full lg:w-5/12 px-6 ml-auto">
                    <?php foreach(get_field('gallery') as $image) : ?>
                        <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full mb-8 lazy" data-aos="fade-up">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>