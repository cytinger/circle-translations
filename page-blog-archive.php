<?php

/* ---------------------------------------------------------------------------------------------- */
/*                                   Template Name: Blog Archive Template                                 */
/* ---------------------------------------------------------------------------------------------- */

get_header();

/* ---------------------------------------------------------------------------------------------- */
/*                                       Initial Cpt Fields                                       */
/* ---------------------------------------------------------------------------------------------- */

$hero_section = get_field('hero_section');
$sidebar_fields = get_field('sidebar_fields');

$social_media_widget = $sidebar_fields['social_media_widget'];
$category_widget = $sidebar_fields['category_widget'];
$top_posts_widget = $sidebar_fields['top_posts_widget'];

$main_section = get_field('main_section');
$contact_us_section = get_field('contact_us_section');
$get_a_quote_section = get_field('get_a_quote_section');


if (have_posts()) :
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <section>
        <div class="heroMain" style="background: url(https://ct.sn66.me/wp-content/themes/circle-translations/Images/pricingMainBg.png), #383F99;">
            <h2><span><?php echo __($hero_section['heading']) ?></span></h2>
            <p><?php echo bloginfo('title') ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33424 13.9985V1.99848C3.33462 1.87698 3.36813 1.75789 3.43116 1.65403C3.49419 1.55016 3.58435 1.46545 3.69194 1.40901C3.79953 1.35258 3.92048 1.32655 4.04176 1.33374C4.16304 1.34093 4.28007 1.38106 4.38024 1.44981L13.0469 7.44981C13.4062 7.69848 13.4062 8.29714 13.0469 8.54648L4.38024 14.5465C4.28028 14.6159 4.16319 14.6567 4.04171 14.6642C3.92023 14.6718 3.79899 14.646 3.69117 14.5895C3.58335 14.533 3.49307 14.448 3.43014 14.3438C3.36722 14.2396 3.33405 14.1202 3.33424 13.9985Z" fill="white" />
                </svg>
                <span>Blogs</span>
            </p>
        </div>
    </section>

    <div class="blogs blogsSingle archiveBlogs">
        <div class="container">
            <div class="sidebar">
                <div class="sidebar-widgets">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/logo.svg" alt="">
                    <div class="socialIcons">
                        <?php foreach ($social_media_widget as $social_media) { ?>
                            <div>
                                <a href="<?php echo $social_media['url'] ?>"><img src="<?php echo $social_media['icon'] ?>" alt=""></a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <h2><?php echo __($category_widget['heading']) ?> </h2>
                            <ul>
                                <li>All Categories </li>
                                <?php
                                $categories = $category_widget['categories'];
                                $predefined_categories = get_terms(array(
                                    'taxonomy' => 'category',
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'include' => $categories,
                                    'fields' => 'all'
                                ));

                                foreach ($predefined_categories as $category) {
                                ?>
                                    <li><a href="<?php echo esc_url(get_term_link($category)); ?>"><?php echo esc_html($category->name); ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="card ">
                            <h2><?php echo __($top_posts_widget['heading']) ?></h2>
                            <div class="posts">
                                <?php $post_ids = $top_posts_widget['top_posts'];
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status'    => 'publish',
                                    'post__in'       => $post_ids,
                                    'order'          => 'ASC',
                                    'posts_per_page' => '3'
                                );
                                $posts = get_posts($args);
                                foreach ($posts as $post) {
                                    setup_postdata($post);
                                ?>
                                    <div class="post">
                                        <img style="width: 100px; height: 100px; border-radius: 5px; object-fit: cover;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                                        <div class="title">
                                            <p class="time"><?php echo esc_html(get_the_time('j F, Y')); ?></p>
                                            <a href="<?php echo get_the_permalink(get_the_ID()) ?>">
                                                <p><?php echo the_title() ?></p>
                                            </a>
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
            <div class="mainContent">
                <p class="archiveHeading"><?php echo __($main_section['heading']) ?></p>
                <div class="blogContent">
                    <div class="single-archive-cards">
                        <?php $post_ids = $main_section['featured_post'];
                        $args = array(
                            'post_type'      => 'post',
                            'post_status'    => 'publish',
                            'post__in'       => $post_ids,
                            'order'          => 'ASC',
                            'posts_per_page' => '3'
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            setup_postdata($post);
                        ?>
                            <div class="single-archive-card">
                                <img style="height: 335px; object-fit: cover;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                                <div class="card-content">
                                    <a href="<?php echo get_term_link(get_the_category()[0]); ?>">
                                        <h3><?php echo get_the_category()[0]->name ?></h3>
                                    </a>
                                    <h2><?php echo the_title() ?></h2>
                                    <div><?php echo esc_html(wp_trim_words(get_the_content(), 30)); ?></div>
                                    <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><button class="red-button">Read More</button></a>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                    <div class="archive-cards-sec">
                        <?php
                        $args = array(
                            'post_type'      => 'post',
                            'post_status'    => 'publish',
                            'order'          => 'DESC',
                            'posts_per_page' => '6',
                            'paged'          => '1'
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            setup_postdata($post);
                        ?>
                            <div class="archive-card">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                                <div class="card-content">
                                    <a href="<?php echo get_term_link(get_the_category()[0]); ?>">
                                        <h3><?php echo get_the_category()[0]->name ?></h3>
                                    </a>
                                    <h2><?php echo the_title() ?></h2>
                                    <div class="post-content"><?php echo esc_html(wp_trim_words(get_the_content(), 30)); ?></div>
                                    <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><button class="red-button">Read More</button></a>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="archive-pagination">
                        <button class="pagination-button 01 active">01</button>
                        <button class="pagination-button 02">02</button>
                        <button class="pagination-button pagination-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3.33229 13.999L3.33229 1.99897C3.33267 1.87747 3.36618 1.75838 3.4292 1.65452C3.49223 1.55065 3.5824 1.46594 3.68999 1.4095C3.79758 1.35307 3.91853 1.32704 4.03981 1.33423C4.16109 1.34142 4.27812 1.38155 4.37829 1.4503L13.045 7.4503C13.4043 7.69897 13.4043 8.29763 13.045 8.54697L4.37829 14.547C4.27832 14.6164 4.16124 14.6571 4.03976 14.6647C3.91827 14.6723 3.79703 14.6464 3.68921 14.59C3.5814 14.5335 3.49112 14.4485 3.42819 14.3443C3.36526 14.2401 3.3321 14.1207 3.33229 13.999Z" fill="#383F99" />
                            </svg>
                        </button>

                        <div class="pagination">
                            <?php
                            the_posts_pagination(array(
                                'prev_text' => __('Previous', 'textdomain'),
                                'next_text' => __('Next', 'textdomain'),
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------------------------------------------------------- -->
    <!--                                    Section: Lets Get Started                                   -->
    <!-- ---------------------------------------------------------------------------------------------- -->

    <div class="home-lets-get-started-section home-sec">
        <div class="lets-get-started-section home-contain">
            <div class="lets-get-started-left">
                <svg class="lets-get-started-left-pic" xmlns="http://www.w3.org/2000/svg" width="753" height="638" viewBox="0 0 753 638" fill="none">
                    <image id="image" class="image__svg-image" width="100%" height="100%" clip-path="url(#mask2)" x="-100px" xlink:href="<?php echo __($contact_us_section['main_image']) ?>" />
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
                <p class="lets-get-started-heading page-h2"><?php echo __($contact_us_section['main_heading']) ?></p>
                <p class="lets-get-started-description page-p"><?php echo __($contact_us_section['sub_heading']) ?></p>
                <?php echo do_shortcode($contact_us_section['contact_form']) ?>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------- -->
    <!--                              About-sec-10                               -->
    <!-- ----------------------------------------------------------------------- -->

    <div class="home-email-us-section home-sec">
        <div class="email-us-section home-contain">
            <img class="email-us-bg" src="<?php echo get_template_directory_uri() ?>/Images/email-us-bg.webp" alt="">
            <div class="email-us-inner">
                <div class="email-us-left">
                    <img src="<?php echo __($get_a_quote_section['main_image']) ?>" alt="">
                </div>
                <div class="email-us-right">
                    <p class="email-us-right-heading page-h2"><?php echo __($get_a_quote_section['main_heading']) ?></p>
                    <button>Get a Quote</button>
                    <div class="send-msg-container">
                        <label for=""><?php echo __($get_a_quote_section['sub_heading']) ?></label>
                        <?php echo do_shortcode($get_a_quote_section['quote_form']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() ?>/libraries/jquery/jquery.js"></script>
    <script>
        var container = $('.archive-cards-container');
        var pagination = $('.pagination-sec');

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();

            var page = $(this).attr('href').split('/').pop();
            loadPosts(page);
        });

        function loadPosts(page) {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {
                    action: 'load_posts_pagination',
                    page: page,
                },
                success: function(response) {
                    container.html(response);
                    $('html, body').animate({
                        scrollTop: container.offset().top
                    }, 800);
                },
            });
        }


        // window.addEventListener('scroll', function() {
        // const sidebar = document.querySelector('.sidebar');
        // const container = document.querySelector('.archiveBlogs');
        // const containerRect = container.getBoundingClientRect();
        // const sidebarRect = sidebar.getBoundingClientRect();
        // const bottomOffset = containerRect.bottom - sidebarRect.height;

        // if (window.scrollY >= containerRect.top && window.scrollY <= bottomOffset) {
        //     sidebar.classList.add('sticky');
        //     const scrollPosition = window.scrollY - containerRect.top;
        //     sidebar.style.top = `${scrollPosition}px`;
        // } else if (window.scrollY > bottomOffset) {
        //     sidebar.classList.remove('sticky');
        //     sidebar.style.top = `${containerRect.height - sidebarRect.height}px`;
        // } else {
        //     sidebar.classList.remove('sticky');
        //     sidebar.style.top = '0';
        // }
        // });
    </script>

<?php

endif;

get_footer();

?>