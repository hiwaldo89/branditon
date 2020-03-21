<?php $aboutSection = get_field('about_section'); ?>
<?php if ($aboutSection) : ?>
    <div class="homepage-about">
        <div class="container mx-auto flex">
            <div class="w-full md:w-4/12">
                <h2><?php echo esc_url($aboutSection['headline']); ?></h2>
                <div class="text-justify">
                    <?php echo esc_url($aboutSection['description']); ?>
                </div>
            </div>
            <div class="w-full md:w-8/12">
                
            </div>
        </div>
    </div>
<?php endif; ?>