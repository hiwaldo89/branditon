<?php $aboutSection = get_field('about_section'); ?>
<?php if ($aboutSection) : ?>
    <div class="homepage-about py-12">
        <div class="container mx-auto flex">
            <div class="w-full md:w-4/12">
                <h2 class="text-4xl text-center tracking-widest"><?php echo $aboutSection['headline']; ?></h2>
                <div class="text-justify text-xl">
                    <?php echo $aboutSection['description']; ?>
                </div>
            </div>
            <div class="w-full md:w-7/12 md:ml-auto flex homepage-about__images relative">
                <div class="w-full md:w-8/12 relative md:absolute homepage-about__front-img md:left-0 md:top-0 md:bottom-0 margin-auto">
                    <img src="<?php echo $aboutSection['front_image']['url']; ?>" alt="<?php echo $aboutSection['front_image']['alt']; ?>" class="w-full">
                </div>
                <div class="w-full md:w-6/12 md:ml-auto homepage-about__back-img">
                    <img src="<?php echo $aboutSection['back_image']['url']; ?>" alt="<?php echo $aboutSection['back_image']['alt']; ?>" class="w-full">
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>