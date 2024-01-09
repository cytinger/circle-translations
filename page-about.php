<?php
/* -------------------------------------------------------------------------- */
/*                           Template Name: About Us                          */
/* -------------------------------------------------------------------------- */

get_header();

/* ---------------------------------------------------------------------------------------------- */
/*                                       Initial Cpt Fields                                       */
/* ---------------------------------------------------------------------------------------------- */

$hero_section = get_field('hero_section');
$who_are_we_section = get_field('who_are_we_section');
$how_we_do_section = get_field('how_we_do_section');
$our_mission_section = get_field('our_mission_section');
$testimonials_section = get_field('testimonials_section');
$next_step_section = get_field('next_step_section');
$contact_us_section = get_field('contact_us_section');
$blogs_section = get_field('blogs_section');
$get_a_quote_section = get_field('get_a_quote_section');
?>
<?php
if ($hero_section['show_section'] == 1) {
?>
  <!-- ----------------------------------------------------------------------- -->
  <!--                               About-sec-1                               -->
  <!-- ----------------------------------------------------------------------- -->

  <section class="wrapper about-sec-1">
    <div class="bg-sec">
      <div class="empty-sec">
        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="446" viewBox="0 0 250 446" fill="none">
          <g filter="url(#filter0_f_1328_5323)">
            <circle cx="27" cy="223" r="45" fill="#383F99" />
          </g>
          <defs>
            <filter id="filter0_f_1328_5323" x="-196" y="0" width="446" height="446" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="89" result="effect1_foregroundBlur_1328_5323" />
            </filter>
          </defs>
        </svg>
      </div>
      <div class="img-sec">
        <div class="bg">
          <img src="<?php echo __($hero_section['main_image']) ?>" alt="" />
        </div>
        <div class="logo">
          <img src="<?php echo get_template_directory_uri() ?>/Images/about-sec-1.png" alt="" />
        </div>
      </div>
    </div>
    <div class="main-sec">
      <div class="content">
        <div class="text">
          <div class="heading-sec">
            <div class="lined-heading">
              <h1 class="page-h2"><?php echo __($hero_section['heading']) ?></h1>
              <img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="" />
            </div>
          </div>
          <p class="page-p"><?php echo __($hero_section['sub_heading']) ?></p>
          <ul>
            <?php foreach ($hero_section['list_items'] as $item) { ?>
              <li class=""><?php echo __($item) ?></li>
            <?php } ?>
          </ul>
          <button>Send Inquiry</button>
        </div>
      </div>
      <div class="space-sec"></div>
    </div>
  </section>

<?php }
if ($who_are_we_section['show_section'] == 1) {
?>
  <!-- ----------------------------------------------------------------------- -->
  <!--                               About-sec-2                               -->
  <!-- ----------------------------------------------------------------------- -->

  <section class="wrapper about-sec-2">
    <div class="bg-sec">
      <div class="img-sec">
        <div class="bg">
          <img src="<?php echo __($who_are_we_section['main_image']) ?>" alt="" />
        </div>
      </div>
      <div class="empty-sec">
        <svg xmlns="http://www.w3.org/2000/svg" width="664" height="475" viewBox="0 0 664 475" fill="none">
          <path opacity="0.24" d="M761.849 470.186C716.07 519.718 616.478 494.526 540.992 504.743C489.985 511.648 440.838 511.868 390.232 520.486C310.724 534.025 236.739 589.662 159.319 569.737C81.5549 549.723 23.9774 485.48 5.08185 421.362C-13.4277 358.553 21.6661 293.18 61.2934 237.106C94.6537 189.9 161.413 169.346 209.85 131.607C258.924 93.3718 284.244 34.3993 347.602 14.0341C415.132 -7.67207 493.472 -2.7024 561.157 18.6867C629.229 40.1984 690.375 79.9202 723.113 132.699C754.057 182.587 727.092 240.927 733.469 296.485C740.282 355.84 806.001 422.414 761.849 470.186Z" fill="url(#paint0_linear_1328_1348)" />
          <defs>
            <linearGradient id="paint0_linear_1328_1348" x1="-159.623" y1="426.622" x2="756.993" y2="156.858" gradientUnits="userSpaceOnUse">
              <stop offset="0.160314" stop-color="#47AEDF" />
              <stop offset="1" stop-color="#BFEBFF" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
    <div class="main-sec">
      <div class="space-sec"></div>
      <div class="content">
        <div class="text">
          <div class="heading-sec">
            <div class="lined-heading">
              <h1 class="page-h2"><?php echo __($who_are_we_section['heading']) ?></h1>
              <img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="" />
            </div>
          </div>
          <p class="page-p"><?php echo __($who_are_we_section['description']) ?></p>
        </div>
      </div>
    </div>
  </section>

<?php }
if ($how_we_do_section['show_section'] == 1) { ?>
  <!-- ----------------------------------------------------------------------- -->
  <!--                               About-sec-3                               -->
  <!-- ----------------------------------------------------------------------- -->

  <section class="wrapper about-sec-3">
    <div class="bg-sec">
      <div class="empty-sec">
        <svg xmlns="http://www.w3.org/2000/svg" width="124" height="950" viewBox="0 0 124 950" fill="none">
          <path opacity="0.24" d="M-762.34 259.046C-764.625 348.68 -646.367 417 -583.902 496.711C-541.693 550.575 -495.063 596.344 -454.824 651.468C-391.605 738.073 -372.667 859.671 -280.421 912.455C-187.765 965.474 -73.3502 957.637 4.0859 914.06C79.9402 871.374 107.089 776.553 121.3 686.389C133.262 610.485 88.694 529.014 77.5143 448.154C66.1874 366.229 96.719 286.568 55.2171 208.43C10.9823 125.147 -68.2793 57.2598 -152.605 14.8949C-237.415 -27.7128 -332.502 -46.5478 -412.619 -26.6073C-488.348 -7.75894 -516.724 72.825 -574.297 119.85C-635.803 170.089 -760.137 172.6 -762.34 259.046Z" fill="url(#paint0_linear_1328_1022)" />
          <defs>
            <linearGradient id="paint0_linear_1328_1022" x1="156.169" y1="1071.76" x2="-467.206" y2="-35.0473" gradientUnits="userSpaceOnUse">
              <stop offset="0.160314" stop-color="#47AEDF" />
              <stop offset="1" stop-color="#BFEBFF" />
            </linearGradient>
          </defs>
        </svg>
        <div class="blur-sec"></div>
      </div>
      <div class="img-sec">
        <div class="bg">
          <img src="<?php echo __($how_we_do_section['main_image']) ?>" alt="" />
        </div>
      </div>
    </div>
    <div class="main-sec">
      <div class="content">
        <div class="text">
          <div class="heading-sec">
            <div class="lined-heading">
              <h1 class="page-h2"><?php echo __($how_we_do_section['heading']) ?></h1>
              <img src="<?php echo get_template_directory_uri() ?>/Images/white-underline.png" alt="" />
            </div>
          </div>
          <p class="page-p"><?php echo __($how_we_do_section['description']) ?></p>
        </div>
      </div>
      <div class="space-sec"></div>
    </div>
  </section>
<?php }

if ($our_mission_section['show_section'] == 1) { ?>
  <!-- ----------------------------------------------------------------------- -->
  <!--                               About-sec-4                               -->
  <!-- ----------------------------------------------------------------------- -->

  <section class="wrapper about-sec-4">
    <div class="container">
      <div class="main-sec">
        <div class="heading-sec">
          <div class="lined-heading">
            <h1 class="core-service-heading page-h2"><?php echo __($our_mission_section['heading']) ?></h1>
            <img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="" />
          </div>
        </div>
        <div class="core-services-sec">
          <?php foreach ($our_mission_section['cards'] as $card) { ?>
            <div class="core-service-cardy">
              <div class="core-service-card-top">
                <img src="<?php echo __($card['card_image']) ?>" alt="" />
                <p><?php echo __($card['card_heading']) ?></p>
              </div>
              <p class="service-card-description page-p"><?php echo __($card['card_description']) ?></p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

<?php } ?>

<!-- ----------------------------------------------------------------------- -->
<!--                               About-sec-5                               -->
<!-- ----------------------------------------------------------------------- -->

<section class="wrapper about-sec-5">
  <div class="bg-sec">
    <svg xmlns="http://www.w3.org/2000/svg" width="347" height="527" viewBox="0 0 347 527" fill="none">
      <path opacity="0.24" d="M333.078 431.686C291.011 477.163 199.493 454.034 130.128 463.414C83.2561 469.753 38.0948 469.956 -8.40829 477.868C-81.4695 490.298 -149.456 541.38 -220.599 523.086C-292.058 504.711 -344.967 445.728 -362.33 386.86C-379.339 329.194 -347.091 269.174 -310.676 217.692C-280.021 174.351 -218.675 155.48 -174.165 120.831C-129.069 85.7263 -105.803 31.5826 -47.5822 12.885C14.4723 -7.04387 86.4605 -2.48112 148.657 17.1566C211.211 36.9069 267.399 73.3762 297.482 121.834C325.917 167.637 301.138 221.199 306.998 272.208C313.259 326.703 373.649 387.826 333.078 431.686Z" fill="url(#paint0_linear_1328_1019)" />
      <defs>
        <linearGradient id="paint0_linear_1328_1019" x1="-513.681" y1="391.689" x2="328.498" y2="143.617" gradientUnits="userSpaceOnUse">
          <stop offset="0.160314" stop-color="#47AEDF" />
          <stop offset="1" stop-color="#BFEBFF" />
        </linearGradient>
      </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="474" height="992" viewBox="0 0 474 992" fill="none">
      <path opacity="0.08" d="M155.412 911.345C126.584 824.758 250.798 730.209 106.321 594C13.8815 506.865 -60.7347 349.677 71.6849 176.966C204.105 4.25531 415.643 -28.0333 666.048 20.41C916.452 68.8533 516.647 216.289 621.859 475.356C727.071 734.422 626.762 869.221 455.982 942.939C285.202 1016.66 187.67 1008.23 155.412 911.345Z" fill="url(#paint0_linear_1328_1018)" />
      <defs>
        <linearGradient id="paint0_linear_1328_1018" x1="-68.5012" y1="620" x2="788.642" y2="620" gradientUnits="userSpaceOnUse">
          <stop stop-color="#0672CB" />
          <stop offset="1" stop-color="#88C7FD" />
        </linearGradient>
      </defs>
    </svg>
  </div>
  <div class="main-sec">
    <div class="heading-sec">
      <div class="lined-heading">
        <h1 class="company-milestone page-h2"><?php echo __('Our Company Milestone') ?></h1>
        <!-- <img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="" /> -->
      </div>
      <p class="page-p">Discover our company's rich journey through milestones, showcasing continuous growth and
        remarkable
        achievements.</p>
    </div>
    <div class="milestone-sec swiper">
      <div class="milestone-cards swiper-wrapper">
        <?php
        $features = carbon_get_post_meta(get_the_ID(), 'about_page_milestone_section_fields');
        foreach ($features as $feature) {
        ?>
          <div class="milestone-card swiper-slide">
            <div class="empty-space"></div>
            <div class="milestone-year">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <circle cx="14" cy="14" r="12" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 28 28)" fill="#A4CF0E" stroke="white" stroke-width="4" />
              </svg>
              <p><?php echo __($feature['year']) ?></p>
            </div>
            <div class="milestone-data">
              <h2 class="milestone-name"><?php echo __($feature['heading']) ?></h2>
              <p class="page-p"><?php echo __($feature['description']) ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="milestone-navs">
        <svg class="prev-slide-btn home-partner-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" />
          <path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="white" />
        </svg>
        <svg class="next-slide-btn home-partner-card-next-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="28" cy="28.498" r="28" fill="#383F99" />
          <path d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z" fill="white" />
        </svg>
      </div>
    </div>
  </div>
</section>

<?php
if ($testimonials_section['show_section'] == 1) {
?>

  <!-- ----------------------------------------------------------------------- -->
  <!--                               About-sec-6                               -->
  <!-- ----------------------------------------------------------------------- -->

  <div class="home-people-say-about-section home-sec">
    <div class="people-say-about-section home-contain">
      <!-- <img class="what-say-about-left-bg" src="<?php echo get_template_directory_uri() ?>/Images/what-say-about-left-bg.png" alt=""> -->
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
      <p class="people-say-about-heading page-h2"><?php echo __($testimonials_section['main_heading']) ?></p>
      <p class="people-say-about-description page-p"><?php echo __($testimonials_section['sub_heading']) ?></p>
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

<?php }
if ($next_step_section['show_section'] == 1) {
?>

  <!-- ----------------------------------------------------------------------- -->
  <!--                               About-sec-7                               -->
  <!-- ----------------------------------------------------------------------- -->

  <div class="home-next-step-section home-sec">
    <div class="next-step-section home-contain">
      <p class="next-step-heading page-h2"><?php echo __($next_step_section['main_heading']) ?></p>
      <p class="next-step-description page-p"><?php echo __($next_step_section['sub_heading']) ?></p>
      <div class="next-step-card-container">
        <div class="next-step-card next-step-orange-card">
          <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card1.webp" alt="">
          <div class="step-number">Step 01</div>
          <p class="step-card-para">
          <p class="actual-heading page-p"><?php echo __($next_step_section['step_1_heading']) ?></p>
          <p class="actual-para"><?php echo __($next_step_section['step_1_description']) ?></p>
        </div>
        <div class="next-step-card next-step-green-card">
          <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card2.webp" alt="">
          <div class="step-number">Step 02</div>
          <p class="step-card-para">
          <p class="actual-heading page-p"><?php echo __($next_step_section['step_2_heading']) ?></p>
          <p class="actual-para"><?php echo __($next_step_section['step_2_description']) ?></p>
        </div>
        <div class="next-step-card next-step-blue-card">
          <img src="<?php echo get_template_directory_uri() ?>/Images/next-step-card3.webp" alt="">
          <div class="step-number">Step 03</div>
          <p class="step-card-para">
          <p class="actual-heading page-p"><?php echo __($next_step_section['step_3_heading']) ?></p>
          <p class="actual-para"><?php echo __($next_step_section['step_3_description']) ?></p>
        </div>
      </div>
    </div>
  </div>

<?php }
if ($contact_us_section['show_section'] == 1) {
?>

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

<?php }
if ($blogs_section['show_section'] == 1) {
?>

  <!-- ---------------------------------------------------------------------------------------------- -->
  <!--                                          Blogs Section                                         -->
  <!-- ---------------------------------------------------------------------------------------------- -->
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

<?php }
if ($get_a_quote_section['show_section'] == 1) {
?>

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

<?php } ?>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    window.onload = () => {

      randomColor(".about-sec-5 .main-sec .milestone-sec .milestone-cards .milestone-card .milestone-year p", "color");
      randomColor(".about-sec-5 .main-sec .milestone-sec .milestone-cards .milestone-card .milestone-year svg circle", "fill");

      var milestoneSlider = new Swiper(".about-sec-5 .main-sec .milestone-sec", {
        slidesPerView: 6,
        spaceBetween: -80,
        freeMode: true,
        navigation: {
          nextEl: ".home-partner-card-next-slide",
          prevEl: ".home-partner-card-prev-slide",
        },
        breakpoints: {
          // when window width is >= 1920px
          1920: {
            slidesPerView: 6,
            spaceBetween: 20
          },
          // when window width is >= 1750px
          1750: {
            slidesPerView: 5,
            spaceBetween: 30
          },
          // when window width is >= 1300px
          1300: {
            slidesPerView: 4,
            spaceBetween: 40
          },
          // when window width is >= 1000px
          1000: {
            slidesPerView: 3,
            spaceBetween: 40
          },
          800: {
            slidesPerView: 3,
            spaceBetween: 20
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          450: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          }
        }
      });
      var homeTestimonialCard = new Swiper(".about-sec-6 .main-sec .testimonial-card-container-sec .testimonial-cards", {
        slidesPerView: 2,
        spaceBetween: 30,
        navigation: {
          nextEl: ".home-feedback-card-next-slide",
          prevEl: ".home-feedback-card-prev-slide",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          1050: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          1150: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          1920: {
            slidesPerView: 2,
            spaceBetween: 30
          },

        }
      });

      var homeArticleSwiper = new Swiper(".about-sec-9 .main-sec .blog-article-cards-sec .blog-article-cards", {
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
          nextEl: ".home-card-next-slide",
          prevEl: ".home-card-prev-slide",
        },
        breakpoints: {
          1920: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          1250: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          950: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          850: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          500: {
            slidesPerView: 1,
            spaceBetween: 30
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 30
          }
        }
      });

    }
  })

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


  var homeArticleSwiper = new Swiper(".home-article-card-swiper", {
    slidesPerView: 3,
    spaceBetween: 28,
    navigation: {
      nextEl: ".home-card-next-slide",
      prevEl: ".home-card-prev-slide",
    }
  });
</script>
<?php
get_footer()
?>