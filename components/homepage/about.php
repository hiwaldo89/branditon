<?php $aboutSection = get_field('about_section'); ?>
<?php if ($aboutSection) : ?>
    <div class="homepage-about py-12">
        <div class="container mx-auto flex">
            <div class="w-full md:w-4/12">
                <span class="homepage-about__line-deco"></span>
                <h2 class="text-4xl text-center tracking-widest"><?php echo $aboutSection['headline']; ?></h2>
                <div class="text-justify text-xl">
                    <?php echo $aboutSection['description']; ?>
                </div>
            </div>
            <div class="w-full md:w-7/12 md:ml-auto homepage-about__images relative">
                <div class="w-full md:w-7/12 homepage-about__front-img">
                    <div>
                        <img src="<?php echo $aboutSection['front_image']['url']; ?>" alt="<?php echo $aboutSection['front_image']['alt']; ?>" class="w-full">
                    </div>
                </div>
                <div class="w-full md:w-7/12 homepage-about__back-img md:ml-auto">
                    <img src="<?php echo $aboutSection['back_image']['url']; ?>" alt="<?php echo $aboutSection['back_image']['alt']; ?>" class="w-full">
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>