<?php
/* -------------------------------------------------------------------------- */
/*                        Template Name: Cookies Policy                       */
/* -------------------------------------------------------------------------- */
get_header()
?>
<div class="top-heading-jingle-section">
    <img class="top-jingle-img" src="<?php echo get_template_directory_uri() ?>/Images/top-jingles.png" alt="">
    <p class="top-jingle-section-heading">Cookies-Policy
        <img src="<?php echo get_template_directory_uri() ?>/Images/small-curve-line.png" alt="">
    </p>
    <div>
        <p>Circle Translations</p>
        <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.334241 12.9985V0.998478C0.334621 0.876984 0.368131 0.757894 0.431159 0.654027C0.494188 0.55016 0.584351 0.46545 0.691942 0.409014C0.799534 0.352578 0.920481 0.326553 1.04176 0.333742C1.16304 0.340931 1.28007 0.381061 1.38024 0.449811L10.0469 6.44981C10.4062 6.69848 10.4062 7.29714 10.0469 7.54648L1.38024 13.5465C1.28028 13.6159 1.16319 13.6567 1.04171 13.6642C0.920226 13.6718 0.798988 13.646 0.691169 13.5895C0.583349 13.533 0.493072 13.448 0.430144 13.3438C0.367218 13.2396 0.334049 13.1202 0.334241 12.9985Z" fill="white" />
        </svg>
        <p>Cookies Policy</p>
    </div>
</div>
<?php echo get_the_content() ?>
<?php get_footer(); ?>