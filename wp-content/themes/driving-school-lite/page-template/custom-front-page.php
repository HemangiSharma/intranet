<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<?php do_action('driving_school_lite_above_slider_section'); ?>

<?php if( get_theme_mod('driving_school_lite_slider_hide') != ''){ ?>
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
      <?php $pages = array();
        for ( $count = 1; $count <= 3; $count++ ) {
          $mod = intval( get_theme_mod( 'driving_school_lite_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $pages[] = $mod;
          }
        }
        if( !empty($pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption d-none d-md-block">
              <div class="inner_carousel">
                <h2 class="animated fadeInDown"><?php the_title(); ?></h2>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( driving_school_lite_string_limit_words( $excerpt,25 ) ); ?></p>
                <div class="more-btn">              
                  <span><a href="<?php the_permalink(); ?>"><?php esc_html_e('BOOK LESSON','driving-school-lite'); ?></a></span>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section>
<?php }?>

<?php do_action('driving_school_lite_below_slider_section'); ?>

<?php if( get_theme_mod('driving_school_lite_page_title') != ''){ ?>
  <section id="our-features">
    <div class="container">
      <?php if( get_theme_mod('driving_school_lite_page_title') != ''){ ?>
        <div class="text-center">
          <h3><?php echo esc_html(get_theme_mod('driving_school_lite_page_title',__('OUR FEATURES','driving-school-lite'))); ?></h3>
          <hr class="head">
        </div>
      <?php }?>
      <div class="row">
        <?php 
          $catData=  get_theme_mod('driving_school_lite_category');
          if($catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $catData ,'driving-school-lite')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-3 col-md-3">
              <div class="right-part">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                <h4><?php the_title(); ?></h4>     
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( driving_school_lite_string_limit_words( $excerpt,10 ) ); ?></p>
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','driving-school-lite'); ?></a>
                <div class="clearfix"></div>
              </div>
            </div>
            <?php endwhile;
            wp_reset_postdata();   
          }       
        ?>
      </div>
    <div class="clearfix"></div> 
    </div>
  </section>
<?php }?>

<?php do_action('driving_school_lite_after_our_features_section'); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>