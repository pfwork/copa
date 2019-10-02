<?php
get_header();
pageBanner(array(
    'title' => 'News & Announcements',
    'subtitle' => 'Keep up with out latest news.'
));
?>
<!-- <div class="page-banner">
    <div class="page-banner__bg-image" 
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
    </div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">News & Announcements</h1>
            <div class="page-banner__intro">
                <p>Don't forget to replace me later.</p>
            </div>
        </div>  
</div> -->

<!-- <div class="container container--narrow page-section"> -->
<div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <?php
            while(have_posts()) {
                the_post(); ?>
                <div class="post-item">
                        <h2 class="headline headline--small-plus headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <!-- <div class="metabox">
                        <p>Posted on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list('and'); ?></p>
                    </div> -->
                    <!-- <div class="generic-content">
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
                    </div> -->

                </div>
        <?php  }
            echo paginate_links();
        ?>
      </div>
    </div>
   

    <div class="full-width-split__two">
      <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus headline--post-title">Subscribe to our newsletter</h2>
          <?php
            echo do_shortcode('[wpforms id="267"]');
          ?>
      </div>
    </div>
</div>
    <!-- </div> -->
<?php
get_footer();
?>