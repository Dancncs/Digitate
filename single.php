<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Digitate
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <header class="single-header">
                <?php if(is_singular('post') && (!in_category('campaign-post'))) : ?>
                <h2 class="page-title"><img src="<?php bloginfo('template_directory') ?>/images/digitate.png">Blog</h2>
                <a href="#" class="search-navi" title="Search"><i class="fa fa-search" aria-hidden="true"></i></a>
                <section id="search-input">
                    <?php get_search_form(); ?>
                </section>
                <?php endif; ?>
            </header>

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'single' );

                if(is_single('resource')) {
                    digitate_post_nav();
                }

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                        comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
