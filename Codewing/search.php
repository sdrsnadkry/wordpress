<?php get_header()?>
<div class="search search-results rightsidebar list-view">
<div id="content" class="site-content">			
			<div class="container">
				<div id="primary" class="content-area">
					<header class="page-header">
						<h1 class="page-title">Search Results For:</h1>
						<form role="search" method="get" class="search-form" action="">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input class="search-field" placeholder="Search anything and hit enter" value="<?php the_search_query();  ?>" name="s" type="search">
							</label>
							<input class="search-submit" value="Search" type="submit">
						</form>
					</header>
					
					<main id="main" class="site-main">
                    <?php
                        while(have_posts()):the_post();
                        ?>
						<article class="post">
							<figure class="post-thumbnail">
								<a href="#"><img src="<?php the_post_thumbnail_url('searchImage')?>" alt=""></a>
							</figure>
							<div class="post-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title" itemprop="headline">
										<a href="#"><?php echo the_title();?></a>
									</h2>
								</header>
								<footer class="entry-footer">
									<a href="<?php the_permalink() ?>" class="btn-readmore">Continue Reading</a>
								</footer>
							</div>
                        </article>
                        <?php endwhile; wp_reset_postdata(); ?>
						
					</main> <!-- .site-main -->
					
				</div> <!-- #primary -->
                <aside id="secondary" class="widget-area">
            <?php get_sidebar(); ?>
        </aside>  <!-- #secondary -->
			</div> <!-- .container -->
		</div> <!-- .site-content -->



        </div>
<?php get_footer()?>