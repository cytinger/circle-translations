<?php
get_header();
while (have_posts()) :
    the_post();
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
    <section>
        <div class="heroMain CareersPage">
            <svg xmlns="http://www.w3.org/2000/svg" width="480" height="961" viewBox="0 0 480 961" fill="none">
                <path opacity="0.74" d="M192.734 -168.084C156.984 -60.8093 311.02 56.329 131.855 225.082C17.2222 333.035 -75.309 527.779 88.9039 741.754C253.117 955.729 515.445 995.732 825.97 935.714C1136.49 875.697 640.699 693.035 771.171 372.073C901.644 51.1101 777.251 -115.895 565.468 -207.226C353.685 -298.557 232.737 -288.119 192.734 -168.084Z" fill="url(#paint0_linear_2244_29633)" />
                <defs>
                    <linearGradient id="paint0_linear_2244_29633" x1="-84.9401" y1="192.87" x2="977.998" y2="192.87" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0672CB" />
                        <stop offset="1" stop-color="#88C7FD" />
                    </linearGradient>
                </defs>
            </svg>
            <h2>
                <span>
                    Careers
                </span>
            </h2>
            <p>
                Circle Translation
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33424 13.9985V1.99848C3.33462 1.87698 3.36813 1.75789 3.43116 1.65403C3.49419 1.55016 3.58435 1.46545 3.69194 1.40901C3.79953 1.35258 3.92048 1.32655 4.04176 1.33374C4.16304 1.34093 4.28007 1.38106 4.38024 1.44981L13.0469 7.44981C13.4062 7.69848 13.4062 8.29714 13.0469 8.54648L4.38024 14.5465C4.28028 14.6159 4.16319 14.6567 4.04171 14.6642C3.92023 14.6718 3.79899 14.646 3.69117 14.5895C3.58335 14.533 3.49307 14.448 3.43014 14.3438C3.36722 14.2396 3.33405 14.1202 3.33424 13.9985Z" fill="white" />
                </svg>
                <span>
                    Careers
                </span>
            </p>
        </div>
    </section>


    <div class="productDesign CareersPage">
        <div class="containerTop">
            <div class="topH">
                <h2><span><?php echo get_the_title() ?></span></h2>
            </div>
            <div class="details">
                <div>
                    <p>Company</p>
                    <img src="<?php echo get_template_directory_uri() ?>/Images/logo.svg" alt="">
                </div>
                <div>
                    <p>Job Type</p>
                    <h2><?php echo wp_get_post_terms(get_the_ID(), 'job-type')[0]->name ?? "Any"; ?></h2>
                </div>
                <div>
                    <p>Last Application Date</p>
                    <h2><?php echo date('d M, Y', strtotime(get_field('last_application_date'))) ?></h2>
                </div>
            </div>
        </div>
        <div class="container"><?php echo get_the_content() ?></div>
    </div>

    <!-- ---------------------------------------------------------------------------------------------- -->
    <!--                                            Job Form                                            -->
    <!-- ---------------------------------------------------------------------------------------------- -->

    <div class="applyJobForm CareersPage jobsDescription">
        <div class="container">
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
                    <h2>
                        <span>
                            Job Application
                        </span>
                    </h2>
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
                                        <input type="radio" id="Employed" value="Employed" name="what_is_your_current_employment_status">
                                        <label for="Employed">Employed</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="Un-Employed" value="Un-Employed" name="what_is_your_current_employment_status">
                                        <label for="Un-Employed">Un-Employed</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="Self-Employed" value="Self-Employed" name="what_is_your_current_employment_status">
                                        <label for="Self-Employed">Self-Employed</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="Student" value="Student" name="what_is_your_current_employment_status">
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
                    </div>
                    <input type="hidden" id="action" name="action" value="submit_job_application">
                    <input type="hidden" id="job_id" name="job_id" value="<?php echo get_the_ID() ?>">
                </form>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libraries/cyNotifier/cyNotifier.css">
    <script src="<?php echo get_template_directory_uri() ?>/libraries/cyNotifier/cyNotifier.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
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
                const resumeFileInput = $('#resume')[0].files[0];
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
                formData.append('resume', resumeFileInput);
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
    </script>
<?php
endwhile;
get_footer(); ?>