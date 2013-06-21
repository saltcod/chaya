<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
    <div class="wrap group">
        <div id="content" class="site-content ten group" role="main">

            <aside class="col twelve">
                <div class="sort-by-year col twelve">
                 <h3 class="view-by-year">View by year</h3>
                 <nav class="horizontal">
                    <ul>
                        <li><a href="#2013">2013</a></li>
                        <li><a href="#2012">2012</a></li>
                        <li><a href="#2011">2011</a></li>
                        <li><a href="#2010">2010</a></li>
                    </ul>
                </nav>
            </div>
        </aside>



        <?php
        $args = array( 'pagename' => 'concerts-and-presentations'); 

        $the_query = new WP_Query( $args );


        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
        get_template_part('content');
        endwhile;
        endif;

        wp_reset_postdata();
        ?>



    </div><!-- .wrap -->
    </div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_footer(); ?>
