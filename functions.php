<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function custom_theme_setup()
{
    /* -------------------------------------------------------------------------- */
    /*                              Add Theme Support                             */
    /* -------------------------------------------------------------------------- */
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support(
        'custom-logo',
        array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
        )
    );

    /* -------------------------------------------------------------------------- */
    /*                          Register Navigation Menus                         */
    /* -------------------------------------------------------------------------- */
    register_nav_menus(
        array(
            'primary-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
            'footer-services-menu' => 'Footer Services Menu',
            'footer-information-menu' => 'Footer information Menu',
            'footer-aboutus-menu' => 'Footer About-us Menu',
        )
    );

    /* -------------------------------------------------------------------------- */
    /*                      Register Widget Areas (sidebars)                      */
    /* -------------------------------------------------------------------------- */
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Add widgets here to appear in the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer Widget 1',
            'id' => 'footer-widget-1',
            'description' => 'Add widgets here to appear in the Footer in first column.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer Widget 2',
            'id' => 'footer-widget-2',
            'description' => 'Add widgets here to appear in the Footer in 2nd column.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer Widget 3',
            'id' => 'footer-widget-3',
            'description' => 'Add widgets here to appear in the Footer in 3rd column.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer Widget 4',
            'id' => 'footer-widget-4',
            'description' => 'Add widgets here to appear in the Footer in 4th column.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer Widget 5',
            'id' => 'footer-widget-5',
            'description' => 'Add widgets here to appear in the Footer in Last column.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_theme_enqueue_styles()
{
    /* -------------------------------------------------------------------------- */
    /*                             Enqueue Stylesheets                            */
    /* -------------------------------------------------------------------------- */
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('cy-css', get_template_directory_uri() . '/css/cy-style.css', array(), time());
    wp_enqueue_style('rz-css', get_template_directory_uri() . '/css/rz-style.css', array(), time());
    wp_enqueue_style('sb-css', get_template_directory_uri() . '/css/sb-style.css', array(), time());
    wp_enqueue_style('zh-global-css', get_template_directory_uri() . '/css/zh-global-style.css', array(), time());
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/libraries/slick/slick-theme.css', array(), time());
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/libraries/slick/slick.css', array(), time());
    wp_enqueue_style('cyNotifier-css', get_template_directory_uri() . '/libraries/cyNotifier/cyNotifier.css', array(), time());
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), time());

    /* -------------------------------------------------------------------------- */
    /*                     Enqueue Scripts (modify As Needed)                     */
    /* -------------------------------------------------------------------------- */
    wp_enqueue_script('jquery-js');
    wp_enqueue_script('jquery-updated-js', get_template_directory_uri() . '/libraries/jquery/jquery.js', array(), time(), true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/libraries/slick/slick.js', array(), time(), true);
    wp_enqueue_script('cyNotifier-js', get_template_directory_uri() . '/libraries/cyNotifier/cyNotifier.js', array(), time(), true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), time(), true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array(), time(), true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');

/* -------------------------------------------------------------------------- */
/*                           Custom Wordpress Title                           */
/* -------------------------------------------------------------------------- */
//function custom_wp_title($title, $sep)
//{
//    /* -------------------------------------------------------------------------- */
//    /*                      Get The Website Title And Tagline                     */
//    /* -------------------------------------------------------------------------- */
//    $site_title = get_bloginfo('name');
//    $site_tagline = get_bloginfo('description');
//
//    if (is_front_page() && is_home()) {
//        /* -------------------------------------------------------------------------- */
//        /*                                  Homepage                                  */
//        /* -------------------------------------------------------------------------- */
//        $custom_title = $site_title . ' | ' . $site_tagline;
//    } elseif (is_front_page()) {
//        /* -------------------------------------------------------------------------- */
//        /*                              Static Front Page                             */
//        /* -------------------------------------------------------------------------- */
//        $custom_title = $site_title . ' | ' . $site_tagline;
//    } elseif (is_home()) {
//        /* -------------------------------------------------------------------------- */
//        /*                                  Blog Page                                 */
//        /* -------------------------------------------------------------------------- */
//        $custom_title = get_the_title(get_option('page_for_posts')) . ' | ' . $site_title;
//    } elseif (is_single()) {
//        /* -------------------------------------------------------------------------- */
//        /*                              Single Post Page                              */
//        /* -------------------------------------------------------------------------- */
//        $custom_title = single_post_title('', false) . ' | ' . $site_title;
//    } else {
//        /* -------------------------------------------------------------------------- */
//        /*                                 Other Pages                                */
//        /* -------------------------------------------------------------------------- */
//        $custom_title = get_the_title() . ' | ' . $site_title;
//    }
//
//    return $custom_title;
//}
//
//add_filter('wp_title', 'custom_wp_title', 10, 2);

/* -------------------------------------------------------------------------- */
/*                  Add Custom Image Sizes (modify As Needed)                 */
/* -------------------------------------------------------------------------- */

/* function custom_theme_image_sizes()
{
    add_image_size('custom-thumbnail', 300, 200, true);
}
add_action('after_setup_theme', 'custom_theme_image_sizes'); */

/* -------------------------------------------------------------------------- */
/*                 Customize Excerpt Length (modify As Needed)                */
/* -------------------------------------------------------------------------- */

/* function custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length'); */

/* -------------------------------------------------------------------------- */
/*                  Add Custom Navigation Walker (if Needed)                  */
/* -------------------------------------------------------------------------- */

//require_once get_template_directory() . '/inc/custom-walker-nav-menu.php';

/* -------------------------------------------------------------------------- */
/*           Add Custom Post Types And Taxonomies (modify As Needed)          */
/* -------------------------------------------------------------------------- */

/* function custom_theme_post_types()
{
    // Example custom post type
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio Item',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-portfolio', // Customize with Dashicons
    ));

    // Example custom taxonomy
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
    ));
}
add_action('init', 'custom_theme_post_types'); */

/* -------------------------------------------------------------------------- */
/*                         Custom Pagination Function                         */
/* -------------------------------------------------------------------------- */

/* function custom_pagination()
{
    global $wp_query;
    $big = 999999999; // Need an unlikely integer

    echo paginate_links(array(
        'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'  => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total'   => $wp_query->max_num_pages,
    ));
} */

/* -------------------------------------------------------------------------- */
/*                        Remove WP Version From Header                       */
/* -------------------------------------------------------------------------- */

/* function custom_remove_version()
{
    return '';
}
add_filter('the_generator', 'custom_remove_version'); */

/* -------------------------------------------------------------------------- */
/*                       Disable XML-RPC (for Security)                       */
/* -------------------------------------------------------------------------- */

/* add_filter('xmlrpc_enabled', '__return_false'); */

/* -------------------------------------------------------------------------- */
/*                       Customize The Excerpt More Link                      */
/* -------------------------------------------------------------------------- */

/* function custom_excerpt_more($more)
{
    return '... <a href="' . get_permalink() . '">Read more &raquo;</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more'); */

/* -------------------------------------------------------------------------- */
/*       Customize The Login Logo (replace Logo.png With Your Own Image)      */
/* -------------------------------------------------------------------------- */

function custom_login_logo()
{
    echo '<style type="text/css">h1 a { background-image: url(' . get_template_directory_uri() . '/Images/hero-big-logo.png) !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

/* -------------------------------------------------------------------------- */
/*     Add Custom Scripts And Styles To The Admin Area (modify As Needed)     */
/* -------------------------------------------------------------------------- */

/* function custom_admin_enqueue_scripts()
{
    wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/admin-style.css');
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/admin-script.js');
}
add_action('admin_enqueue_scripts', 'custom_admin_enqueue_scripts'); */

/* function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('text', 'crb_text', 'Text Field'),
        ));
}
add_action('carbon_fields_register_fields', 'crb_attach_theme_options'); */

/* -------------------------------------------------------------------------- */
/*                          Woocommerce Theme Support                         */
/* -------------------------------------------------------------------------- */

add_theme_support('woocommerce');

/* ---------------------------------------------------------------------------------------------- */
/*                                 Carbon Field For Pricing Plans                                 */
/* ---------------------------------------------------------------------------------------------- */

// function pricing_plan_features_fields()
// {
//     Container::make('post_meta', 'Features Fields')
//         ->where('post_type', '=', 'pricing-plan')
//         ->add_fields(array(
//             Field::make('complex', 'pricing-plans-features', 'Available Features')
//                 ->set_layout('tabbed-horizontal')
//                 ->add_fields(array(
//                     Field::make('checkbox', 'available', 'Available'),
//                     Field::make('text', 'feature', 'Feature'),
//                 )),
//         ));
// }
// add_action('carbon_fields_register_fields', 'pricing_plan_features_fields');

function ct_service_pricing_plan_fields()
{
    Container::make('post_meta', 'Pricing Plan Fields')
        ->where('post_type', '=', 'ct-service')
        ->or_where('post_id', '=', 15)
        ->or_where('post_type', '=', "ct-language")
        ->or_where('post_id', '=', 47)
        ->add_fields(
            array(
                Field::make('complex', 'ct-service-pricing-plans', 'Pricing Plans')
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(
                        array(
                            Field::make('text', 'plan_name', 'Plan Name'),
                            Field::make('text', 'plan_price', 'Plan Price'),
                            Field::make('radio', 'recommended', 'Recommended')
                                ->add_options(
                                    array(
                                        'yes' => 'Yes',
                                        'no' => 'No',
                                    )
                                ),
                            Field::make('image', 'plan_icon', 'Plan Icon')
                                ->set_value_type('url'),
                            Field::make('complex', 'plan_features', 'Plan Features')
                                ->add_fields(
                                    array(
                                        Field::make('checkbox', 'available', 'Available'),
                                        Field::make('text', 'feature', 'Feature'),
                                    )
                                ),
                            Field::make('text', 'quote_button_text', 'Quote Button Text'),
                            Field::make('text', 'quote_button_url', 'Quote Button URL'),
                        )
                    ),
            )
        );

    add_action('carbon_fields_post_meta_container_saved', 'ensure_single_recommended_plan');
}

add_action('carbon_fields_register_fields', 'ct_service_pricing_plan_fields');

function ensure_single_recommended_plan($post_id)
{
    if (get_post_type($post_id) !== 'ct-service') {
        return;
    }

    $all_plans = carbon_get_post_meta($post_id, 'ct-service-pricing-plans');
    $recommended_plan_id = null;

    foreach ($all_plans as $index => &$plan) {
        if ($plan['recommended'] === 'yes') {
            if ($recommended_plan_id === null) {
                $recommended_plan_id = $index;
            } else {
                $plan['recommended'] = 'no';
            }
        }
    }

    if ($recommended_plan_id !== null) {
        carbon_set_post_meta($post_id, 'ct-service-pricing-plans', $all_plans);
    }
}


/* ---------------------------------------------------------------------------------------------- */
/*                                  Carbon Fields For About Page                                  */
/* ---------------------------------------------------------------------------------------------- */

function about_page_milestone_section_fields()
{
    Container::make('post_meta', 'Company Milestone Section Fields')
        ->where('post_id', '=', '11')
        ->add_fields(
            array(
                Field::make('complex', 'about_page_milestone_section_fields', 'Milestones')
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(
                        array(
                            Field::make('text', 'year', 'Year'),
                            Field::make('text', 'heading', 'Heading'),
                            Field::make('textarea', 'description', 'Description'),
                        )
                    ),
            )
        );
}
add_action('carbon_fields_register_fields', 'about_page_milestone_section_fields');

/**
 * Register custom fields for pricing plans
 */
//function translation_services_fields()
//{
//    /* ---------------------------------------------------------------------------------------------- */
//    /*                            Translation Services Hero Section Fields                            */
//    /* ---------------------------------------------------------------------------------------------- */
//
//    Container::make('post_meta', 'Translation Services Hero Section Fields')
//        ->where('post_type', '=', 'ct-service')
//        ->add_fields(array(
//            Field::make('text', 'translation_services_hero_section_main_heading', 'Main Heading')->set_width(50),
//            Field::make('text', 'translation_services_hero_section_sub_heading', 'Sub Heading')->set_width(50),
//            Field::make('text', 'translation_services_hero_section_benifit_1_text', 'Benefit 1 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_benefit_2_text', 'Benefit 2 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_benefit_3_text', 'Benefit 3 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_benefit_4_text', 'Benefit 4 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_benefit_5_text', 'Benefit 5 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_benefit_6_text', 'Benefit 6 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_benefit_7_text', 'Benefit 7 Text')->set_width(14),
//            Field::make('text', 'translation_services_hero_section_get_a_quote_button_text', 'Get a Quote Button Text'),
//            Field::make('text', 'translation_services_hero_section_get_a_quote_button_link', 'Get a Quote Button Link'),
//            Field::make('text', 'translation_services_hero_section_get_a_quote_button_sub-heading', 'Get a Quote Button Sub-heading'),
//            Field::make('association', 'translation_services_hero_section_testimonial_data', 'Testimonial Data')->set_types(array(
//                array(
//                    'type'      => 'post',
//                    'post_type' => 'ct-testimonial',
//                )
//            )),
//            Field::make('image', 'translation_services_hero_section_background_logo_image', 'Background Logo Image'),
//            Field::make('text', 'translation_services_hero_section_benefit_card_1_text', 'Benefit Card 1 Text'),
//            Field::make('text', 'translation_services_hero_section_benefit_card_2_text', 'Benefit Card 2 Text'),
//            Field::make('text', 'translation_services_hero_section_benefit_card_3_text', 'Benefit Card 3 Text'),
//            Field::make('text', 'translation_services_hero_section_benefit_card_4_text', 'Benefit Card 4 Text'),
//            Field::make('text', 'translation_services_hero_section_benefit_card_5_text', 'Benefit Card 5 Text'),
//            Field::make('text', 'translation_services_hero_section_benefit_card_6_text', 'Benefit Card 6 Text')
//        ));
//
//    /* ---------------------------------------------------------------------------------------------- */
//    /*                          Translation Services Partners Section Fields                          */
//    /* ---------------------------------------------------------------------------------------------- */
//
//    Container::make('post_meta', 'Translation Services Partners Section Fields')
//        ->where('post_type', '=', 'ct-service')
//        ->add_fields(array(
//            Field::make('association', 'translation_services_partners_section_testimonial_data', 'Testimonial Data')->set_types(array(
//                array(
//                    'type'      => 'post',
//                    'post_type' => 'ct-testimonial',
//                )
//            ))
//        ));
//
//    /* ---------------------------------------------------------------------------------------------- */
//    /*                         Translation Services Importance Section Fields                         */
//    /* ---------------------------------------------------------------------------------------------- */
//
//    Container::make('post_meta', 'Translation Services Importance Section Fields')
//        ->where('post_type', '=', 'ct-service')
//        ->add_fields(array(
//            Field::make('text', 'translation_services_importance_section_main_heading', 'Main Heading'),
//            Field::make('textarea', 'translation_services_importance_section_description', 'Description'),
//            Field::make('text', 'translation_services_importance_section_get_a_quote_button_text', 'Get a Quote Button Text'),
//            Field::make('text', 'translation_services_importance_section_get_a_quote_button_link', 'Get a Quote Button Link'),
//            Field::make('file', 'translation_services_importance_section_side_video', 'Side Video'),
//        ));
//}
//add_action('carbon_fields_register_fields', 'translation_services_fields');

/* ---------------------------------------------------------------------------------------------- */
/*                                     Enable SVG File Upload                                     */
/* ---------------------------------------------------------------------------------------------- */

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* ---------------------------------------------------------------------------------------------- */
/*                                  Ajax Load More Press Releases                                 */
/* ---------------------------------------------------------------------------------------------- */

function load_more_press_releases()
{
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'ct-press-release',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 4,
        'paged' => $paged,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
?>
            <div class="press-releases-card">
                <div class="up-slider">
                    <div class="slidey">
                        <div class="card-thumbnail">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="" />
                        </div>
                        <div class="card-content">
                            <a href="" class="card-category">
                                <?php echo get_the_terms(get_the_ID(), 'press-release-type')[0]->name; ?>
                            </a>
                            <a href="" class="card-title">
                                <?php echo get_the_title() ?>
                            </a>
                            <div class="card-description">
                                <?php echo get_the_content() ?> <a href="javascript:void(0)" class="read-more">Read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="static-part">
                    <span class="card-published-date">
                        <?php echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'); ?>
                    </span>
                </div>
            </div>
        <?php
        endwhile;
    endif;

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_load_more_press_releases', 'load_more_press_releases');
add_action('wp_ajax_nopriv_load_more_press_releases', 'load_more_press_releases');

/* ---------------------------------------------------------------------------------------------- */
/*                                      Ajax Load More Posts                                      */
/* ---------------------------------------------------------------------------------------------- */

function load_more_posts()
{
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 4,
        'paged' => $paged,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
        ?>
            <div class="archive-card">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                <div class="card-content">
                    <a href="<?php echo get_term_link(get_the_category()[0]); ?>">
                        <h3>
                            <?php echo get_the_category()[0]->name ?>
                        </h3>
                    </a>
                    <h2>
                        <?php echo the_title() ?>
                    </h2>
                    <div>
                        <?php echo esc_html(wp_trim_words(get_the_content(), 30)); ?>
                    </div>
                    <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><button class="red-button">Read More</button></a>
                </div>
            </div>
        <?php
        endwhile;
    endif;

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

/* ---------------------------------------------------------------------------------------------- */
/*                            Job Application Submit Form Ajax Process                            */
/* ---------------------------------------------------------------------------------------------- */

function submit_job_application()
{
    //check_ajax_referer('submit_job_application_nonce', 'security');
    $jobId = sanitize_text_field($_POST['job_id']);
    $firstName = sanitize_text_field($_POST['first_name']);
    $middleName = sanitize_text_field($_POST['middle_name']);
    $lastName = sanitize_text_field($_POST['last_name']);
    $dateOfBirth = sanitize_text_field($_POST['date_of_birth']);
    $currentAddress = sanitize_text_field($_POST['current_address']);
    $otherAddress = sanitize_text_field($_POST['other_address']);
    $city = sanitize_text_field($_POST['city']);
    $stateProvince = sanitize_text_field($_POST['stateprovince']);
    $postalZipCode = sanitize_text_field($_POST['postal__zip_code']);
    $emailAddress = sanitize_email($_POST['email_address']);
    $phoneNumber = sanitize_text_field($_POST['phone_number']);
    $linkedin = esc_url($_POST['linkedin']);
    $howDidYouHear = sanitize_text_field($_POST['how_did_you_hear_about_us']);
    $availableStartDate = sanitize_text_field($_POST['available_start_date']);
    $salary = sanitize_text_field($_POST['salary']);
    $employmentStatus = sanitize_text_field($_POST['what_is_your_current_employment_status']);
    $coverLetter = wp_kses_post($_POST['cover_letter']);

    $metaData = array(
        'job_id' => $jobId,
        'first_name' => $firstName,
        'middle_name' => $middleName,
        'last_name' => $lastName,
        'date_of_birth' => $dateOfBirth,
        'current_address' => $currentAddress,
        'other_address' => $otherAddress,
        'city' => $city,
        'stateprovince' => $stateProvince,
        'postal__zip_code' => $postalZipCode,
        'email_address' => $emailAddress,
        'phone_number' => $phoneNumber,
        'linkedin' => $linkedin,
        'how_did_you_hear_about_us' => $howDidYouHear,
        'available_start_date' => $availableStartDate,
        'salary' => $salary,
        'what_is_your_current_employment_status' => $employmentStatus,
        'cover_letter' => $coverLetter,
    );

    $postArgs = array(
        'post_title' => 'Job Application By - ' . $firstName . ' ' . $lastName,
        'post_status' => 'publish',
        'post_type' => 'job-application',
    );

    $postId = wp_insert_post($postArgs);

    if ($postId) {

        /* ---------------------------------------------------------------------------------------------- */
        /*                                         Save Meta Data                                         */
        /* ---------------------------------------------------------------------------------------------- */

        foreach ($metaData as $key => $value) {
            update_post_meta($postId, $key, $value);
        }

        /* ---------------------------------------------------------------------------------------------- */
        /*                                        Save Resume File                                        */
        /* ---------------------------------------------------------------------------------------------- */

        if (!empty($_FILES['resume']['name'])) {
            $resume_field_key = get_field('resume', 'option');
            $upload = wp_upload_bits($_FILES['resume']['name'], null, file_get_contents($_FILES['resume']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_send_json_error('error', $upload['error']);
            } else {
                update_field('resume', $upload['url'], $postId);
                wp_send_json_success('Job application posted successfully.');
            }
        } else {
            wp_send_json_error('An error occurred while uploading file.');
        }
    } else {
        wp_send_json_error('An error occurred while submitting your application.');
    }

    exit();
}
add_action('wp_ajax_submit_job_application', 'submit_job_application');
add_action('wp_ajax_nopriv_submit_job_application', 'submit_job_application');

/* ---------------------------------------------------------------------------------------------- */
/*                    Meta Box To Show The Job Applications On Single Job Page                    */
/* ---------------------------------------------------------------------------------------------- */

function job_applications_meta_box()
{
    add_meta_box(
        'job_applications_meta_box',
        'Job Applications',
        'render_job_applications_meta_box',
        'ct-job',
        'normal',
        'default'
    );
}

function render_job_applications_meta_box($post)
{
    $job_id = get_the_ID();
    $job_applications = get_posts(array(
        'post_type' => 'job-application',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'job_id',
                'value' => $job_id,
            ),
        ),
    ));

    if (!empty($job_applications)) {
        echo '<table class="widefat">';
        echo '<thead><tr><th>Name</th><th>Email</th><th>Application Date</th><th>City</th><th>Actions</th></tr></thead>';
        echo '<tbody>';
        foreach ($job_applications as $application) {
            $name = get_post_meta($application->ID, 'first_name', true) . ' ' . get_post_meta($application->ID, 'last_name', true);
            $email = get_post_meta($application->ID, 'email_address', true);
            $application_date = get_the_date('j M, Y', $application->ID);
            $city = get_post_meta($application->ID, 'city', true);

            echo '<tr>';
            echo '<td>' . esc_html($name) . '</td>';
            echo '<td>' . esc_html($email) . '</td>';
            echo '<td>' . esc_html($application_date) . '</td>';
            echo '<td>' . esc_html($city) . '</td>';
            echo '<td>';
            echo '<a style="margin: 0 5px;" href="' . get_edit_post_link($application->ID) . '" class="button">View</a>';
            echo '<a style="margin: 0 5px;" href="#" data-application-id="' . esc_attr($application->ID) . '" class="button delete-application">Delete</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        ?>
        <script>
            jQuery(document).ready(function($) {
                $('.delete-application').on('click', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to delete this application?')) {
                        var applicationId = $(this).data('application-id');
                        $.ajax({
                            url: ajaxurl,
                            type: 'POST',
                            data: {
                                action: 'delete_job_application',
                                application_id: applicationId,
                            },
                            success: function(response) {
                                alert('Job application deleted successfully.');
                                location.reload();
                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });
                    }
                });
            });
        </script>

<?php
    } else {
        echo 'No job applications found for this job.';
    }
}


add_action('add_meta_boxes', 'job_applications_meta_box');

/* ---------------------------------------------------------------------------------------------- */
/*                Delete Job Application From Admin Side On Single Application Page               */
/* ---------------------------------------------------------------------------------------------- */

function delete_job_application()
{
    $application_id = isset($_POST['application_id']) ? intval($_POST['application_id']) : 0;

    if ($application_id > 0) {
        wp_delete_post($application_id, true);
        wp_send_json_success('Job application deleted successfully.');
    } else {
        wp_send_json_error('Invalid application ID.');
    }
}

add_action('wp_ajax_delete_job_application', 'delete_job_application');
add_action('wp_ajax_nopriv_delete_job_application', 'delete_job_application');

/* ---------------------------------------------------------------------------------------------- */
/*                                 Function To Return Static Text                                 */
/* ---------------------------------------------------------------------------------------------- */

function get_default_content($new_content, $old_content)
{
    return !empty(__($new_content)) ? __($new_content) : __($old_content);
}

function get_default_shortcode($new_shortcode, $old_shortcode)
{
    return !empty($new_shortcode) ? do_shortcode($new_shortcode) : do_shortcode($old_shortcode);
}
