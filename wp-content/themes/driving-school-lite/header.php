<?php
/**
 * The Header for our theme.
 * @package Driving School Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'driving-school-lite' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 p-0">
          <?php if ( get_theme_mod('driving_school_lite_location','') != "" ) {?>
            <span class="location"><i class="fas fa-map-marker-alt"></i>
            <?php if ( get_theme_mod('driving_school_lite_location','') != "" ) {?>
              <?php echo esc_html( get_theme_mod('driving_school_lite_location',__('Studio 53 Grant Drive, East Darren, HA3 7SF','driving-school-lite') )); ?>
            <?php }?></span>
          <?php }?>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="social-media">
            <?php if( get_theme_mod( 'driving_school_lite_facebook' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'driving_school_lite_twitter' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_twitter','' ) ); ?>"><i class="fab fa-twitter"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'driving_school_lite_youtube' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_youtube','' ) ); ?>"><i class="fab fa-youtube"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'driving_school_lite_linkedin') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_linkedin','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <?php if ( get_theme_mod('driving_school_lite_button_text','') != "" ) {?>
            <div class="enroll">
              <span><a href="<?php echo esc_html(get_theme_mod('driving_school_lite_button_link')); ?>"><?php echo esc_html(get_theme_mod('driving_school_lite_button_text',__('ENROLL NOW!','driving-school-lite'))); ?> </a></span>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-detail">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="logo">
            <?php if( has_custom_logo() ){ driving_school_lite_the_custom_logo();
             }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?> 
              <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; }?>
          </div>
        </div>
        <div class="col-lg-9 col-md-9">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="call">
                <div class="row">
                  <?php if ( get_theme_mod('driving_school_lite_call_text','') != "" ) {?>
                    <div class="col-lg-3 col-md-12 p-0">
                      <div class="contact-icon">
                      <i class="fas fa-phone-volume"></i>
                    </div>
                    </div>
                    <div class="col-lg-9 col-md-12 p-0">
                      <?php if ( get_theme_mod('driving_school_lite_call_text','') != "" ) {?>
                        <p class="header-txt"><?php echo esc_html( get_theme_mod('driving_school_lite_call_text',__('PHONES:','driving-school-lite') )); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('driving_school_lite_call_number','') != "" ) {?>
                        <p><?php echo esc_html( get_theme_mod('driving_school_lite_call_number',__('(800)123-0045','driving-school-lite') )); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="mail">
                <div class="row">
                  <?php if ( get_theme_mod('driving_school_lite_email_text','') != "" ) {?>
                    <div class="col-lg-3 col-md-12 p-0">
                      <div class="contact-icon">
                      <i class="far fa-envelope"></i>
                    </div>
                    </div>
                    <div class="col-lg-9 col-md-12 p-0">
                      <?php if ( get_theme_mod('driving_school_lite_email_text','') != "" ) {?>
                        <p class="header-txt"><?php echo esc_html( get_theme_mod('driving_school_lite_email_text',__('EMAIL:','driving-school-lite')) ); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('driving_school_lite_email','') != "" ) {?>
                        <p><?php echo esc_html( get_theme_mod('driving_school_lite_email',__('sitename@gmail.com','driving-school-lite')) ); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="time">
                <div class="row">
                  <?php if ( get_theme_mod('driving_school_lite_timing_text','') != "" ) {?>
                    <div class="col-lg-3 col-md-12 p-0">
                      <div class="contact-icon">
                      <i class="far fa-clock"></i>
                    </div>
                    </div>
                    <div class="col-lg-9 col-md-12 p-0">
                      <?php if ( get_theme_mod('driving_school_lite_timing_text','') != "" ) {?>
                        <p class="header-txt"><?php echo esc_html( get_theme_mod('driving_school_lite_timing_text',__('TIMINGS:','driving-school-lite')) ); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('driving_school_lite_timing','') != "" ) {?>
                        <p><?php echo esc_html( get_theme_mod('driving_school_lite_timing',__('sitename@gmail.com','driving-school-lite')) ); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-section">
    <div class="menuborder">
      <div class="container">
        <div class="menu-sec">
          <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','driving-school-lite'); ?></a></div>
          <div class="row m-0">
            <div class="col-lg-11 col-md-10 black p-0">
              <div class="top-bar">
                <div class="menubox">
                  <div class="nav">
                    <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 black p-0">
              <div class="search-box">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
          <div class="serach_outer">
            <div class="closepop"><i class="far fa-window-close"></i></div>
            <div class="serach_inner">
              <?php get_search_form(); ?>
            </div>
          </div>
        </div>
      </div>
      <hr class="dash">
    </div>
  </div>
</div>