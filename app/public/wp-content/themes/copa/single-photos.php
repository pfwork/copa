<?php
    get_header();

    while(have_posts()) {
        the_post(); 
        pageBanner();
        ?>
        <!-- <div class="page-banner">
            <div class="page-banner__bg-image" 
            style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
            </div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title(); ?></h1>
                <div class="page-banner__intro">
                    <p>Don't forget to replace me later.</p>
                </div>
            </div>  
        </div> -->

        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('photos'); ?>">
                    <i class="fa fa-home" aria-hidden="true"></i> Photo Gallery
                </a><span class="metabox__main"><?php the_title(); ?></span></p>
            </div>

            <!-- <div class="generic-content"><?php echo do_shortcode('[gallery size="medium" columns="3"]'); ?></div> -->
            <div class="generic-content"><?php 
            $galleryShortcode = get_the_content();
            echo do_shortcode($galleryShortcode); ?></div>

            

        </div>

    <?php }
    get_footer();
?>