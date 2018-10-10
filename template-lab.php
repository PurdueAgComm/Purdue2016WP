<?php
/**
 *
 * Template Name: Full-Width Banner
 *
**/

get_header(); ?>

    <!--Second section is Purdue stats -->

    <?php while ( have_posts() ) : the_post(); ?>
    <div class=" full-width-banner container">
        <div class="row">
            <div class="col-xs-12" style="padding:0px;">
                <?php get_template_part( 'content', 'home' ); ?>
            </div>
        </div>
    </div>
    <?php endwhile; // end of the loop. ?>




    <?php
//get_sidebar();
get_footer();