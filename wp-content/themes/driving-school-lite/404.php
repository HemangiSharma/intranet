<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Driving School Lite
 */

get_header(); ?>

<div class="container">
    <div class="page-content">
		<div class="notfound">
			<h1><?php esc_html_e('404 Not Found', 'driving-school-lite' ); ?></h1>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn','driving-school-lite' );  ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry it happens to the best of us.', 'driving-school-lite' ); ?></p>
			<div class="read-moresec">
        		<a href="<?php echo esc_url( home_url() ); ?>" class="button"><?php esc_html_e( 'Return to the home page', 'driving-school-lite' ); ?></a>
			</div>
		</div>
		<div class="clearfix"></div>
    </div>
</div>
	
<?php get_footer(); ?>