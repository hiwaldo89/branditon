<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<div class="featured-press" data-aos="fade-up">
    <a href="<?php the_field('article_link'); ?>" target="_blank" class="flex flex-wrap">
        <div class="featured-press__img w-full md:w-1/2 lg:w-8/12 relative overflow-hidden">
            <img data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full object-cover top-0 left-0 lazy">
        </div>
        <div class="w-full md:w-1/2 lg:w-4/12 featured-press__content text-center flex flex-col justify-center px-12 py-8">
            <?php 
                $mediaPublication = get_the_terms(get_the_ID(), 'publication_media'); 
            ?>
            <span class="featured-press__cat uppercase text-lg inline-block mb-6 tracking-widest"><?php echo $mediaPublication[0]->name; ?></span>
            <h2 class="text-xl tracking-widest font-secondary"><?php the_title(); ?></h2>
            <span class="featured-press__date inline-block mb-8 tracking-widest">
                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <?php echo $f->format(get_the_time('Y')); ?>.
            </span>
            <div class="tracking-widest">
                <?php the_content(); ?>
            </div>
        </div>
    </a>
</div>