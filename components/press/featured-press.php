<?php $f = new NumberFormatter("es", NumberFormatter::SPELLOUT); ?>
<div class="featured-press flex flex-wrap">
    <a href="<?php the_field('article_link'); ?>" target="_blank">
        <div class="featured-press__img w-full lg:w-8/12 relative">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="absolute w-full h-full object-cover top-0 left-0">
        </div>
        <div class="w-full lg:w-4/12 featured-press__content text-center">
            <?php 
                $mediaPublication = get_taxonomies(array(
                    'name' => array('publication_media')
                )); 
                var_dump($mediaPublication);
            ?>
            <h2 class="text-2xl"><?php the_title(); ?></h2>
            <span class="featured-press__date">
                <?php echo ucfirst(get_the_time('F')); ?> <?php echo $f->format(get_the_time('j')); ?>, <?php echo $f->format(get_the_time('Y')); ?>.
            </span>
            <p><?php the_excerpt(); ?></p>
        </div>
    </a>
</div>