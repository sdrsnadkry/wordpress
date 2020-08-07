<?php 
get_header() ?>
<div id="content" class="site-content">
    <div class="container">
        <div id="primary" class="content-area">
            <header class="page-header">
                <div class="author-img">
                <?php
                            $id_image = get_field('author_image',21);
                            $image = wp_get_attachment_image_src($id_image, 'author_image')
                            
                            ?>
                    <img alt="" src="<?php echo $image[0]; ?>" class="avatar">
                </div>
                <div class="author-content-wrap">
                    <h1 class="page-title">
                        <span class="sub-title">All Posts By</span><?php echo get_field('author_title',21) ?>
                    </h1>
                    <div class="author-desc">
                    <?php echo get_field('author_description',21)  ?>
                    </div>
                    <ul class="social-list">
                    <li><a data-title="facebook" href="<?php echo get_theme_mod('codewing_facebook_handle')?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a data-title="twitter" href="<?php echo get_theme_mod('codewing_twitter_handle')?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a data-title="google-plus" href="<?php echo get_theme_mod('codewing_google_handle')?>"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a data-title="linkedin" href="<?php echo get_theme_mod('codewing_linkedin_handle')?>"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a data-title="pinterest" href="<?php echo get_theme_mod('codewing_pinintrest_handle')?>"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </header>
            
            <main id="main" class="site-main">
                <?php
                    
				     while(have_posts()):the_post();
				?>
                <article class="post">
                    <figure class="post-thumbnail">
                        <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ?>" alt=""></a>
                    </figure>
                    <div class="post-content-wrap">
                        <header class="entry-header">
                            <div class="entry-meta">
                                <span class="posted-on" itemprop="datePublished">
                                    <a href="#">
                                        <time datetime="2017-12-21"><?php echo get_the_date('j') ?>-<?php echo get_the_date('M') ?> <?php echo get_the_date('Y') ?></time>
                                    </a>
                                </span>
                                <span class="category">
                                <span class="category">
                                <span class="meta-title">Category: </span>
                                <?php 
                                $categories = get_the_category();
                                    foreach ($categories as $category){
                                        echo "<a>".$category->name."</a>";
                                    }                                
                                ?>
                            </span>
                            </div>
                            <h2 class="entry-title" itemprop="headline">
                                <a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
                                
                            </h2>
                        </header>
                        <div class="entry-content">
                            <p><?php
                                        echo wp_trim_words(get_field('post_content'), 25, '...');
                                    ?> </p>
                        </div>
                        <footer class="entry-footer">
                            <a href="<?php the_permalink() ?>" class="btn-readmore">Continue Reading</a>
                        </footer>
                    </div>
                </article>
                <?php endwhile;  wp_reset_postdata(); ?>



            </main> <!-- .site-main -->
            <nav class="navigation pagination">
                <div class="nav-links">
                    <?php echo paginate_links(); ?>
                </div>
            </nav>
        </div> <!-- #primary -->
        <aside id="secondary" class="widget-area">
            <?php get_sidebar(); ?>
        </aside> 
    </div> <!-- .container -->
</div> <!-- .site-content -->




<?php get_footer(); ?>