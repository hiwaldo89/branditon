<div class="featured-press flex flex-wrap">
    <div class="featured-press__img w-full lg:w-8/12">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="w-full lg:w-4/12 featured-press__content text-center">
        <?php 
            $mediaPublication = get_taxonomies(array(
                'name' => array('publication_media')
            )); 
            var_dump($mediaPublication);
        ?>
    </div>
</div>