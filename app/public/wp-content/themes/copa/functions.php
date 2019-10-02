<?php

function pageBanner($args = NULL) {

    if(!$args['title']) {
        $args['title'] = get_the_title();
    }

    if(!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_subtitle');
    }

    if(!$args['photo']) {
        if(get_field('page_banner_background_image')) {
            $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
            $args['photo'] = get_theme_file_uri('/images/pagebanner.jpg');
        }
    }

    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" 
        style="background-image: url(<?php 
            echo $args['photo'];
         ?>);">
        </div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
            <div class="page-banner__intro">
                <p><?php echo $args['subtitle'] ?></p>
            </div>
        </div>  
    </div>
    <?php
}

function orchestra_files() {
    wp_enqueue_script('main-orchestra-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_style('font-awesome', 'maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('orchestra_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'orchestra_files');

function orchestra_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 350, true);
    // if (class_exists('MultiPostThumbnails')) {
 
    //     new MultiPostThumbnails(array(
    //     'label' => 'Secondary Image',
    //     'id' => 'secondary-image',
    //     // 'post_type' => 'post'
    //     'post_type' => 'page'
    //      ) );
         
    //      }
}

add_action('after_setup_theme', 'orchestra_features');

function orchestra_adjust_queries($query) {

    if(!is_admin() AND is_post_type_archive('events') AND $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'orchestra_adjust_queries');

function my_give_custom_cpt_admin_shortcode_button( $args ) {
	// My CPT edit screen for cpt "movies" - swap this out with your CPT name
	$args[] = 'edit.php?post_type=photos';
	return $args;
}
add_filter( 'give_shortcode_button_pages', 'my_give_custom_cpt_admin_shortcode_button' );