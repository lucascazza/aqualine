<?php

function quickwhatsapp_shortcode_gruppe() {

$quickwhatsapp_groupelink = get_option('quickwhatsapps_groupelink');
$quickwhatsapps_groupelink_imgurl = get_option('quickwhatsapps_groupelink_imgurl');
	
$quickwhatsapp_groupelink_button0 = '<img src="quickwhatsapps_groupelink_imgurl" > ';
	
$quickwhatsapp_groupelink_button1 = '<img src="' . plugins_url( 'images/whatsapp-gruppe.png', __FILE__ ) . '" > ';
	
	
if ($quickwhatsapp_groupelink == '') {
	//keine anzeige
	$ausgabe = '';
}
	else
	{	
	
//button anzeigen	
if ($quickwhatsapps_groupelink_imgurl == ''){
	$ausgabe = "<a href='https://chat.whatsapp.com/$quickwhatsapp_groupelink' target='_blank'>$quickwhatsapp_groupelink_button1</a>"; 
}
else {

	$ausgabe = "<a href='https://chat.whatsapp.com/$quickwhatsapp_groupelink' target='_blank'><img src='$quickwhatsapps_groupelink_imgurl'></a>"; 
}

	
	
	
}
		
	
	
	//$ausgabe = "<a href='https://chat.whatsapp.com/$quickwhatsapp_groupelink' target='_blank'>$quickwhatsapp_groupelink_button1</a>"; 
	
	

	
	return $ausgabe;
}
add_shortcode('quickwhatsapp_group', 'quickwhatsapp_shortcode_gruppe');


?>