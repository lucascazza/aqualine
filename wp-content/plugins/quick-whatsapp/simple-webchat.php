<?php
/*
Plugin Name: Simple Webchat
Plugin URI: http://www.chefblogger.me
Description: Mit Simple Webchat bindet man schnell ein WhatsApp Button ein. Die Administration finden sie unter <a href="options-general.php?page=QWA_quickwhatsapp">Quick WhatsApp Administration</a>
Version: 3.3.3
Author: Eric-Oliver Mächler
Author URI: http://www.ericmaechler.com
Requires at least: 3.5
Tested up to: 5.5
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include 'conf.php';

$quickwhatsapp_anzeige = get_option('quickwhatsapp');
$quickwhatsapps_greetings_error = get_option('quickwhatsapps_greetings');
$quickwhatsappbutton_show = get_option('quickwhatsappbutton');
$quickwhatsappsharebutton = get_option('quickwhatsappsharebutton');
$quickwhatsappbutton_style = get_option('quickwhatsappbutton_style');

$quickwhatsapps_onlineoffline_status = get_option('quickwhatsapps_onlineoffline_status');

//fehlermeldung generieren
if (($quickwhatsapp_anzeige == '') OR ($quickwhatsapps_greetings_error == ''))
	{
	
				function whatsapp_admin_notice__error() {
				$class = 'notice notice-error';
				$message = __( "Bitte installieren Sie das Quick Whatsapp Plugin fertig. Gehen Sie dazu zur Quick Whatsapp Administration", 'quick_whatsapp_msg' );

				printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
				}
				add_action( 'admin_notices', 'whatsapp_admin_notice__error' );

	}

$quickwhatsapps_floatingbutton_status_error = get_option('quickwhatsapps_floatingbutton_status');


//FLOATING BUTTON ERROR MSG
if (($quickwhatsapps_floatingbutton_status_error == 'an') )
	{
	

$quickwhatsapps_floating_posi_unten_nach_oben_error = get_option('quickwhatsapps_floating_posi_unten_nach_oben');
$quickwhatsapps_floation_posi_rechts_nach_links_error = get_option('quickwhatsapps_floation_posi_rechts_nach_links');
	
	if (($quickwhatsapps_floating_posi_unten_nach_oben_error == '') OR ($quickwhatsapps_floation_posi_rechts_nach_links_error == ''))
			{
	
				function whatsapp_admin_notice__error2() {
				$class = 'notice notice-error';
				$message = __( "Please Config your Floating Button", 'quick_whatsapp_msg' );

				printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
				}
				add_action( 'admin_notices', 'whatsapp_admin_notice__error2' );
			}

	}

//$beforefp = get_option('beforefp');
//$behindfp = get_option('behindfp');

//add_filter('the_content', 'add_messages');

/*
function add_messages( $content ) {
        global $beforefp;
        global $behindfp;
     if( is_feed() ) {
        return $beforefp.$content.$behindfp;
          } else {
        return $content;
    }
}
*/

/* ################################# BROWSERWEICHE #################### */
/*
$check_iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$check_android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$check_palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$check_berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$check_ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
// check if is a mobile
if ($check_iphone || $check_android || $check_palmpre || $check_ipod || $check_berry == true)
{
 //header('Location: https://api.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
 //echo "api.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
}
// all others
else {
 //header('Location: https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
 //echo "https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
}
*/
/* ################################# BROWSERWEICHE #################### */




/* ------------------------------------------- Normale Chat / Sharing Funktion  ------------------------------------------ */
$quickwhatsapps_floatingbutton_status = get_option('quickwhatsapps_chatbutton_status');
if ($quickwhatsapps_floatingbutton_status == 'an')
{
include("whatsapp-standard.php");
}
else {}
/* ----------------------------------------------------------------------------------------------------------------------- */


/* ------------------------------------------- Chat Shortcode Funktion  -------------------------------------------------- */
include("whatsapp-shortcode-chat.php");
/* ----------------------------------------------------------------------------------------------------------------------- */

/* ------------------------------------------- Chat Shortcode Funktion  -------------------------------------------------- */
include("simple-webchat-whatsapp-shortcode-gruppe.php");
/* ----------------------------------------------------------------------------------------------------------------------- */

/* ------------------------------------------- Sharing Shortcode Funktion ------------------------------------------------ */
include("whatsapp-shortcode-sharing.php");
/* ----------------------------------------------------------------------------------------------------------------------- */


/* ------------------------------------------- Text unter Kauf Button einfügen ------------------------------------------- */
include("whatsapp-button-after-addtocart.php");
/* ----------------------------------------------------------------------------------------------------------------------- */

/* ------------------------------------------- Floating Button ----------------------------------------------------------- */
$quickwhatsapps_floatingbutton_status = get_option('quickwhatsapps_floatingbutton_status');
if ($quickwhatsapps_floatingbutton_status == 'an')
{
include("whatsapp-floating-button.php");
}
else {}
/* ----------------------------------------------------------------------------------------------------------------------- */

?>