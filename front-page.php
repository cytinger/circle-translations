<?php
/* -------------------------------------------------------------------------- */
/*                          Template Name: Home Page                          */
/* -------------------------------------------------------------------------- */
get_header();

// Get the value of the ACF field
$hero_section = get_field('main_banner_section');
$partners = get_field('partners_section');
$why_choose_us = get_field('why_choose_us_section');
$core_services_section = get_field('core_services_section');
$showcase_your_brand_section = get_field('showcase_your_brand_section');
$we_are_ct = get_field('we_are_circle_translations_section');
$our_translation_process_section = get_field('our_translation_process_section');
$available_languages_section = get_field('available_languages_section');
$professional_translation_services_for_any_industry = get_field('professional_translation_services_for_any_industry');
$how_we_work_section = get_field('how_we_work_section');
$pricing_plans_section = get_field('pricing_plans_section');
$i_need_a_translator_section = get_field('i_need_a_translator_section');
$testimonials_section = get_field('testimonials_section');
$next_step_section = get_field('next_step_section');
$contact_us_section = get_field('contact_us_section');
$blogs_section = get_field('blogs_section');
$faqs_section = get_field('faqs_section');
$get_a_quote_section = get_field('get_a_quote_section');
?>

<!-- -------------------------------------------------------------------------- -->
<!--                                 Home-sec-1                                 -->
<!-- -------------------------------------------------------------------------- -->


<?php
if ($hero_section['show_section'] == 1) {
?>
    <div class="home-main-hero home-sec">
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
            <div class="home-main-hero-left">
                <p><?php echo $hero_section['small_heading'] ?></p>
                <p class="page-h2"><?php echo $hero_section['main_heading'] ?></p>

                <?php echo $hero_section['description'] ?>
                <ul>
                    <?php
                    // Assuming $hero_section['list_items'] is an array
                    foreach ($hero_section['list_items'] as $value) {
                    ?>
                        <li class="page-p"><?php echo $value; ?></li>
                    <?php
                    }
                    ?>
                </ul>

                <button>Send Inquiry</button>
            </div>
            <div class="home-main-hero-right">
                <div class="home-main-hero-mid">
                    <?php if ($hero_section['bg_image'] != "") {
                    ?>
                        <img class="home-main-hero-mid-img" src="<?php echo $hero_section['bg_image'] ?>" alt="">
                    <?php
                    } ?>
                    <div class="home-main-hero-mid-overlay">
                        <?php if ($hero_section['show_main_testimonial'] == 1) {
                        ?>
                            <div class="home-main-hero-mid-overlay-container">

                                <img class="main-hero-mid-quotes" src="<?php echo get_template_directory_uri() ?>/Images/quotes.png" alt="">
                                <?php $post_ids = $hero_section['main_section_testimonial'];
                                $args = array(
                                    'post_type'      => 'ct-testimonial',
                                    'post_status'    => 'publish',
                                    'post__in'       => array($post_ids),
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
                                                <p>
                                                    <?php echo get_the_title() ?>
                                                </p>
                                                <?php echo the_excerpt() ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                wp_reset_postdata();
                                ?>
                            </div>
                        <?php
                        } ?>
                    </div>
                    <img class="hero-tree-mobile" src="<?php echo get_template_directory_uri() ?>/Images/home-tree-mobile.png" alt="">
                    <div class="home-main-hero-third home-main-hero-third-mobile">
                        <?php
                        foreach ($hero_section['benefits'] as $value) {
                        ?>
                            <div>
                                <img src="<?php echo $value['benefit_icon'] ?>" alt="">
                                <p><?php echo $value['benefit_text'] ?></p>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <img class="hero-tree" src="<?php echo get_template_directory_uri() ?>/Images/hero-third-tree.png" alt="">
                <div class="home-main-hero-third">
                    <?php
                    foreach ($hero_section['benefits'] as $value) {
                    ?>
                        <div>
                            <img src="<?php echo $value['benefit_icon'] ?>" alt="">
                            <p><?php echo $value['benefit_text'] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
if ($partners['show_section'] == 1) {
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
                    $post_ids = $partners['partners_top_row'];
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
                    $post_ids = $partners['partners_bottom_row'];
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
<?php
}
if ($why_choose_us['show_section'] == 1) {
?>
    <div class="home-why-choose-us-sec home-sec">
        <div class="home-why-choose-us home-contain">
            <img class="why-choose-bg-world" src="<?php echo get_template_directory_uri() ?>/Images/world-bg.webp" alt="">
            <img class="why-choose-bg-mobile" src="<?php echo get_template_directory_uri() ?>/Images/why-choose-bg-mobile.png" alt="">
            <div class="why-choose-left">
                <p class="page-h2"><?php echo $why_choose_us['heading'] ?></p>
                <div class="page-p">
                    <p></p>
                    <?php echo $why_choose_us['description'] ?>
                </div>
                <a href="<?php echo $why_choose_us['cta_button_link'] ?>">
                    <button><?php echo $why_choose_us['cta_button_text'] ?></button>
                </a>
            </div>
            <div class="why-choose-right">
                <div class="pink-circle">
                    <svg class="pink-circle-curves" xmlns="http://www.w3.org/2000/svg" width="139" height="48" viewBox="0 0 139 48" fill="none">
                        <path d="M1.20817 22.3681C23.5076 18.1297 80.5518 17.0312 130.333 46.5445M0.538086 4.40072C12.229 1.93991 39.7728 -1.56773 56.4211 4.08828M92.4728 10.8458C101.568 13.5048 123.373 21.0595 137.83 30.0059" stroke="#F90BAD" stroke-width="1.21426" />
                    </svg>
                    <svg class="circle-pink" xmlns="http://www.w3.org/2000/svg" width="324" height="324" viewBox="0 0 324 324" fill="none">
                        <g filter="url(#filter0_d_656_9570)">
                            <circle cx="125.068" cy="125.068" r="125.068" transform="matrix(-1 0 0 1 281.84 12.4106)" fill="white" />
                        </g>
                        <g filter="url(#filter1_d_656_9570)">
                            <circle cx="93.4768" cy="93.4768" r="93.4768" transform="matrix(-1 0 0 1 250.246 44.0024)" fill="#F90BAD" />
                        </g>
                        <mask id="mask0_656_9570" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="31" y="12" width="251" height="251">
                            <circle cx="125.068" cy="125.068" r="125.068" transform="matrix(-1 0 0 1 281.84 12.4126)" fill="white" />
                            <circle cx="93.4768" cy="93.4768" r="93.4768" transform="matrix(-1 0 0 1 250.25 44.0044)" fill="#F29111" />
                            <circle cx="28.1296" cy="28.1296" r="28.1296" transform="matrix(-1 0 0 1 184.902 109.352)" fill="white" />
                            <circle cx="18.6088" cy="18.6088" r="18.6088" transform="matrix(-1 0 0 1 175.383 118.873)" fill="#F29111" stroke="white" stroke-width="2.42851" />
                        </mask>
                        <g mask="url(#mask0_656_9570)">
                            <path d="M164.653 140.755L91.5049 32.1447L37.4713 129.892L164.653 140.755Z" fill="white" />
                            <path d="M164.528 140.346L31.7042 126.553L31.7042 134.749L31.7042 150.838L39.9004 185.444L54.7751 210.64L73.9004 231.889L164.528 140.346Z" fill="white" />
                        </g>
                        <g filter="url(#filter2_d_656_9570)">
                            <circle cx="28.1296" cy="28.1296" r="28.1296" transform="matrix(-1 0 0 1 185.309 108.944)" fill="white" />
                        </g>
                        <g filter="url(#filter3_d_656_9570)">
                            <circle cx="18.6088" cy="18.6088" r="18.6088" transform="matrix(-1 0 0 1 175.789 118.465)" fill="#F90BAD" />
                            <circle cx="18.6088" cy="18.6088" r="18.6088" transform="matrix(-1 0 0 1 175.789 118.465)" stroke="white" stroke-width="2.42851" />
                        </g>
                        <defs>
                            <filter id="filter0_d_656_9570" x="0.132445" y="0.268074" width="322.992" height="322.992" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9570" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9570" result="shape" />
                            </filter>
                            <filter id="filter1_d_656_9570" x="31.7223" y="31.8599" width="259.809" height="259.809" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9570" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9570" result="shape" />
                            </filter>
                            <filter id="filter2_d_656_9570" x="97.4801" y="96.8013" width="129.113" height="129.115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9570" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9570" result="shape" />
                            </filter>
                            <filter id="filter3_d_656_9570" x="122.784" y="102.679" width="68.7906" height="68.7882" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7.28554" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9570" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9570" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <p class="pink-numbers">124+</p>
                    <svg class="line-through-pink" xmlns="http://www.w3.org/2000/svg" width="236" height="50" viewBox="0 0 236 50" fill="none">
                        <path d="M235.959 1.08301H191.27H147.046L128.426 28.0826H24.6172" stroke="#DB4437" stroke-width="1.39653" stroke-dasharray="2.79 2.79" />
                        <g filter="url(#filter0_d_656_9625)">
                            <circle cx="6.51715" cy="6.51715" r="6.51715" transform="matrix(-1 0 0 1 28.8086 21.1001)" fill="#DB4437" />
                            <circle cx="6.51715" cy="6.51715" r="6.51715" transform="matrix(-1 0 0 1 28.8086 21.1001)" stroke="white" stroke-width="1.86204" />
                        </g>
                        <defs>
                            <filter id="filter0_d_656_9625" x="0.272668" y="5.59786" width="44.0367" height="44.0386" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7.28554" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9625" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9625" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <p class="pink-text">Language Pairs</p>
                </div>
                <div class="green-circle">
                    <svg class="green-circle-curves" xmlns="http://www.w3.org/2000/svg" width="73" height="132" viewBox="0 0 73 132" fill="none">
                        <path d="M72.4102 120.599C56.2923 104.616 23.0932 58.2148 19.2395 0.470703M57.9794 131.323C49.3325 123.079 30.848 102.36 26.0856 85.4343M11.2456 51.8905C8.28843 42.8876 2.17174 20.6364 1.36218 3.65433" stroke="#A3CD11" stroke-width="1.21426" />
                    </svg>
                    <svg class="circle-green" xmlns="http://www.w3.org/2000/svg" width="270" height="270" viewBox="0 0 270 270" fill="none">
                        <g filter="url(#filter0_d_656_9550)">
                            <circle cx="98.3548" cy="98.3548" r="98.3548" transform="matrix(-1 0 0 1 228.586 12.5234)" fill="white" />
                        </g>
                        <g filter="url(#filter1_d_656_9550)">
                            <circle cx="73.5109" cy="73.5109" r="73.5109" transform="matrix(-1 0 0 1 203.742 37.3672)" fill="#A4CF0E" />
                        </g>
                        <mask id="mask0_656_9550" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="31" y="12" width="198" height="198">
                            <circle cx="98.3548" cy="98.3548" r="98.3548" transform="matrix(-1 0 0 1 228.586 12.5234)" fill="white" />
                            <circle cx="73.5109" cy="73.5109" r="73.5109" transform="matrix(-1 0 0 1 203.742 37.3677)" fill="#F29111" />
                            <circle cx="22.1213" cy="22.1213" r="22.1213" transform="matrix(-1 0 0 1 152.352 88.7573)" fill="white" />
                            <circle cx="14.6341" cy="14.6341" r="14.6341" transform="matrix(-1 0 0 1 144.863 96.2446)" fill="#F29111" stroke="white" stroke-width="2.42851" />
                        </mask>
                        <g mask="url(#mask0_656_9550)">
                            <path d="M132.614 116.699L78.6485 27.0446L69.4513 33.499L61.1593 41.1719L53.1041 50.1815L46.7477 59.4417L41.4218 69.0709L37.1194 80.5868L34.2791 91.0166L32.8312 102.303L132.614 116.699Z" fill="white" />
                            <path d="M133.46 117.158L134.183 12.5176L122.969 13.2271L111.892 15.4482L100.32 18.9333L90.0668 23.5184L80.5001 28.9558L70.8225 36.5368L62.9588 43.9538L55.8366 52.8277L133.46 117.158Z" fill="white" />
                            <path d="M136.33 113.132L32.1801 102.986L31.8766 114.217L33.0908 125.449L35.5193 137.288L39.1621 147.913L43.7156 157.931L50.394 168.252L57.0724 176.752L65.2687 184.644L136.33 113.132Z" fill="white" />
                            <path d="M134.397 108.759L65.0286 184.644L69.2785 188.287L74.4391 191.93L79.2961 195.269L84.4567 198.001L89.6173 200.43L95.0815 202.858L106.313 206.501L117.242 208.322L128.474 209.233L138.188 208.626L147.597 207.411L134.397 108.759Z" fill="white" />
                        </g>
                        <g filter="url(#filter2_d_656_9550)">
                            <circle cx="22.1213" cy="22.1213" r="22.1213" transform="matrix(-1 0 0 1 152.668 88.438)" fill="white" />
                        </g>
                        <g filter="url(#filter3_d_656_9550)">
                            <circle cx="14.6341" cy="14.6341" r="14.6341" transform="matrix(-1 0 0 1 145.18 95.9253)" fill="#A4CF0E" />
                            <circle cx="14.6341" cy="14.6341" r="14.6341" transform="matrix(-1 0 0 1 145.18 95.9253)" stroke="white" stroke-width="2.42851" />
                        </g>
                        <defs>
                            <filter id="filter0_d_656_9550" x="0.30432" y="0.380867" width="269.566" height="269.565" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9550" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9550" result="shape" />
                            </filter>
                            <filter id="filter1_d_656_9550" x="25.1481" y="25.2246" width="219.879" height="219.877" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9550" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9550" result="shape" />
                            </filter>
                            <filter id="filter2_d_656_9550" x="76.8551" y="76.2954" width="117.098" height="117.098" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9550" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9550" result="shape" />
                            </filter>
                            <filter id="filter3_d_656_9550" x="100.124" y="80.1399" width="60.8414" height="60.8389" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7.28554" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9550" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9550" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <p class="green-numbers">€0.05</p>
                    <svg class="line-through-green" width="275" height="76" viewBox="0 0 275 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M274.393 1.02832H191.532L159.877 52.2345H30" stroke="#DB4437" stroke-width="1.86204" stroke-dasharray="2.79 2.79" />
                        <g filter="url(#filter0_d_0_1)">
                            <circle cx="23.803" cy="51.8029" r="7" transform="rotate(-17.7778 23.803 51.8029)" fill="#DB4437" />
                            <circle cx="23.803" cy="51.8029" r="7" transform="rotate(-17.7778 23.803 51.8029)" stroke="white" stroke-width="2" />
                        </g>
                        <defs>
                            <filter id="filter0_d_0_1" x="0.150131" y="28.1501" width="47.3052" height="47.3057" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7.82533" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <p class="green-text">Per word From</p>
                </div>
                <div class="orange-circle">
                    <svg class="orange-circle-curves" xmlns="http://www.w3.org/2000/svg" width="132" height="74" viewBox="0 0 132 74" fill="none">
                        <path d="M0.198242 18.6067C22.8644 19.8209 78.5178 32.3885 119.803 72.9447M3.84141 1C15.7816 1.40475 43.3655 4.58206 58.1794 14.0533M91.5719 29.2315C99.7682 33.9873 119.136 46.5346 131.035 58.6772" stroke="#F29111" stroke-width="1.21426" />
                    </svg>
                    <svg class="circle-orange" width="425" height="424" viewBox="0 0 425 424" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_656_9589)">
                            <circle cx="207.304" cy="187.731" r="175.46" fill="white" />
                        </g>
                        <g filter="url(#filter1_d_656_9589)">
                            <circle cx="207.304" cy="187.731" r="131.14" fill="#F29111" />
                        </g>
                        <mask id="mask0_656_9589" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="31" y="12" width="352" height="352">
                            <circle cx="207.304" cy="187.731" r="175.46" fill="white" />
                            <circle cx="207.304" cy="187.731" r="131.14" fill="#F29111" />
                            <circle cx="207.303" cy="187.731" r="39.4634" fill="white" />
                            <circle cx="207.302" cy="187.731" r="26.1065" fill="#F29111" stroke="white" stroke-width="2.42851" />
                        </mask>
                        <g mask="url(#mask0_656_9589)">
                            <path d="M199.391 191.472L322.634 5.52123L421.449 170.096L199.391 191.472Z" fill="white" />
                        </g>
                        <g filter="url(#filter2_d_656_9589)">
                            <circle cx="207.303" cy="187.731" r="39.4634" fill="white" />
                        </g>
                        <g filter="url(#filter3_d_656_9589)">
                            <circle cx="207.302" cy="187.731" r="26.1065" fill="#F29111" />
                            <circle cx="207.302" cy="187.731" r="26.1065" stroke="white" stroke-width="2.42851" />
                        </g>
                        <defs>
                            <filter id="filter0_d_656_9589" x="0.27307" y="0.128426" width="423.777" height="423.776" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9589" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9589" result="shape" />
                            </filter>
                            <filter id="filter1_d_656_9589" x="44.5934" y="44.4487" width="335.137" height="335.135" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9589" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9589" result="shape" />
                            </filter>
                            <filter id="filter2_d_656_9589" x="136.269" y="136.125" width="151.781" height="151.782" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="4.85703" dy="24.2851" />
                                <feGaussianBlur stdDeviation="18.2139" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.219608 0 0 0 0 0.247059 0 0 0 0 0.6 0 0 0 0.24 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9589" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9589" result="shape" />
                            </filter>
                            <filter id="filter3_d_656_9589" x="165.409" y="145.839" width="83.7828" height="83.7838" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7.28554" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9589" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9589" result="shape" />
                            </filter>
                        </defs>
                    </svg>

                    <p class="orange-numbers">1700 000+</p>
                    <svg class="line-through-orange" width="336" height="57" viewBox="0 0 336 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.12891 55.2536L119.834 2.65088L144.041 22.6678H313.021" stroke="#DB4437" stroke-width="1.86204" stroke-dasharray="2.79 2.79" />
                        <g filter="url(#filter0_d_656_9628)">
                            <circle cx="313.305" cy="22.95" r="6.51715" transform="rotate(-17.7778 313.305 22.95)" fill="#DB4437" />
                            <circle cx="313.305" cy="22.95" r="6.51715" transform="rotate(-17.7778 313.305 22.95)" stroke="white" stroke-width="1.86204" />
                        </g>
                        <defs>
                            <filter id="filter0_d_656_9628" x="291.284" y="0.928918" width="44.0406" height="44.0421" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7.28554" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_656_9628" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_656_9628" result="shape" />
                            </filter>
                        </defs>
                    </svg>

                    <p class="orange-text">Words translated each month</p>
                </div>
            </div>
        </div>
    </div>



<?php
}
if ($core_services_section['show_section'] == 1) {
?>















    <!-- 

<div class="home-page-partner home-sec mainServ">
    <div class="home-partner-card-container-outer home-contain">
        <svg class="prev-slide-btn home-partner-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" fill-opacity="0.08" />
            <path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="#383F99" />
        </svg>



        <div class="swiper-wrapper">
            <?php
            $post_ids = $partners['partners'];
            $args = array(
                'post_type'      => 'ct-partner',
                'post_status'    => 'publish',
                'post__in'       => $post_ids,
            );
            $posts = get_posts($args);

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <div class="swiper-slide home-partner-card-box">
                        <?php
                        // Loop to show the first 4 items
                        for ($i = 0; $i < 4; $i++) {
                        ?>
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                        <?php
                        }
                        ?>
                        <?php
                        // Loop to show the next 2 items
                        for ($i = 4; $i < 6; $i++) {
                        ?>
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                        <?php
                        }
                        ?>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>



        <svg class="next-slide-btn home-partner-card-next-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="28" cy="28.498" r="28" fill="#383F99" />
            <path d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z" fill="white" />
        </svg>
    </div>
</div>


 -->




















    <div class="home-showcase-your-brand home-sec">
        <div class="showcase-your-brand home-contain">
            <div class="showcase-left">
                <div class="showcase-left-inner-pc">
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit1']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit1']['benefit_text'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit2']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit2']['benefit_text'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit3']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit3']['benefit_text'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit4']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit4']['benefit_text'] ?></p>
                    </div>
                </div>
                <div class="first-col">
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit1']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit1']['benefit_text'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit2']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit2']['benefit_text'] ?></p>
                    </div>
                </div>
                <div class="second-col">
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit3']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit3']['benefit_text'] ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $showcase_your_brand_section['benefit4']['benefit_icon'] ?>" alt="">
                        <p><?php echo $showcase_your_brand_section['benefit4']['benefit_text'] ?></p>
                    </div>
                </div>
            </div>
            <div class="showcase-right">
                <p class="top-head page-h2"><?php echo $showcase_your_brand_section['heading'] ?></p>
                <div class="desc page-p">
                    <?php echo $showcase_your_brand_section['description'] ?>
                </div>
                <a href="<?php echo $showcase_your_brand_section['cta_button_link'] ?>"></a>
                <button><?php echo $showcase_your_brand_section['cta_button_text'] ?></button>
            </div>
        </div>
    </div>


<?php
}
if ($showcase_your_brand_section['show_section'] == 1) {
?>
    <div class="home-circle-translations home-sec">
        <div class="circle-translation home-contain">
            <div class="circle-translation-top">
                <svg class="circle-trans-bg" width="923" height="763" viewBox="0 0 923 763" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.24" d="M1012.86 625.003C951.996 690.845 819.59 657.358 719.234 670.939C651.421 680.117 586.083 680.41 518.803 691.865C413.099 709.862 314.737 783.819 211.81 757.333C108.425 730.73 31.8773 645.333 6.75623 560.103C-17.8517 476.614 28.8044 389.715 81.4879 315.178C125.84 252.428 214.594 225.107 278.99 174.941C344.233 124.116 377.894 45.7258 462.127 18.6551C551.906 -10.1982 656.057 -3.59222 746.042 24.8396C836.543 53.4345 917.834 106.235 961.358 176.393C1002.5 242.708 966.649 320.256 975.127 394.108C984.184 473.007 1071.56 561.502 1012.86 625.003Z" fill="url(#paint0_linear_656_9633)" />
                    <defs>
                        <linearGradient id="paint0_linear_656_9633" x1="-212.215" y1="567.095" x2="1006.37" y2="208.405" gradientUnits="userSpaceOnUse">
                            <stop offset="0.160314" stop-color="#47AEDF" />
                            <stop offset="1" stop-color="#BFEBFF" />
                        </linearGradient>
                    </defs>
                </svg>

                <p class="circle-trans-heading page-h2"><?php echo $we_are_ct['heading'] ?></span></p>
                <p class="head-desc page-p"><?php echo $we_are_ct['description'] ?>
                </p>
            </div>
            <div class="circle-trans-card-container">
                <div class="circle-trans-card">
                    <img src="<?php echo $we_are_ct['process1']['process_icon'] ?>" alt="">
                    <div>
                        <p><?php echo $we_are_ct['process1']['process_heading'] ?></p>
                        <?php echo $we_are_ct['process1']['process_text'] ?>
                    </div>
                </div>
                <div class="circle-trans-card">
                    <img src="<?php echo $we_are_ct['process2']['process_icon'] ?>" alt="">
                    <div>
                        <p><?php echo $we_are_ct['process2']['process_heading'] ?></p>
                        <?php echo $we_are_ct['process2']['process_text'] ?>
                    </div>
                </div>
                <div class="circle-trans-card">
                    <img src="<?php echo $we_are_ct['process3']['process_icon'] ?>" alt="">
                    <div>
                        <p><?php echo $we_are_ct['process3']['process_heading'] ?></p>
                        <?php echo $we_are_ct['process3']['process_text'] ?>
                    </div>
                </div>
                <div class="circle-trans-card">
                    <img src="<?php echo $we_are_ct['process4']['process_icon'] ?>" alt="">
                    <div>
                        <p><?php echo $we_are_ct['process4']['process_heading'] ?></p>
                        <?php echo $we_are_ct['process4']['process_text'] ?>
                    </div>
                </div>
            </div>
            <a class="back-to-top-btn" href="#nav-container">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="26" cy="25.998" r="26" transform="rotate(-90 26 25.998)" fill="#383F99" />
                    <path d="M31.369 23.7212C31.4753 23.8352 31.6034 23.9267 31.7458 23.9901C31.8882 24.0536 32.0419 24.0877 32.1977 24.0904C32.3536 24.0932 32.5084 24.0645 32.6529 24.0061C32.7974 23.9478 32.9287 23.8609 33.0389 23.7507C33.1492 23.6404 33.2361 23.5091 33.2944 23.3646C33.3528 23.2201 33.3815 23.0653 33.3787 22.9094C33.376 22.7536 33.3419 22.5999 33.2784 22.4575C33.215 22.3151 33.1235 22.187 33.0095 22.0807L26.819 15.8902C26.6014 15.6729 26.3064 15.5508 25.9988 15.5508C25.6912 15.5508 25.3962 15.6729 25.1785 15.8902L18.988 22.0807C18.874 22.187 18.7825 22.3151 18.7191 22.4575C18.6557 22.5999 18.6215 22.7536 18.6188 22.9094C18.616 23.0653 18.6447 23.2201 18.7031 23.3646C18.7615 23.5091 18.8484 23.6404 18.9586 23.7507C19.0688 23.8609 19.2001 23.9478 19.3446 24.0061C19.4892 24.0645 19.644 24.0932 19.7998 24.0904C19.9557 24.0877 20.1094 24.0536 20.2517 23.9901C20.3941 23.9267 20.5223 23.8352 20.6285 23.7212L24.838 19.5117V34.5081C24.838 34.8159 24.9603 35.1112 25.178 35.3288C25.3957 35.5465 25.6909 35.6688 25.9988 35.6688C26.3066 35.6688 26.6018 35.5465 26.8195 35.3288C27.0372 35.1112 27.1595 34.8159 27.1595 34.5081V19.5117L31.369 23.7212Z" fill="white" />
                </svg>
                <p>Back To Top</p>
            </a>
        </div>
    </div>


<?php
}
if ($we_are_ct['show_section'] == 1) {
?>
    <div class="home-translation-process home-sec">
        <div class="translation-process home-contain">
            <svg class="translation-process-bg" width="123" height="985" viewBox="0 0 123 985" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.24" d="M-763.079 293.943C-765.363 383.576 -647.105 451.897 -584.64 531.608C-542.431 585.471 -495.801 631.24 -455.562 686.364C-392.343 772.969 -373.406 894.567 -281.16 947.351C-188.503 1000.37 -74.0885 992.533 3.34762 948.957C79.2019 906.27 106.351 811.449 120.561 721.286C132.524 645.381 87.9557 563.91 76.776 483.05C65.4492 401.126 95.9807 321.465 54.4788 243.327C10.244 160.043 -69.0176 92.1562 -153.344 49.7914C-238.153 7.18366 -333.24 -11.6513 -413.357 8.28923C-489.086 27.1375 -517.462 107.722 -575.035 154.747C-636.542 204.986 -760.875 207.496 -763.079 293.943Z" fill="url(#paint0_linear_656_10582)" />
                <defs>
                    <linearGradient id="paint0_linear_656_10582" x1="155.431" y1="1106.65" x2="-467.944" y2="-0.150826" gradientUnits="userSpaceOnUse">
                        <stop offset="0.160314" stop-color="#47AEDF" />
                        <stop offset="1" stop-color="#BFEBFF" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="translation-process-left">
                <p class="transation-process-heading page-h2">
                    <?php echo $our_translation_process_section['heading'] ?>
                </p>

                <p class="translation-process-description page-p">
                    <?php echo $our_translation_process_section['description'] ?>
                </p>
                <div class="translation-process-bottom">
                    <div class="translation-process-point">
                        <div class="point-number point-number-one">
                            <span><?php echo $our_translation_process_section['step1']['step_number'] ?></span>
                            <svg width="1" height="155" viewBox="0 0 1 155" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.5" y1="0.5" x2="0.499993" y2="154.5" stroke="#F29111" stroke-linecap="round" stroke-dasharray="3 3" />
                            </svg>

                        </div>
                        <p class="page-p"><?php echo $our_translation_process_section['step1']['step_content'] ?></p>
                    </div>
                    <div class="translation-process-point">
                        <div class="point-number point-number-two">
                            <span><?php echo $our_translation_process_section['step2']['step_number'] ?></span>
                            <svg width="1" height="101" viewBox="0 0 1 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.5" y1="0.5" x2="0.499996" y2="100.5" stroke="#07C7F7" stroke-linecap="round" stroke-dasharray="3 3" />
                            </svg>

                        </div>
                        <p class="page-p"><?php echo $our_translation_process_section['step2']['step_content'] ?></p>
                    </div>
                    <div class="translation-process-point">
                        <div class="point-number point-number-three">
                            <span><?php echo $our_translation_process_section['step3']['step_number'] ?></span>
                        </div>
                        <p class="page-p"><?php echo $our_translation_process_section['step3']['step_content'] ?></p>
                    </div>
                </div>
            </div>
            <div class="translation-process-right">
                <img src="<?php echo $our_translation_process_section['section_image'] ?>" alt="">
            </div>
        </div>
    </div>


<?php
}
if ($our_translation_process_section['show_section'] == 1) {
?>
    <div class="home-core-services home-sec">
        <div class="core-services home-contain">
            <div>
                <!-- <img class="core-service-bg-right" src="<?php echo get_template_directory_uri() ?>/Images/core-services-bg-right.png" alt=""> -->
                <svg class="core-service-bg-right" width="749" height="1229" viewBox="0 0 749 1229" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.16" clip-path="url(#clip0_656_11252)">
                        <path opacity="0.74" d="M192.734 99.9161C156.984 207.191 311.02 324.329 131.855 493.082C17.2222 601.035 -75.309 795.779 88.9039 1009.75C253.117 1223.73 515.445 1263.73 825.97 1203.71C1136.49 1143.7 640.699 961.035 771.171 640.073C901.644 319.11 777.251 152.105 565.468 60.7743C353.685 -30.5565 232.737 -20.1187 192.734 99.9161Z" fill="url(#paint0_linear_656_11252)" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_656_11252" x1="-84.9401" y1="460.87" x2="977.998" y2="460.87" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0672CB" />
                            <stop offset="1" stop-color="#88C7FD" />
                        </linearGradient>
                        <clipPath id="clip0_656_11252">
                            <rect width="930.061" height="1229" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <!-- <img class="core-service-bg-left" src="<?php echo get_template_directory_uri() ?>/Images/core-services-bg-left.png" alt=""> -->
                <svg class="core-service-bg-left" width="751" height="1229" viewBox="0 0 751 1229" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <p class="core-service-heading page-h2"><?php echo $core_services_section['heading'] ?></p>
                <p class="core-service-description page-p"><?php echo $core_services_section['description'] ?></p>
            </div>
            <div class="core-service-card-container">
                <?php
                $categories = $core_services_section['cards'];

                $args = array(
                    'taxonomy'      => 'services-type',
                    'orderby'       => 'name',
                    'order'         => 'ASC',
                    'hide_empty'    => false,
                    'include'       => $categories,
                    'fields'        => 'all'
                );

                $terms = get_terms($args);

                foreach ($terms as $term) {
                    $icon_url = get_field('core_services_taxonomy_icon', 'services-type_' . $term->term_id);
                ?>
                    <div class="core-service-card">
                        <div class="core-service-card-top">
                            <?php if ($icon_url) : ?>
                                <img src="<?php echo esc_url($icon_url); ?>" alt="">
                            <?php endif; ?>
                            <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                <p><?php echo esc_html($term->name); ?></p>
                            </a>
                        </div>
                        <p class="service-card-description page-p"><?php echo esc_html($term->description); ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


<?php
}
if ($available_languages_section['show_section'] == 1) {
?>
    <div class="home-available-lanugage-section home-sec">
        <div class="availabe-language-section home-contain">
            <div class="availabe-language-left">

                <svg class="availabe-language-left-pic" xmlns="http://www.w3.org/2000/svg" width="625" height="529" viewBox="0 0 625 529" fill="none">

                    <image id="image" class="image__svg-image" width="100%" height="100%" clip-path="url(#mask)" x="-100px" xlink:href="<?php echo __($available_languages_section)['image'] ?>" />
                    <g filter="url(#filter0_d_155_170)">
                        <clipPath id="mask">
                            <path d="M16.6442 135.804C0.592945 214.458 14.1804 298.625 51.3919 370.244C176.288 610.341 513.256 521.787 596.23 295.434C610.579 256.27 616.774 209.635 593.477 175.04C567.316 136.203 514.38 126.919 467.602 127.826C420.825 128.733 371.874 135.949 328.902 117.419C256.979 86.3412 226.652 2.17483 136.54 10.5878C65.1967 17.2965 29.9056 70.9294 16.6442 135.804Z" fill="#C4C4C4" />
                        </clipPath>
                    </g>
                    <defs>
                        <filter id="filter0_d_155_170" x="0.639836" y="0.639836" width="623.96" height="527.96" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dx="3.12005" dy="3.12005" />
                            <feGaussianBlur stdDeviation="6.24011" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_155_170" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_155_170" result="shape" />
                        </filter>

                    </defs>
                </svg>




                <svg class="availabe-language-left-bg" xmlns="http://www.w3.org/2000/svg" width="627" height="608" viewBox="0 0 627 608" fill="none">
                    <path d="M389.637 537.527C423.831 503.968 436.548 455.003 459.988 414.012C488.987 363.326 518.015 312.669 547.014 261.982C557.858 243.012 568.823 223.831 574.774 202.807C585.708 164.203 571.723 119.709 547.95 88.3541C511.611 40.3859 441.925 18.9996 386.737 42.9837C352.12 58.0266 326.354 87.5084 296.872 111.039C255.217 144.297 205.678 165.895 156.774 187.1C107.174 208.607 58.9946 223.62 42.1695 281.405C24.1059 343.389 36.6719 413.65 71.1679 467.81C111.403 530.912 180.214 572.205 254.673 578.85C298.715 582.777 344.84 574.259 380.001 546.106C383.384 543.357 386.586 540.488 389.637 537.527Z" fill="url(#paint0_linear_155_116)" />
                    <path d="M22.9558 117.082C57.6633 26.7334 190.935 31.5967 229.116 116.628C240.716 142.455 243.042 173.236 261.921 194.32C287.234 222.563 332.242 221.808 368.037 209.363C403.832 196.918 436.425 175.139 473.579 167.617C538.523 154.477 592.412 210.692 610.627 268.477C630.654 332.002 612.922 404.347 571.207 456.272C529.492 508.198 466.148 540.398 400.418 551.212C326.926 563.295 246.999 548.373 189.757 500.737C158.312 474.578 135.325 438.088 125.024 398.517C116.868 367.132 122.457 332.395 112.398 301.765C101.946 269.958 69.1418 257.21 48.118 233.951C23.8016 207.037 10.7523 169.913 18.0321 133.876C19.2102 128.167 20.8716 122.549 22.9558 117.082Z" fill="#FF97A0" />
                    <path d="M279.472 107.204C276.028 113.094 274.035 119.74 274.156 126.566C274.397 140.643 283.852 153.692 296.388 160.096C322.517 173.447 354.838 160.247 372.629 139.102C381.691 128.349 386.253 112.611 380.272 99.8939C376.254 91.285 367.947 85.1833 358.946 82.1928C349.914 79.2023 340.187 79.0513 330.733 79.9575C317.351 81.2262 303.819 84.7302 292.884 92.5537C287.477 96.4504 282.825 101.495 279.472 107.204Z" fill="#85DFF7" />
                    <path d="M495.057 12.8991C476.057 10.543 451.559 19.6956 442.497 37.4873C427.937 66.0628 457.872 86.543 480.165 98.0819C500.886 108.805 518.285 123.999 534.778 140.341C546.71 152.152 558.491 175.653 575.95 180.002C636.907 195.166 581.176 89.8959 572.657 76.4841C555.319 49.1471 529.522 17.1582 495.057 12.8991Z" fill="#85DFF7" />
                    <path d="M263.009 75.5776C264.822 65.1261 255.73 54.0704 244.946 54.7048C235.793 55.2485 227.668 63.5855 227.789 72.7382C227.909 81.4679 235.401 89.5029 244.1 90.1976C252.83 90.8924 261.499 84.1865 263.009 75.5776Z" fill="#FF97A0" />
                    <path d="M162.632 89.1998C157.285 89.1998 152.936 84.8501 152.936 79.5035C152.936 74.1569 157.285 69.8071 162.632 69.8071C167.979 69.8071 172.328 74.1569 172.328 79.5035C172.328 84.8501 167.979 89.1998 162.632 89.1998ZM162.632 72.0726C158.524 72.0726 155.201 75.4256 155.201 79.5035C155.201 83.6116 158.554 86.9343 162.632 86.9343C166.74 86.9343 170.063 83.5814 170.063 79.5035C170.063 75.3954 166.74 72.0726 162.632 72.0726Z" fill="white" />
                    <path d="M9.69634 379.668C4.34976 379.668 0 375.318 0 369.971C0 364.625 4.34976 360.275 9.69634 360.275C15.0429 360.275 19.3927 364.625 19.3927 369.971C19.3927 375.318 15.0731 379.668 9.69634 379.668ZM9.69634 362.51C5.58824 362.51 2.2655 365.863 2.2655 369.941C2.2655 374.049 5.61844 377.372 9.69634 377.372C13.8045 377.372 17.1272 374.019 17.1272 369.941C17.1574 365.863 13.8045 362.51 9.69634 362.51Z" fill="white" />
                    <path d="M340.762 608C335.415 608 331.065 603.65 331.065 598.303C331.065 592.957 335.415 588.607 340.762 588.607C346.108 588.607 350.458 592.957 350.458 598.303C350.488 603.65 346.139 608 340.762 608ZM340.762 590.842C336.654 590.842 333.331 594.195 333.331 598.273C333.331 602.351 336.684 605.704 340.762 605.704C344.87 605.704 348.193 602.351 348.193 598.273C348.193 594.195 344.87 590.842 340.762 590.842Z" fill="white" />
                    <path d="M396.07 179.125C390.724 179.125 386.374 174.775 386.374 169.429C386.374 164.082 390.724 159.733 396.07 159.733C401.417 159.733 405.767 164.082 405.767 169.429C405.797 174.775 401.417 179.125 396.07 179.125ZM396.07 161.998C391.962 161.998 388.64 165.351 388.64 169.429C388.64 173.537 391.993 176.86 396.07 176.86C400.179 176.86 403.501 173.507 403.501 169.429C403.531 165.321 400.179 161.998 396.07 161.998Z" fill="white" />
                    <path d="M619.538 233.679C618.904 233.679 618.391 233.166 618.391 232.531V221.143C618.391 220.509 618.904 219.995 619.538 219.995C620.173 219.995 620.686 220.509 620.686 221.143V232.531C620.686 233.166 620.173 233.679 619.538 233.679Z" fill="white" />
                    <path d="M625.248 227.97H613.86C613.226 227.97 612.712 227.456 612.712 226.822C612.712 226.187 613.226 225.674 613.86 225.674H625.248C625.882 225.674 626.396 226.187 626.396 226.822C626.365 227.486 625.852 227.97 625.248 227.97Z" fill="white" />
                    <path d="M438.663 13.6836C438.028 13.6836 437.515 13.1701 437.515 12.5358V1.14785C437.515 0.513514 438.028 0 438.663 0C439.297 0 439.81 0.513514 439.81 1.14785V12.566C439.78 13.1701 439.267 13.6836 438.663 13.6836Z" fill="white" />
                    <path d="M444.341 7.97421H432.953C432.318 7.97421 431.805 7.4607 431.805 6.82636C431.805 6.19202 432.318 5.6785 432.953 5.6785H444.341C444.975 5.6785 445.488 6.19202 445.488 6.82636C445.488 7.4607 444.975 7.97421 444.341 7.97421Z" fill="white" />
                    <path d="M576.857 382.507C576.222 382.507 575.709 381.993 575.709 381.359V369.941C575.709 369.306 576.222 368.793 576.857 368.793C577.491 368.793 578.005 369.306 578.005 369.941V381.359C578.005 381.993 577.491 382.507 576.857 382.507Z" fill="white" />
                    <path d="M582.566 376.798H571.178C570.544 376.798 570.03 376.285 570.03 375.65C570.03 375.016 570.544 374.502 571.178 374.502H582.566C583.2 374.502 583.714 375.016 583.714 375.65C583.714 376.285 583.2 376.798 582.566 376.798Z" fill="white" />
                    <path d="M416.822 156.38C416.187 156.38 415.674 155.867 415.674 155.233V143.845C415.674 143.21 416.187 142.697 416.822 142.697C417.456 142.697 417.97 143.21 417.97 143.845V155.233C417.97 155.867 417.456 156.38 416.822 156.38Z" fill="white" />
                    <path d="M422.531 150.671H411.143C410.509 150.671 409.995 150.158 409.995 149.523C409.995 148.889 410.509 148.375 411.143 148.375H422.531C423.166 148.375 423.679 148.889 423.679 149.523C423.679 150.158 423.166 150.671 422.531 150.671Z" fill="white" />
                    <path d="M374.472 574.955C373.838 574.955 373.324 574.441 373.324 573.807V562.419C373.324 561.784 373.838 561.271 374.472 561.271C375.106 561.271 375.62 561.784 375.62 562.419V573.807C375.59 574.471 375.106 574.955 374.472 574.955Z" fill="white" />
                    <path d="M380.181 569.276H368.793C368.159 569.276 367.646 568.762 367.646 568.128C367.646 567.494 368.159 566.98 368.793 566.98H380.181C380.816 566.98 381.329 567.494 381.329 568.128C381.329 568.762 380.785 569.276 380.181 569.276Z" fill="white" />
                    <path d="M297.113 65.4273C296.478 65.4273 295.965 64.9138 295.965 64.2795V52.8915C295.965 52.2572 296.478 51.7437 297.113 51.7437C297.747 51.7437 298.26 52.2572 298.26 52.8915V64.2795C298.26 64.9138 297.747 65.4273 297.113 65.4273Z" fill="white" />
                    <path d="M302.822 59.7179H291.434C290.8 59.7179 290.286 59.2044 290.286 58.57C290.286 57.9357 290.8 57.4222 291.434 57.4222H302.822C303.456 57.4222 303.97 57.9357 303.97 58.57C303.97 59.2044 303.456 59.7179 302.822 59.7179Z" fill="white" />
                    <defs>
                        <linearGradient id="paint0_linear_155_116" x1="-0.0107383" y1="303.991" x2="626.395" y2="303.991" gradientUnits="userSpaceOnUse">
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
            <div class="availabe-language-right">
                <div class="language-right-first page-h2">
                    <?php echo __($available_languages_section)['heading'] ?>
                </div>
                <div class="language-right-second page-p">
                    <?php echo __($available_languages_section)['description'] ?>
                </div>
                <p class="language-right-third"></p>
                <a href="<?php echo __($available_languages_section)['cta_button_link'] ?>">
                    <button> <?php echo __($available_languages_section)['cta_button_text'] ?></button>
                </a>
            </div>
        </div>
    </div>


<?php
}
if ($professional_translation_services_for_any_industry['show_section'] == 1) {
?>
    <div class="home-professional-translation home-sec">
        <div class="professional-translation home-contain">
            <div class="professional-translation-left">
                <p class="professional-translation-left-first page-h2"><?php echo $professional_translation_services_for_any_industry['heading'] ?></p>
                <div class="professional-translation-left-second page-p">
                    <?php echo $professional_translation_services_for_any_industry['description'] ?>
                </div>
                <a href="<?php echo $professional_translation_services_for_any_industry['cta_button_link'] ?>">
                    <button><?php echo $professional_translation_services_for_any_industry['cta_button_text'] ?></button>
                </a>
            </div>
            <div class="professional-translation-right">
                <?php $post_ids =  $professional_translation_services_for_any_industry['industries'];
                $args = array(
                    'post_type'      => 'ct-industry',
                    'post_status'    => 'publish',
                    'post__in'       => $post_ids,
                    'order'          => 'ASC',
                    'posts_per_page' => '12'
                );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata($post);
                ?>
                    <div class="professional-translation-right-card">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                        <a href="<?php echo get_the_permalink() ?>">
                            <p><?php echo __(the_title()) ?></p>
                        </a>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>

<?php
}
if ($how_we_work_section['show_section'] == 1) {
?>
    <div class="home-how-we-work home-sec">
        <div class="how-we-work home-contain">
            <svg class="how-we-work-top-bg" width="1920" height="478" viewBox="0 0 1920 478" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.74" d="M1821.69 258.166C1642.05 210.387 1445.9 416.253 1163.32 176.803C982.548 23.5984 656.444 -100.067 298.136 119.399C-60.1724 338.866 -127.159 689.461 -26.6576 1104.47C73.8435 1519.48 379.716 856.86 917.179 1031.23C1454.64 1205.61 1734.3 1039.36 1887.23 756.316C2040.17 473.273 2022.69 311.629 1821.69 258.166Z" fill="url(#paint0_linear_656_13386)" />
                <defs>
                    <linearGradient id="paint0_linear_656_13386" x1="1217.26" y1="-112.939" x2="1217.26" y2="1307.65" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                </defs>
            </svg>
            <svg class="how-we-work-bottom-bg" width="1920" height="478" viewBox="0 0 1920 478" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.74" d="M1821.69 258.166C1642.05 210.387 1445.9 416.253 1163.32 176.803C982.548 23.5984 656.444 -100.067 298.136 119.399C-60.1724 338.866 -127.159 689.461 -26.6576 1104.47C73.8435 1519.48 379.716 856.86 917.179 1031.23C1454.64 1205.61 1734.3 1039.36 1887.23 756.316C2040.17 473.273 2022.69 311.629 1821.69 258.166Z" fill="url(#paint0_linear_656_13386)" />
                <defs>
                    <linearGradient id="paint0_linear_656_13386" x1="1217.26" y1="-112.939" x2="1217.26" y2="1307.65" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                </defs>
            </svg>
            <div>
                <p class="how-we-work-top-heading page-h2">
                    <?php echo __($how_we_work_section)['heading'] ?>
                </p>
                <p class="how-we-work-top-description page-p">
                    <?php echo __($how_we_work_section)['description'] ?>
                </p>
            </div>
            <div class="how-we-work-card-container">
                <img class="how-we-work-right-card-line" src="<?php echo get_template_directory_uri() ?>/Images/long-line.png" alt="">
                <!-- ---------------------------------------------------------------------------------------------- -->
                <!--                                  Make It Using Loop Not Repeat                                 -->
                <!-- ---------------------------------------------------------------------------------------------- -->
                <div class="how-we-work-right-card how-we-work-card">
                    <img src="<?php echo __($how_we_work_section)['steps']['Step1']['step_icon'] ?>" alt="">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14" cy="14.002" r="12" fill="#42CD83" stroke="white" stroke-width="4" />
                    </svg>
                    <div class="how-work-card-inner">
                        <p><?php echo __($how_we_work_section)['steps']['Step1']['heading'] ?></p>

                        <?php echo __($how_we_work_section)['steps']['Step1']['description'] ?>

                    </div>
                </div>
                <div class="how-we-work-left-card how-we-work-card">
                    <div class="how-work-card-inner">
                        <p><?php echo __($how_we_work_section)['steps']['Step2']['heading'] ?></p>

                        <?php echo __($how_we_work_section)['steps']['Step2']['description'] ?>

                    </div>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14" cy="14" r="12" transform="matrix(-1 0 0 1 28 0.00390625)" fill="#F29111" stroke="white" stroke-width="4" />
                    </svg>
                    <img src="<?php echo __($how_we_work_section)['steps']['Step2']['step_icon'] ?>" alt="">

                </div>
                <div class="how-we-work-right-card how-we-work-card">
                    <img src="<?php echo __($how_we_work_section)['steps']['Step3']['step_icon'] ?>" alt="">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14" cy="14.0039" r="12" fill="#7164EA" stroke="white" stroke-width="4" />
                    </svg>

                    <div class="how-work-card-inner">
                        <p><?php echo __($how_we_work_section)['steps']['Step3']['heading'] ?></p>

                        <?php echo __($how_we_work_section)['steps']['Step3']['description'] ?>

                    </div>
                </div>
                <div class="how-we-work-left-card how-we-work-card">
                    <div class="how-work-card-inner">
                        <p><?php echo __($how_we_work_section)['steps']['Step4']['heading'] ?></p>

                        <?php echo __($how_we_work_section)['steps']['Step4']['description'] ?>

                    </div>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14" cy="14" r="12" transform="matrix(-1 0 0 1 28 0.00390625)" fill="#F90BAD" stroke="white" stroke-width="4" />
                    </svg>

                    <img src="<?php echo __($how_we_work_section)['steps']['Step4']['step_icon'] ?>" alt="">

                </div>
                <div class="how-we-work-right-card how-we-work-card">
                    <img src="<?php echo __($how_we_work_section)['steps']['Step5']['step_icon'] ?>" alt="">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14" cy="14.0039" r="12" fill="#00CCFF" stroke="white" stroke-width="4" />
                    </svg>

                    <div class="how-work-card-inner">
                        <p><?php echo __($how_we_work_section)['steps']['Step5']['heading'] ?></p>

                        <?php echo __($how_we_work_section)['steps']['Step5']['description'] ?>

                    </div>
                </div>
                <div class="how-we-work-left-card how-we-work-card">
                    <div class="how-work-card-inner">
                        <p><?php echo __($how_we_work_section)['steps']['Step6']['heading'] ?></p>

                        <?php echo __($how_we_work_section)['steps']['Step6']['description'] ?>

                    </div>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14" cy="14" r="12" transform="matrix(-1 0 0 1 28 0.00390625)" fill="#A4CF0E" stroke="white" stroke-width="4" />
                    </svg>

                    <img src="<?php echo __($how_we_work_section)['steps']['Step6']['step_icon'] ?>" alt="">

                </div>
            </div>
        </div>
    </div>



<?php
}
if ($pricing_plans_section['show_section'] == 1) {
?>
    <div class="home-pricing-section home-sec">
        <div class="pricing-section home-contain">
            <div class="pricing-top">
                <p> <span class="page-h2"><?php echo $pricing_plans_section['main_heading'] ?></span>
                </p>
                <p class="page-p"><?php echo $pricing_plans_section['sub_heading'] ?></p>
            </div>
            <div class="pricing-card-container ">
                <?php
                $post_ids = carbon_get_post_meta(get_the_ID(), 'ct-service-pricing-plans');
                foreach ($post_ids as $post_id) {
                    $plan_name = $post_id['plan_name'];
                    $plan_price = $post_id['plan_price'];
                    $plan_icon = $post_id['plan_icon'];
                    $recommended = $post_id['recommended'];
                    $plan_features = $post_id['plan_features'];

                ?>
                    <div class="price-card basic-price-card">
                        <?php if ($recommended === 'yes') { ?>
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
                            <p><?php echo esc_html($plan_name); ?></p>
                            <img src="<?php echo esc_url($plan_icon); ?>" alt="">
                        </div>
                        <p class="price-card-price"><?php echo $plan_price; ?></p>
                        <hr>
                        <div class="price-card-features">
                            <p class="price-features-heading">Features</p>
                            <?php
                            foreach ($plan_features as $feature) {
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
                                    <p><?php echo esc_html($feature['feature']); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                        <button><a href="<?php echo get_default_content(esc_url($post_id['quote_button_url']), site_url('get-a-quote')); ?>"><?php echo get_default_content($post_id['quote_button_text'], "Get a Quote"); ?></a></button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


<?php
}
if ($i_need_a_translator_section['show_section'] == 1) {
?>
    <div class="home-need-a-translator-section home-sec">
        <div class="need-a-translator-section home-contain">
            <div class="need-a-translator-left">
                <p class="need-a-translator-heading page-h2">
                    <?php echo __($i_need_a_translator_section)['heading'] ?>
                </p>
                <div class="need-a-translator-subheading page-p">
                    <?php echo __($i_need_a_translator_section)['top_content'] ?>
                </div>
                <div class="need-translation-card">
                    <img src="<?php echo __($i_need_a_translator_section)['benefit1']['benefit_icon'] ?>" alt="">
                    <p class="page-p">
                        <?php echo __($i_need_a_translator_section)['benefit1']['benefit_text'] ?>
                    </p>
                </div>
                <div class="need-translation-card">
                    <img src="<?php echo __($i_need_a_translator_section)['benefit2']['benefit_icon'] ?>" alt="">
                    <p class="page-p">
                        <?php echo __($i_need_a_translator_section)['benefit2']['benefit_text'] ?>
                    </p>
                </div>
                <div class="need-translation-card">
                    <img src="<?php echo __($i_need_a_translator_section)['benefit3']['benefit_icon'] ?>" alt="">
                    <p class="page-p">
                        <?php echo __($i_need_a_translator_section)['benefit3']['benefit_text'] ?>
                    </p>
                </div>
                <div class="need-translator-description page-p">
                    <?php echo __($i_need_a_translator_section)['top_content'] ?>
                </div>
                <a href="<?php echo __($i_need_a_translator_section)['cta_button_link'] ?>">
                    <button><?php echo __($i_need_a_translator_section)['cta_button_text'] ?></button>
                </a>
            </div>
            <div class="need-a-translator-right">
                <!-- <img class="need-translator-bg" src="<?php echo get_template_directory_uri() ?>/Images/need-translator-bg.png" alt=""> -->
                <svg class="need-translator-bg" width="870" height="675" viewBox="0 0 870 675" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.24" d="M895.198 552.921C841.406 611.169 724.381 581.544 635.683 593.559C575.748 601.678 517.999 601.938 458.535 612.071C365.111 627.993 278.176 693.42 187.205 669.989C95.8298 646.453 28.1743 570.906 5.97144 495.506C-15.7779 421.646 25.4584 344.77 72.0217 278.829C111.221 223.317 189.665 199.146 246.581 154.767C304.245 109.803 333.996 40.454 408.443 16.5054C487.793 -9.02008 579.845 -3.17596 659.377 21.9767C739.365 47.2736 811.213 93.9848 849.681 156.051C886.041 214.717 854.356 283.322 861.85 348.656C869.855 418.455 947.077 496.743 895.198 552.921Z" fill="url(#paint0_linear_656_16860)" />
                    <defs>
                        <linearGradient id="paint0_linear_656_16860" x1="-187.563" y1="501.691" x2="889.626" y2="184.92" gradientUnits="userSpaceOnUse">
                            <stop offset="0.160314" stop-color="#47AEDF" />
                            <stop offset="1" stop-color="#BFEBFF" />
                        </linearGradient>
                    </defs>
                </svg>
                <img class="need-translator-right-img" src="<?php echo get_template_directory_uri() ?>/Images/need-translator-img.webp" alt="">
            </div>
        </div>
    </div>


<?php
}
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
                            <?php $post_ids = $translation_services_faqs_section_fields['testimonials'];
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

<?php
}
if ($next_step_section['show_section'] == 1) {
?>
    <div class="home-next-step-section home-sec">
        <div class="next-step-section home-contain">
            <p class="next-step-heading page-h2">
                <?php echo __($next_step_section)['main_heading'] ?>
            </p>
            <p class="next-step-description page-p">
                <?php echo __($next_step_section)['sub_heading'] ?>
            </p>
            <div class="next-step-card-container">
                <div class="next-step-card next-step-orange-card">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card1.webp" alt="">
                    <div class="step-number">Step 01</div>
                    <p class="step-card-para"></p>
                    <div class="actual-heading page-p">
                        <?php echo __($next_step_section)['step_1_heading'] ?></div>
                    <div class="actual-para">
                        <?php echo __($next_step_section)['step_1_description'] ?>
                    </div>
                </div>
                <div class="next-step-card next-step-green-card">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card2.webp" alt="">
                    <div class="step-number">Step 02</div>
                    <p class="step-card-para"></p>
                    <div class="actual-heading page-p">
                        <?php echo __($next_step_section)['step_2_heading'] ?></div>
                    <div class="actual-para">
                        <?php echo __($next_step_section)['step_2_description'] ?>
                    </div>
                </div>
                <div class="next-step-card next-step-blue-card">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card3.webp" alt="">
                    <div class="step-number">Step 03</div>
                    <p class="step-card-para"></p>
                    <div class="actual-heading page-p">
                        <?php echo __($next_step_section)['step_3_heading'] ?></div>
                    <div class="actual-para">
                        <?php echo __($next_step_section)['step_3_description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
if ($contact_us_section['show_section'] == 1) {
?>

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
                <p class="lets-get-started-heading page-h2"><?php echo __($contact_us_section)['main_heading'] ?></p>
                <p class="lets-get-started-description page-p"><?php echo __($contact_us_section)['main_heading'] ?></p>
                <?php echo do_shortcode($contact_us_section['contact_form']) ?>
            </div>
        </div>
    </div>

<?php
}
if ($faqs_section['show_section'] == 1) {
?>
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
<?php
}
if ($blogs_section['show_section'] == 1) {
?>
    <div class="home-latest-article-blog home-sec">
        <div class="latest-article-blog home-contain">
            <p class="latest-article-heading page-h2"><?php echo __($blogs_section['main_heading']) ?></p>
            <p class="latest-article-description page-p"><?php echo __($blogs_section['sub_heading']) ?></p>
            <div class="latest-article-card-container-outer">
                <svg class="prev-slide-btn home-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" fill-opacity="0.08" />
                    <path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="#383F99" />
                </svg>
                <div class="swiper mySwiper home-article-card-swiper">
                    <div class="swiper-wrapper">
                        <?php $post_ids = $blogs_section['blogs'];
                        $args = array(
                            'post_type'      => 'post',
                            'post_status'    => 'publish',
                            'post__in'       => $post_ids,
                            'order'          => 'DESC',
                            'posts_per_page' => '8'
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            setup_postdata($post);
                        ?>
                            <div class="swiper-slide home-latest-article-card-box">
                                <div class="latest-article-card">
                                    <img style="width: 100%; height: 333px; border-radius: 10px; object-fit: cover;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                                    <p class="latest-article-card-category"><?php echo get_the_category()[0]->name ?></p>
                                    <p class="latest-article-card-title"><?php echo __(get_the_title()) ?></p>
                                    <div class="latest-article-card-description"><?php echo __(the_content()) ?></div>
                                    <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><button>Read More</button></a>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <svg class="next-slide-btn home-card-next-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="28" cy="28.498" r="28" fill="#383F99" />
                    <path d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z" fill="white" />
                </svg>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
if ($get_a_quote_section['show_section'] == 1) {
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
                    <a href="<?php echo get_default_content($get_a_quote_section['cta_button_link'], site_url('get-a-quote')); ?>"></a><button><?php echo get_default_content($get_a_quote_section['cta_button_text'], "Get a Quote"); ?></button>
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

        randomColor(".faq-card .target-img", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)']);
        randomColor(".faq-card .read-more", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)']);
        generateRandomSVG('.core-service-card-top');

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

        var priceCardSwiper = new Swiper(".price-card-swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".price-card-next-slide",
                prevEl: ".price-card-prev-slide",
            }
        });

        var homeArticleSwiper = new Swiper(".home-article-card-swiper", {
            slidesPerView: 3,
            spaceBetween: 28,
            navigation: {
                nextEl: ".home-card-next-slide",
                prevEl: ".home-card-prev-slide",
            }
        });

        var blogHomeTopPostSwiper = new Swiper(".blog-home-top-post-swiper", {
            slidesPerView: 1,
            spaceBetween: 18,
            navigation: {
                nextEl: ".blog-home-card-next-slide",
                prevEl: ".blog-home-card-prev-slide",
            }
        });
        var homeTestimonialCard = new Swiper(".home-feedback-card-swiper", {
            slidesPerView: 1,
            breakpoints: {
                1229: {
                    slidesPerView: 2,
                },
            },
            spaceBetween: 30,
            navigation: {
                nextEl: ".home-feedback-card-next-slide",
                prevEl: ".home-feedback-card-prev-slide",
            }
        });
    });
</script>
<?php get_footer(); ?>