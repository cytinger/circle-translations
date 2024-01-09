<?php
/* -------------------------------------------------------------------------- */
/*                       Template Name: Services Page                      */
/* -------------------------------------------------------------------------- */
get_header();
// Get the value of the ACF field
$main_banner_section = get_field('main_banner_section');
$partners_section = get_field('partners_section');
$bringing_the_world_section = get_field('bringing_the_world_section');
$translation_services = get_field('translation_services');
$translation_services_by_industry = get_field('translation_services_by_industry');
$translating_tomorrows_success_today = get_field('translating_tomorrows_success_today');
$popular_languages_section = get_field('popular_languages_section');
$available_languages_section = get_field('available_languages_section');
$industries_we_specialize_in = get_field('industries_we_specialize_in');
$pricing_plans_section = get_field('pricing_plans_section');
$language_barrier_top_section = get_field('language_barrier_top_section');
$language_barrier_bottom_section = get_field('language_barrier_bottom_section');
$translation_and_localization_section = get_field('translation_and_localization_section');
$business_needs_human_section = get_field('business_needs_human_section');
$testimonials_section = get_field('testimonials_section');
$next_step_section = get_field('next_step_section');
$contact_us_section = get_field('contact_us_section');
$faqs_section = get_field('faqs_section');
$get_a_quote_section = get_field('get_a_quote_section');
?>

<?php
if ($main_banner_section['show_section'] == 1) {
?>
    <div class="home-main-hero services-page-main home-sec">
        <div class="container home-contain">
            <svg class="mobile-hero-bg" width="352" height="1034" viewBox="0 0 352 1034" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.08" clip-path="url(#clip0_853_546)">
                    <path opacity="0.74" d="M192.734 -95.0839C156.984 12.1907 311.02 129.329 131.855 298.082C17.2222 406.035 -75.309 600.779 88.9039 814.754C253.117 1028.73 515.445 1068.73 825.97 1008.71C1136.49 948.697 640.699 766.035 771.171 445.073C901.644 124.11 777.251 -42.8949 565.468 -134.226C353.685 -225.557 232.737 -215.119 192.734 -95.0839Z" fill="url(#paint0_linear_853_546)" />
                </g>
                <defs>
                    <linearGradient id="paint0_linear_853_546" x1="-84.9401" y1="265.87" x2="977.998" y2="265.87" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                    <clipPath id="clip0_853_546">
                        <rect width="930.061" height="1229" fill="white" transform="translate(0 -195)" />
                    </clipPath>
                </defs>
            </svg>

            <!-- /Images/hero-curve-line.webp -->
            <div class="services-main-hero-left">
                <p class="heading page-h2"><?php echo __($main_banner_section['main_heading']) ?></p>
                <p class="what-make-us-stand-out"><?php echo __($main_banner_section['sub_heading']) ?></p>
                <div style="display : flex; flex-direction : column; gap : 16px">
                    <?php echo __($main_banner_section['list_items']) ?>
                </div>
                <div class="button-div" style="margin-top : 16px">
                    <button class="red-button"><?php echo __($main_banner_section['cta_button_text']) ?></button>
                    <p><?php echo __($main_banner_section['cta_button_sub-heading']) ?></p>
                </div>
            </div>
            <div class="home-main-hero-right">
                <div class="home-main-hero-mid">
                    <img class="home-main-hero-mid-img" src="<?php echo __($main_banner_section['background_logo_image']) ?>" alt="">
                    <div class="home-main-hero-mid-overlay">
                        <div class="home-main-hero-mid-overlay-container">
                            <img class="main-hero-mid-quotes" src="<?php echo get_template_directory_uri() ?>/Images/quotes.png" alt="">
                            <?php $post_ids = $main_banner_section['main_section_testimonial'];
                            $args = array(
                                'post_type'      => 'ct-testimonial',
                                'post_status'    => 'publish',
                                'post__in'       => $post_ids,
                                'posts_per_page' => 1
                            );
                            $posts = get_posts($args);
                            foreach ($posts as $post) {
                                setup_postdata($post);
                            ?>
                                <div class="hero-mid-overlay-container-2" style="margin-top: 16px;">
                                    <p><?php echo get_the_content() ?></p>
                                    <div class="home-main-hero-mid-overlay-customer">
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                                        <div>
                                            <p><?php echo get_the_title() ?></p>
                                            <p><?php echo the_excerpt() ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-sec-banner-cards">
        <div class="container">
            <div class="card-section">
                <?php $post_ids = $main_banner_section['benefits'];
                foreach ($post_ids as $post) {
                ?>
                    <div class="services-banner-card">
                        <img src="<?php echo $post['benefit_icon'] ?>" alt="">
                        <p><?php echo $post['benefit_text'] ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php
if ($partners_section['show_section'] == 1) {
?>
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!--                                     Partners Slider Section                                    -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <section class="wrapper partners-slider-section">
        <div class="bg-sec"></div>
        <div class="main-sec">
            <svg class="prev-slide-btn home-partner-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" fill-opacity="0.08" />
                <path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="#383F99" />
            </svg>
            <div class="both-sliders">
                <div id="top-row-partners" class="top-row-partners">
                    <?php
                    $post_ids = $partners_section['partners_top_row'];
                    $args = array(
                        'post_type'      => 'ct-partner',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                        'post__in' => $post_ids
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                        <div class="partner">
                            <img style="display: flex; margin: auto;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                        </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div id="bottom-row-partners" class="bottom-row-partners">
                    <?php
                    $post_ids = $partners_section['partners_bottom_row'];
                    $args = array(
                        'post_type'      => 'ct-partner',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                        'post__in' => $post_ids
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                        <div class="partner">
                            <img style="display: flex; margin: auto;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                        </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <svg class="next-slide-btn home-partner-card-next-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28" cy="28.498" r="28" fill="#383F99" />
                <path d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z" fill="white" />
            </svg>
        </div>
    </section>
<?php } ?>
<?php
if ($bringing_the_world_section['show_section'] == 1) {
?>
    <!-- BRINGING THE WORLD NEAREST TO YOU = SECTION -->
    <div class="bringing-the-world">
        <div class="container">
            <div class="bringing-the-world-left">
                <?php $post_ids = $bringing_the_world_section['left_service_cards'];
                foreach ($post_ids as $post) {
                ?>
                    <div class="bringing-the-world-card">
                        <img src="<?php echo $post['image'] ?>" alt="">
                        <div class="bringing-world-paragraph">
                            <h2><?php echo $post['heading'] ?></h2>
                            <p><?php echo $post['description'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="bringing-the-world-right">
                <h2><?php echo $bringing_the_world_section['heading'] ?></h2>
                <?php echo $bringing_the_world_section['description'] ?>
                <button class="red-button"><?php echo $bringing_the_world_section['cta_button_text'] ?></button>
            </div>
        </div>
    </div><?php } ?>

<?php
if ($translation_services['show_section'] == 1) {
?>
    <!-- TRANSLATION SERVICES PAGE -->
    <div class="services-translation-page">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" width="386" height="1066" viewBox="0 0 386 1066" fill="none">
                <path opacity="0.74" d="M167.233 86.6642C136.214 179.711 269.869 281.314 114.41 427.686C14.9445 521.321 -65.3434 690.236 77.1416 875.832C219.627 1061.43 447.245 1096.13 716.683 1044.07C986.12 992.01 555.926 833.575 669.135 555.181C782.344 276.787 674.41 131.932 490.649 52.7137C306.888 -26.5041 201.943 -17.4506 167.233 86.6642Z" fill="url(#paint0_linear_201_785)" />
                <defs>
                    <linearGradient id="paint0_linear_201_785" x1="-73.7002" y1="399.745" x2="848.595" y2="399.745" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="top">
                <h2 class="heading page-h2"><?php echo $translation_services['heading'] ?></h2>
                <p class="page-p"><?php echo $translation_services['sub_heading'] ?> </p>
            </div>
            <div class="bottom">
                <?php
                $categories = $translation_services['services'];
                $predefined_categories = get_terms(array(
                    'taxonomy' => 'translation-service',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => false,
                    'include' => $categories,
                    'fields' => 'all'
                ));

                foreach ($predefined_categories as $category) {
                    $post_args = array(
                        'post_type' => 'ct-service',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'translation-service',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <a href="<?php echo $post_link ? $post_link : "javascript:void(0)" ?>">
                        <div class="translation-cards">
                            <div class="image">
                                <img src="<?php echo get_field("translation_services_icon", 'translation-service_' . $category->term_id) ?>" alt="">
                            </div>
                            <div class=" content">
                                <h2><?php echo esc_html($category->name); ?></h2>
                                <?php echo get_field("translation_services_benefits", 'translation-service_' . $category->term_id) ?>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php
if ($translation_services_by_industry['show_section'] == 1) {
?>
    <!-- TRANSLATION SERVICES PAGE 2-->
    <div class="services-translation-page services-translation-page-2 ">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="1045" viewBox="0 0 120 1045" fill="none">
                <path opacity="0.74" d="M-72.6734 99.9161C-36.9239 207.191 -190.96 324.329 -11.7949 493.082C102.838 601.035 195.37 795.779 31.1567 1009.75C-133.056 1223.73 -395.384 1263.73 -705.909 1203.71C-1016.43 1143.7 -520.638 961.035 -651.111 640.073C-781.583 319.11 -657.191 152.105 -445.408 60.7743C-233.624 -30.5565 -112.676 -20.1187 -72.6734 99.9161Z" fill="url(#paint0_linear_1994_2450)" />
                <defs>
                    <linearGradient id="paint0_linear_1994_2450" x1="205.001" y1="460.87" x2="-857.937" y2="460.87" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="top">
                <h2 class="heading page-h2"><?php echo $translation_services_by_industry['heading'] ?></h2>
                <p class="page-p"><?php echo $translation_services_by_industry['sub_heading'] ?></p>
            </div>
            <div class="bottom">
                <?php
                $categories = $translation_services_by_industry['services'];
                $predefined_categories = get_terms(array(
                    'taxonomy' => 'core-industry',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => false,
                    'include' => $categories,
                    'fields' => 'all'
                ));

                foreach ($predefined_categories as $category) {
                ?>
                    <a href="<?php echo get_term_link($category->term_id) ?? "javascript:void(0)" ?>">
                        <div class="translation-cards">
                            <div class="image">
                                <img class="colorfull-image" src="<?php echo get_default_content(get_field("taxonomy_icon", 'core-industry_' . $category->term_id), "https://ct.sn66.me/wp-content/uploads/2023/12/translationServiceIndustry11.png") ?>" alt="">
                            </div>
                            <div class=" content">
                                <h2><?php echo esc_html($category->name); ?></h2>
                                <?php echo get_field("list_description", 'core-industry_' . $category->term_id) ?>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div><?php } ?>

<?php
if ($translating_tomorrows_success_today['show_section'] == 1) {
?>
    <div class="needForInfo">
        <svg xmlns="http://www.w3.org/2000/svg" width="1898" height="218" viewBox="0 0 1898 218" fill="none">
            <path opacity="0.16" d="M1861 253.914C1749.19 132.956 1505.95 194.475 1321.59 169.524C1197.01 152.664 1076.97 152.126 953.376 131.082C759.189 98.0195 578.49 -37.8454 389.404 10.8111C199.476 59.6843 58.8514 216.565 12.7019 373.14C-32.5049 526.517 53.2064 686.157 149.99 823.089C231.468 938.365 394.518 988.558 512.818 1080.72C632.676 1174.09 694.514 1318.1 849.257 1367.83C1014.19 1420.83 1205.52 1408.7 1370.83 1356.47C1537.09 1303.93 1686.43 1206.93 1766.39 1078.05C1841.97 956.223 1776.11 813.759 1791.68 678.087C1808.32 533.144 1968.83 370.57 1861 253.914Z" fill="white" fill-opacity="0.32" />
        </svg>
        <div class="left">
            <h2><?php echo $translating_tomorrows_success_today['heading'] ?></h2>
            <p><?php echo $translating_tomorrows_success_today['description'] ?></p>
        </div>
        <div class="right">
            <a href="<?php echo $translating_tomorrows_success_today['cta_button_link'] ?>">
                <button><?php echo $translating_tomorrows_success_today['cta_button_text'] ?></button>
            </a>
        </div>
    </div>
<?php } ?>
<?php
if ($popular_languages_section['show_section'] == 1) {
?>
    <!-- POPULAR LANGUAGES SECTION  -->
    <section class="popularLangs">
        <div class="circle-translation-top">
            <p class="circle-trans-heading">
                <?php echo __($popular_languages_section)['heading'] ?>
            </p>
        </div>

        <div class="languages">
            <?php
            $categories = $popular_languages_section['languages'];
            $predefined_categories = get_terms(array(
                'taxonomy' => 'language',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => false,
                'include' => $categories,
                'fields' => 'all'
            ));

            foreach ($predefined_categories as $category) {
                $post_args = array(
                    'post_type' => 'ct-language',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'language',
                            'field' => 'id',
                            'terms' => $category->term_id,
                        ),
                    ),
                );

                $posts = get_posts($post_args);
                $post_link = "";
                if ($posts) {

                    $first_post = $posts[0];
                    $post_link = esc_url(get_permalink($first_post->ID));
                }
            ?>


                <a href="<?php echo $post_link ? $post_link : "javascript:void(0)" ?>" class="lang">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="162" height="133" viewBox="0 0 162 133" fill="none">
                        <image id="image" class="image__svg-image" width="100%" height="100%" clip-path="url(#mask2)" x="-0px" xlink:href="<?php echo get_field("icon", 'language_' . $category->term_id) ?>" />
                        <g filter="url(#filter0_d_315_1461)">
                            <clipPath id="mask2">
                                <path d="M84.9623 18.757C101.882 20.1385 120.815 18.4501 132.536 28.9122C144.882 39.9332 148.319 56.8627 144.254 71.6826C140.523 85.2805 125.886 93.4756 112.579 101.664C100.092 109.347 86.9979 117.067 71.603 116.386C55.3275 115.667 40.112 108.759 29.8385 98.0065C19.4423 87.1259 15.4506 73.0566 16.8593 59.0917C18.316 44.6518 23.5996 29.4463 37.5904 21.1601C51.0821 13.1695 68.593 17.4205 84.9623 18.757Z" fill="url(#pattern0)" shape-rendering="crispEdges" />
                            </clipPath>
                        </g>
                        <defs>
                            <filter id="filter0_d_315_1461" x="0.585938" y="0.428223" width="161.293" height="132" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="8" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_315_1461" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_315_1461" result="shape" />
                            </filter>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_315_1461" transform="matrix(0.00050354 0 0 0.000651042 -0.144531 0)" />
                            </pattern>
                        </defs>
                    </svg>
                    <!-- <img src="<?php echo get_field("icon", 'language_' . $category->term_id) ?>" alt=""> -->
                    <p><?php echo esc_html($category->name); ?></p>
                </a>
            <?php
            }
            ?>
        </div>
    </section><?php } ?>


<?php
if ($available_languages_section['show_section'] == 1) {
?>

    <!-- OTHER LANGUAGES SECTION  -->
    <section class="otherAvailableLangs">
        <svg class="blob" xmlns="http://www.w3.org/2000/svg" width="129" height="1229" viewBox="0 0 129 1229" fill="none">
            <path opacity="0.74" d="M192.734 99.9161C156.984 207.191 311.02 324.329 131.855 493.082C17.2222 601.035 -75.309 795.779 88.9039 1009.75C253.117 1223.73 515.445 1263.73 825.97 1203.71C1136.49 1143.7 640.699 961.035 771.171 640.073C901.644 319.11 777.251 152.105 565.468 60.7743C353.685 -30.5565 232.737 -20.1187 192.734 99.9161Z" fill="url(#paint0_linear_2396_3355)" />
            <defs>
                <linearGradient id="paint0_linear_2396_3355" x1="-84.9401" y1="460.87" x2="977.998" y2="460.87" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0672CB" />
                    <stop offset="1" stop-color="#88C7FD" />
                </linearGradient>
            </defs>
        </svg>
        <div class="circle-translation-top">
            <p class="circle-trans-heading">
                <?php echo __($available_languages_section)['main_heading'] ?>
            </p>
        </div>
        <?php
        $categories = $available_languages_section['languages'];
        $predefined_categories = get_terms(array(
            'taxonomy' => 'language',
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
            'include' => $categories,
            'fields' => 'all'
        )); ?>
        <div class="languages">
            <div class="lang-col green">

                <?php
                for ($i = 0; $i < 8; $i++) {
                    $category = $predefined_categories[$i];

                    $post_args = array(
                        'post_type' => 'ct-language',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'language',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <div class="lang-item">
                        <div class="circle">
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="lang">
                            <div class="line"></div>
                            <a <?php if ($post_link) { ?>href="<?php echo $post_link ?>" <?php } ?> style='<?php if ($post_link == "") { ?>text-decoration :  none; cursor:default;<?php } ?>'>
                                <p><?php echo esc_html($category->name); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="lang-col orange">

                <?php
                for ($i = 8; $i < 16; $i++) {
                    $category = $predefined_categories[$i];

                    $post_args = array(
                        'post_type' => 'ct-language',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'language',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <div class="lang-item">
                        <div class="circle">
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="lang">
                            <div class="line"></div>
                            <a <?php if ($post_link) { ?>href="<?php echo $post_link ?>" <?php } ?> style='<?php if ($post_link == "") { ?>text-decoration :  none; cursor:default;<?php } ?>'>
                                <p><?php echo esc_html($category->name); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="lang-col red">

                <?php
                for ($i = 16; $i < 24; $i++) {
                    $category = $predefined_categories[$i];

                    $post_args = array(
                        'post_type' => 'ct-language',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'language',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <div class="lang-item">
                        <div class="circle">
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="lang">
                            <div class="line"></div>
                            <a <?php if ($post_link) { ?>href="<?php echo $post_link ?>" <?php } ?> style='<?php if ($post_link == "") { ?>text-decoration :  none; cursor:default;<?php } ?>'>
                                <p><?php echo esc_html($category->name); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="lang-col green">

                <?php
                for ($i = 24; $i < 32; $i++) {
                    $category = $predefined_categories[$i];

                    $post_args = array(
                        'post_type' => 'ct-language',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'language',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <div class="lang-item">
                        <div class="circle">
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="lang">
                            <div class="line"></div>
                            <a <?php if ($post_link) { ?>href="<?php echo $post_link ?>" <?php } ?> style='<?php if ($post_link == "") { ?>text-decoration :  none; cursor:default;<?php } ?>'>
                                <p><?php echo esc_html($category->name); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="lang-col orange">

                <?php
                for ($i = 32; $i < 40; $i++) {
                    $category = $predefined_categories[$i];

                    $post_args = array(
                        'post_type' => 'ct-language',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'language',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <div class="lang-item">
                        <div class="circle">
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="lang">
                            <div class="line"></div>
                            <a <?php if ($post_link) { ?>href="<?php echo $post_link ?>" <?php } ?> style='<?php if ($post_link == "") { ?>text-decoration :  none; cursor:default;<?php } ?>'>
                                <p><?php echo esc_html($category->name); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="lang-col blue">

                <?php
                for ($i = 40; $i < 48; $i++) {
                    $category = $predefined_categories[$i];

                    $post_args = array(
                        'post_type' => 'ct-language',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'language',
                                'field' => 'id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $posts = get_posts($post_args);
                    $post_link = "";
                    if ($posts) {

                        $first_post = $posts[0];
                        $post_link = esc_url(get_permalink($first_post->ID));
                    }
                ?>
                    <div class="lang-item">
                        <div class="circle">
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="lang">
                            <div class="line"></div>
                            <a <?php if ($post_link) { ?>href="<?php echo $post_link ?>" <?php } ?> style='<?php if ($post_link == "") { ?>text-decoration :  none; cursor:default;<?php } ?>'>
                                <p><?php echo esc_html($category->name); ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }

                ?>
            </div>

        </div>
        <p class="bottomtext">
            *Only Available Through
            <a href="">
                Contacting Sales
            </a>
        </p>
    </section>
<?php } ?>
<?php
if ($industries_we_specialize_in['show_section'] == 1) {
?>
    <!-- INDUSTREIS WE SPECIALIZE IN -->
    <div class="industries-we-specialize-in">
        <div class="container">
            <div class="top">
                <h2><?php echo __($industries_we_specialize_in)['heading'] ?></h2>
                <!-- <p></p> -->
            </div>
            <div class="bottom">
                <div class="industries-we-specialize-in-cards">

                    <?php $post_ids = $industries_we_specialize_in['industries'];
                    $args = array(
                        'post_type'      => 'ct-industry',
                        'post_status'    => 'publish',
                        'order' => 'ASC',
                        'orderby' => 'name',
                        'post__in'       => $post_ids,
                        'posts_per_page' => 20
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        $post_link = esc_url(get_permalink($post->ID));
                    ?>
                        <a href="<?php echo $post_link; ?> " class="card">
                            <img src="<?php echo get_default_content(wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())), "https://ct.sn66.me/wp-content/uploads/2023/12/manufacture-1.png") ?>" alt="">
                            <p><?php echo the_title() ?></p>
                        </a>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>


                </div>
            </div>
        </div>
    </div><?php } ?>

<?php
if ($pricing_plans_section['show_section'] == 1) {
?>
    <!-- PRICING SECTION  -->
    <div class=" pricingPage servicesPage">
        <div class="pricing-section home-contain">
            <div class="pricing-top">
                <p> <?php echo __($pricing_plans_section)['main_heading'] ?>
                </p>
                <p class="page-p">
                    <?php echo __($pricing_plans_section)['sub_heading'] ?>
                </p>
            </div>
            <div class="pricing-card-container ">
                <?php $post_ids = $pricing_plans_section['plans'];
                $args = array(
                    'post_type'      => 'pricing-plan',
                    'post_status'    => 'publish',
                    'post__in'       => $post_ids,
                    'order'          => 'ASC'
                );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata($post);
                    $features = carbon_get_post_meta(get_the_ID(), 'pricing-plans-features');
                ?>
                    <div class="price-card basic-price-card">
                        <?php if (get_field('recommended_plan', get_the_ID())) { ?>
                            <div class="pro-recommend">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
                                    <path d="M0 14.4282L10 0.428223V14.4282H0Z" fill="#383F99" />
                                </svg>
                                Recommended
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
                                    <path d="M10 14.4282L0 0.428223V14.4282H10Z" fill="#383F99" />
                                </svg>
                            </div>
                        <?php } ?>
                        <div class="price-card-top">
                            <p><?php echo __(esc_html(get_the_title())) ?></p>
                            <img src="<?php echo get_field('plan_icon', get_the_ID()) ?>" alt="">
                        </div>
                        <p class="price-card-price">From <span>€<?php echo get_field('price', get_the_ID()) ?></span> / Word</p>
                        <hr>
                        <div class="price-card-features">
                            <p class="price-features-heading">Features</p>
                            <?php
                            foreach ($features as $feature) {
                            ?>
                                <div>
                                    <?php if ($feature['available']) { ?>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16.0039C12.4183 16.0039 16 12.4222 16 8.00391C16 3.58563 12.4183 0.00390625 8 0.00390625C3.58172 0.00390625 0 3.58563 0 8.00391C0 12.4222 3.58172 16.0039 8 16.0039ZM11.7071 6.71101C12.0976 6.32049 12.0976 5.68732 11.7071 5.2968C11.3166 4.90628 10.6834 4.90628 10.2929 5.2968L7 8.58969L5.70711 7.2968C5.31658 6.90627 4.68342 6.90627 4.29289 7.2968C3.90237 7.68732 3.90237 8.32049 4.29289 8.71101L6.29289 10.711C6.68342 11.1015 7.31658 11.1015 7.70711 10.711L11.7071 6.71101Z" fill="#3F92D1" fill-opacity="0.4" />
                                        </svg>
                                    <?php } else { ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.9154 3.08691C11.6654 -0.163086 6.33203 -0.163086 3.08203 3.08691C-0.167969 6.33691 -0.167969 11.6702 3.08203 14.9202C6.33203 18.1702 11.582 18.1702 14.832 14.9202C18.082 11.6702 18.1654 6.33691 14.9154 3.08691ZM11.332 12.5036L8.9987 10.1702L6.66536 12.5036L5.4987 11.3369L7.83203 9.00358L5.4987 6.67025L6.66536 5.50358L8.9987 7.83691L11.332 5.50358L12.4987 6.67025L10.1654 9.00358L12.4987 11.3369L11.332 12.5036Z" fill="#D1D1D1" />
                                        </svg>
                                    <?php } ?>
                                    <p><?php echo __(esc_html($feature['feature'])) ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <button><a href="<?php echo esc_url(get_permalink()) ?>">Get A Quote</a></button>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div><?php } ?>
<?php
if ($language_barrier_top_section['show_section'] == 1) {
?>
    <!-- LANGUAGE BARRIER SECTION -->
    <div class="language-barrier-section">
        <div class="container">
            <div class="top">
                <h2>
                    <?php echo $language_barrier_top_section['heading'] ?>
                </h2>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner-left">
                        <div class="inner-left-top">

                            <?php echo $language_barrier_top_section['left_description'] ?>

                            <a href="<?php echo $language_barrier_top_section['cta_button_text'] ?>">
                                <button class="red-button"><?php echo $language_barrier_top_section['cta_button_text'] ?></button>
                            </a>
                        </div>
                        <div class="inner-left-bottom">
                            <div class="bg-image">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="435" height="371" viewBox="0 0 435 371" fill="none">
                                    <image id="image0_207_164" width="750" height="500" clip-path="url(#languages-mask1)" xlink:href="<?php echo $language_barrier_bottom_section['main_image'] ?>" />
                                    <g filter="url(#filter0_d_208_294)">
                                        <clipPath id="languages-mask1">
                                            <path d="M15.9453 96.8998C5.12127 149.94 14.2839 206.697 39.3771 254.993C123.6 416.9 350.832 357.184 406.785 204.545C416.46 178.135 420.638 146.687 404.928 123.359C387.287 97.1688 351.589 90.9087 320.045 91.52C288.502 92.1313 255.492 96.9976 226.514 84.5018C178.013 63.545 157.562 6.7881 96.796 12.4613C48.6863 16.9853 24.888 53.1522 15.9453 96.8998Z" fill="url(#pattern0)" shape-rendering="crispEdges" />
                                        </clipPath>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_208_294" x="0.180304" y="0.780402" width="434.023" height="369.286" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dx="3.76151" dy="3.76151" />
                                            <feGaussianBlur stdDeviation="7.52303" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_208_294" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_208_294" result="shape" />
                                        </filter>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_208_294" transform="matrix(0.000428435 0 0 0.000510204 -0.1298 0)" />
                                        </pattern>
                                        <image id="image0_208_294" width="2940" height="1960" xlink:href="<?php echo $language_barrier_bottom_section['main_image'] ?>" />
                                    </defs>
                                </svg>
                                <img src="<?php echo get_template_directory_uri() ?>/Images/languages-barrier-1.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="inner-right">
                        <div class="inner-right-top">
                            <?php echo $language_barrier_top_section['right_description'] ?>
                        </div>
                        <div class="inner-right-bottom">
                            <?php echo $language_barrier_bottom_section['left_description'] ?>
                            <a href="<?php echo $language_barrier_bottom_section['cta_button_link'] ?>">
                                <button class="red-button">
                                    <?php echo $language_barrier_bottom_section['cta_button_text'] ?>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-top">
                        <div class="bg-image">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="508" height="431" viewBox="0 0 508 431" fill="none">
                                <image id="image0_207_164" width="750" height="500" clip-path="url(#languages-mask)" xlink:href="<?php echo $language_barrier_top_section['main_image'] ?>" />
                                <g filter="url(#filter0_d_207_164)">
                                    <clipPath id="languages-mask">
                                        <path d="M15.0342 111.132C2.11279 174.449 13.0508 242.204 43.0064 299.858C143.549 493.138 414.811 421.851 481.606 239.635C493.157 208.107 498.144 170.567 479.389 142.717C458.33 111.453 415.715 103.98 378.06 104.709C340.404 105.439 300.998 111.248 266.404 96.3313C208.506 71.3137 184.092 3.55907 111.551 10.3316C54.1194 15.7321 25.7097 58.9071 15.0342 111.132Z" fill="url(#pattern0)" shape-rendering="crispEdges" />
                                    </clipPath>
                                </g>
                                <defs>
                                    <filter id="filter0_d_207_164" x="0.325383" y="0.498234" width="507.161" height="429.88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="3.12005" dy="3.12005" />
                                        <feGaussianBlur stdDeviation="6.24011" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_207_164" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_207_164" result="shape" />
                                    </filter>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_207_164" transform="matrix(0.00167947 0 0 0.002 -0.1298 0)" />
                                    </pattern>
                                </defs>
                            </svg>
                            <img class="languages-barrier-2bg" src="<?php echo get_template_directory_uri() ?>/Images/languages-barrier-2.svg" alt="">
                        </div>
                    </div>
                    <div class="right-botom">
                        <?php echo $language_barrier_bottom_section['right_description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div><?php } ?>

<?php
if ($translation_and_localization_section['show_section'] == 1) {
?>
    <!-- TRANSLATION AND LOCALIZATION SECTION -->
    <div class="translation-and-localization">
        <div class="container">
            <div class="top">
                <h2>
                    <?php echo $translation_and_localization_section['heading'] ?>
                </h2>
            </div>
            <div class="bottom">
                <div class="left sides">
                    <?php echo $translation_and_localization_section['left_description'] ?>

                    <a href="<?php echo $translation_and_localization_section['cta_button_link'] ?>">
                        <button class="red-button"><?php echo $translation_and_localization_section['cta_button_text'] ?>
                        </button>
                    </a>
                </div>
                <div class="mid sides">
                    <?php echo $translation_and_localization_section['middle_description'] ?>


                </div>
                <div class="right sides">
                    <?php echo $translation_and_localization_section['right_description'] ?>

                </div>
            </div>
        </div>
    </div><?php } ?>

<?php
if ($business_needs_human_section['show_section'] == 1) {
?>

    <!-- TOP 4 REASONS WHY YOUR BUSINESS NEEDS HUMAN TRANSLATION SERVICES -->
    <div class="home-translation-process services-human-translation home-sec">
        <div class="translation-process home-contain">
            <div class="top">
                <p class="transation-process-heading page-h2">
                    <?php echo $business_needs_human_section['heading'] ?>
                </p>
                <div class="translation-process-paragraph">
                    <?php echo $business_needs_human_section['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <div class="translation-process-left">
                    <div class="translation-process-bottom">
                        <?php
                        $counter = 1;
                        foreach ($business_needs_human_section['steps'] as $value) {
                            $isLastItem = $counter < (count($business_needs_human_section['steps']));
                        ?>
                            <div class="translation-process-point">
                                <div class="point-number point-number-one">
                                    <span><?php echo $value['step_number'] ?></span>
                                    <?php if ($isLastItem) : ?>
                                        <svg width="1" height="155" viewBox="0 0 1 155" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="0.5" y1="0.5" x2="0.499993" y2="154.5" stroke="#F29111" stroke-linecap="round" stroke-dasharray="3 3" />
                                        </svg>
                                    <?php endif; ?>
                                </div>
                                <div class="point-content">
                                    <h2 class="point-heading"><?php echo $value['step_title'] ?></h2>
                                    <?php echo $value['step_description'] ?>
                                </div>
                            </div>
                        <?php
                            $counter++;
                        }
                        ?>
                    </div>
                </div>
                <div class="translation-process-right">
                    <img src="<?php echo $business_needs_human_section['main_image'] ?>" alt="">
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<?php
if ($testimonials_section['show_section'] == 1) {
?>
    <div class="home-people-say-about-section home-sec">
        <div class="people-say-about-section home-contain">
            <svg class="what-say-about-left-bg" width="930" height="1229" viewBox="0 0 751 1229" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.16" clip-path="url(#clip0_656_11250)">
                    <path opacity="0.74" d="M557.329 99.9161C593.078 207.191 439.042 324.329 618.207 493.082C732.84 601.035 825.371 795.779 661.159 1009.75C496.946 1223.73 234.618 1263.73 -75.9073 1203.71C-386.432 1143.7 109.364 961.035 -21.1088 640.073C-151.581 319.11 -27.1888 152.105 184.594 60.7743C396.378 -30.5565 517.326 -20.1187 557.329 99.9161Z" fill="url(#paint0_linear_656_11250)" />
                </g>
                <defs>
                    <linearGradient id="paint0_linear_656_11250" x1="835.003" y1="460.87" x2="-227.935" y2="460.87" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                    <clipPath id="clip0_656_11250">
                        <rect width="930.061" height="1229" fill="white" transform="matrix(-1 0 0 1 750.062 0)" />
                    </clipPath>
                </defs>
            </svg>
            <img class="what-say-about-ellipse-bg" src="<?php echo get_template_directory_uri() ?>/Images/what-say-about-ellipse-bg.webp" alt="">

            <p class="people-say-about-heading page-h2">
                <?php echo __($testimonials_section)['main_heading'] ?>
            </p>
            <p class="people-say-about-description page-p">
                <?php echo __($testimonials_section)['sub_heading'] ?>
            </p>
            <div>
                <div class="testimonial-card-container-outside">
                    <svg class="prev-slide-btn home-feedback-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" fill-opacity="0.08" />
                        <path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="#383F99" />
                    </svg>
                    <div class="swiper mySwiper home-feedback-card-swiper testimonial-card-container">
                        <div class="swiper-wrapper">
                            <?php $post_ids = $testimonials_section['testimonials'];
                            $args = array(
                                'post_type'      => 'ct-testimonial',
                                'post_status'    => 'publish',
                                'post__in'       => $post_ids,
                                'order'          => 'ASC',
                                'posts_per_page' => '6'
                            );
                            $posts = get_posts($args);
                            foreach ($posts as $post) {
                                setup_postdata($post);
                            ?>

                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <img src="<?php echo get_template_directory_uri() ?>/Images/testimonial-quote.webp" alt="">
                                        <div class="testimonial-feedback">
                                            <p class="description page-p"><?php echo get_the_content() ?></p>
                                            <div class="testimonial-customer">
                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                                                <div>
                                                    <p><?php echo get_the_title() ?></p>
                                                    <?php echo the_excerpt() ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-card-bottom-des">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <svg class="next-slide-btn home-feedback-card-next-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="28" cy="28.498" r="28" fill="#383F99" />
                        <path d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($next_step_section['show_section'] == 1) { ?>
    <div class="home-next-step-section home-sec">
        <div class="next-step-section home-contain">
            <p class="next-step-heading page-h2">
                <?php echo $next_step_section['main_heading'] ?>
            </p>
            <p class="next-step-description page-p">
                <?php echo $next_step_section['sub_heading'] ?>
            </p>
            <div class="next-step-card-container">
                <div class="next-step-card next-step-orange-card">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card1.webp" alt="">
                    <div class="step-number"><?php echo $next_step_section['step_1_heading'] ?></div>
                    <div class="step-card-para"><?php echo $next_step_section['step_1_description'] ?></div>
                </div>
                <div class="next-step-card next-step-green-card">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card2.webp" alt="">
                    <div class="step-number"><?php echo $next_step_section['step_2_heading'] ?></div>
                    <div class="step-card-para"><?php echo $next_step_section['step_2_description'] ?></div>
                </div>
                <div class="next-step-card next-step-blue-card">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card3.webp" alt="">
                    <div class="step-number"><?php echo $next_step_section['step_3_heading'] ?></div>
                    <div class="step-card-para"><?php echo $next_step_section['step_3_description'] ?></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($contact_us_section['show_section'] == 1) { ?>
    <div class="home-lets-get-started-section home-sec">
        <div class="lets-get-started-section home-contain">
            <div class="lets-get-started-left">
                <svg class="lets-get-started-left-pic" xmlns="http://www.w3.org/2000/svg" width="753" height="638" viewBox="0 0 753 638" fill="none">
                    <image id="image" class="image__svg-image" width="100%" height="100%" clip-path="url(#mask2)" x="-100px" xlink:href="<?php echo __($contact_us_section)['main_image'] ?>" />
                    <g filter="url(#filter0_d_173_114)">
                        <clipPath id="mask2">
                            <path d="M20.0103 163.668C0.658929 258.493 17.0398 359.964 61.9017 446.307C212.475 735.767 618.722 629.006 718.755 356.116C736.053 308.901 743.523 252.679 715.435 210.971C683.896 164.149 620.076 152.957 563.682 154.05C507.288 155.143 448.273 163.843 396.466 141.503C309.756 104.036 273.194 2.56604 164.555 12.7087C78.5447 20.7966 35.998 85.456 20.0103 163.668Z" fill="#D9D9D9" />
                        </clipPath>
                    </g>
                    <defs>
                        <filter id="filter0_d_173_114" x="0.71546" y="0.71546" width="752.242" height="636.505" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="3.76151" dy="3.76151" />
                            <feGaussianBlur stdDeviation="7.52303" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_173_114" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_173_114" result="shape" />
                        </filter>
                    </defs>
                </svg>

                <svg class="lets-get-started-left-bg" xmlns="http://www.w3.org/2000/svg" width="756" height="734" viewBox="0 0 756 734" fill="none">
                    <path d="M469.743 648.533C510.967 608.074 526.299 549.042 554.559 499.625C589.519 438.517 624.515 377.446 659.476 316.338C672.549 293.468 685.769 270.344 692.943 244.997C706.126 198.457 689.265 144.814 660.605 107.014C616.795 49.1836 532.781 23.4004 466.247 52.3154C424.514 70.4511 393.45 105.994 357.907 134.363C307.688 174.458 247.964 200.496 189.005 226.061C129.209 251.989 71.1238 270.089 50.8396 339.754C29.0622 414.482 44.2117 499.188 85.7998 564.483C134.307 640.558 217.265 690.34 307.033 698.352C360.129 703.086 415.737 692.816 458.126 658.876C462.205 655.562 466.065 652.102 469.743 648.533Z" fill="url(#paint0_linear_173_115)" />
                    <path d="M27.6761 141.647C69.5191 32.7236 230.191 38.5868 276.222 141.1C290.206 172.237 293.01 209.346 315.77 234.765C346.288 268.815 400.549 267.904 443.703 252.9C486.857 237.897 526.151 211.64 570.944 202.572C649.24 186.731 714.208 254.503 736.167 324.168C760.312 400.753 738.935 487.972 688.643 550.572C638.352 613.173 561.985 651.994 482.742 665.031C394.14 679.598 297.78 661.608 228.77 604.178C190.86 572.641 163.147 528.649 150.729 480.943C140.896 443.106 147.633 401.227 135.507 364.3C122.906 325.953 83.3576 310.585 58.0114 282.544C28.6958 250.096 12.9636 205.34 21.7401 161.894C23.1604 155.012 25.1633 148.238 27.6761 141.647Z" fill="#A4CF0E" />
                    <path d="M27.4582 248.858C11.3255 327.846 24.9819 412.37 62.382 484.293C187.911 725.41 526.589 636.479 609.983 409.165C624.405 369.835 630.632 323.002 607.216 288.261C580.923 249.258 527.718 239.935 480.703 240.846C433.689 241.756 384.49 249.003 341.299 230.394C269.012 199.185 238.531 114.661 147.962 123.11C76.2569 129.847 40.7868 183.708 27.4582 248.858Z" fill="#85DFF7" />
                    <path d="M336.929 129.737C332.778 136.838 330.374 144.85 330.52 153.08C330.811 170.05 342.21 185.783 357.323 193.503C388.823 209.599 427.79 193.685 449.239 168.193C460.164 155.229 465.663 136.256 458.453 120.924C453.609 110.545 443.594 103.189 432.742 99.5837C421.854 95.9784 410.127 95.7963 398.729 96.8889C382.596 98.4184 366.281 102.643 353.098 112.075C346.58 116.772 340.972 122.854 336.929 129.737Z" fill="#85DFF7" />
                    <path d="M596.837 16.0444C573.931 13.2039 544.396 24.2382 533.471 45.6878C515.918 80.1382 552.008 104.829 578.883 118.74C603.865 131.668 624.841 149.986 644.725 169.687C659.11 183.926 673.312 212.259 694.361 217.503C767.851 235.784 700.662 108.871 690.392 92.7021C669.489 59.7447 638.389 21.1792 596.837 16.0444Z" fill="#85DFF7" />
                    <path d="M317.082 91.6096C319.267 79.0093 308.305 65.6807 295.305 66.4455C284.27 67.101 274.474 77.1521 274.62 88.1864C274.765 98.7109 283.797 108.398 294.285 109.235C304.809 110.073 315.261 101.988 317.082 91.6096Z" fill="#A4CF0E" />
                    <path d="M196.068 108.033C189.622 108.033 184.378 102.789 184.378 96.3432C184.378 89.8974 189.622 84.6533 196.068 84.6533C202.514 84.6533 207.758 89.8974 207.758 96.3432C207.758 102.789 202.514 108.033 196.068 108.033ZM196.068 87.3846C191.115 87.3846 187.109 91.4269 187.109 96.3432C187.109 101.296 191.151 105.302 196.068 105.302C201.02 105.302 205.026 101.259 205.026 96.3432C205.026 91.3905 201.02 87.3846 196.068 87.3846Z" fill="white" />
                    <path d="M11.6898 458.219C5.24404 458.219 0 452.975 0 446.529C0 440.083 5.24404 434.839 11.6898 434.839C18.1356 434.839 23.3797 440.083 23.3797 446.529C23.3797 452.975 18.172 458.219 11.6898 458.219ZM11.6898 437.534C6.73713 437.534 2.73127 441.576 2.73127 446.492C2.73127 451.445 6.77355 455.451 11.6898 455.451C16.6425 455.451 20.6484 451.409 20.6484 446.492C20.6848 441.576 16.6425 437.534 11.6898 437.534Z" fill="white" />
                    <path d="M410.82 733.494C404.374 733.494 399.13 728.25 399.13 721.804C399.13 715.358 404.374 710.114 410.82 710.114C417.265 710.114 422.51 715.358 422.51 721.804C422.546 728.25 417.302 733.494 410.82 733.494ZM410.82 712.809C405.867 712.809 401.861 716.851 401.861 721.768C401.861 726.684 405.903 730.726 410.82 730.726C415.772 730.726 419.778 726.684 419.778 721.768C419.778 716.851 415.772 712.809 410.82 712.809Z" fill="white" />
                    <path d="M477.499 216.445C471.054 216.445 465.81 211.201 465.81 204.755C465.81 198.309 471.054 193.065 477.499 193.065C483.945 193.065 489.189 198.309 489.189 204.755C489.226 211.201 483.945 216.445 477.499 216.445ZM477.499 195.797C472.547 195.797 468.541 199.839 468.541 204.755C468.541 209.708 472.583 213.714 477.499 213.714C482.452 213.714 486.458 209.672 486.458 204.755C486.494 199.803 482.452 195.797 477.499 195.797Z" fill="white" />
                    <path d="M746.911 282.217C746.146 282.217 745.527 281.598 745.527 280.833V267.104C745.527 266.339 746.146 265.72 746.911 265.72C747.676 265.72 748.295 266.339 748.295 267.104V280.833C748.295 281.598 747.676 282.217 746.911 282.217Z" fill="white" />
                    <path d="M753.794 275.334H740.065C739.3 275.334 738.681 274.715 738.681 273.95C738.681 273.185 739.3 272.566 740.065 272.566H753.794C754.559 272.566 755.178 273.185 755.178 273.95C755.141 274.751 754.522 275.334 753.794 275.334Z" fill="white" />
                    <path d="M528.847 16.991C528.082 16.991 527.463 16.3719 527.463 15.6072V1.87798C527.463 1.11323 528.082 0.494141 528.847 0.494141C529.611 0.494141 530.231 1.11323 530.231 1.87798V15.6436C530.194 16.3719 529.575 16.991 528.847 16.991Z" fill="white" />
                    <path d="M535.693 10.1085H521.964C521.199 10.1085 520.58 9.48942 520.58 8.72466C520.58 7.95991 521.199 7.34082 521.964 7.34082H535.693C536.458 7.34082 537.077 7.95991 537.077 8.72466C537.077 9.48942 536.458 10.1085 535.693 10.1085Z" fill="white" />
                    <path d="M695.453 461.644C694.688 461.644 694.069 461.025 694.069 460.26V446.494C694.069 445.729 694.688 445.11 695.453 445.11C696.218 445.11 696.837 445.729 696.837 446.494V460.26C696.837 461.025 696.218 461.644 695.453 461.644Z" fill="white" />
                    <path d="M702.337 454.761H688.608C687.843 454.761 687.224 454.142 687.224 453.377C687.224 452.612 687.843 451.993 688.608 451.993H702.337C703.102 451.993 703.721 452.612 703.721 453.377C703.721 454.142 703.102 454.761 702.337 454.761Z" fill="white" />
                    <path d="M502.517 189.025C501.752 189.025 501.133 188.406 501.133 187.641V173.912C501.133 173.147 501.752 172.528 502.517 172.528C503.281 172.528 503.9 173.147 503.9 173.912V187.641C503.9 188.406 503.281 189.025 502.517 189.025Z" fill="white" />
                    <path d="M509.4 182.143H495.671C494.906 182.143 494.287 181.524 494.287 180.759C494.287 179.994 494.906 179.375 495.671 179.375H509.4C510.165 179.375 510.784 179.994 510.784 180.759C510.784 181.524 510.165 182.143 509.4 182.143Z" fill="white" />
                    <path d="M451.46 693.655C450.695 693.655 450.076 693.036 450.076 692.271V678.542C450.076 677.777 450.695 677.158 451.46 677.158C452.225 677.158 452.844 677.777 452.844 678.542V692.271C452.808 693.072 452.225 693.655 451.46 693.655Z" fill="white" />
                    <path d="M458.344 686.809H444.614C443.85 686.809 443.23 686.19 443.23 685.425C443.23 684.66 443.85 684.041 444.614 684.041H458.344C459.108 684.041 459.727 684.66 459.727 685.425C459.727 686.19 459.072 686.809 458.344 686.809Z" fill="white" />
                    <path d="M358.196 79.3719C357.432 79.3719 356.812 78.7528 356.812 77.988V64.2588C356.812 63.4941 357.432 62.875 358.196 62.875C358.961 62.875 359.58 63.4941 359.58 64.2588V77.988C359.58 78.7528 358.961 79.3719 358.196 79.3719Z" fill="white" />
                    <path d="M365.08 72.4894H351.351C350.586 72.4894 349.967 71.8703 349.967 71.1055C349.967 70.3408 350.586 69.7217 351.351 69.7217H365.08C365.845 69.7217 366.464 70.3408 366.464 71.1055C366.464 71.8703 365.845 72.4894 365.08 72.4894Z" fill="white" />
                    <defs>
                        <linearGradient id="paint0_linear_173_115" x1="-0.012946" y1="366.983" x2="755.177" y2="366.983" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E1EE58" stop-opacity="0.3" />
                            <stop offset="0.1216" stop-color="#DAEA59" stop-opacity="0.3853" />
                            <stop offset="0.304" stop-color="#C5E05A" stop-opacity="0.5131" />
                            <stop offset="0.5245" stop-color="#A4CE5D" stop-opacity="0.6677" />
                            <stop offset="0.7723" stop-color="#75B661" stop-opacity="0.8414" />
                            <stop offset="0.9985" stop-color="#459D65" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="lets-get-started-right">
                <p class="lets-get-started-heading page-h2"><?php echo get_default_content($contact_us_section['main_heading'], "<span>Contact us</span>") ?></p>
                <p class="lets-get-started-description page-p"><?php echo get_default_content($contact_us_section['sub_heading'], "If you require an accurate translation agency, you should try Circle Translations. We promise you user-friendly and affordable services of the highest quality. Contact us today for professional, fast, and affordable subtitle translation services.") ?></p>
                <?php echo get_default_shortcode($contact_us_section['contact_form'], '[contact-form-7 id="9519073" title="Global Contact Form"]') ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($faqs_section['show_section'] == 1) { ?>
    <div class="home-home-faq-section home-sec">
        <div class="home-faq-section home-contain">
            <svg class="faq-right-bg" width="900" height="764" viewBox="0 0 900 764" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.24" d="M1012.86 625.505C951.996 691.347 819.59 657.86 719.234 671.441C651.421 680.619 586.083 680.912 518.803 692.367C413.099 710.364 314.737 784.321 211.81 757.835C108.425 731.232 31.8773 645.835 6.75623 560.605C-17.8517 477.116 28.8044 390.217 81.4879 315.68C125.84 252.93 214.594 225.608 278.99 175.443C344.233 124.618 377.894 46.2278 462.127 19.157C551.906 -9.69629 656.057 -3.09026 746.042 25.3416C836.543 53.9364 917.834 106.737 961.358 176.895C1002.5 243.21 966.649 320.758 975.127 394.61C984.184 473.509 1071.56 562.004 1012.86 625.505Z" fill="url(#paint0_linear_656_13961)" />
                <defs>
                    <linearGradient id="paint0_linear_656_13961" x1="-212.215" y1="567.597" x2="1006.37" y2="208.907" gradientUnits="userSpaceOnUse">
                        <stop offset="0.160314" stop-color="#47AEDF" />
                        <stop offset="1" stop-color="#BFEBFF" />
                    </linearGradient>
                </defs>
            </svg>

            <p class="faq-heading page-h2"><?php echo !empty($faqs_section['main_heading']) ? __($faqs_section['main_heading']) : __('Frequently Asked <span>Questions</span>') ?></p>
            <p class="faq-description page-p"><?php echo !empty($faqs_section['sub_heading']) ? __($faqs_section['sub_heading']) : __('Here are some of the circle translations frequently asked question') ?></p>
            <div class="faq-card-container">
                <?php $post_ids = $faqs_section['faqs'];
                $args = array(
                    'post_type' => 'ct-faq',
                    'post_status' => 'publish',
                    'post__in' => $post_ids,
                    'order' => 'ASC',
                    'posts_per_page' => '-1'
                );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata($post);
                ?>
                    <div class="faq-card faq-card-one">
                        <img class="target-img" src="<?php echo get_default_content(wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())), "https://ct.sn66.me/wp-content/uploads/2024/01/Group-280.png") ?>" alt="">
                        <div>
                            <p class="faq-card-heading"><?php echo __(get_the_title()) ?></p>
                            <div class="faq-card-description page-p"><?php echo __(get_the_content()) ?><img src="<?php echo get_template_directory_uri() ?>/Images/right-arrow.png" alt="" class="read-more"></div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
<?php } ?>


<?php if ($get_a_quote_section['show_section'] == 1) {
?>
    <div class="home-email-us-section home-sec">
        <div class="email-us-section home-contain">
            <img class="email-us-bg" src="<?php echo get_template_directory_uri() ?>/Images/email-us-bg.webp" alt="">
            <div class="email-us-inner">
                <div class="email-us-left">
                    <img src="<?php echo get_default_content($get_a_quote_section['main_image'], 'https://ct.sn66.me/wp-content/uploads/2023/12/email-us-left-img.webp') ?>" alt="">
                </div>
                <div class="email-us-right">
                    <p class="email-us-right-heading page-h2"><?php echo get_default_content($get_a_quote_section['main_heading'], 'Each Project Is Different, Contact Us To Get A Custom And Accurate Quote!') ?></p>
                    <a href="<?php echo __($get_a_quote_section['cta_button_link']) ?>"></a><button><?php echo get_default_content($get_a_quote_section['cta_button_text'], "Get a Quote"); ?></button>
                    <div class="send-msg-container">
                        <label for=""><?php echo get_default_content($get_a_quote_section['label'], 'Enter your email below, and we will contact you.') ?></label>
                        <?php echo get_default_shortcode($get_a_quote_section['input'], '[contact-form-7 id="bdda145" title="Global Quote Form]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        /* ---------------------------------------------------------------------------------------------- */
        /*                               Function For Random Color Generator                              */
        /* ---------------------------------------------------------------------------------------------- */

        randomColor(".faq-card img", "filter", ['hue-rotate(32deg)', 'hue-rotate(144deg)', 'hue-rotate(232deg)', 'hue-rotate(353deg)', 'hue-rotate(198deg)', 'hue-rotate(80deg)']);
        //randomColor(".faq-card-description .read-more", "color", ['#F3981F', '#42CD83', '#3A419A', '#E85462', '#19D1FF', '#ADD427']);
        randomColor(".translation-process-point .point-heading", "color");
        randomColor(".translation-process-point .point-number", "background");
        randomColor(".translation-process-point .point-number svg line", "stroke");
        randomColor(".services-translation-page .container .bottom .translation-cards .image .colorfull-image", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)', 'hue-rotate(680deg)', 'hue-rotate(780deg)', 'hue-rotate(880deg)', 'hue-rotate(980deg)']);
        randomColor(".bottom .industries-we-specialize-in-cards .card img", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)', 'hue-rotate(680deg)', 'hue-rotate(780deg)', 'hue-rotate(880deg)', 'hue-rotate(980deg)']);

        /* ---------------------------------------------------------------------------------------------- */
        /*                                 Whole Page Sliders Applications                                */
        /* ---------------------------------------------------------------------------------------------- */

        $('#top-row-partners').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev-slide-btn'),
            nextArrow: $('.next-slide-btn'),
            asNavFor: '#bottom-row-partners'
        });
        $('#bottom-row-partners').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '#top-row-partners',
        });

        var homeTestimonialCard = new Swiper(".home-feedback-card-swiper", {
            slidesPerView: 2,
            touchRatio: 0,
            breakpoints: {
                1229: {
                    slidesPerView: 2,
                },
            },
            spaceBetween: 30,
            navigation: {
                nextEl: ".home-feedback-card-next-slide",
                prevEl: ".home-feedback-card-prev-slide",
            },
        });

    });
</script>

<?php get_footer(); ?>