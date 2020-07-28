<?php

add_filter('the_content','quickwhatsapp_button');
			
function quickwhatsapp_button( $content ) {

$quickwhatsapp_anzeige = get_option('quickwhatsapp');
$quickwhatsappbutton_show = get_option('quickwhatsappbutton');

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
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat-flat.png', __FILE__ ) . '" >';
		
	}
elseif ($quickwhatsappbutton_style_show == '4')
	{
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat-creativ.png', __FILE__ ) . '" >';
		
	}
else
	{
		//bei Error Standard Design
		$bilderurl = '<img src="' . plugins_url( 'images/whatsapp-chat.jpg', __FILE__ ) . '" > ';
		
	}

	
//online oder offline?
$quickwhatsapps_onlineoffline_status = get_option('quickwhatsapps_onlineoffline_status');
//$quickwhatsapps_onlineoffline_offline_image = '<img src="' . plugins_url( 'images/whatsapp-offline.png', __FILE__ ) . '" alt="Der WhatsApp Chat ist offline" title="Der WhatsAPP Chat ist offline">'; 
$quickwhatsapps_onlineoffline_offline_image = '<img src="' . plugins_url( 'images/leer.png', __FILE__ ) . '">'; 
	
	if ($quickwhatsapps_onlineoffline_status == 'an')
	{
		
		
	
		
		
/*		
//$whatsappbuttonbild_eigeneversion = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";	
if (preg_match('/Firefox/i',$checkbrowser)) 
    { 
    //$browserweiche = 'https://web.whatsapp.com/send?phone=';
	$whatsappbuttonbild_eigeneversion = "<a href='https://web.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";
    } 
else {
	
	//$browserweiche = 'https://api.whatsapp.com/send?phone=';
	$whatsappbuttonbild_eigeneversion = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";
}
*/
		
$quickwhatsapps_greetings = get_option('quickwhatsapps_greetings');

		/*
$check_iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$check_android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$check_palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$check_berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$check_ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if ($check_iphone || $check_android || $check_palmpre || $check_ipod || $check_berry == true)
*/
if (wp_is_mobile())
{
 //header('Location: https://api.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR
$whatsappbuttonbild = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'>$bilderurl</a>  ";
 $whatsappbuttonbild_eigeneversion = "<a href='https://api.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";

}
// all others
else {
 //header('Location: https://web.whatsapp.com/send?phone=YOURNUMBER&text=YOURTEXT');
 //OR

	
	$whatsappbuttonbild = "<a href='https://web.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'>$bilderurl</a>  ";
 $whatsappbuttonbild_eigeneversion = "<a href='https://web.whatsapp.com/send?phone=$quickwhatsapp_anzeige&text=$quickwhatsapps_greetings' target='_blank'><img src='$quickwhatsappbutton_show'></a>  ";
}		
		
		
		
		
		
		
	}
else
{
$whatsappbuttonbild = "$quickwhatsapps_onlineoffline_offline_image";
$whatsappbuttonbild_eigeneversion = "$quickwhatsapps_onlineoffline_offline_image";
	
}

	//sharing button
$quickwhatsappsharing = get_option('quickwhatsappsharing');
$quickwhatsappsharebutton = get_option('quickwhatsappsharebutton');

if ($quickwhatsappsharing == 'aus')
	{
	$quickwhatsappsharing_button = '';
	}
	else
	{
	
	//permalink
	$quickwhatsappsharing_link = get_permalink();
	$post_id = get_the_ID();
	$quickwhatsappsharing_titel0 = get_the_title( $post_id );
		
	//$quickwhatsappsharing_titel0 = isset( $post->post_title ) ? $post->post_title : '';
    
		
	$quickwhatsappsharing_titel = str_replace("%20"," ",$quickwhatsappsharing_titel0);
	
	
	if ($quickwhatsappsharebutton == '')
			{
					
					// welches Standard button Design
					//$quickwhatsappsharing_button_img = '<img src="' . plugins_url( 'images/whatsapp-share.jpg', __FILE__ ) . '" > ';
					

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
	
	






					
					
					
					
					$quickwhatsappsharing_button = "<a href='whatsapp://send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
					//$quickwhatsappsharing_button = "<img src='' . plugins_url( 'images/whatsapp-share.jpg', __FILE__ ) . '' >";
					//echo '$quickwhatsappsharing_button_img';
			}
			else
			{
					$quickwhatsappsharing_button_img = "<img src='$quickwhatsappsharebutton'>";
					//$quickwhatsappsharing_button = "<a href='whatsapp://send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'>$quickwhatsappsharing_button_img</a>";
					//ECHO "test2: $quickwhatsappsharing_button_img";
					$quickwhatsappsharing_button = "<a href='whatsapp://send?text=Interessanter%20Link:%20$quickwhatsappsharing_titel%20$quickwhatsappsharing_link'><img src='$quickwhatsappsharebutton'></a>";
			}
	}



	if( is_single() ) {
	
			if ($quickwhatsappbutton_show == '')
				{
						$content = $content . '<br />' . $whatsappbuttonbild . $quickwhatsappsharing_button .  '<br />' ;
				}
			else
				{
						$content = $content . '<br />' . $whatsappbuttonbild_eigeneversion . $quickwhatsappsharing_button . '<br />' ;
				}
	
	




    // Returns the content.
    return $content;
    }
    else 
    {
    return $content;
    }
}


?>
