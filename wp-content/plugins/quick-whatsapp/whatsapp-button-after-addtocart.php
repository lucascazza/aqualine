<?php

/*
Dieser Code regelt den Whatsapp Button nach dem Add-To-Cart Button

*/

add_action( 'woocommerce_after_add_to_cart_button', 'quick_whatsapp_after_addtocart_button' );
 
function quick_whatsapp_after_addtocart_button() {
	ECHO "<br /><br /><br />";

	
/* ##############BILDER#AUSLESEN######################## */
	$quickwhatsapp_anzeige = get_option('quickwhatsapp');

$quickwhatsappbutton_show = get_option('quickwhatsappbutton');
	
	//button anzeige ja nein aus datenbank
$quickwhatsapps_afteraddtocartbutton_show = get_option('quickwhatsapps_afteraddtocartbutton');

/* ######################### bilder design auswählen #################### */
//welches button design ist aktiv?
$quickwhatsappbutton_style_show = get_option('quickwhatsappbutton_style');

if ($quickwhatsappbutton_style_show == '' or $quickwhatsappbutton_style_show == '1')
	{
      $bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat.jpg', __FILE__ ) . '" > ';
	}
elseif ($quickwhatsappbutton_style_show == '2')
	{
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat-clear.png', __FILE__ ) . '" > ';
		
	}

elseif ($quickwhatsappbutton_style_show == '3')
	{
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat-flat.png', __FILE__ ) . '" > ';
		
	}
elseif ($quickwhatsappbutton_style_show == '4')
	{
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat-creativ.png', __FILE__ ) . '" > ';
		
	}
	
else
	{
		//bei Error Standard Design
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat.jpg', __FILE__ ) . '" > ';
		
	}
/* ##############ENDE######################## */
	
//online oder offline?
$quickwhatsapps_onlineoffline_status = get_option('quickwhatsapps_onlineoffline_status');
$quickwhatsapps_onlineoffline_offline_image = '<img src="' . plugins_url( 'images/whatsapp-offline.png', __FILE__ ) . '" alt="Der WhatsApp Chat ist offline" title="Der WhatsAPP Chat ist offline">'; 
	
	if ($quickwhatsapps_onlineoffline_status == 'an')
	{
$whatsappbuttonbild = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'>$bilderurl</a>  ";
$whatsappbuttonbild_eigeneversion = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";	 
/* #################################################### */
$quickwhatsapps_greetings = get_option('quickwhatsapps_greetings');
	
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
$whatsappbuttonbild = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'>$bilderurl</a>  ";
$whatsappbuttonbild_eigeneversion = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";
}
// all others
else {
 //header('Location: https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
 //echo "https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT";
$whatsappbuttonbild = "<a href='https://web.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'>$bilderurl</a>  ";
$whatsappbuttonbild_eigeneversion = "<a href='https://web.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";
}
/* #################################################### */		
	}
else
{
$whatsappbuttonbild = "$quickwhatsapps_onlineoffline_offline_image";
$whatsappbuttonbild_eigeneversion = "$quickwhatsapps_onlineoffline_offline_image";
	
}
	

//$whatsappbuttonbild = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'>$bilderurl</a>";
//$whatsappbuttonbild_eigeneversion = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'><img src='$quickwhatsappbutton_show'></a>";


if ($quickwhatsappbutton_show == '')
				{
						$quickwhatsapp_chat_button = $whatsappbuttonbild;
				}
			else
				{
						$quickwhatsapp_chat_button = $whatsappbuttonbild_eigeneversion ;
				}

//Button bei $quickwhatsapps_afteraddtocartbutton_show JA anzeigen und bei NEIN nicht

	if ($quickwhatsapps_afteraddtocartbutton_show == 'an')
	{
		ECHO $quickwhatsapp_chat_button;
	}
	else
	{}


	
}
?>
