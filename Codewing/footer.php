<section class="newsletter-section">
    <div id="newsletter" >
        <div class="footer_newsletter">
            <?php echo do_shortcode('[email-subscribers-form id="2"]')?>
        </div>

    </div>
</section> 
<footer class="site-footer">
			<div class="top-footer">
				<div class="container">
					<div class="col">
						<section class="widget widget_text">
							<h2 class="widget-title">About</h2>
							<div class="textwidget">
								<p> <?php echo wp_trim_words(get_field('author_description',21), 25, '...')  ?></p>
							</div>
						</section>
					</div>
					<div class="col">
						<section class="widget widget_recent_entries">		
							<h2 class="widget-title" itemprop="name">Recent Posts</h2>		
							<ul>

                            <?php
                        $args = array(
                            'post-type'=>'post',
                            'post_per_page'=>2,
                            'orderby'=>'date',
                            'order'=>'DESC'
                        );
                        $posts = new WP_Query($args);
                        while ($posts->have_posts()): $posts->the_post();
                        ?>
								<li>
									<a href="<?php the_permalink() ?>"><?php echo the_title() ?></a>
									<span class="post-date"><?php echo get_the_date('j') ?>-<?php echo get_the_date('M') ?> <?php echo get_the_date('Y') ?></span>
                                </li>
                                
                                <?php 
                        endwhile; 
                        wp_reset_postdata(); ?>
								
							</ul>
						</section>
					</div>
					<div class="col">
						<section class="widget widget_categories">
							<h2 class="widget-title" itemprop="name">Categories</h2>
							<ul>
                                <?php 
                                $args = array(
                                    'taxonomy'     => 'category',
                                    'orderby'      => 'name',
                                    'show_count'   => true,
                                    'title_li'     => ''
                                  );
                                  ?>
                               
								<?php wp_list_categories( $args ); ?>
																
							</ul>
						</section>
					</div>
				</div>
			</div> <!-- .top-footer -->
			<div class="bottom-footer">
				<div class="container">
					<div class="copyright">            
						<span>© 2020 <a href="#">Codewing</a> - All Rights Reserved. </span><a href="#" target="_blank"> Codewing</a> by Rara Themes. Powered by <a href="#" target="_blank">WordPress</a>. <a class="privacy-policy-link" href="#">Privacy Policy</a>               
					</div>
					<div class="footer-social">
						<ul class="social-list">
							<li><a data-title="facebook" target="_blank" href="<?php echo get_theme_mod('codewing_facebook_handle')?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a data-title="twitter" target="_blank" href="<?php echo get_theme_mod('codewing_twitter_handle')?>"><i class="fab fa-twitter"></i></a></li>
							<li><a data-title="linkedin" target="_blank" href="<?php echo get_theme_mod('codewing_linkedin_handle')?>"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer> <!-- .site-footer -->
	</div> <!-- #page -->

    <?php wp_footer(); ?>

	<!-- JS FILES -->
	
</body>
</html>