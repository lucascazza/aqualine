<?php

/*
Floating WhatsApp Button
*/

//CSS Einhängen
add_action( 'wp_enqueue_scripts', 'quick_whatsapp_floating_button_css_style_include' );
function quick_whatsapp_floating_button_css_style_include() {
	wp_register_style( 'quick_whatsapp_floating_button_css_style', plugins_url('css/quick-whatsapp-floating-button.php', __FILE__) );
	wp_enqueue_style( 'quick_whatsapp_floating_button_css_style' );

}


//Code in Footer einbauen
add_action('wp_footer', 'quick_whatsapp_floating_button_footer');
function quick_whatsapp_floating_button_footer() {
    $custom_items = get_option( 'option_name' );

	/*
	ECHO "
	<a href='https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.' class='float' target='_blank'><i class='fa fa-whatsapp my-float'></i></a>
	";
	*/

/* ########################## ONLINE ###################*/
$quickwhatsapp_tel = get_option('quickwhatsapp');
$quickwhatsapps_greetings = get_option('quickwhatsapps_greetings');
	
//button
$floating_button_img = '<img src="' . plugins_url( 'images/whatsapp-floatingbutton-w.png', __FILE__ ) . '" >';
		
	
/*	
$check_iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$check_android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$check_palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$check_berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$check_ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
// check if is a mobile
if ($check_iphone || $check_android || $check_palmpre || $check_ipod || $check_berry == true)
*/
	
if (wp_is_mobile())
	
{
 //header('Location: https://api.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
$whatsapp_floating_button = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_tel&text=$quickwhatsapps_greetings' class='simplewebchat_float' target='_blank'>$floating_button_img</a>";

}
// all others
else {
 //header('Location: https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
 //echo "https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
$whatsapp_floating_button = "<a href='https://web.whatsapp.com/send?phone=$quickwhatsapp_tel&text=$quickwhatsapps_greetings' class='simplewebchat_float' target='_blank'>$floating_button_img</a>";
}

echo $whatsapp_floating_button;

/* #####################################################*/	
	
	
}
?>