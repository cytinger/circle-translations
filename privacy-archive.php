<?php
/* -------------------------------------------------------------------------- */
/*                         Template Name: Blog Archive                        */
/* -------------------------------------------------------------------------- */
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
		<div class="top-heading-jingle-section">
			<img class="top-jingle-img" src="<?php echo get_template_directory_uri() ?>/Images/top-jingles.png" alt="">
			<p class="top-jingle-section-heading">Blogs
				<img src="<?php echo get_template_directory_uri() ?>/Images/small-curve-line.png" alt="">
			</p>
			<div>
				<p>Circle Translations</p>
				<svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.334241 12.9985V0.998478C0.334621 0.876984 0.368131 0.757894 0.431159 0.654027C0.494188 0.55016 0.584351 0.46545 0.691942 0.409014C0.799534 0.352578 0.920481 0.326553 1.04176 0.333742C1.16304 0.340931 1.28007 0.381061 1.38024 0.449811L10.0469 6.44981C10.4062 6.69848 10.4062 7.29714 10.0469 7.54648L1.38024 13.5465C1.28028 13.6159 1.16319 13.6567 1.04171 13.6642C0.920226 13.6718 0.798988 13.646 0.691169 13.5895C0.583349 13.533 0.493072 13.448 0.430144 13.3438C0.367218 13.2396 0.334049 13.1202 0.334241 12.9985Z" fill="white" />
				</svg>
				<p>Privacy Policy</p>
			</div>
		</div>
		<div class="blog-home-section">
			<svg class="blog-home-left-side-element" width="123" height="985" viewBox="0 0 123 985" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.16" d="M-763.079 293.943C-765.363 383.576 -647.105 451.897 -584.64 531.608C-542.431 585.471 -495.801 631.24 -455.562 686.364C-392.343 772.969 -373.406 894.567 -281.16 947.351C-188.503 1000.37 -74.0885 992.533 3.34762 948.957C79.2019 906.27 106.351 811.449 120.561 721.286C132.524 645.381 87.9557 563.91 76.776 483.05C65.4492 401.126 95.9807 321.465 54.4788 243.327C10.244 160.043 -69.0176 92.1562 -153.344 49.7914C-238.153 7.18366 -333.24 -11.6513 -413.357 8.28923C-489.086 27.1375 -517.462 107.722 -575.035 154.747C-636.542 204.986 -760.875 207.496 -763.079 293.943Z" fill="url(#paint0_linear_869_11109)" />
				<defs>
					<linearGradient id="paint0_linear_869_11109" x1="155.431" y1="1106.65" x2="-467.944" y2="-0.150826" gradientUnits="userSpaceOnUse">
						<stop offset="0.160314" stop-color="#47AEDF" />
						<stop offset="1" stop-color="#BFEBFF" />
					</linearGradient>
				</defs>
			</svg>
			<svg class="blog-home-right-side-element" width="222" height="1029" viewBox="0 0 222 1029" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g opacity="0.08" clip-path="url(#clip0_869_9654)">
					<path opacity="0.74" d="M161.237 83.5868C131.33 173.33 260.192 271.324 110.308 412.498C14.4088 502.808 -63 665.725 74.3756 844.73C211.751 1023.73 431.207 1057.2 690.983 1006.99C950.758 956.783 535.99 803.973 645.14 535.466C754.289 266.958 650.226 127.247 473.055 50.842C295.883 -25.5626 194.702 -16.8307 161.237 83.5868Z" fill="url(#paint0_linear_869_9654)" />
				</g>
				<defs>
					<linearGradient id="paint0_linear_869_9654" x1="-71.0571" y1="385.55" x2="818.165" y2="385.55" gradientUnits="userSpaceOnUse">
						<stop stop-color="#0672CB" />
						<stop offset="1" stop-color="#88C7FD" />
					</linearGradient>
					<clipPath id="clip0_869_9654">
						<rect width="778.061" height="1028.14" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<div class="blog-home-section-first-mobile">
				<p>Categories:</p>
				<select name="" id="">
					<option value="">All Categories</option>
					<option value="">SEO</option>
					<option value="">Dictionary / Grammer</option>
					<option value="">Audio Visual Translation</option>
					<option value="">Process</option>
					<option value="">Practical Tips</option>
				</select>
			</div>
			<div class="blog-home-section-left-icon-column">
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="16" cy="16" r="16" fill="#383F99" />
					<path d="M23.3974 12.46C23.3974 12.636 23.3974 12.7768 23.3974 12.9528C23.3974 17.8455 19.7015 23.4421 12.9081 23.4421C10.7962 23.4421 8.86028 22.8437 7.24113 21.7877C7.52272 21.8229 7.80431 21.8581 8.1211 21.8581C9.84585 21.8581 11.4298 21.2598 12.697 20.2742C11.0778 20.239 9.70505 19.183 9.24747 17.7047C9.49386 17.7399 9.70505 17.7751 9.95144 17.7751C10.2682 17.7751 10.6202 17.7047 10.9018 17.6343C9.21227 17.2823 7.94511 15.8039 7.94511 14.0088V13.9736C8.43789 14.2552 9.03627 14.396 9.63465 14.4312C8.61389 13.7624 7.98031 12.636 7.98031 11.3689C7.98031 10.6649 8.1563 10.0313 8.47309 9.50334C10.3034 11.7209 13.0489 13.1992 16.1112 13.3752C16.0408 13.0936 16.0056 12.812 16.0056 12.5304C16.0056 10.4889 17.66 8.83456 19.7015 8.83456C20.7575 8.83456 21.7079 9.25695 22.4118 9.99612C23.2214 9.82013 24.031 9.50334 24.735 9.08095C24.4534 9.96092 23.8902 10.6649 23.1158 11.1225C23.855 11.0521 24.5942 10.8409 25.2278 10.5593C24.735 11.2985 24.1014 11.9321 23.3974 12.46Z" fill="white" />
				</svg>
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="16" cy="16" r="16" fill="#383F99" />
					<path d="M20.6052 17.2471H17.9652V25.1316H14.4454V17.2471H11.5591V14.0088H14.4454V11.5097C14.4454 8.69376 16.1349 7.10982 18.7044 7.10982C19.9364 7.10982 21.2387 7.35621 21.2387 7.35621V10.1369H19.7956C18.3876 10.1369 17.9652 10.9817 17.9652 11.8969V14.0088H21.0979L20.6052 17.2471Z" fill="white" />
				</svg>
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="16" cy="16" r="16" fill="#383F99" />
					<path d="M18.3912 15.1704C18.4264 15.5223 18.4968 15.8391 18.4968 16.2967C18.4968 20.1686 15.8921 22.8789 11.985 22.8789C8.25397 22.8789 5.22686 19.887 5.22686 16.1207C5.22686 12.3896 8.25397 9.36254 11.985 9.36254C13.8154 9.36254 15.3289 10.0313 16.5257 11.1577L14.6954 12.9176C14.2026 12.4248 13.3226 11.8617 11.985 11.8617C9.69712 11.8617 7.79638 13.7624 7.79638 16.1207C7.79638 18.5142 9.69712 20.415 11.985 20.415C14.6602 20.415 15.6809 18.479 15.8217 17.4935H11.985V15.1704H18.3912ZM24.903 15.3815H26.8742V17.3527H24.903V19.3238H22.9319V17.3527H20.9608V15.3815H22.9319V13.4456H24.903V15.3815Z" fill="white" />
				</svg>
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="16" cy="16" r="16" fill="#383F99" />
					<path d="M16.3389 7.35621C19.6475 7.35621 22.6746 9.64413 22.6746 13.1288C22.6746 16.4023 20.9851 20.063 17.254 20.063C16.3389 20.063 15.2477 19.6054 14.7901 18.7958C14.0157 21.9637 14.0509 22.4565 12.291 24.8852C12.115 24.9556 12.1502 24.9556 12.0446 24.8148C11.9742 24.1461 11.9038 23.5125 11.9038 22.8437C11.9038 20.6966 12.8894 17.5639 13.3821 15.4871C13.1006 14.924 13.0302 14.2904 13.0302 13.692C13.0302 10.8761 16.3389 10.4537 16.3389 12.7768C16.3389 14.1496 15.3885 15.4519 15.3885 16.7895C15.3885 17.6695 16.1629 18.3031 17.0428 18.3031C19.4716 18.3031 20.2107 14.8184 20.2107 12.9528C20.2107 10.4537 18.4508 9.08095 16.0221 9.08095C13.2414 9.08095 11.0942 11.0873 11.0942 13.9032C11.0942 15.276 11.939 15.9799 11.939 16.2967C11.939 16.5783 11.7278 17.5287 11.3758 17.5287C10.531 17.5287 9.15828 16.1207 9.15828 13.6568C9.15828 9.74973 12.7134 7.35621 16.3389 7.35621Z" fill="white" />
				</svg>
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="16" cy="16" r="16" fill="#383F99" />
					<path d="M11.7118 22.8789H8.43829V12.3544H11.7118V22.8789ZM10.0574 10.9465C9.03667 10.9465 8.19189 10.0665 8.19189 9.01055C8.19189 7.98979 9.03667 7.14501 10.0574 7.14501C11.1134 7.14501 11.9582 7.98979 11.9582 9.01055C11.9582 10.0665 11.1134 10.9465 10.0574 10.9465ZM23.9258 22.8789H20.6875V17.7751C20.6875 16.5431 20.6523 14.9944 18.9627 14.9944C17.2732 14.9944 17.0268 16.2967 17.0268 17.6695V22.8789H13.7533V12.3544H16.886V13.7976H16.9212C17.3788 12.988 18.4348 12.1081 20.0187 12.1081C23.3274 12.1081 23.961 14.2904 23.961 17.1063V22.8789H23.9258Z" fill="white" />
				</svg>
			</div>
			<div class="blog-home-section-left">
				<img src="<?php echo get_template_directory_uri() ?>/Images/logo.svg" alt="">
				<div class="blog-home-section-left-icon-row">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="16" cy="16" r="16" fill="#383F99" />
						<path d="M23.3974 12.46C23.3974 12.636 23.3974 12.7768 23.3974 12.9528C23.3974 17.8455 19.7015 23.4421 12.9081 23.4421C10.7962 23.4421 8.86028 22.8437 7.24113 21.7877C7.52272 21.8229 7.80431 21.8581 8.1211 21.8581C9.84585 21.8581 11.4298 21.2598 12.697 20.2742C11.0778 20.239 9.70505 19.183 9.24747 17.7047C9.49386 17.7399 9.70505 17.7751 9.95144 17.7751C10.2682 17.7751 10.6202 17.7047 10.9018 17.6343C9.21227 17.2823 7.94511 15.8039 7.94511 14.0088V13.9736C8.43789 14.2552 9.03627 14.396 9.63465 14.4312C8.61389 13.7624 7.98031 12.636 7.98031 11.3689C7.98031 10.6649 8.1563 10.0313 8.47309 9.50334C10.3034 11.7209 13.0489 13.1992 16.1112 13.3752C16.0408 13.0936 16.0056 12.812 16.0056 12.5304C16.0056 10.4889 17.66 8.83456 19.7015 8.83456C20.7575 8.83456 21.7079 9.25695 22.4118 9.99612C23.2214 9.82013 24.031 9.50334 24.735 9.08095C24.4534 9.96092 23.8902 10.6649 23.1158 11.1225C23.855 11.0521 24.5942 10.8409 25.2278 10.5593C24.735 11.2985 24.1014 11.9321 23.3974 12.46Z" fill="white" />
					</svg>
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="16" cy="16" r="16" fill="#383F99" />
						<path d="M20.6052 17.2471H17.9652V25.1316H14.4454V17.2471H11.5591V14.0088H14.4454V11.5097C14.4454 8.69376 16.1349 7.10982 18.7044 7.10982C19.9364 7.10982 21.2387 7.35621 21.2387 7.35621V10.1369H19.7956C18.3876 10.1369 17.9652 10.9817 17.9652 11.8969V14.0088H21.0979L20.6052 17.2471Z" fill="white" />
					</svg>
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="16" cy="16" r="16" fill="#383F99" />
						<path d="M18.3912 15.1704C18.4264 15.5223 18.4968 15.8391 18.4968 16.2967C18.4968 20.1686 15.8921 22.8789 11.985 22.8789C8.25397 22.8789 5.22686 19.887 5.22686 16.1207C5.22686 12.3896 8.25397 9.36254 11.985 9.36254C13.8154 9.36254 15.3289 10.0313 16.5257 11.1577L14.6954 12.9176C14.2026 12.4248 13.3226 11.8617 11.985 11.8617C9.69712 11.8617 7.79638 13.7624 7.79638 16.1207C7.79638 18.5142 9.69712 20.415 11.985 20.415C14.6602 20.415 15.6809 18.479 15.8217 17.4935H11.985V15.1704H18.3912ZM24.903 15.3815H26.8742V17.3527H24.903V19.3238H22.9319V17.3527H20.9608V15.3815H22.9319V13.4456H24.903V15.3815Z" fill="white" />
					</svg>
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="16" cy="16" r="16" fill="#383F99" />
						<path d="M16.3389 7.35621C19.6475 7.35621 22.6746 9.64413 22.6746 13.1288C22.6746 16.4023 20.9851 20.063 17.254 20.063C16.3389 20.063 15.2477 19.6054 14.7901 18.7958C14.0157 21.9637 14.0509 22.4565 12.291 24.8852C12.115 24.9556 12.1502 24.9556 12.0446 24.8148C11.9742 24.1461 11.9038 23.5125 11.9038 22.8437C11.9038 20.6966 12.8894 17.5639 13.3821 15.4871C13.1006 14.924 13.0302 14.2904 13.0302 13.692C13.0302 10.8761 16.3389 10.4537 16.3389 12.7768C16.3389 14.1496 15.3885 15.4519 15.3885 16.7895C15.3885 17.6695 16.1629 18.3031 17.0428 18.3031C19.4716 18.3031 20.2107 14.8184 20.2107 12.9528C20.2107 10.4537 18.4508 9.08095 16.0221 9.08095C13.2414 9.08095 11.0942 11.0873 11.0942 13.9032C11.0942 15.276 11.939 15.9799 11.939 16.2967C11.939 16.5783 11.7278 17.5287 11.3758 17.5287C10.531 17.5287 9.15828 16.1207 9.15828 13.6568C9.15828 9.74973 12.7134 7.35621 16.3389 7.35621Z" fill="white" />
					</svg>
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="16" cy="16" r="16" fill="#383F99" />
						<path d="M11.7118 22.8789H8.43829V12.3544H11.7118V22.8789ZM10.0574 10.9465C9.03667 10.9465 8.19189 10.0665 8.19189 9.01055C8.19189 7.98979 9.03667 7.14501 10.0574 7.14501C11.1134 7.14501 11.9582 7.98979 11.9582 9.01055C11.9582 10.0665 11.1134 10.9465 10.0574 10.9465ZM23.9258 22.8789H20.6875V17.7751C20.6875 16.5431 20.6523 14.9944 18.9627 14.9944C17.2732 14.9944 17.0268 16.2967 17.0268 17.6695V22.8789H13.7533V12.3544H16.886V13.7976H16.9212C17.3788 12.988 18.4348 12.1081 20.0187 12.1081C23.3274 12.1081 23.961 14.2904 23.961 17.1063V22.8789H23.9258Z" fill="white" />
					</svg>
				</div>
				<div class="blog-home-section-left-category-box">
					<p>Categories</p>
					<ul>
						<li>All Categories</li>
						<li>SEO</li>
						<li>Dictionary / Grammer</li>
						<li>Audio Visual Translation</li>
						<li>Process</li>
						<li>Practical Tips</li>
					</ul>
				</div>
				<div class="blog-home-section-left-top-post-box">
					<p class="blog-home-section-left-top-post-heading">Top Posts</p>
					<div class="blog-home-section-left-post-card-container">
						<div class="blog-home-section-left-post-card">
							<img src="<?php echo get_template_directory_uri() ?>/Images/post-card-img-small.png" alt="">
							<div>
								<p>September 2, 2022</p>
								<p>Share Your Images & Be Featured</p>
							</div>
						</div>
						<div class="blog-home-section-left-post-card">
							<img src="<?php echo get_template_directory_uri() ?>/Images/post-card-img-small.png" alt="">
							<div>
								<p>September 2, 2022</p>
								<p>Share Your Images & Be Featured</p>
							</div>
						</div>
						<div class="blog-home-section-left-post-card">
							<img src="<?php echo get_template_directory_uri() ?>/Images/post-card-img-small.png" alt="">
							<div>
								<p>September 2, 2022</p>
								<p>Share Your Images & Be Featured</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-home-section-right">
				<p class="blog-home-section-right-recommend-heading">Recommended Articles</p>
				<div class="blog-home-section-right-top-card">
					<img src="<?php echo get_template_directory_uri() ?>/Images/recommend-article-big.png" alt="">
					<p class="recommend-card-category">Business</p>
					<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
					<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate
						libero et velit interdum,
						liquet odio ma ac aliquet odio mattis.
						orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.</p>
					<button>Read More</button>
				</div>
				<div class="blog-home-section-right-bottom-card-container">
					<div class="blog-home-section-right-bottom-card">
						<img src="<?php echo get_template_directory_uri() ?>/Images/blog-home-single-card.png" alt="">
						<p class="recommend-card-category">Business</p>
						<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
						<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc
							vulputate
							libero et velit interdum,
							liquet odio ma ac aliquet odio mattis.
							orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.
						</p>
						<button>Read More</button>
					</div>
					<div class="blog-home-section-right-bottom-card">
						<img src="<?php echo get_template_directory_uri() ?>/Images/blog-home-single-card.png" alt="">
						<p class="recommend-card-category">Business</p>
						<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
						<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc
							vulputate
							libero et velit interdum,
							liquet odio ma ac aliquet odio mattis.
							orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.
						</p>
						<button>Read More</button>
					</div>
					<div class="blog-home-section-right-bottom-card">
						<img src="<?php echo get_template_directory_uri() ?>/Images/blog-home-single-card.png" alt="">
						<p class="recommend-card-category">Business</p>
						<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
						<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc
							vulputate
							libero et velit interdum,
							liquet odio ma ac aliquet odio mattis.
							orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.
						</p>
						<button>Read More</button>
					</div>
					<div class="blog-home-section-right-bottom-card">
						<img src="<?php echo get_template_directory_uri() ?>/Images/blog-home-single-card.png" alt="">
						<p class="recommend-card-category">Business</p>
						<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
						<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc
							vulputate
							libero et velit interdum,
							liquet odio ma ac aliquet odio mattis.
							orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.
						</p>
						<button>Read More</button>
					</div>
					<div class="blog-home-section-right-bottom-card">
						<img src="<?php echo get_template_directory_uri() ?>/Images/blog-home-single-card.png" alt="">
						<p class="recommend-card-category">Business</p>
						<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
						<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc
							vulputate
							libero et velit interdum,
							liquet odio ma ac aliquet odio mattis.
							orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.
						</p>
						<button>Read More</button>
					</div>
					<div class="blog-home-section-right-bottom-card">
						<img src="<?php echo get_template_directory_uri() ?>/Images/blog-home-single-card.png" alt="">
						<p class="recommend-card-category">Business</p>
						<p class="recommend-card-title">Comparison of the Best Language Learning Programs</p>
						<p class="recommend-card-desc">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nuc
							vulputate
							libero et velit interdum,
							liquet odio ma ac aliquet odio mattis.
							orem ipsum dolor sit amet, consectetur adipiscing elit. Nuc vulputate libero et velit interdum.
						</p>
						<button>Read More</button>
					</div>
				</div>
				<div class="blog-home-pagination-row">
					<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="20.1429" cy="20.1429" r="20.1429" fill="#383F99" />
						<path d="M19.789 27.0713V15.4791H16.9791V14.2604C17.852 14.2604 18.5301 14.1966 19.0135 14.0691C19.497 13.9415 19.8394 13.7468 20.0408 13.4849C20.249 13.2231 20.3631 12.8974 20.3832 12.508H21.7127V27.0713H19.789Z" fill="white" />
					</svg>
					<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="20.5003" cy="20.1429" r="20.1429" fill="#383F99" fill-opacity="0.08" />
						<path d="M15.8743 27.3926V26.2545V25.6603C15.8743 24.915 16.0119 24.2704 16.2872 23.7266C16.5692 23.1827 16.9385 22.7094 17.3951 22.3065C17.8583 21.8969 18.3619 21.531 18.9058 21.2087C19.4563 20.8864 20.0036 20.5776 20.5474 20.2821C21.098 19.98 21.6016 19.6678 22.0581 19.3455C22.5147 19.0165 22.8806 18.6472 23.1559 18.2376C23.4379 17.8214 23.5789 17.3312 23.5789 16.7672C23.5789 16.0286 23.3171 15.4277 22.7933 14.9644C22.2763 14.5011 21.5747 14.2695 20.6884 14.2695C19.735 14.2695 18.9696 14.5381 18.3921 15.0752C17.8147 15.6124 17.4891 16.3274 17.4152 17.2204H15.5621C15.5822 16.3811 15.7903 15.6157 16.1865 14.9241C16.5826 14.2259 17.1634 13.6686 17.9288 13.2523C18.6943 12.836 19.6376 12.6279 20.7589 12.6279C21.7325 12.6279 22.5785 12.8024 23.2969 13.1516C24.0153 13.494 24.5693 13.9774 24.9587 14.6019C25.3548 15.2196 25.5529 15.9414 25.5529 16.7672C25.5529 17.5192 25.4153 18.1638 25.14 18.7009C24.8647 19.2381 24.4988 19.7047 24.0422 20.1009C23.5923 20.4903 23.0988 20.8394 22.5617 21.1483C22.0246 21.4571 21.4841 21.7559 20.9402 22.0446C20.3963 22.3266 19.8995 22.6254 19.4496 22.941C18.9998 23.2499 18.6372 23.6057 18.3619 24.0086C18.0866 24.4114 17.949 24.8915 17.949 25.4488V25.7409H25.6335V27.3926H15.8743Z" fill="#383F99" />
					</svg>
					<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="20.8577" cy="20.1429" r="20.1429" fill="#383F99" fill-opacity="0.08" />
						<path d="M16.3342 25.999V13.999C16.3346 13.8775 16.3681 13.7584 16.4312 13.6545C16.4942 13.5506 16.5843 13.4659 16.6919 13.4095C16.7995 13.3531 16.9205 13.327 17.0418 13.3342C17.163 13.3414 17.2801 13.3815 17.3802 13.4503L26.0469 19.4503C26.4062 19.699 26.4062 20.2976 26.0469 20.547L17.3802 26.547C17.2803 26.6164 17.1632 26.6571 17.0417 26.6647C16.9202 26.6723 16.799 26.6464 16.6912 26.59C16.5833 26.5335 16.4931 26.4485 16.4301 26.3443C16.3672 26.2401 16.334 26.1207 16.3342 25.999Z" fill="#383F99" />
					</svg>

				</div>
			</div>
		</div>
		<div class="latest-article-blog home-blog-top-post-container">
			<p class="latest-article-heading">Top Posts
			</p>
			<div class="latest-article-card-container-outer blog-home-top-post-card-container-outer">
				<svg class="prev-slide-btn blog-home-card-prev-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99" fill-opacity="0.08" />
					<path d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z" fill="#383F99" />
				</svg>
				<div class="swiper mySwiper blog-home-top-post-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide blog-home-top-post-card-box">
							<div class="latest-article-card">
								<img src="<?php echo get_template_directory_uri() ?>/Images/latest-article-card1.png" alt="">
								<p class="latest-article-card-category blog-home-top-post-card-date">September 2, 2022</p>
								<p class="latest-article-card-title blog-home-top-post-card-title">Share Your Images and Be
									Featured
								</p>
								<!-- <button>Read More</button> -->
							</div>
						</div>
						<div class="swiper-slide blog-home-top-post-card-box">
							<div class="latest-article-card">
								<img src="<?php echo get_template_directory_uri() ?>/Images/latest-article-card1.png" alt="">
								<p class="latest-article-card-category blog-home-top-post-card-date">September 2, 2022</p>
								<p class="latest-article-card-title blog-home-top-post-card-title">Share Your Images and Be
									Featured
								</p>
								<!-- <button>Read More</button> -->
							</div>
						</div>
						<div class="swiper-slide blog-home-top-post-card-box">
							<div class="latest-article-card">
								<img src="<?php echo get_template_directory_uri() ?>/Images/latest-article-card1.png" alt="">
								<p class="latest-article-card-category blog-home-top-post-card-date">September 2, 2022</p>
								<p class="latest-article-card-title blog-home-top-post-card-title">Share Your Images and Be
									Featured
								</p>
								<!-- <button>Read More</button> -->
							</div>
						</div>
						<div class="swiper-slide blog-home-top-post-card-box">
							<div class="latest-article-card">
								<img src="<?php echo get_template_directory_uri() ?>/Images/latest-article-card1.png" alt="">
								<p class="latest-article-card-category blog-home-top-post-card-date">September 2, 2022</p>
								<p class="latest-article-card-title blog-home-top-post-card-title">Share Your Images and Be
									Featured
								</p>
								<!-- <button>Read More</button> -->
							</div>
						</div>
						<div class="swiper-slide blog-home-top-post-card-box">
							<div class="latest-article-card">
								<img src="<?php echo get_template_directory_uri() ?>/Images/latest-article-card1.png" alt="">
								<p class="latest-article-card-category blog-home-top-post-card-date">September 2, 2022</p>
								<p class="latest-article-card-title blog-home-top-post-card-title">Share Your Images and Be
									Featured
								</p>
								<!-- <button>Read More</button> -->
							</div>
						</div>
					</div>
				</div>
				<svg class="next-slide-btn blog-home-card-next-slide" width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="28" cy="28.498" r="28" fill="#383F99" />
					<path d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z" fill="white" />
				</svg>
			</div>
		</div>
		<div class="lets-get-started-section">
			<div class="lets-get-started-left">
				<img src="<?php echo get_template_directory_uri() ?>/Images/lets-get-started-left-img.png" alt="">
			</div>
			<div class="lets-get-started-right">
				<p class="lets-get-started-heading">Let’s Get Started!
					<img src="<?php echo get_template_directory_uri() ?>/Images/hero-curve-line.png" alt="">
				</p>
				<p class="lets-get-started-description">Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
						<p>Mobile ( optional )</p>
						<div class="lets-get-started-field-cont">
							<svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2086 13.9918L15.3458 11.8126C15.1255 11.7182 14.8851 11.6803 14.6464 11.7022C14.4077 11.7241 14.1783 11.8052 13.9788 11.9382C13.9586 11.9512 13.9393 11.9657 13.9212 11.9815L11.3796 14.1432C11.3533 14.1575 11.3239 14.1656 11.2939 14.1666C11.2639 14.1677 11.234 14.1618 11.2067 14.1493C9.57306 13.3608 7.88075 11.6788 7.08916 10.0678C7.07598 10.0409 7.06912 10.0113 7.06912 9.98136C7.06912 9.95139 7.07598 9.92181 7.08916 9.89489L9.25807 7.32143C9.27363 7.30239 9.28806 7.28246 9.3013 7.26173C9.43243 7.06152 9.51164 6.8318 9.53177 6.59332C9.5519 6.35484 9.51231 6.1151 9.41659 5.89574L7.25283 1.04117C7.12995 0.754599 6.91744 0.51561 6.6472 0.360073C6.37696 0.204536 6.06356 0.140841 5.75405 0.178547C4.40888 0.355391 3.17412 1.01599 2.28052 2.03689C1.38692 3.0578 0.89563 4.36915 0.89845 5.72589C0.89845 13.786 7.45562 20.3431 15.5157 20.3431C16.8724 20.3457 18.1836 19.8544 19.2045 18.9608C20.2253 18.0672 20.886 16.8326 21.063 15.4875C21.1007 15.1795 21.0378 14.8675 20.8839 14.598C20.7299 14.3285 20.4931 14.1159 20.2086 13.9918ZM15.5157 19.1079C8.13707 19.1079 2.13371 13.1045 2.13371 5.72589C2.13027 4.66967 2.5115 3.64833 3.20617 2.85269C3.90084 2.05705 4.86142 1.54154 5.90846 1.40248H5.93213C5.97361 1.40326 6.01389 1.41655 6.04769 1.44061C6.08149 1.46467 6.10723 1.49839 6.12154 1.53733L8.29353 6.38675C8.30592 6.41372 8.31234 6.44304 8.31234 6.47271C8.31234 6.50238 8.30592 6.5317 8.29353 6.55866L6.12051 9.13829C6.1043 9.15671 6.0895 9.17632 6.07625 9.19697C5.94027 9.40455 5.8602 9.64373 5.84379 9.89134C5.82738 10.1389 5.87518 10.3866 5.98257 10.6103C6.89563 12.4797 8.7794 14.349 10.6694 15.2621C10.8944 15.3689 11.1432 15.4155 11.3917 15.3975C11.6401 15.3795 11.8796 15.2973 12.0868 15.1592C12.1064 15.1458 12.1259 15.1314 12.1445 15.1159L14.685 12.9542C14.7101 12.9407 14.7378 12.9328 14.7662 12.9311C14.7946 12.9293 14.8231 12.9337 14.8497 12.9439L19.7135 15.1231C19.7532 15.14 19.7866 15.169 19.809 15.206C19.8313 15.2429 19.8415 15.286 19.8381 15.329C19.6997 16.3765 19.1847 17.3378 18.3892 18.0333C17.5938 18.7287 16.5723 19.1107 15.5157 19.1079Z" fill="#0E2A5A" />
							</svg>
							<input type="number" name="" id="" placeholder="+1 415-555-1212">
						</div>
					</div>
					<div class="lets-get-started-field-box">
						<p>Company ( optional )</p>
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
						<p>Upload Document ( optional )</p>
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
		<div class="email-us-section">
			<img class="email-us-bg" src="<?php echo get_template_directory_uri() ?>/Images/email-us-bg.png" alt="">
			<div class="email-us-inner">
				<div class="email-us-left">
					<img src="<?php echo get_template_directory_uri() ?>/Images/email-us-left-img.png" alt="">
				</div>
				<div class="email-us-right">
					<p class="email-us-right-heading">Each Project Is Different, <span>Contact Us <img src="<?php echo get_template_directory_uri() ?>/Images/line-curve-medium.png" alt=""></span> To Get A
						<span>Custom <img src="<?php echo get_template_directory_uri() ?>/Images/small-curve-line.png" alt=""></span>And
						Accurate
						Quote!
					</p>
					<button>Get a Quote</button>
					<div class="send-msg-container">
						<label for="">Enter your email below, and we will contact you.</label>
						<div class="input-container">
							<input type="email" name="" id="" placeholder="Email Address">
							<button class="email-send-btn">Send</button>

						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php
	endwhile;
endif;
get_footer();
?>