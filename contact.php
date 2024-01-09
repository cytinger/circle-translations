<?php
/* -------------------------------------------------------------------------- */
/*                          Template Name: Contact Us                         */
/* -------------------------------------------------------------------------- */

get_header();

/* ---------------------------------------------------------------------------------------------- */
/*                                       Initial Cpt Fields                                       */
/* ---------------------------------------------------------------------------------------------- */

$hero_section = get_field('hero_section');
$faqs_section = get_field('faqs_section');
$contact_us_form_section = get_field('contact_us_form_section');
$get_a_quote_section = get_field('get_a_quote_section');
?>
<?php if ($hero_section['show_section'] == 1) { ?>
    <div class="contact-top-section">
        <p class="contact-top-heading">
            <?php echo __($hero_section['main_heading']) ?>
        </p>
        <p class="contact-top-description">
            <?php echo __($hero_section['sub_heading']) ?>
        </p>
    </div>
<?php } ?>
<div class="contact-second-section">
    <div class="contact-second-section-container">
        <?php if ($faqs_section['show_section'] == 1) { ?>
            <div class="contact-second-left">
                <div class="home-faq-section contact-faq-section">
                    <p class="faq-heading contact-page-faq-heading">
                        <?php echo __($faqs_section['main_heading']) ?>
                    </p>
                    <div class="faq-card-container">
                        <?php $post_ids = $faqs_section['faqs'];
                        $args = array(
                            'post_type' => 'ct-faq',
                            'post_status' => 'publish',
                            'post__in' => $post_ids,
                            'order' => 'ASC',
                            'posts_per_page' => '6'
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            setup_postdata($post);
                            ?>
                            <div class="faq-card faq-card-one">
                                <img class="target-img"
                                    src="<?php echo get_default_content(wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())), "https://ct.sn66.me/wp-content/uploads/2024/01/Group-280.png") ?>"
                                    alt="">
                                <div>
                                    <p class="faq-card-heading">
                                        <?php echo __(get_the_title()) ?>
                                    </p>
                                    <div class="faq-card-description page-p">
                                        <?php echo __(get_the_content()) ?><img
                                            src="<?php echo get_template_directory_uri() ?>/Images/right-arrow.png" alt=""
                                            class="read-more">
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
            <?php
        }
        if ($contact_us_form_section['show_section'] == 1) { ?>
            <div class="contact-second-right">
                <div class="contact-contact-us-section">
                    <p class="contact-middle-heading">
                        <?php echo __($contact_us_form_section['main_heading']) ?>
                    </p>
                    <div class="contact-contact-us-inner">
                        <div class="lets-get-started-right">
                            <?php echo do_shortcode($contact_us_form_section['contact_form_shortcode']) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="home-email-us-section home-sec contactPage">
    <div class="email-us-section home-contain">
        <img class="email-us-bg" src="<?php echo get_template_directory_uri() ?>/Images/email-us-bg.webp" alt="">
        <div class="email-us-inner">
            <div class="email-us-left">
                <img src="<?php echo __($get_a_quote_section['main_image']) ?>" alt="">
            </div>
            <div class="email-us-right">
                <p class="email-us-right-heading page-h2">
                    <?php echo __($get_a_quote_section['main_heading']) ?>
                </p>
                <button>Get a Quote</button>
                <div class="send-msg-container">
                    <label for="">
                        <?php echo __($get_a_quote_section['sub_heading']) ?>
                    </label>
                    <?php echo do_shortcode($get_a_quote_section['quote_form']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        /* ---------------------------------------------------------------------------------------------- */
        /*                               Function For Random Color Generator                              */
        /* ---------------------------------------------------------------------------------------------- */

        randomColor(".faq-card .target-img", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)']);
        randomColor(".faq-card .read-more", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)']);
        generateRandomSVG('.core-service-card-top');
        
        /* ---------------------------------------------------------------------------------------------- */
        /*                                 Whole Page Sliders Applications                                */
        /* ---------------------------------------------------------------------------------------------- */
    });
</script>

<?php get_footer(); ?>