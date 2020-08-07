<?php get_header() ?>
<?php if( have_posts()): the_post();?>


<div class="single">
<div id="content" class="site-content">
    <header id="page-header" class="page-header" style="background: url(<?php the_post_thumbnail_url() ?>) no-repeat center center / cover ">
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
                            <span class="byline" itemprop="author">
                                <span class="meta-title">Written By</span>
                                <span class="author">
                                   <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?>
                                </span>
                            </span>
                            <span class="posted-on" itemprop="datePublished">
                                <span class="meta-title">Published on</span>
                                <a href="#">
                                    <time datetime="2017-12-21"><?php echo get_the_date('j') ?>-<?php echo get_the_date('M') ?> <?php echo get_the_date('Y') ?></time>
                                </a>
                            </span>
                            <span class="category">
                                <span class="meta-title">Category</span>
                                <?php 
                                $categories = get_the_category();
                                    foreach ($categories as $category){
                                        echo "<a>".$category->name."</a>";
                                    }                                
                                ?>
                            </span>
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
                    
                    <p><?php echo get_field('post_content');?> </p>
                </div>
                
            </main> <!-- .site-main -->
            <div class="author-profile">
                <div class="author-img">
                <?php
                            $id_image = get_field('author_image',21);
                            $image = wp_get_attachment_image_src($id_image, 'author_image')
                            
                            ?>
                    <img alt="" src="<?php echo $image[0] ?>" class="avatar">
                </div>
                <div class="author-content-wrap">
                    <h1 class="page-title">
                    <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?>
                    </h1>
                    <div class="author-desc">
                    <?php echo get_the_author_meta('description'); ?>
                    </div>
                    <ul class="social-list">
                        <li><a data-title="facebook" href="<?php echo get_theme_mod('codewing_facebook_handle')?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a data-title="twitter" href="<?php echo get_theme_mod('codewing_twitter_handle')?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a data-title="google-plus" href="<?php echo get_theme_mod('codewing_google_handle')?>"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a data-title="linkedin" href="<?php echo get_theme_mod('codewing_linkedin_handle')?>"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a data-title="pinterest" href="<?php echo get_theme_mod('codewing_pinintrest_handle')?>"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            
            
            <div class="comments-area" itemscope="" itemtype="http://schema.org/Comment">
                <h2 class="comment-title"> Comments</h2>
               
                <div id="comment-form" class="comment-respond">

                        <?php echo do_shortcode('[gs-fb-comments]') ?>
                    
                </div>
            </div>
        </div> <!-- #primary -->
        <aside id="secondary" class="widget-area">
            <?php get_sidebar(); ?>
        </aside>  <!-- #secondary -->
    </div> <!-- .container -->
</div> <!-- .site-content -->
</div>

<?php endif; ?>
<?php get_footer() ?>