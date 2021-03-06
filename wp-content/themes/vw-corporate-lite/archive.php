<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Corporate Lite
 */

get_header(); ?>

<div class="feature-box">
    <div class="container">
        <div class="col-md-12">
            <div class="bradcrumbs">
                <?php vw_corporate_lite_the_breadcrumb(); ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php
        $left_right = get_theme_mod( 'vw_corporate_lite_theme_options','One Column');
        if($left_right == 'Left Sidebar'){ ?>
        <div class="col-md-4"><?php get_sidebar(); ?></div>
        <section id="our-services" class="services flipInX col-md-8">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>     
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content' ); 
                  
                endwhile;

                  else :

                    get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'vw-corporate-lite' ),
                        'next_text'          => __( 'Next page', 'vw-corporate-lite' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </section>
        <div class="clearfix"></div>
    <?php }else if($left_right == 'Right Sidebar'){ ?>
        <section id="our-services" class="services flipInX col-md-8">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>        
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content' ); 
                  
                endwhile;

                  else :

                    get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'vw-corporate-lite' ),
                        'next_text'          => __( 'Next page', 'vw-corporate-lite' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </section>
        <div class="col-md-4"><?php get_sidebar(); ?></div>
    <?php }else if($left_right == 'One Column'){ ?>
        <section id="our-services" class="services flipInX col-md-12">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>        
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content' ); 
                  
                endwhile;

                  else :

                    get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'vw-corporate-lite' ),
                        'next_text'          => __( 'Next page', 'vw-corporate-lite' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </section>
    <?php }else if($left_right == 'Three Columns'){ ?>
        <div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
        <section id="our-services" class="services flipInX col-md-6 col-sm-6">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?> 
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content' ); 
                  
                endwhile;

                  else :

                    get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'vw-corporate-lite' ),
                        'next_text'          => __( 'Next page', 'vw-corporate-lite' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </section>
        <div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
    <?php }else if($left_right == 'Four Columns'){ ?>
        <div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
        <section id="our-services" class="services flipInX col-md-3">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content' ); 
                  
                endwhile;

                else :

                    get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'vw-corporate-lite' ),
                        'next_text'          => __( 'Next page', 'vw-corporate-lite' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </section>
        <div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="sidebar" class="col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
    <?php }else if($left_right == 'Grid Layout'){ ?>
        <section id="our-services" class="services flipInX col-md-8">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/grid-layout' ); 
              
                endwhile;

                else :

                    get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'vw-corporate-lite' ),
                        'next_text'          => __( 'Next page', 'vw-corporate-lite' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        </section>
        <div id="sidebar" class="col-md-4"><?php dynamic_sidebar('sidebar-2'); ?></div>
    <?php } ?>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>