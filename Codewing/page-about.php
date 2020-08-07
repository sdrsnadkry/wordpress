<?php 
// Template Name: About page Template
get_header();  ?>
    <div id="content" class="site-content">
            <div class="container">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <header class="page-header">
                            <h1 class="page-title"><?php echo the_title() ?></h1>
                        </header>
                        <div class="entry-content">
                            <figure class="wp-caption aligncenter">
                                <img class="size-full" src="<?php the_post_thumbnail_url()  ?>" alt="" width="602" height="440">
                                
                            </figure>
                            <?php echo get_field('page_content') ?>
                           
                        </div>
                    </main> <!-- .site-main -->
                </div> <!-- #primary -->
                <aside id="secondary" class="widget-area">
            <?php get_sidebar(); ?>
        </aside>  <!-- #secondary -->
            </div> <!-- .container -->
        </div> <!-- .site-content -->



<?php get_footer(); ?>
