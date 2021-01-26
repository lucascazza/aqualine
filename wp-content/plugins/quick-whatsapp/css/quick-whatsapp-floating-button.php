<?php
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);

  /**
  Do stuff like connect to WP database and grab user set values
  */

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');




$quickwhatsapps_floation_posi_rechts_nach_links_show = get_option('quickwhatsapps_floation_posi_rechts_nach_links');
	
$quickwhatsapps_floating_posi_unten_nach_oben_show = get_option('quickwhatsapps_floating_posi_unten_nach_oben');
?>

/* CSS Document */

.simplewebchat_float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:<?php echo $quickwhatsapps_floating_posi_unten_nach_oben_show?>; /* vom boden entfernt */
	right:<?php echo $quickwhatsapps_floation_posi_rechts_nach_links_show?>;
	
  z-index:995;
}

.my-float{
	margin-top:16px;
}