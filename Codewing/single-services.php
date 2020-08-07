<?php get_header() ?>
<?php if( have_posts()): the_post();?>

<div class="single">
<div id="content" class="site-content">
            <header class="page-header" style="
            
            background: url(<?php the_post_thumbnail_url() ?>) no-repeat center center /cover;">
				<div class="container">
					<h1 class="page-title"><?php echo the_title()?></h1>
				</div>
			</header>
			
			<div class="container">
				<div id="primary" class="content-area sticky-meta">
					<main id="main" class="site-main">
						<div class="entry-meta">
							<div class="sticky-inner">
								<div class="sidebar__inner">
									
									<div class="sticky-social">
										
										<ul class="social-list">
											<li><a data-title="facebook" href="<?php echo get_theme_mod('codewing_facebook_handle')?>"><i class="fab fa-facebook-f"></i></a></li>
											<li><a data-title="twitter" href="<?php echo get_theme_mod('codewing_twitter_handle')?>"><i class="fab fa-twitter"></i></a></li>
											<li><a data-title="google-plus" href="<?php echo get_theme_mod('codewing_google_handle')?>"><i class="fab fa-google-plus-g"></i></a></li>
											<li><a data-title="linkedin" href="<?php echo get_theme_mod('codewing_linkedin_handle')?>"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a data-title="pinterest" href="<?php echo get_theme_mod('codewing_pinintrest_handle')?>"><i class="fab fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-content">
							
                        <?php echo get_field('services_content') ?>
							
							<p style="text-align: center;"><img src="images/single-ad4.jpg" alt=""></p>
						</div>
						
					</main> <!-- .site-main -->
					
					
					
					
				</div> <!-- #primary -->
			</div> <!-- .container -->
		</div> <!-- .site-content -->

</div>

<?php endif; ?>
<?php get_footer() ?>