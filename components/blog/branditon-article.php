<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<article class="branditon-article">
    <div class="flex flex-wrap mt-12">
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
    <div class="container mx-auto">
        <div class="branditon-article__meta text-center">
            <div class="branditon-article__cat uppercase text-xl">
                <?php $categories = get_the_category(); ?>
                <?php echo $categories[0]->name; ?>
            </div>
            <div class="branditon-article__date">
                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <?php echo $f->format(get_the_time('Y')); ?>.
            </div>
            <div class="branditon-article__reading-time flex items-center justify-center">
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/img/reloj.svg" alt="reloj" class="mr-2">
                </div>
                <span>Lectura de <?php the_field('reading_time'); ?></span>
            </div>
        </div>
    </div>
</article>