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

<div id="primary" class="content-area">
    <div class="wrap group">
        <div id="content" class="site-content" role="main">

            <section id="works-filter" class="group">
                <div class="works-filter-wrap">
                    <h3 class="inline">Category:</h3>

                    <ul id="filters" class="option-set group" data-option-key="filter">
                       <li><a href="#filter" data-option-value="*" class="selected">Show all</a></li>

                       <?php 
                       $terms = get_terms("work-type");
                       $count = count($terms);
                       if ( $count > 0 ){

                        foreach ( $terms as $term ) {
                            echo "<li><a href='#filter' data-option-value='" ."." .$term->name ."'>";
                            echo $term->name . "</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </section> <!-- #options -->





        <div class="works group">
            <div class="works-list">
                <div id="works-container" class="group">

                    <?php chaya_fetch_work(); ?>
                    <?php get_template_part('content', 'works');?>
                </div>
            </div>
        </div> <!-- .year-group -->







    </div><!-- #content .site-content -->
</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>


