<?php
/**
 * The template part for displaying services
 * @package Driving School Lite
 * @subpackage driving_school_lite
 * @since 1.0
 */
?>
<div class="blog-sec animated fadeInDown">
  <div class="mainimage">
    <?php 
      if(has_post_thumbnail()) { 
        the_post_thumbnail(); 
      }
    ?>
  </div> 
  <div class="post-info">
    <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span>
    <span class="entry-author"> <i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span>
    <span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','driving-school-lite'), __('0 Comments','driving-school-lite'), __('% Comments','driving-school-lite') ); ?></span> 
  </div> 
  <h3><?php the_title(); ?></h3>
  <p><?php the_excerpt(); ?></p>
  <div class="blogbtn">
    <a href="<?php the_permalink() ;?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'driving-school-lite' ); ?>"><?php esc_html_e('Read Full','driving-school-lite'); ?></a>
  </div>
</div>