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
            <div class="w-full md:w-8/12">

            </div>
        </div>
    </div>
<?php endif; ?>