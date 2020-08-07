<?php 
// Template Name: Home page Template
get_header();  ?>

<div class="site-banner">
    <div class="banner-item">
        <img src="<?php  the_post_thumbnail_url()?>" alt="banner">
        <div class="banner-caption left">
            <div class="container">
                <h1 class="title">
                    <a href="#"> <?php echo get_field('header_title') ?></a>
                </h1>
                <div  class="item-desc">
                    <?php echo get_field('header_description') ?>

                    <div id="newsletter">
                        <?php echo do_shortcode('[email-subscribers-form id="1"]')?>
                    </div>
                    <!--remaining part -->
                </div>
            </div>
        </div>
    </div>
</div> <!-- .site-banner -->

<section class="about-section">
    <div class="container">
        <section class="widget widget_raratheme_featured_page_widget">
            <div class="widget-featured-holder right">
                <p class="section-subtitle">
                    <span>About Us</span>
                </p>
                <div class="text-holder">
                    <h2 class="widget-title"><?php echo get_theme_mod('codewing_about_title_handle')?> <?php echo get_field('author_title',21) ?></h2>
                    <div class="featured_page_content">
                        <p><?php echo wp_trim_words(get_field('author_description',21), 200, '...')  ?></p>
                        <a href="<?php echo site_url('about') ?>" target="_blank" class="btn-readmore">Know more about me</a>
                    </div>
                </div>
                <div class="img-holder">
                    <a target="_blank" href="#">
                        <?php
                            $id_image = get_field('author_image',21);
                            $image = wp_get_attachment_image_src($id_image, 'author_image')
                            
                            ?>
                        <img src="<?php echo $image[0]; ?>" alt="">
                    </a>
                </div>
            </div>
        </section>
    </div>
</section> <!-- .about-section -->

<section class="client-section">
    <div class="container">
        <section class="widget widget_raratheme_client_logo_widget">
            <div class="raratheme-client-logo-holder">
                <div class="raratheme-client-logo-inner-holder">
                    <h2 class="widget-title" itemprop="name"><?php echo get_theme_mod('codewing_featured_title_handle')?></h2>
                    <div class="image-holder-wrap">
                        <!-- yo wrap plugin ko filter bata rakhnu parxa -->

                        <?php 
                            $args = array(
                                'post_type'=>'featured',
                                'posts_per-page'=>-1,
                                'orderby'=>'date'
                            );

                            $featured = new WP_Query($args);
                            while($featured->have_posts()): $featured->the_post()
                            ?>

                        <div class="image-holder black-white">
                            <a >
                                <img src="<?php the_post_thumbnail_url() ?>" alt="">
                            </a>
                        </div>

                        <?php endwhile; wp_reset_postdata()  ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
</section> <!-- .client-section -->

<section class="service-section">
    <div class="container">
        <section class="widget widget_text">
            <h2 class="widget-title"><?php echo get_theme_mod('codewing_service_title_handle')?></h2>
            <div class="textwidget">
                <p><?php echo get_theme_mod('codewing_service_content_handle')?></p>
            </div>
        </section>
        <?php
                $args = array(
                    'post_type'=>'services',
                    'posts_per_page'=>-1,
                    'orderby'=>'date'
                );

                $services = new WP_Query($args);
                while($services->have_posts()): $services->the_post();
                
        ?>
        <section class="widget widget_rrtc_icon_text_widget">
            <div class="rtc-itw-holder">
                <div class="rtc-itw-inner-holder">
                    <div class="text-holder">
                        <h2 class="widget-title" itemprop="name"><?php echo the_title() ?></h2>
                        <div class="content">
                            <p><?php echo wp_trim_words(get_field('services_content'), 25, '...') ?></p>
                        </div>
                        <a class="btn-readmore" href="<?php echo the_permalink() ?>" target="_blank">Learn More</a>
                    </div>
                    <div class="icon-holder">
                    <?php
                        $id_image = get_field('service_detail_image');
                        $image = wp_get_attachment_image_src($id_image, 'author_image')
                                    
                    ?>
                        
                        <img src="<?php echo $image[0];?>" alt="Generate Better Plans">
                    </div>
                </div>
            </div>
        </section>

        <?php endwhile; wp_reset_postdata()  ?>

    </div>
</section> <!-- .service-section -->

<div id="content" class="site-content">
    <header class="page-header">
        <div class="container">
            <h1 class="page-title"><?php echo get_theme_mod('codewing_blog_title_handle')?></h1>
            <div class="page-desc">
            <?php echo get_theme_mod('codewing_blog_content_handle')?>
            </div>
        </div>
    </header>

    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php
                        $args = array(
                            'post-type'=>'post',
                            'post_per_page'=>4,
                            'orderby'=>'date',
                            'order'=>'ASC'
                        );
                        $posts = new WP_Query($args);
                        while ($posts->have_posts()): $posts->the_post();
                        ?>
                <article class="post">
                    <figure class="post-thumbnail">
                        <a href="<?php the_permalink() ?>"><img src="<?php echo the_post_thumbnail_url() ?>" alt=""></a>
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
                                <span class="meta-title">Category</span>
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

                <?php endwhile; wp_reset_postdata()  ?>

            </main> <!-- .site-main -->
        </div> <!-- #primary -->
        <aside id="secondary" class="widget-area">
            <?php get_sidebar(); ?>
        </aside>  <!-- #secondary -->
    </div> <!-- .container -->
</div> <!-- .site-content -->


<?php get_footer(); ?>