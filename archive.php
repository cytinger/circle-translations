<?php

/* ---------------------------------------------------------------------------------------------- */
/*                                     Template Name : Archive                                    */
/* ---------------------------------------------------------------------------------------------- */

get_header();

/* ---------------------------------------------------------------------------------------------- */
/*                                       Initial Cpt Fields                                       */
/* ---------------------------------------------------------------------------------------------- */

$hero_section = get_field('hero_section');
$sidebar_fields = get_field('sidebar_fields');
$main_section = get_field('main_section');
$contact_us_section = get_field('contact_us_section');
$get_a_quote_section = get_field('get_a_quote_section');

if (have_posts()) :
?>

    <section>
        <div class="heroMain">
            <h2><span><?php echo __($hero_section['heading']) ?></span></h2>
            <p>Circle Translation
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
                <img src="<?php echo get_template_directory_uri() ?>/Images/logo.svg" alt="">
                <div class="socialIcons">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/tw.png" alt="">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/fb.png" alt="">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/gp.png" alt="">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/pint.png" alt="">
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/Images/linked.png" alt="">
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <h2>Categories </h2>
                        <ul>
                            <li>all Categories </li>
                            <li>SEO </li>
                            <li>Dictionary / Grammar </li>
                            <li>audio Visual Translation </li>
                            <li>Process </li>
                            <li>Practical tips </li>
                        </ul>
                    </div>
                    <div class="card ">
                        <h2>Top Posts</h2>
                        <div class="posts">
                            <div class="post">
                                <img src="<?php echo get_template_directory_uri() ?>/Images/blogSidebarPosts.png" alt="">
                                <div class="title">
                                    <p class="time">September 2, 2022</p>
                                    <p>Share Your Images & Be Featured</p>
                                </div>
                            </div>
                            <div class="post">
                                <img src="<?php echo get_template_directory_uri() ?>/Images/blogSidebarPosts.png" alt="">
                                <div class="title">
                                    <p class="time">September 2, 2022</p>
                                    <p>Share Your Images & Be Featured</p>
                                </div>
                            </div>
                            <div class="post">
                                <img src="<?php echo get_template_directory_uri() ?>/Images/blogSidebarPosts.png" alt="">
                                <div class="title">
                                    <p class="time">September 2, 2022</p>
                                    <p>Share Your Images & Be Featured</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mainContent">
                <p class="archiveHeading">Recommended Articles</p>
                <div class="blogContent">
                    <div class="single-archive-cards">
                        <div class="single-archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="archive-cards-sec">
                        <div class="archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                        <div class="archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="archive-cards-sec">
                        <div class="archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                        <div class="archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="archive-cards-sec">
                        <div class="archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                        <div class="archive-card">
                            <img src="<?php echo get_template_directory_uri() ?>/Images/blogs-archive-1.webp" alt="">
                            <div class="card-content">
                                <h3>Business</h3>
                                <h2>Comparison of the Best Language Learning Programs</h2>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum, liquet odio ma ac aliquet odio mattis.
                                    orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit
                                    interdum.</p>
                                <button class="red-button">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="archive-pagination">
                        <button class="pagination-button 01 active">01</button>
                        <button class="pagination-button 02">02</button>
                        <button class="pagination-button pagination-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3.33229 13.999L3.33229 1.99897C3.33267 1.87747 3.36618 1.75838 3.4292 1.65452C3.49223 1.55065 3.5824 1.46594 3.68999 1.4095C3.79758 1.35307 3.91853 1.32704 4.03981 1.33423C4.16109 1.34142 4.27812 1.38155 4.37829 1.4503L13.045 7.4503C13.4043 7.69897 13.4043 8.29763 13.045 8.54697L4.37829 14.547C4.27832 14.6164 4.16124 14.6571 4.03976 14.6647C3.91827 14.6723 3.79703 14.6464 3.68921 14.59C3.5814 14.5335 3.49112 14.4485 3.42819 14.3443C3.36526 14.2401 3.3321 14.1207 3.33229 13.999Z" fill="#383F99" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="home-lets-get-started-section home-sec">
        <div class="lets-get-started-section home-contain">
            <div class="lets-get-started-left">
                <!-- <img src="<?php echo get_template_directory_uri() ?>/Images/lets-get-started-left-img.png" alt=""> -->

                <svg class="lets-get-started-left-pic" xmlns="http://www.w3.org/2000/svg" width="753" height="638" viewBox="0 0 753 638" fill="none">
                    <image id="image" class="image__svg-image" width="100%" height="100%" clip-path="url(#mask2)" x="-100px" xlink:href="<?php echo get_template_directory_uri() ?>/Images/lets-start.webp" />
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
                <p class="lets-get-started-heading page-h2">Let’s Get <span>Started!</span>
                </p>
                <p class="lets-get-started-description page-p">Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="lets-get-started-inner">
                    <div class="lets-get-started-field-box">
                        <p>Name</p>
                        <div class="lets-get-started-field-cont">
                            <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.57491 0.609375C5.40029 0.609375 2.81036 3.1993 2.81036 6.37392C2.81036 8.35857 3.82328 10.1209 5.35829 11.161C2.42084 12.4209 0.339844 15.3361 0.339844 18.7265H1.98686C1.98686 15.0784 4.92677 12.1385 8.57491 12.1385C12.223 12.1385 15.163 15.0784 15.163 18.7265H16.81C16.81 15.3361 14.729 12.4218 11.7915 11.1601C12.575 10.6313 13.2169 9.91845 13.661 9.08407C14.1052 8.24969 14.3382 7.31916 14.3394 6.37392C14.3394 3.1993 11.7495 0.609375 8.57491 0.609375ZM8.57491 2.25639C10.8585 2.25639 12.6924 4.09034 12.6924 6.37392C12.6924 8.6575 10.8585 10.4915 8.57491 10.4915C6.29132 10.4915 4.45738 8.6575 4.45738 6.37392C4.45738 4.09034 6.29132 2.25639 8.57491 2.25639Z" fill="#0E2A5A" />
                            </svg>
                            <input type="text" name="" id="" placeholder="Sophia Williams">
                        </div>
                    </div>
                    <div class="lets-get-started-field-box">
                        <p>Email Address</p>
                        <div class="lets-get-started-field-cont">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.4559 8.05457V17.9367C21.4559 18.8103 21.1089 19.6481 20.4911 20.2659C19.8734 20.8836 19.0355 21.2307 18.1619 21.2307H3.88778C3.01415 21.2307 2.1763 20.8836 1.55855 20.2659C0.940798 19.6481 0.59375 18.8103 0.59375 17.9367V8.05457C0.59375 6.83579 1.25256 5.77072 2.24076 5.19975L11.0248 0.126953L19.8089 5.19975C20.7971 5.77072 21.4559 6.83579 21.4559 8.05457ZM2.48232 6.37462L11.0248 11.8976L19.5673 6.37462L11.0248 1.38966L2.48232 6.37462ZM11.0248 13.2262L1.8345 7.26401C1.74666 7.50557 1.69176 7.78007 1.69176 8.05457V17.9367C1.69176 18.5191 1.92312 19.0776 2.33496 19.4895C2.74679 19.9013 3.30536 20.1327 3.88778 20.1327H18.1619C18.7443 20.1327 19.3029 19.9013 19.7147 19.4895C20.1265 19.0776 20.3579 18.5191 20.3579 17.9367V8.05457C20.3579 7.78007 20.303 7.50557 20.2152 7.26401L11.0248 13.2262Z" fill="#0E2A5A" />
                            </svg>
                            <input type="email" name="" id="" placeholder="example@domain.com">
                        </div>
                    </div>
                    <div class="lets-get-started-field-box">
                        <p>Mobile ( <span>optional</span> )</p>
                        <div class="lets-get-started-field-cont">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.2086 13.9918L15.3458 11.8126C15.1255 11.7182 14.8851 11.6803 14.6464 11.7022C14.4077 11.7241 14.1783 11.8052 13.9788 11.9382C13.9586 11.9512 13.9393 11.9657 13.9212 11.9815L11.3796 14.1432C11.3533 14.1575 11.3239 14.1656 11.2939 14.1666C11.2639 14.1677 11.234 14.1618 11.2067 14.1493C9.57306 13.3608 7.88075 11.6788 7.08916 10.0678C7.07598 10.0409 7.06912 10.0113 7.06912 9.98136C7.06912 9.95139 7.07598 9.92181 7.08916 9.89489L9.25807 7.32143C9.27363 7.30239 9.28806 7.28246 9.3013 7.26173C9.43243 7.06152 9.51164 6.8318 9.53177 6.59332C9.5519 6.35484 9.51231 6.1151 9.41659 5.89574L7.25283 1.04117C7.12995 0.754599 6.91744 0.51561 6.6472 0.360073C6.37696 0.204536 6.06356 0.140841 5.75405 0.178547C4.40888 0.355391 3.17412 1.01599 2.28052 2.03689C1.38692 3.0578 0.89563 4.36915 0.89845 5.72589C0.89845 13.786 7.45562 20.3431 15.5157 20.3431C16.8724 20.3457 18.1836 19.8544 19.2045 18.9608C20.2253 18.0672 20.886 16.8326 21.063 15.4875C21.1007 15.1795 21.0378 14.8675 20.8839 14.598C20.7299 14.3285 20.4931 14.1159 20.2086 13.9918ZM15.5157 19.1079C8.13707 19.1079 2.13371 13.1045 2.13371 5.72589C2.13027 4.66967 2.5115 3.64833 3.20617 2.85269C3.90084 2.05705 4.86142 1.54154 5.90846 1.40248H5.93213C5.97361 1.40326 6.01389 1.41655 6.04769 1.44061C6.08149 1.46467 6.10723 1.49839 6.12154 1.53733L8.29353 6.38675C8.30592 6.41372 8.31234 6.44304 8.31234 6.47271C8.31234 6.50238 8.30592 6.5317 8.29353 6.55866L6.12051 9.13829C6.1043 9.15671 6.0895 9.17632 6.07625 9.19697C5.94027 9.40455 5.8602 9.64373 5.84379 9.89134C5.82738 10.1389 5.87518 10.3866 5.98257 10.6103C6.89563 12.4797 8.7794 14.349 10.6694 15.2621C10.8944 15.3689 11.1432 15.4155 11.3917 15.3975C11.6401 15.3795 11.8796 15.2973 12.0868 15.1592C12.1064 15.1458 12.1259 15.1314 12.1445 15.1159L14.685 12.9542C14.7101 12.9407 14.7378 12.9328 14.7662 12.9311C14.7946 12.9293 14.8231 12.9337 14.8497 12.9439L19.7135 15.1231C19.7532 15.14 19.7866 15.169 19.809 15.206C19.8313 15.2429 19.8415 15.286 19.8381 15.329C19.6997 16.3765 19.1847 17.3378 18.3892 18.0333C17.5938 18.7287 16.5723 19.1107 15.5157 19.1079Z" fill="#0E2A5A" />
                            </svg>
                            <input type="number" name="" id="" placeholder="+1 415-555-1212">
                        </div>
                    </div>
                    <div class="lets-get-started-field-box">
                        <p>Company ( <span>optional</span> )</p>
                        <div class="lets-get-started-field-cont">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.175 25.1949L6.22849 17.0025C6.13197 16.8795 6.03645 16.7557 5.94193 16.6312C4.75535 15.0681 4.11432 13.1589 4.1172 11.1965C4.1172 8.7942 5.0715 6.49031 6.77017 4.79164C8.46884 3.09297 10.7727 2.13867 13.175 2.13867C15.5773 2.13867 17.8812 3.09297 19.5799 4.79164C21.2785 6.49031 22.2328 8.7942 22.2328 11.1965C22.2357 13.158 21.595 15.0664 20.4089 16.6287L20.4081 16.6312C20.4081 16.6312 20.1611 16.9556 20.124 16.9992L13.175 25.1949ZM7.25614 15.6389C7.25779 15.6389 7.44883 15.8925 7.49247 15.9469L13.175 22.6489L18.865 15.9378C18.9012 15.8925 19.0939 15.6373 19.0947 15.6365C20.064 14.3594 20.5879 12.7997 20.5859 11.1965C20.5859 9.23098 19.8052 7.34598 18.4153 5.95616C17.0255 4.56634 15.1405 3.78555 13.175 3.78555C11.2095 3.78555 9.32451 4.56634 7.93469 5.95616C6.54487 7.34598 5.76407 9.23098 5.76407 11.1965C5.76234 12.8007 6.28595 14.3613 7.25614 15.6389Z" fill="#0E2A5A" />
                                <path d="M17.293 15.3145H15.6461V8.72695H10.7055V15.3145H9.05859V8.72695C9.05903 8.29031 9.23268 7.87167 9.54143 7.56292C9.85019 7.25416 10.2688 7.08051 10.7055 7.08008H15.6461C16.0827 7.08051 16.5014 7.25416 16.8101 7.56292C17.1189 7.87167 17.2925 8.29031 17.293 8.72695V15.3145Z" fill="#0E2A5A" />
                                <path d="M12.3516 13.6668H13.9984V15.3137H12.3516V13.6668ZM12.3516 10.373H13.9984V12.0199H12.3516V10.373Z" fill="#0E2A5A" />
                            </svg>
                            <input type="text" name="" id="" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                    <div class="lets-get-started-field-box message-field-box">
                        <p>Message</p>
                        <div class="lets-get-started-field-cont message-input">
                            <input type="text" name="" id="" placeholder="Message">
                        </div>
                    </div>
                    <div class="lets-get-started-field-box upload-field-box">
                        <p>Upload Document ( <span>optional</span> )</p>
                        <div class="lets-get-started-field-cont document-upload">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1768 13.6692V23.5504M13.1768 13.6692L10.432 15.865M13.1768 13.6692L15.9216 15.865M5.52869 10.5039C4.49029 10.7652 3.58304 11.3967 2.97741 12.2797C2.37177 13.1628 2.10943 14.2366 2.23967 15.2994C2.36991 16.3622 2.88376 17.3409 3.6847 18.0515C4.48563 18.7622 5.51851 19.1559 6.58927 19.1588H7.68719" stroke="#0E2A5A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.3816 8.33151C17.0063 6.84556 16.0801 5.55789 14.7906 4.72953C13.5012 3.90117 11.945 3.5941 10.4375 3.87057C8.93007 4.14704 7.58414 4.98636 6.67256 6.21839C5.76099 7.45042 5.35199 8.98298 5.52847 10.5054C5.52847 10.5054 5.69645 11.4737 6.0401 12.0227" stroke="#0E2A5A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.6667 19.1589C19.4418 19.1583 20.2081 18.9936 20.915 18.6756C21.622 18.3576 22.2535 17.8935 22.7682 17.3138C23.2828 16.7341 23.6688 16.052 23.9009 15.3123C24.1329 14.5727 24.2056 13.7923 24.1143 13.0225C24.023 12.2528 23.7696 11.5111 23.371 10.8462C22.9724 10.1814 22.4375 9.60857 21.8015 9.16538C21.1655 8.72219 20.4429 8.41872 19.6811 8.27494C18.9194 8.13116 18.1359 8.15034 17.3821 8.3312L15.9219 8.72864" stroke="#0E2A5A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="upload-doc-input">
                                Upload or Browse Document
                            </label>
                            <input type="file" name="" id="upload-doc-input">
                        </div>
                    </div>
                    <button>Send Message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="home-email-us-section home-sec">
        <div class="email-us-section home-contain">
            <img class="email-us-bg" src="<?php echo get_template_directory_uri() ?>/Images/email-us-bg.webp" alt="">
            <div class="email-us-inner">
                <div class="email-us-left">
                    <img src="<?php echo get_template_directory_uri() ?>/Images/email-us-left-img.webp" alt="">
                </div>
                <div class="email-us-right">
                    <p class="email-us-right-heading page-h2">Each Project Is Different, <span>Contact Us</span>
                        To Get A
                        <span>Custom </span>And
                        Accurate
                        Quote!
                    </p>
                    <button>Get a Quote</button>
                    <div class="send-msg-container">
                        <label for="">Enter your email below, and we will contact you.</label>
                        <div class="input-container">
                            <input type="email" name="" id="" placeholder="Email Address">
                            <button class="email-send-btn email-btn">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

endif;

get_footer();

?>