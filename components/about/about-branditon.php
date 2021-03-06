<div class="container mx-auto about-branditon py-20 px-4 lg:px-0">
    <h2 class="text-center text-2xl mt-12 mb-12 pb-20 font-secondary tracking-widest">Acerca de Brand it on</h2>
    <div class="flex flex-wrap about-branditon__content mb-24">
        <div class="w-full lg:w-1/2 text-justify about-branditon__col text-xl mb-8 lg:mb-0" data-aos="fade-up">
            <?php the_field('left_column'); ?>
        </div>
        <div class="w-full lg:w-1/2 text-justify about-branditon__col text-xl" data-aos="fade-up" data-aos-delay="600">
            <?php the_field('right_column'); ?>
        </div>
    </div>
    <div class="flex flex-wrap about-branditon__content">
        <?php $counter = 0; ?>
        <?php if(have_rows('images')) : while(have_rows('images')) : the_row(); ?>
            <?php $image = get_sub_field('image'); ?>
            <div class="w-full md:w-1/2 about-branditon__col mb-6 lg:mb-0" data-aos="fade-up" data-aos-delay="<?php echo strval($counter); ?>">
                <div class="about-branditon__img relative">
                    <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="absolute w-full h-full top-0 left-0 object-cover lazy">
                </div>
            </div>
            <?php $counter = $counter + 300; ?>
        <?php endwhile; endif; ?>
    </div>  
</div>