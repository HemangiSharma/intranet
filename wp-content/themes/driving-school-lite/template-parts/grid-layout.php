<?php
/**
 * The template part for displaying services
 * @package Driving School Lite
 * @subpackage driving_school_lite
 * @since 1.0
 */
?>
<div class="col-md-4 col-sm-4">
    <div class="blog-sec">
        <div class="mainimage">
            <?php 
                if(has_post_thumbnail()) { 
                  the_post_thumbnail(); 
                }
            ?>    
        </div>
        <h3><?php the_title(); ?></h3>
        <div class="post-info">
            <i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><?php the_date(); ?></span>
            <i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"> <?php the_author(); ?></span>
            <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','driving-school-lite'), __('0 Comments','driving-school-lite'), __('% Comments','driving-school-lite') ); ?></span> 
        </div>
        <p><?php the_excerpt(); ?></p>
        <div class="blogbtn">
            <a href="<?php the_permalink();?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'driving-school-lite' ); ?>"><?php esc_html_e('Read Full','driving-school-lite'); ?></a>
        </div>
    </div>
</div>