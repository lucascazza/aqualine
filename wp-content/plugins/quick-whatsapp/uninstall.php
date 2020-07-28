<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// die when the file is called directly
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
//define a vairbale and store an option name as the value.

$option_name = 'quickwhatsapp';
$option_name2 = 'quickwhatsappbutton';
$option_name3 = 'quickwhatsappsharing';
$option_name4 = 'quickwhatsappsharebutton';	
$option_name5 = 'quickwhatsappbutton_style';
$option_name6 = 'quickwhatsapps_afteraddtocartbutton';
$option_name7 = 'quickwhatsapps_onlineoffline_status';
$option_name8 = 'quickwhatsapps_floatingbutton_status';	
$option_name9 = 'quickwhatsapps_chatbutton_status';
$option_name10 = 'quickwhatsapps_floating_posi_unten_nach_oben';
$option_name11 = 'quickwhatsapps_floation_posi_rechts_nach_links';
$option_name12 = 'quickwhatsapps_greetings';

$option_name13 = 'quickwhatsapp_resetgreetings';
$option_name14 = 'quickwhatsapp_greetings_reset';

$option_name15 = 'quickwhatsapps_groupelink';
$option_name16 = 'quickwhatsapps_groupelink_imgurl';

//call delete option and use the vairable inside the quotations
delete_option($option_name);
delete_option($option_name2);
delete_option($option_name3);
delete_option($option_name4);
delete_option($option_name5);
delete_option($option_name6);
delete_option($option_name7);
delete_option($option_name8);
delete_option($option_name9);
delete_option($option_name10);
delete_option($option_name11);
delete_option($option_name12);

delete_option($option_name13);
delete_option($option_name14);

delete_option($option_name15);
delete_option($option_name16);

// for site options in Multisite
delete_site_option($option_name);
delete_site_option($option_name2);
delete_site_option($option_name3);
delete_site_option($option_name4);
delete_site_option($option_name5);
delete_site_option($option_name6);
delete_site_option($option_name7);
delete_site_option($option_name8);
delete_site_option($option_name9);
delete_site_option($option_name10);
delete_site_option($option_name11);
delete_site_option($option_name12);

delete_site_option($option_name13);
delete_site_option($option_name14);

delete_site_option($option_name15);
delete_site_option($option_name16);
?>