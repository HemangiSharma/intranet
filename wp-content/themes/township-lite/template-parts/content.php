<?php
/**
 * The template part for displaying slider
 *
 * @package Township Lite
 * @subpackage township_lite
 * @since Township Lite 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="postbox">
        <div class="new-text">
            <div class="box-content">
                <h4><?php the_title();?></h4>
                <div class="metabox">
                    <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span>
                    <span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span>
                    <span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','township-lite'), __('0 Comments','township-lite'), __('% Comments','township-lite') ); ?></span>
                </div>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ;?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'township-lite' ); ?>"><?php esc_html_e('Read Full','township-lite'); ?></a>
            </div>
        </div>
        <div class="clearfix"></div> 
    </div> 
</div>