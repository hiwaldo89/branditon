<?php $aboutSection = get_field('about_section'); ?>
<?php if ($aboutSection) : ?>
    <div class="homepage-about py-12">
        <div class="container mx-auto flex flex-wrap px-4 lg:px-0 items-center">
            <div class="w-full md:w-5/12 lg:w-3/12" data-aos="fade-right">
                <span class="homepage-about__line-deco"></span>
                <h2 class="text-4xl text-center tracking-widest"><?php echo $aboutSection['headline']; ?></h2>
                <div class="text-justify text-xl">
                    <?php echo $aboutSection['description']; ?>
                </div>
                <a class="pt-8 inline-block" href="<?php echo get_permalink(get_page_by_path('about')); ?>">
                    <span class="homepage-about__cross-deco"></span>
                </a>
            </div>
            <div class="w-full md:w-7/12 md:ml-auto homepage-about__images relative" data-aos="fade-up">
                <div class="w-full md:w-7/12 homepage-about__front-img z-10" data-rellax-speed="2" data-rellax-mobile-speed="0" data-rellax-xs-speed="0">
                    <div>
                        <img src="<?php echo $aboutSection['front_image']['url']; ?>" alt="<?php echo $aboutSection['front_image']['alt']; ?>" class="w-full">
                    </div>
                </div>
                <div class="w-full md:w-7/12 homepage-about__back-img md:ml-auto" data-rellax-speed="3" data-rellax-mobile-speed="0" data-rellax-xs-speed="0">
                    <img src="<?php echo $aboutSection['back_image']['url']; ?>" alt="<?php echo $aboutSection['back_image']['alt']; ?>" class="w-full">
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>