<?php
/**
 * Post single no header BG image supplied - regular template
 *
 * @package Salient WordPress Theme
 * @subpackage Partials
 * @version 10.5
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;

$nectar_options = get_nectar_theme_options();

$bg                                = get_post_meta( $post->ID, '_nectar_header_bg', true );
$bg_color                          = get_post_meta( $post->ID, '_nectar_header_bg_color', true );
$single_post_header_inherit_fi     = ( ! empty( $nectar_options['blog_post_header_inherit_featured_image'] ) ) ? $nectar_options['blog_post_header_inherit_featured_image'] : '0';
$theme_skin                        = ( ! empty( $nectar_options['theme-skin'] ) ) ? $nectar_options['theme-skin'] : 'original';
$header_format                     = (!empty($nectar_options['header_format'])) ? $nectar_options['header_format'] : 'default';
if($header_format === 'centered-menu-bottom-bar') {
  $theme_skin = 'material';
}
$fullscreen_header                 = ( ! empty( $nectar_options['blog_header_type'] ) && $nectar_options['blog_header_type'] === 'fullscreen' && is_singular( 'post' ) ) ? true : false;
$blog_header_type                  = ( ! empty( $nectar_options['blog_header_type'] ) ) ? $nectar_options['blog_header_type'] : 'default';
$fullscreen_class                  = ( $fullscreen_header === true ) ? 'fullscreen-header full-width-content' : null;
$blog_social_style                 = ( get_option( 'salient_social_button_style' ) ) ? get_option( 'salient_social_button_style' ) : 'fixed';
$remove_single_post_date           = ( ! empty( $nectar_options['blog_remove_single_date'] ) ) ? $nectar_options['blog_remove_single_date'] : '0';
$remove_single_post_author         = ( ! empty( $nectar_options['blog_remove_single_author'] ) ) ? $nectar_options['blog_remove_single_author'] : '0';
$remove_single_post_comment_number = ( ! empty( $nectar_options['blog_remove_single_comment_number'] ) ) ? $nectar_options['blog_remove_single_comment_number'] : '0';
$remove_single_post_nectar_love    = ( ! empty( $nectar_options['blog_remove_single_nectar_love'] ) ) ? $nectar_options['blog_remove_single_nectar_love'] : '0';


if ( get_post_format() !== 'status' && get_post_format() !== 'aside' ) {

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			
			// Determine whether theme option to inherit featured image is in effect.
			$inherit_and_has_featured_img = false;
			if( $single_post_header_inherit_fi === '1' && has_post_thumbnail() ) {
				$inherit_and_has_featured_img = true;
			}
			
			if ( ( empty( $bg ) && empty( $bg_color ) ) && $fullscreen_header != true && $inherit_and_has_featured_img !== true ) { ?>


	
	<?php }

endwhile;
endif;

} ?>