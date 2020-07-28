<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 include 'form.php';
 function save_quickwhatsapp() {
  adminForm_quickwhatsapp();
 }

/*
 function QWA_quickwhatsapp() {
  add_options_page('Quick WhatsApp', 'Quick WhatsApp', 1, 'QWA_quickwhatsapp', 'save_quickwhatsapp');
 }
 add_action('admin_menu', 'QWA_quickwhatsapp');
*/





function QWA_quickwhatsapp() {
	add_options_page('Quick WhatsApp', 'Quick WhatsApp', 'manage_options', 'QWA_quickwhatsapp', 'save_quickwhatsapp');
}
add_action( 'admin_menu', 'QWA_quickwhatsapp' );

?>