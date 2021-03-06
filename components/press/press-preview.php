<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<div class="press-preview mb-8" data-aos="fade-up">
    <a href="<?php the_permalink(); ?>">
        <div class="press-preview__img relative mb-8 overflow-hidden">
            <img data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full top-0 left-0 object-cover lazy">
        </div>
        <div class="press-preview__content text-center px-4">
            <?php $mediaPublication = get_the_terms(get_the_ID(), 'publication_media'); ?>
            <span class="inline-block press-preview__cat uppercase text-lg tracking-widest"><?php echo $mediaPublication[0]->name; ?></span>
            <h2 class="text-2xl font-secondary tracking-widest"><?php the_title(); ?></h2>
            <span class="press-preview__date tracking-widest">
                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <?php echo $f->format(get_the_time('Y')); ?>.
            </span>
        </div>
    </a>
</div>