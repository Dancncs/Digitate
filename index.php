<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digitate
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                            <h2 class="page-title"><img src="<?php bloginfo('template_directory') ?>/images/digitate.png"><?php single_post_title(); ?></h2>
                            <a href="#" class="search-navi" title="Search"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <section id="search-input">
                                <?php get_search_form(); ?>
                            </section>
                    </header>
                <?php
                
                endif; ?>

                <div class="blogpost">
                 <?php   /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>
                </div>

            <?php digitate_paging_nav(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
