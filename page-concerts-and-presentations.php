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
        <div id="content" class="site-content eight group" role="main">
            
            <aside class="col three">
                    <h2 class="callout">A selection of recent concerts and presentations</h2>
             </aside>
            
            <div class="performances-container col eight">
                <div class="year-group group">
                    <div class="year"><h2>2013</h2> </div>

                    <div class="performance-list">
                        <?php chaya_fetch_performances( 2013 ); ?>
                        <?php  get_template_part('content', 'performances');?>
                    </div>
                </div> <!-- .year-group -->


                <div class="year-group group">
                    <div class="year"><h2>2012</h2></div>

                    <div class="performance-list">
                        <?php chaya_fetch_performances( 2012 ); ?>
                        <?php get_template_part('content', 'performances');?>
                    </div>
                </div> <!-- .year-group -->


                <div class="year-group group">
                    <div class="year"><h2>2011</h2></div>

                    <div class="performance-list">
                        <?php chaya_fetch_performances( 2011 ); ?>
                        <?php get_template_part('content', 'performances');?>
                    </div>
                </div> <!-- .year-group -->


                <div class="year-group group">
                    <div class="year"><h2>2010</h2></div>

                    <div class="performance-list">
                        <?php chaya_fetch_performances( 2010 ); ?>
                        <?php get_template_part('content', 'performances');?>
                    </div>
                </div> <!-- .year-group -->
            </div>


        </div><!-- #content .site-content -->
    </div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>


