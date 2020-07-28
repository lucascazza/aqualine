<?php
/*
Dieser Code regelt die Sharing-Shortcode funktion
*/

function quickwhatsapp_shortcode2() {

$quickwhatsappsharing = get_option('quickwhatsappsharing');
$quickwhatsappsharebutton = get_option('quickwhatsappsharebutton');
$quickwhatsappbutton_style_show = get_option('quickwhatsappbutton_style');

//permalink
	$quickwhatsappsharing_link = get_permalink();
	$post_id = get_the_ID();
	$quickwhatsappsharing_titel0 = get_the_title( $post_id );
	
	$quickwhatsappsharing_titel = str_replace("%20"," ",$quickwhatsappsharing_titel0);

if ($quickwhatsappsharebutton == '')
			{
					
					/* ######################### bilder design auswählen #################### */
					if ($quickwhatsappbutton_style_show == '' or $quickwhatsappbutton_style_show == '1')
						  {
							$quickwhatsappsharing_button_img = '<img src="' . plugins_url( 'images/whatsapp-share.jpg', __FILE__ ) . '" > ';
						  }
					  elseif ($quickwhatsappbutton_style_show == '2')
						  {
							  $quickwhatsappsharing_button_img = '<img src="' . plugins_url( 'images/whatsapp-share-clear.png', __FILE__ ) . '" > ';
							}
					elseif ($quickwhatsappbutton_style_show == '3')
						  {
							  $quickwhatsappsharing_button_img = '<img src="' . plugins_url( 'images/whatsapp-share-flat.png', __FILE__ ) . '" > ';
							}
					elseif ($quickwhatsappbutton_style_show == '4')
						  {
							  $quickwhatsappsharing_button_img = '<img src="' . plugins_url( 'images/whatsapp-share-creativ.png', __FILE__ ) . '" > ';
							}
	
					  else
						  {
							  //bei Error Standard Design
							  $quickwhatsappsharing_button_img = '<img src="' . plugins_url( 'images/whatsapp-share.jpg', __FILE__ ) . '" > ';
							  
						  }
	
	
					/* ###################################################################### */
					//$quickwhatsappsharing_button = "<a href='whatsapp://send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
	
	/* ###################################### */
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
 //echo "api.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
$quickwhatsappsharing_button = "<a href='https://api.whatsapp.com/send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
}
// all others
else {
 //header('Location: https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
 //echo "https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
$quickwhatsappsharing_button = "<a href='https://web.whatsapp.com/send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
}
	/* ###################################### */	
	
			}
			else
			{
					//$quickwhatsappsharing_button_img = "<img src='$quickwhatsappsharebutton'>";
					//$quickwhatsappsharing_button = "<a href='whatsapp://send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
	/* ###################################### */

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
 //echo "api.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
$quickwhatsappsharing_button_img = "<img src='$quickwhatsappsharebutton'>";
$quickwhatsappsharing_button = "<a href='https://api.whatsapp.com/send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
}
// all others
else {
 //header('Location: https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
 //echo "https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
$quickwhatsappsharing_button_img = "<img src='$quickwhatsappsharebutton'>";
$quickwhatsappsharing_button = "<a href='https://web.whatsapp.com/send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
}
	/* ###################################### */
			}
			
			

return "
$quickwhatsappsharing_button
";

}
add_shortcode( 'quickwhatsapp_share', 'quickwhatsapp_shortcode2' );



?>