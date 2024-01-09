<?php
/* -------------------------------------------------------------------------- */
/*                       Template Name: Career Page                      */
/* -------------------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------------------- */
/*                                       Initial Cpt Fields                                       */
/* ---------------------------------------------------------------------------------------------- */

$main_section = get_field('main_section');
$join_us = get_field('join_us');
$see_the_benefits = get_field('see_the_benefits');
$hiring = get_field('hiring');
$recruitment_process = get_field('recruitment_process');
$testimonials_section = get_field('testimonials_section');
$faqs_section = get_field('faqs_section');
get_header();
?>
<style>
    .heroMain h2 span {
        position: relative;
    }

    .heroMain h2 span::before {
        content: "";
        width: 100%;
        height: 12.2px;
        bottom: -10px;
        position: absolute;
        left: 0;
        background: url("<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.webp");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
    }

    .heroMain {
        background: url("<?php echo get_template_directory_uri() ?>/Images/pricingMainBg.png"), #383F99;
    }

    .topH h2 {
        color: #383F99;
        font-family: Public Sans;
        font-size: 48px;
        font-style: normal;
        font-weight: 800;
        line-height: 63.896px;
        /* 133.117% */
        text-transform: capitalize;
    }

    .topH h2 span {
        position: relative;
    }

    .topH h2 span::before {
        right: -9px;
        position: absolute;
        content: "";
        width: 100%;
        display: flex;
        height: 15px;
        bottom: -10px;
        background: url('<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.webp');
        background-position: center center;
        background-size: contain;
        background-repeat: no-repeat;
    }

    p.text {
        color: #474747;
        font-family: Public Sans;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 26px;
    }
</style>
<?php
if ($main_section['show_section'] == 1) { ?>
    <section>
        <div class="heroMain CareersPage">
            <h2><?php echo $main_section['heading'] ?></h2>
            <p><?php echo $main_section['nav_text'] ?></p>
        </div>
    </section>
<?php }
if ($join_us['show_section'] == 1) { ?>
    <div class="joinUsSec">
        <div class="container">
            <div class="left">
                <div class="topH">
                    <h2><?php echo $join_us['heading'] ?></h2>
                </div>
                <p class="text"><?php echo __($join_us['sub_heading']) ?></p>
                <button class="red-button"><?php echo __($join_us['button_text']) ?></button>
            </div>
            <div class="right">
                <img src="<?php echo $join_us['image'] ?>" alt="">
            </div>
        </div>
    </div>
<?php }
if ($see_the_benefits['show_section'] == 1) { ?>
    <div class="home-showcase-your-brand home-sec CareersPage">
        <div class="showcase-your-brand home-contain">
            <div class="showcase-left">
                <div class="showcase-left-inner-pc">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/shocase1.webp" alt="">
                        <p>No rush fee</p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/shocase3.webp" alt="">
                        <p>Services at unbeatable prices.</p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/shocase2.webp" alt="">
                        <p>Track record of 99.97% of deliveries made on time</p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/shocase4.webp" alt="">
                        <p>Working with fortunate 500 companies</p>
                    </div>
                </div>
                <div style="column-count: 2;" class="first-col">
                    <?php foreach ($see_the_benefits['cards'] as $card) {
                        if (!empty($card['heading'])) { ?>
                            <div>
                                <img src="<?php echo $card['image'] ?>" alt="">
                                <p><?php echo __($card['heading']) ?></p>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="showcase-right">
                <p class="top-head page-h2"><?php echo __($see_the_benefits['heading']) ?></p>
                <p class="desc page-p"><?php echo __($see_the_benefits['description']) ?></p>
                <a href="<?php echo $see_the_benefits['button_link'] ?>"></a><button><?php echo __($see_the_benefits['button_text']) ?></button>
            </div>
        </div>
    </div>
    </div>
<?php }
if ($hiring['show_section'] == 1) { ?>
    <div class="hiring CareersPage">
        <div class="container">
            <div class="topH">
                <h2><?php echo __($hiring['heading']) ?></h2>
                <p class="text"><?php echo __($hiring['sub_heading']) ?></p>
            </div>
            <div class="Jobs">
                <?php
                $post_args = array(
                    'post_type' => 'ct-job',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $posts = get_posts($post_args);
                if ($posts) {
                    foreach ($posts as $post) {
                        setup_postdata($post);
                ?>
                        <div class="job">
                            <div class="left">
                                <h2><?php echo __(get_the_title()) ?> <span><?php echo get_field('job_location', get_the_ID()) ?> / <?php echo wp_get_post_terms(get_the_ID(), 'job-type')[0]->name ?></span></h2>
                                <div style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;"><?php echo __(get_the_content()) ?></div>
                            </div>
                            <div class="right">
                                <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><button class="red-button apply-to-job" data-id="<?php echo get_the_ID() ?>" data-job-name="<?php echo __(get_the_title()) ?>">Apply Now</button></a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
<?php } ?>
<div class="applyJobForm CareersPage">
    <div class="container">
        <h2 class="topHeading" id="job-name-for-apply">
            If you haven't found the ideal job yet, please take a moment to fill out the form below
        </h2>
        <button class="topBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_2684_1788)">
                    <path d="M21.75 0.562587H2.25C1.80756 0.558084 1.3814 0.729282 1.06504 1.03862C0.74867 1.34795 0.56794 1.77016 0.5625 2.21259V21.7913C0.568923 22.2331 0.750087 22.6544 1.06634 22.9629C1.3826 23.2714 1.8082 23.4421 2.25 23.4376H21.75C22.1925 23.4411 22.6183 23.2693 22.9345 22.9598C23.2507 22.6503 23.4316 22.2282 23.4375 21.7857V2.20696C23.4296 1.76583 23.2479 1.34564 22.9319 1.03772C22.6159 0.729808 22.1912 0.559058 21.75 0.562587Z" fill="white" />
                    <path d="M3.94871 9.13672H7.34434V20.0623H3.94871V9.13672ZM5.64746 3.69922C6.03692 3.69922 6.41764 3.81473 6.74144 4.03114C7.06523 4.24756 7.31757 4.55514 7.46653 4.91499C7.61548 5.27485 7.65436 5.67079 7.57824 6.05274C7.50213 6.43469 7.31444 6.78549 7.03891 7.06075C6.76339 7.33601 6.41242 7.52337 6.0304 7.59912C5.64837 7.67487 5.25246 7.63561 4.89275 7.48632C4.53304 7.33702 4.2257 7.08439 4.00959 6.76038C3.79349 6.43638 3.67834 6.05556 3.67871 5.66609C3.67921 5.14427 3.88685 4.644 4.25601 4.27519C4.62517 3.90638 5.12564 3.69922 5.64746 3.69922ZM9.47434 9.13672H12.7293V10.6367H12.7743C13.2281 9.77797 14.3343 8.87234 15.9862 8.87234C19.425 8.86484 20.0625 11.128 20.0625 14.0623V20.0623H16.6668V14.7467C16.6668 13.4811 16.6443 11.8517 14.9025 11.8517C13.1606 11.8517 12.8643 13.2317 12.8643 14.6642V20.0623H9.47434V9.13672Z" fill="#0A66C2" />
                </g>
                <defs>
                    <clipPath id="clip0_2684_1788">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <p>
                Apply Using Linkedin
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M2.24956 8.99982C2.24956 9.14901 2.30882 9.29208 2.41431 9.39757C2.5198 9.50306 2.66287 9.56232 2.81206 9.56232H13.8293L9.72659 13.6644C9.67433 13.7166 9.63287 13.7787 9.60459 13.8469C9.5763 13.9152 9.56174 13.9884 9.56174 14.0623C9.56174 14.1362 9.5763 14.2094 9.60459 14.2777C9.63287 14.346 9.67433 14.408 9.72659 14.4603C9.77885 14.5126 9.84089 14.554 9.90918 14.5823C9.97746 14.6106 10.0506 14.6251 10.1246 14.6251C10.1985 14.6251 10.2717 14.6106 10.3399 14.5823C10.4082 14.554 10.4703 14.5126 10.5225 14.4603L15.585 9.39779C15.6373 9.34555 15.6788 9.28351 15.7071 9.21523C15.7354 9.14694 15.75 9.07375 15.75 8.99982C15.75 8.9259 15.7354 8.85271 15.7071 8.78442C15.6788 8.71613 15.6373 8.6541 15.585 8.60186L10.5225 3.53936C10.417 3.43381 10.2738 3.37451 10.1246 3.37451C9.97529 3.37451 9.83214 3.43381 9.72659 3.53936C9.62104 3.6449 9.56174 3.78806 9.56174 3.93732C9.56174 4.08659 9.62104 4.22975 9.72659 4.33529L13.8293 8.43732H2.81206C2.66287 8.43732 2.5198 8.49659 2.41431 8.60208C2.30882 8.70757 2.24956 8.85064 2.24956 8.99982Z" fill="white" />
            </svg>
        </button>
        <div class="formContainer">
            <div class="topH">
                <h2><span>Job Application</span></h2>
                <p class="text">Please complete the form below to apply for a postion with us.</p>
            </div>
            <form id="job-application-form" method="post" enctype="multipart/form-data">
                <div class="InputSec">
                    <div class="inputRow">
                        <div class="input">
                            <label for="first_name">First Name <span>*</span> </label>
                            <input type="text" id="first_name" name="first_name">
                        </div>
                        <div class="input">
                            <label for="middle_name">Middle Name </label>
                            <input type="text" id="middle_name" name="middle_name">
                        </div>
                        <div class="input">
                            <label for="last_name">Last Name<span>*</span> </label>
                            <input type="text" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div class="inputRow">
                        <div class="input">
                            <label for="date_of_birth">Date Of Birth <span>*</span> </label>
                            <input type="date" name="date_of_birth" id="date_of_birth">
                        </div>
                        <div class="input">
                            <label for="current_address">Current Address <span>*</span> </label>
                            <input type="text" id="current_address" name="current_address" placeholder="Street Address">
                        </div>
                        <div class="input">
                            <label for="other_address">Other Address</label>
                            <input type="text" id="other_address" name="other_address" placeholder="Street Address Line 2">
                        </div>
                    </div>
                </div>
                <div class="InputSec">
                    <div class="inputRow">
                        <div class="input ">
                            <label for="city">City <span>*</span></label>
                            <input type="text" id="city" name="city" placeholder="City">
                        </div>
                        <div class="input ">
                            <label for="stateprovince">State/Province</label>
                            <input type="text" id="stateprovince" name="stateprovince" placeholder="State">
                        </div>
                        <div class="input ">
                            <label for="postal__zip_code">Postal / Zip Code</label>
                            <input type="text" id="postal__zip_code" name="postal__zip_code" placeholder="Zip Code">
                        </div>
                    </div>
                </div>
                <div class="InputSec">
                    <div class="inputRow">
                        <div class="input ">
                            <label for="email_address">Email Address <span>*</span> </label>
                            <input type="email" id="email_address" name="email_address" placeholder="ex: myname@example.com">
                        </div>
                        <div class="input ">
                            <label for="phone_number">Phone Number</label>
                            <input type="tel" id="phone_number" name="phone_number" placeholder="(0000)-000-0000">
                        </div>
                        <div class="input ">
                            <label for="linkedin">Linkedin</label>
                            <input type="url" id="linkedin" name="linkedin" placeholder="(0000)-000-0000">
                        </div>
                    </div>
                    <div class="inputRow">
                        <div class="input ">
                            <label for="how_did_you_hear_about_us">How did you hear about us <span>*</span> </label>
                            <select name="how_did_you_hear_about_us" id="how_did_you_hear_about_us">
                                <option value="Google">Google</option>
                                <option value="Facebook">Facebook</option>
                                <option value="YouTube">YouTube</option>
                                <option value="Friends">Friends</option>
                            </select>
                        </div>
                        <div class="input ">
                            <label for="available_start_date">Available Start Date <span>*</span></label>
                            <input type="date" id="available_start_date" name="available_start_date" placeholder="">
                        </div>
                        <div class="input ">
                            <label for="salary">Salary <span>*</span></label>
                            <input type="number" id="salary" name="salary" placeholder="$">
                        </div>
                    </div>
                </div>
                <div class="InputSec">
                    <div class="inputRow">
                        <div class="input">
                            <label for="what_is_your_current_employment_status">What is your current employment status? <span>*</span> </label>
                            <div class="checkInputs">
                                <div>
                                    <input type="radio" id="Employed" name="what_is_your_current_employment_status">
                                    <label for="Employed">Employed</label>
                                </div>
                                <div>
                                    <input type="radio" id="Un-Employed" name="what_is_your_current_employment_status">
                                    <label for="Un-Employed">Un-Employed</label>
                                </div>
                                <div>
                                    <input type="radio" id="Self-Employed" name="what_is_your_current_employment_status">
                                    <label for="Self-Employed">Self-Employed</label>
                                </div>
                                <div>
                                    <input type="radio" id="Student" name="what_is_your_current_employment_status">
                                    <label for="Student">Student</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="InputSec">
                    <div class="inputRow">
                        <div class="input fullW">
                            <label for="cover_letter">Cover Letter </label>
                            <textarea name="cover_letter" id="cover_letter" cols="30" rows="10" placeholder="Write a Cover Letter"></textarea>
                        </div>
                    </div>
                </div>
                <div class="InputSec">
                    <div class="inputRow">
                        <div class="input fullW">
                            <label for="resume">Resume </label>
                            <div class="resume">
                                <input type="file" id="resume" name="resume">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <path d="M20.5 20.0003V35.0003M20.5 20.0003L16.3334 23.3336M20.5 20.0003L24.6667 23.3336M8.89002 15.1953C7.3137 15.592 5.93648 16.5506 5.01711 17.891C4.09773 19.2315 3.69949 20.8616 3.8972 22.475C4.0949 24.0883 4.87495 25.574 6.09079 26.6528C7.30663 27.7316 8.87457 28.3293 10.5 28.3336H12.1667" stroke="#383F99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.8825 11.8968C26.3128 9.64113 24.9068 7.68642 22.9493 6.42894C20.9919 5.17147 18.6296 4.70533 16.3412 5.12502C14.0529 5.54471 12.0097 6.81882 10.6259 8.68908C9.2421 10.5593 8.62123 12.8858 8.88913 15.1968C8.88913 15.1968 9.14413 16.6668 9.66579 17.5002" stroke="#383F99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M28.8327 28.3337C30.0094 28.3329 31.1726 28.0828 32.2458 27.6001C33.3189 27.1173 34.2777 26.4128 35.0589 25.5328C35.8401 24.6528 36.4261 23.6173 36.7783 22.4945C37.1305 21.3718 37.2409 20.1871 37.1023 19.0186C36.9637 17.85 36.5791 16.7241 35.974 15.7149C35.3689 14.7057 34.5569 13.8361 33.5914 13.1633C32.626 12.4905 31.529 12.0299 30.3727 11.8116C29.2164 11.5933 28.0269 11.6224 26.8827 11.897L24.666 12.5003" stroke="#383F99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p>Browse and chose the files you want to upload from your computer</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                    <path d="M11.333 4.16634C11.333 3.7061 10.9599 3.33301 10.4997 3.33301C10.0394 3.33301 9.66634 3.7061 9.66634 4.16634V9.16634H4.66634C4.2061 9.16634 3.83301 9.53944 3.83301 9.99967C3.83301 10.4599 4.2061 10.833 4.66634 10.833H9.66634V15.833C9.66634 16.2932 10.0394 16.6663 10.4997 16.6663C10.9599 16.6663 11.333 16.2932 11.333 15.833V10.833H16.333C16.7932 10.833 17.1663 10.4599 17.1663 9.99967C17.1663 9.53944 16.7932 9.16634 16.333 9.16634H11.333V4.16634Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="submit-job-application" class="red-button apply">
                        Apply <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M2.23979 9.00031C2.23979 9.1495 2.29906 9.29257 2.40454 9.39806C2.51003 9.50355 2.65311 9.56281 2.80229 9.56281H13.8196L9.71682 13.6648C9.66456 13.7171 9.6231 13.7792 9.59482 13.8474C9.56654 13.9157 9.55198 13.9889 9.55198 14.0628C9.55198 14.1367 9.56654 14.2099 9.59482 14.2782C9.6231 14.3465 9.66456 14.4085 9.71682 14.4608C9.76908 14.513 9.83113 14.5545 9.89941 14.5828C9.9677 14.6111 10.0409 14.6256 10.1148 14.6256C10.1887 14.6256 10.2619 14.6111 10.3302 14.5828C10.3985 14.5545 10.4605 14.513 10.5128 14.4608L15.5753 9.39828C15.6276 9.34604 15.669 9.284 15.6974 9.21572C15.7257 9.14743 15.7402 9.07423 15.7402 9.00031C15.7402 8.92639 15.7257 8.8532 15.6974 8.78491C15.669 8.71662 15.6276 8.65458 15.5753 8.60234L10.5128 3.53984C10.4072 3.4343 10.2641 3.375 10.1148 3.375C9.96552 3.375 9.82237 3.4343 9.71682 3.53984C9.61127 3.64539 9.55198 3.78855 9.55198 3.93781C9.55198 4.08708 9.61127 4.23023 9.71682 4.33578L13.8196 8.43781H2.80229C2.65311 8.43781 2.51003 8.49708 2.40454 8.60257C2.29906 8.70805 2.23979 8.85113 2.23979 9.00031Z" fill="white" />
                        </svg>
                    </button>
                    <input type="hidden" id="action" name="action" value="submit_job_application">
                    <input type="hidden" id="job_id" name="job_id" value="0">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($recruitment_process['show_section'] == 1) { ?>
    <div class="home-how-we-work home-sec CareersPage" style="background-color : transparent">
        <div class="how-we-work home-contain">
            <!-- <img class="how-we-work-top-bg" src="<?php echo get_template_directory_uri() ?>/Images/how-we-work-bg.png" alt=""> -->
            <div>
                <p class="how-we-work-top-heading page-h2"><?php echo __($recruitment_process['heading']) ?></p>
                <p class="how-we-work-top-description page-p"><?php echo __($recruitment_process['sub_heading']) ?></p>
            </div>
            <div class="how-we-work-card-container">
                <img class="how-we-work-right-card-line" src="<?php echo get_template_directory_uri() ?>/Images/long-line.png" alt="">
                <?php
                $counter = 0;
                foreach ($recruitment_process['cards'] as $card) {
                    $counter++;
                    if ($counter % 2 != 0) {
                ?>
                        <div class="how-we-work-right-card how-we-work-card">
                            <img src="<?php echo $card['image_link'] ?>" alt="">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14.002" r="12" fill="#42CD83" stroke="white" stroke-width="4" />
                            </svg>
                            <div class="how-work-card-inner">
                                <p><?php echo $card['heading'] ?></p>
                                <p class="page-p"><?php echo $card['description'] ?></p>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="how-we-work-left-card how-we-work-card">
                            <div class="how-work-card-inner">
                                <p><?php echo $card['heading'] ?></p>
                                <p class="page-p"><?php echo $card['description'] ?></p>
                            </div>
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="12" transform="matrix(-1 0 0 1 28 0.00390625)" fill="#F29111" stroke="white" stroke-width="4" />
                            </svg>
                            <img src="<?php echo $card['image_link'] ?>" alt="">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
<?php
}
if ($testimonials_section['show_section'] == 1) {
?>
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
            <p class="people-say-about-heading page-h2"><?php echo __($translation_services_testimonials_section_fields['main_heading']) ?></p>
            <p class="people-say-about-description page-p"><?php echo __($translation_services_testimonials_section_fields['sub_heading']) ?></p>
            <div>
                <div class="testimonial-card-container-outside">
                    <svg class="prev-slide-btn home-feedback-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" fill-opacity="0.08" />
                        <path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="#383F99" />
                    </svg>
                    <div class="swiper mySwiper home-feedback-card-swiper testimonial-card-container">
                        <div class="swiper-wrapper">
                            <?php $post_ids = $translation_services_testimonials_section_fields['testimonials'];
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
            <p class="faq-heading page-h2">
                <?php echo __($faqs_section)['main_heading'] ?>
            </p>
            <p class="faq-description page-p">
                <?php echo __($faqs_section)['sub_heading'] ?>
            </p>
            <div class="faq-card-container">
                <?php $post_ids = $translation_services_faqs_section_fields['faqs'];
                $args = array(
                    'post_type'      => 'ct-faq',
                    'post_status'    => 'publish',
                    'post__in'       => $post_ids,
                    'order'          => 'ASC',
                    'posts_per_page' => '6'
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
<script>
    /* ---------------------------------------------------------------------------------------------- */
    /*                         Set The Job Id For Posting Application In Form                         */
    /* ---------------------------------------------------------------------------------------------- */
    /* const applyButtons = document.querySelectorAll('.apply-to-job');

    applyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const jobId = this.getAttribute('data-id');
            const jobName = this.getAttribute('data-job-name');

            const jobIdInput = document.getElementById('job_id');
            if (jobIdInput) {
                jobIdInput.value = jobId;
            }

            const jobNameH2 = document.getElementById('job-name-for-apply');
            if (jobNameH2) {
                jobNameH2.textContent = `You are applying for Job Post : "${jobName}"`;
                jobNameH2.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                    inline: 'nearest'
                });
                jobNameH2.style.color = '#E64A58';
            }
        });
    }); */
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        /* ---------------------------------------------------------------------------------------------- */
        /*                               Function For Random Color Generator                              */
        /* ---------------------------------------------------------------------------------------------- */

        randomColor(".faq-card .target-img", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)']);
        randomColor(".faq-card .read-more", "filter", ['hue-rotate(180deg)', 'hue-rotate(280deg)', 'hue-rotate(380deg)', 'hue-rotate(480deg)', 'hue-rotate(580deg)']);

        /* ---------------------------------------------------------------------------------------------- */
        /*                             Post Request To Submit Job Application                             */
        /* ---------------------------------------------------------------------------------------------- */
        $('#job-application-form').submit(function(e) {
            e.preventDefault();

            const formData = new FormData();
            const first_name = $('#first_name').val();
            const middle_name = $('#middle_name').val();
            const last_name = $('#last_name').val();
            const date_of_birth = $('#date_of_birth').val();
            const current_address = $('#current_address').val();
            const other_address = $('#other_address').val();
            const city = $('#city').val();
            const stateprovince = $('#stateprovince').val();
            const postal__zip_code = $('#postal__zip_code').val();
            const email_address = $('#email_address').val();
            const phone_number = $('#phone_number').val();
            const linkedin = $('#linkedin').val();
            const how_did_you_hear_about_us = $('#how_did_you_hear_about_us').val();
            const available_start_date = $('#available_start_date').val();
            const salary = $('#salary').val();
            const employment_status = $("input[name='what_is_your_current_employment_status']:checked").val();
            const cover_letter = $('#cover_letter').val();
            if ($('#resume')[0].files.length > 0) {
                const resumeFileInput = $('#resume')[0].files[0];
            }
            const job_id = $('#job_id').val();

            formData.append('first_name', first_name);
            formData.append('middle_name', middle_name);
            formData.append('last_name', last_name);
            formData.append('date_of_birth', date_of_birth);
            formData.append('current_address', current_address);
            formData.append('other_address', other_address);
            formData.append('city', city);
            formData.append('stateprovince', stateprovince);
            formData.append('postal__zip_code', postal__zip_code);
            formData.append('email_address', email_address);
            formData.append('phone_number', phone_number);
            formData.append('linkedin', linkedin);
            formData.append('how_did_you_hear_about_us', how_did_you_hear_about_us);
            formData.append('available_start_date', available_start_date);
            formData.append('salary', salary);
            formData.append('what_is_your_current_employment_status', employment_status);
            formData.append('cover_letter', cover_letter);
            if ($('#resume')[0].files.length > 0) {
                formData.append('resume', resumeFileInput);
            }
            formData.append('action', 'submit_job_application');
            formData.append('job_id', job_id);

            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php') ?>",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    CSN("Your Application is submitted Successfully!")
                    console.log(response);
                },
                error: function(error) {
                    CEN("An Unknown Error occurred : " + error);
                    console.error(error);
                }
            });
        });
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
</script>
<?php get_footer(); ?>