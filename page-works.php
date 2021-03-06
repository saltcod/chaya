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
        <div id="content" class="site-content" role="main">

            <aside class="listen col three">
                <h2>Listen (Youtube links)</h2>
                <?php chaya_fetch_page('full-works');?>
            </aside>



            <section class="col eight">
                <h2>List of Works</h2>
<p><em>Many of the scores can be viewed on Schott website by clicking on the work's name.</em></p>
                <aside id="works-filter" class="col three group">
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
            </aside> <!-- #options -->

            <div class="works group col eight">
                <div class="works-list">
                    <div id="works-container" class="group">

                        <?php chaya_fetch_work(); ?>
                        <?php get_template_part('content', 'works');?>
                    </div>
                </div>
            </div> <!-- .year-group -->
        </section>





    </div><!-- #content .site-content -->
</div><!-- .wrap -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>

