<?php
/**
 * The template part for displaying slider
 *
 * @package Township Lite
 * @subpackage township_lite
 * @since Township Lite 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="postbox">        
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
        };

      }; 
    ?> 
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