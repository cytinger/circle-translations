<?php
/* -------------------------------------------------------------------------- */
/*                        Template Name: Press Releases                       */
/* -------------------------------------------------------------------------- */

get_header();

$hero_section = get_field('hero_section');
$press_releases_section = get_field('press_releases_section');
$get_a_quote_section = get_field('get_a_quote_section');
?>

<!-- ----------------------------------------------------------------------- -->
<!--                          Press-releases-sec-1                           -->
<!-- ----------------------------------------------------------------------- -->
<?php if ($hero_section['show_section'] == 1) { ?>
  <section class="wrapper press-releases-sec-1">
    <div class="bg-sec"></div>
    <div class="main-sec">
      <div class="heading-sec">
        <div class="lined-heading">
          <h1 class="press-release-h2"><?php echo __($hero_section['heading']) ?></h1>
          <!-- <img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="" /> -->
        </div>
      </div>
      <div class="border-line"></div>
      <div class="press-releases-grid">
        <?php $post_ids = $hero_section['featured_press_releases'];
        $args = array(
          'post_type'      => 'ct-press-release',
          'post_status'    => 'publish',
          'post__in'       => $post_ids,
          'order'          => 'DESC',
          'posts_per_page' => '5'
        );
        $posts = get_posts($args);
        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="press-releases-card">
            <div class="card-thumbnail">
              <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="" />
            </div>
            <div class="card-content">
              <p class="card-category"><?php echo __("Press Release") ?></p>
              <a href="<?php echo get_field('url') ? get_field('url') : "javascript:void(0)" ?>" class="card-title"><?php echo the_title() ?></a>
              <span class="card-published-date"><?php echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'); ?></span>
            </div>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <!-- ----------------------------------------------------------------------- -->
  <!--                          Press-releases-sec-2                           -->
  <!-- ----------------------------------------------------------------------- -->
<?php }
if ($press_releases_section['show_section'] == 1) { ?>
  <section class="wrapper press-releases-sec-2">
    <div class="bg-sec">
      <svg xmlns="http://www.w3.org/2000/svg" width="573" height="763" viewBox="0 0 573 763" fill="none">
        <path opacity="0.24" d="M552.858 625.003C491.996 690.845 359.59 657.358 259.234 670.939C191.421 680.117 126.083 680.41 58.8029 691.865C-46.9006 709.862 -145.263 783.819 -248.19 757.333C-351.575 730.73 -428.123 645.333 -453.244 560.103C-477.852 476.614 -431.196 389.715 -378.512 315.178C-334.16 252.428 -245.406 225.107 -181.01 174.941C-115.767 124.116 -82.1057 45.7258 2.12689 18.6551C91.9059 -10.1982 196.057 -3.59222 286.042 24.8396C376.543 53.4345 457.834 106.235 501.358 176.393C542.498 242.708 506.649 320.256 515.127 394.108C524.184 473.007 611.556 561.502 552.858 625.003Z" fill="url(#paint0_linear_1210_442)" />
        <defs>
          <linearGradient id="paint0_linear_1210_442" x1="-672.215" y1="567.095" x2="546.371" y2="208.405" gradientUnits="userSpaceOnUse">
            <stop offset="0.160314" stop-color="#47AEDF" />
            <stop offset="1" stop-color="#BFEBFF" />
          </linearGradient>
        </defs>
      </svg>
    </div>
    <div class="main-sec">
      <div class="heading-sec">
        <div class="lined-heading">
          <h1><?php echo __($press_releases_section['heading']) ?></h1>
          <img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="" />
        </div>
      </div>
      <div class="press-releases-grid" id="press-releases-container">
        <?php
        $args = array(
          'post_type'      => 'ct-press-release',
          'post_status'    => 'publish',
          'orderby'          => 'ID',
          'order'          => 'DESC',
          'posts_per_page' => '8',
          'paged'          => '1',
          'post__not_in'   => $post_ids
        );
        $posts = get_posts($args);
        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="press-releases-card">
            <div class="up-slider">
              <div class="slidey">
                <div class="card-thumbnail">
                  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="" />
                </div>
                <div class="card-content">
                  <p class="card-category"><?php echo __("Press Release"); ?></p>
                  <a href="<?php echo get_field('url') ? get_field('url') : "javascript:void(0)" ?>" class="card-title"><?php echo get_the_title() ?></a>
                  <div class="card-description">
                    <div class="content-container">
                      <div class="short-content"><?php echo esc_html(wp_trim_words(get_the_content(), 30)); ?></div>
                      <div class="full-content" style="display: none;"><?php echo esc_html(get_the_content()); ?></div>
                    </div>
                    <a href="<?php echo get_field('url') ? get_field('url') : "javascript:void(0)" ?>" class="read-more">Read more</a>
                    <?php if (str_word_count(get_the_content()) > 30) : ?>
                      <!-- <a href="<?php /* echo get_the_permalink(get_the_ID()) */ ?>" onclick="toggleContent(this)" class="read-more">Read more</a> -->
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="static-part">
              <span class="card-published-date"><?php echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'); ?></span>
            </div>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>
      <div class="load-more-sec">
        <button id="load-more-press-releases" data-page="2" data-max-pages="<?php echo esc_attr($wp_query->max_num_pages); ?>" class="load-more"><?php echo __($press_releases_section['load_more_button_text']) ?></button>
      </div>
    </div>
  </section>

  <!-- ----------------------------------------------------------------------- -->
  <!--                              Press-sec-10                               -->
  <!-- ----------------------------------------------------------------------- -->

<?php }
if ($get_a_quote_section['show_section'] == 1) { ?>
  <section class="home-email-us-section home-sec">
    <div class="email-us-section home-contain">
      <img class="email-us-bg" src="<?php echo get_template_directory_uri() ?>/Images/email-us-bg.webp" alt="">
      <div class="email-us-inner">
        <div class="email-us-left">
          <img src="<?php echo __($get_a_quote_section['main_image']) ?>" alt="">
        </div>
        <div class="email-us-right">
          <p class="email-us-right-heading page-h2"><?php echo __($get_a_quote_section['heading']) ?></p>
          <button>Get a Quote</button>
          <div class="send-msg-container">
            <label for=""><?php echo __($get_a_quote_section['sub_heading']) ?></label>
            <?php echo do_shortcode($get_a_quote_section['quote_form']) ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<script src="<?php echo get_template_directory_uri() ?>/libraries/jquery/jquery.js"></script>
<script>
  var container = $('#press-releases-container');
  var button = $('#load-more-press-releases');

  $(document).on('click', '#load-more-press-releases', function() {
    var page = button.data('page');
    var maxPages = button.data('max-pages');

    if (page <= maxPages) {
      $.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: {
          action: 'load_more_press_releases',
          page: page,
        },
        success: function(response) {
          container.append(response);
          button.data('page', page + 1);

          if (page + 1 > maxPages) {
            button.hide();
          }
        },
      });
    }
  });
</script>

<?php get_footer(); ?>