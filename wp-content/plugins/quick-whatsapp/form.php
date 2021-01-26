<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* --------------------------------------------------------------------------------------------------------------------------------------- */
 function adminForm_quickwhatsapp() {
	 
	 
$buttondesign1 = '<img src="' . plugins_url( 'images/whatsapp-chat.jpg', __FILE__ ) . '" >';
$buttondesign2 = '<img src="' . plugins_url( 'images/whatsapp-chat-clear.png', __FILE__ ) . '" >';
$buttondesign3 = '<img src="' . plugins_url( 'images/whatsapp-chat-flat.png', __FILE__ ) . '" >';
$buttondesign4 = '<img src="' . plugins_url( 'images/whatsapp-chat-creativ.png', __FILE__ ) . '" >';
?>
<div class="wrap">
<h2>Quick WhatsApp</h2>
	
<table width="100%" border="0">
  <tbody>
    <tr>
<td width='70%'>
<h3>Info</h3>
<b>Deutsch / German</b>
<p>Mit diesem Plugin können ihre Leser / Kunden ganz einfach via WhatsApp mit Ihnen Kontakt aufnehmen. Der WhatsApp Button erscheint bei allen Beiträge. Wenn ein User an einem Computer sitzt und auf den Button klickt, wird er zur Whatsapp Webseite geleitet und kann dort die Nachricht abschicken. Ist der User am Handy, dann wird die WhatsApp App geöffnet.</p>
<b>Englisch / English</b>
<p>With this Plugin installed, a WhatsApp Button will show on each Post in your WordPress.</p>
<h3>Installation</h3>
<b>Deutsch / German</b>
<p>Bitte geben Sie unten ihre Handnummer ein - wie im Beispiel erklärt. Solange das Feld leer ist, erscheint überall in der Administration eine Warnung.</p>
<b>Englisch / English</b>
<p>Enter your mobile phone nummer which you can receive WhatsApp Msg</p>		
</td>
<td width='30%' style='background-color:antiquewhite; text-align: center'>
<h3>Menu</h3>
<a href="#handynummer">Mobilenummer</a><br>
<a href="#buttondesignauswahl">Button Design</a><br>
<a href="#chatactiv">Status</a><br>
<a href="#floatingbutton">Floating Button</a><br>
<a href="#groupe">WhatsApp Group Link</a><br>
<a href="#shortcode">Shortcode</a><br>
</td>
    </tr>
  </tbody>
</table>
	
	
	

<hr />
<h3>Button Design Vorlagen</h3>
<b>Standard</b><br />
<?php echo $buttondesign1; ?><br />
<b>Clear</b>	<br />
<?php echo $buttondesign2; ?><br />
<b>Flat</b><br />
<?php echo $buttondesign3; ?><br />
<b>Creativ</b><br />	
<?php echo $buttondesign4; ?><br />
	
<hr />
	
<?php
  

  
/*------nonce field check start ---- */
if (isset($_REQUEST['submit'])) {

  if ( 
    ! isset( $_POST['nonce_tel'] ) 
    || ! wp_verify_nonce( $_POST['nonce_tel'], 'nonce_tel_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsapp();
  			}
			
  }			
/*------nonce field check end ---- */  

  
  


/*------nonce field reset start ---- */
if (isset($_REQUEST['quickwhatsappbutton_reset'])) {
  if ( 
    ! isset( $_POST['nonce_reset'] ) 
    || ! wp_verify_nonce( $_POST['nonce_reset'], 'nonce_reset_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		resetForm_quickwhatsapp();
  			}
}
/*------nonce field reset end ---- */ 
/*------nonce field reset start ---- */
if (isset($_REQUEST['submit_whatsapp_custome_button_reset'])) {
  if ( 
    ! isset( $_POST['nonce_reset2'] ) 
    || ! wp_verify_nonce( $_POST['nonce_reset2'], 'nonce_reset2_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		resetForm_custome_chat_button();
  			}
}
/*------nonce field reset end ---- */ 
/*------nonce field reset start ---- */
	 

if (isset($_REQUEST['quickwhatsapp_resetgreetings'])) {
  if ( 
    ! isset( $_POST['nonce_resetgreetings'] ) 
    || ! wp_verify_nonce( $_POST['nonce_resetgreetings'], 'nonce_resetgreetings_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		resetForm_quickwhatsapp_greetings();
	  //print 'geklappt.';
  			}
}

/*------nonce field reset end ---- */ 	  


/*------nonce whatsapp button style field check start ---- */
if (isset($_REQUEST['submit_style'])) {
  if ( 
    ! isset( $_POST['nonce_style'] ) 
    || ! wp_verify_nonce( $_POST['nonce_style'], 'nonce_style_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				ECHO "ERROR";

			} else {
   		saveForm_quickwhatsappbutton_style();
  			}
}
/*------nonce field check end ---- */ 

	  
 
  
  
    
  
/*------nonce field check start ---- */
if (isset($_REQUEST['submit_whatsapp_custome_button'])) {
  if ( 
    ! isset( $_POST['nonce_chatbutton'] ) 
    || ! wp_verify_nonce( $_POST['nonce_chatbutton'], 'nonce_chatbutton_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappbutton();
  			}
}
/*------nonce field check end ---- */  

/*------nonce field check start ---- */
if (isset($_REQUEST['submit_quickwhatsapp_sharestatus'])) {
  if ( 
    ! isset( $_POST['nonce_sharestatus'] ) 
    || ! wp_verify_nonce( $_POST['nonce_sharestatus'], 'nonce_sharestatus_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappsharing();
  			}
}
/*------nonce field check end ---- */  
	 
/*------nonce field check start ---- */
	 //after add to cart button
if (isset($_REQUEST['submit_quickwhatsappchat_after_addtocart_button'])) {
  if ( 
    ! isset( $_POST['nonce_quickwhatsappchat_after_addtocart_button'] ) 
    || ! wp_verify_nonce( $_POST['nonce_quickwhatsappchat_after_addtocart_button'], 'nonce_quickwhatsappchat_after_addtocart_button_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappchat_after_addtocart_button();
  			}
}
/*------nonce field check end ---- */ 
	 
/*------nonce field check start ---- */
	 //status online oder offline
if (isset($_REQUEST['submit_quickwhatsappchat_status_online'])) {
  if ( 
    ! isset( $_POST['nonce_quickwhatsappchat_status_online'] ) 
    || ! wp_verify_nonce( $_POST['nonce_quickwhatsappchat_status_online'], 'nonce_quickwhatsappchat_status_online' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappchat_status_online();
  			}
}
/*------nonce field check end ---- */ 
	 
/*------nonce field check start ---- */
	 //Floating Button online oder offline
if (isset($_REQUEST['submit_quickwhatsappchat_floatingbutton_online'])) {
  if ( 
    ! isset( $_POST['nonce_quickwhatsappchat_floatingbutton_online'] ) 
    || ! wp_verify_nonce( $_POST['nonce_quickwhatsappchat_floatingbutton_online'], 'nonce_quickwhatsappchat_floatingbutton_online' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappchat_floatingbutton_online();
  			}
}
/*------nonce field check end ---- */ 

/*------nonce field check start ---- */
	 //global chat Button online oder offline
if (isset($_REQUEST['submit_quickwhatsappchat_chatbutton_online'])) {
  if ( 
    ! isset( $_POST['nonce_quickwhatsappchat_chatbutton_online'] ) 
    || ! wp_verify_nonce( $_POST['nonce_quickwhatsappchat_chatbutton_online'], 'nonce_quickwhatsappchat_chatbutton_online' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappchat_chatbutton_online();
  			}
}
/*------nonce field check end ---- */ 
  
/*------nonce field check start ---- */
if (isset($_REQUEST['submit_sharesbutton'])) {
  if ( 
    ! isset( $_POST['nonce_sharesbutton'] ) 
    || ! wp_verify_nonce( $_POST['nonce_sharesbutton'], 'nonce_sharesbutton_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappsharesbutton();
  			}
}
/*------nonce field check end ---- */   


/*------nonce field check start ---- */
if (isset($_REQUEST['submit_quickwhatsappsharebutton_reset'])) {
  if ( 
    ! isset( $_POST['nonce_quickwhatsappsharebuttonreset'] ) 
    || ! wp_verify_nonce( $_POST['nonce_quickwhatsappsharebuttonreset'], 'nonce_quickwhatsappsharebuttonreset_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappsharebuttonreset();
		//print "sharebutton wird resettet";
  			}
}
/*------nonce field check end ---- */  

/*------nonce field check start ---- */ 

if (isset($_REQUEST['submit_quickwhatsappchat_floating_posi'])) {
  if ( 
    ! isset( $_POST['nonce_quickwhatsappsharefloatingbuttonposi'] ) 
    || ! wp_verify_nonce( $_POST['nonce_quickwhatsappsharefloatingbuttonposi'], 'nonce_quickwhatsappsharefloatingbuttonposi_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappsharefloatingbuttonposi();
		//print "set floating button position";
  			}
}
/*------nonce field check end ---- */  

  
/*------nonce field check start ---- */ 
//greetings
	 
if (isset($_REQUEST['submit_whatsapp_greetings'])) {
  if ( 
    ! isset( $_POST['nonce_greetings'] ) 
    || ! wp_verify_nonce( $_POST['nonce_greetings'], 'nonce_greetings_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappsharegreetings();
		//print "set floating button position";
  			}
}
/*------nonce field check end ---- */  
	 
//groupelink
if (isset($_REQUEST['submit_whatsapp_groupelink'])) {
  if ( 
    ! isset( $_POST['nonce_groupelink'] ) 
    || ! wp_verify_nonce( $_POST['nonce_groupelink'], 'nonce_groupelink_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappgroupelink();
		//print "set floating button position";
  			}
}
/*------nonce field check end ---- */  
 
/*------nonce field reset start ---- */
if (isset($_REQUEST['quickwhatsapp_resetgroupelink'])) {
  if ( 
    ! isset( $_POST['nonce_resetgroupelink'] ) 
    || ! wp_verify_nonce( $_POST['nonce_resetgroupelink'], 'nonce_resetgroupelink_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		resetForm_groupelink();
  			}
}
/*------nonce field reset end ---- */ 
	 
  
//groupelink bilderurl
if (isset($_REQUEST['submit_quickwhatsapps_groupelink_imgurl'])) {
  if ( 
    ! isset( $_POST['nonce_groupelinkimg'] ) 
    || ! wp_verify_nonce( $_POST['nonce_groupelinkimg'], 'nonce_groupelinkimg_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_quickwhatsappgroupelinkimg();
		//print "set floating button position";
  			}
}
/*------nonce field check end ---- */  
 
/*------nonce field reset start ---- */
if (isset($_REQUEST['quickwhatsapps_resetgroupelink_imgurl'])) {
  if ( 
    ! isset( $_POST['nonce_resetgroupelinkimg'] ) 
    || ! wp_verify_nonce( $_POST['nonce_resetgroupelinkimg'], 'nonce_resetgroupelinkimg_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		resetForm_groupelinkimg();
  			}
}
/*------nonce field reset end ---- */  
	 
	 
	 
  
 showForm_quickwhatsapp();
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
 
 
 
 
 
 
 
 
 
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 	
 	//reset
  if (isset($_REQUEST['quickwhatsappbutton_reset'])) {
	  $resetter = '';
   update_option('quickwhatsapp', sanitize_text_field($resetter) );
  }

function resetForm_quickwhatsapp() {
  
  update_option('quickwhatsapp', '' );

  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 

/* --------------------------------------------------------------------------------------------------------------------------------------- */ 	
 	//reset
  if (isset($_REQUEST['submit_whatsapp_custome_button_reset'])) {
	  $resetter = '';
   update_option('quickwhatsappbutton', sanitize_text_field($resetter) );
  }

function resetForm_custome_chat_button() {
  
  update_option('quickwhatsappbutton', '' );

  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 

/* --------------------------------------------------------------------------------------------------------------------------------------- */ 	

 	//reset
  if (isset($_REQUEST['quickwhatsapp_resetgreetings'])) {
	  $resetter = '';
   update_option('quickwhatsapps_greetings', sanitize_text_field($resetter) );
  }

function resetForm_quickwhatsapp_greetings() {
  
  update_option('quickwhatsapps_greetings', '' );

  
 }
 
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 


/* --------------------------------------------------------------------------------------------------------------------------------------- */ 	
 	//reset
  if (isset($_REQUEST['saveForm_quickwhatsappsharebuttonreset'])) {
	  $resetter = '';
   update_option('quickwhatsappsharebutton', sanitize_text_field($resetter) );
  }

function saveForm_quickwhatsappsharebuttonreset() {
  
  update_option('quickwhatsappsharebutton', '' );

  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 

/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quickwhatsappbutton_style() {
  if (sanitize_text_field($_POST['quickwhatsappbutton_style']) ) {

  update_option('quickwhatsappbutton_style', sanitize_text_field($_POST['quickwhatsappbutton_style']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

    
/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quickwhatsapp() {
  if (sanitize_text_field($_POST['quickwhatsapp']) ) {

  update_option('quickwhatsapp', sanitize_text_field($_POST['quickwhatsapp']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quickwhatsappbutton() {
  if (sanitize_text_field($_POST['quickwhatsappbutton']) ) {

  update_option('quickwhatsappbutton', sanitize_text_field($_POST['quickwhatsappbutton']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quickwhatsappsharing() {
  if (sanitize_text_field($_POST['quickwhatsappsharing']) ) {

  update_option('quickwhatsappsharing', sanitize_text_field($_POST['quickwhatsappsharing']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
//whatsapp chat -  after add to cart button
 function saveForm_quickwhatsappchat_after_addtocart_button() {
  if (sanitize_text_field($_POST['quickwhatsapps_afteraddtocartbutton']) ) {

  update_option('quickwhatsapps_afteraddtocartbutton', sanitize_text_field($_POST['quickwhatsapps_afteraddtocartbutton']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */


/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
//whatsapp chat -  status chat online offline
 function saveForm_quickwhatsappchat_status_online() {
  if (sanitize_text_field($_POST['quickwhatsapps_onlineoffline_status']) ) {

  update_option('quickwhatsapps_onlineoffline_status', sanitize_text_field($_POST['quickwhatsapps_onlineoffline_status']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
//whatsapp chat -  floating button online offline
 function saveForm_quickwhatsappchat_floatingbutton_online() {
  if (sanitize_text_field($_POST['quickwhatsapps_floatingbutton_status']) ) {

  update_option('quickwhatsapps_floatingbutton_status', sanitize_text_field($_POST['quickwhatsapps_floatingbutton_status']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
//whatsapp chat -  global chat button online offline
 function saveForm_quickwhatsappchat_chatbutton_online() {
  if (sanitize_text_field($_POST['quickwhatsapps_chatbutton_status']) ) {

  update_option('quickwhatsapps_chatbutton_status', sanitize_text_field($_POST['quickwhatsapps_chatbutton_status']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */  
 function saveForm_quickwhatsappsharesbutton() {
  if (sanitize_text_field($_POST['quickwhatsappsharebutton']) ) {

  update_option('quickwhatsappsharebutton', sanitize_text_field($_POST['quickwhatsappsharebutton']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */
/* Posi Floating Button */

 function saveForm_quickwhatsappsharefloatingbuttonposi() {
  if ((sanitize_text_field($_POST['quickwhatsapps_floation_posi_rechts_nach_links']) ) && (sanitize_text_field($_POST['quickwhatsapps_floating_posi_unten_nach_oben']) )) {

update_option('quickwhatsapps_floation_posi_rechts_nach_links', sanitize_text_field($_POST['quickwhatsapps_floation_posi_rechts_nach_links']) );
update_option('quickwhatsapps_floating_posi_unten_nach_oben', sanitize_text_field($_POST['quickwhatsapps_floating_posi_unten_nach_oben']) );
	  

  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------------------------------------------------------- */  
/* greetings */
 function saveForm_quickwhatsappsharegreetings() {
  if (sanitize_text_field($_POST['quickwhatsapps_greetings']) ) {

  update_option('quickwhatsapps_greetings', sanitize_text_field($_POST['quickwhatsapps_greetings']) );
  }
  
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */

/* groupelink */
 function saveForm_quickwhatsappgroupelink() {
  if (sanitize_text_field($_POST['quickwhatsapps_groupelink']) ) {

  update_option('quickwhatsapps_groupelink', sanitize_text_field($_POST['quickwhatsapps_groupelink']) );
  }
  
 }


function resetForm_groupelink() {
  
  update_option('quickwhatsapps_groupelink', '' );
 }


/* --------------------------------------------------------------------------------------------------------------------------------------- */


/* groupelink img */
 function saveForm_quickwhatsappgroupelinkimg() {
  if (sanitize_text_field($_POST['quickwhatsapps_groupelink_imgurl']) ) {

  update_option('quickwhatsapps_groupelink_imgurl', sanitize_text_field($_POST['quickwhatsapps_groupelink_imgurl']) );
  }
  
 }


function resetForm_groupelinkimg() {
  
  update_option('quickwhatsapps_groupelink_imgurl', '' );
 }


/* --------------------------------------------------------------------------------------------------------------------------------------- */



/* --------------------------------------------------------------------------------------------------------------------------------------- */
function showForm_quickwhatsapp() {

  $default = get_option('quickwhatsapp');
  if ($default=="") {$default=" ";}
  $default = str_replace("&","&amp;",$default);
  $default = str_replace("<","&lt;",$default);
  $default = str_replace(">","&gt;",$default);
  $default = str_replace("\"","&quot;",$default);
  $default = str_replace("\\","",$default);
  $default = str_replace(" ","",$default);
  
  $quickwhatsappbutton_show = get_option('quickwhatsappbutton');
  $quickwhatsappsharebutton_show = get_option('quickwhatsappsharebutton');
  
   $quickwhatsappbutton_style_show = get_option('quickwhatsappbutton_style');

	$quickwhatsapps_greetings_show = get_option('quickwhatsapps_greetings');


  //tel nummer
  echo '<h2 id="handynummer">Quick WhatsApp Chat Optionen</h2>';
  echo '<form method="post">';
  echo '<label for="quickwhatsapp"><strong>Handynummer: / mobile phone number (Beispiel: 417611122233) </strong><br />';
  echo '<input type="text"  name="quickwhatsapp" size="50" maxlength="50" value="' . $default . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit" value="Sichern / Save">';
  wp_nonce_field( 'nonce_tel_field', 'nonce_tel' );
echo '</form><br/>';

//reset 
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickwhatsappbutton_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_reset_field', 'nonce_reset' );
  echo '</form>';
  echo '<br /><br />';
  echo '<hr>';
	
//eigene Begrüssung definieren
  echo '<form method="post">';
  echo '<label for="quickwhatsappbuttonbegrüssung"><strong>Eigene Chatbegrüssung definieren / Own Chat Greeting-Words</strong><br />';
  echo '<input type="text"  name="quickwhatsapps_greetings" size="80" maxlength="80" value="' . $quickwhatsapps_greetings_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_whatsapp_greetings" value="Sichern / Save">';
  wp_nonce_field( 'nonce_greetings_field', 'nonce_greetings' );
echo '</form><br />';
//greetings reset
	echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickwhatsapp_resetgreetings" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_resetgreetings_field', 'nonce_resetgreetings' );
  echo '</form>';
  echo '<br /><br />';
  echo '<hr>';
  
//Style Auswahl
echo '<h2 id="buttondesignauswahl">Quick WhatsApp Button Design Auswahl</h2>';
echo '<p>Hier können Sie aus 4 verschiedenen vorkonfigurierten Button-Designs auswählen / Choose your Button Design from 4 Styles</p>';
echo '<form method="post">';

ECHO '<select name="quickwhatsappbutton_style">';

if ($quickwhatsappbutton_style_show == '' or $quickwhatsappbutton_style_show == '1')
{ echo '<option selected value="1" >Standard</option>';}
else
{ echo '<option value="1" >Standard</option>';}
	
if ($quickwhatsappbutton_style_show == '2')
{ echo '<option selected value="2" >Clear</option>';}
else
{ echo '<option value="2" >Clear</option>';}

if ($quickwhatsappbutton_style_show == '3')
{ echo '<option selected value="3" >Flat</option>';}
else
{ echo '<option value="3" >Flat</option>';}

if ($quickwhatsappbutton_style_show == '4')
{ echo '<option selected value="4" >Creativ</option>';}
else
{ echo '<option value="4" >Creativ</option>';}
	
/* 
      <option value="1" >Standard</option>
      <option value="2">Clear</option>
      <option value="3">Flat</option>
</select>';
*/	
/*
if ($quickwhatsappbutton_style_show == '' or $quickwhatsappbutton_style_show == '1')
	{

echo '
<select name="quickwhatsappbutton_style">
<option selected value="1">Standard</option>
<option value="2">Clear</option>
';
	}
else
{
echo '
<select name="quickwhatsappbutton_style">
<option value="1">Standard</option>
<option selected value="2">Clear</option>
';
	
}
*/


echo '</select>';


echo '<br />';
echo '<input type="submit" style="height: 25px; width: 250px" name="submit_style" value="Sichern / Save">';
  wp_nonce_field( 'nonce_style_field', 'nonce_style' );
  echo '</form>';
  echo '<br /><br />';


//eigenes WhatsApp Bild
  echo '<form method="post">';
  echo '<label for="quickwhatsappbutton"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/whatsappbutton.jpg)</strong><br />';
  echo '<input type="text"  name="quickwhatsappbutton" size="80" maxlength="80" value="' . $quickwhatsappbutton_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_whatsapp_custome_button" value="Sichern / Save">';
  wp_nonce_field( 'nonce_chatbutton_field', 'nonce_chatbutton' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="submit_whatsapp_custome_button_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_reset2_field', 'nonce_reset2' );
  echo '</form>';
  echo '<br /><br />';
	
/* #################### Chat Button BUTTON ######################### */

	
	$quickwhatsapps_chatbutton_status_show = get_option('quickwhatsapps_chatbutton_status');
	
	if ($quickwhatsapps_chatbutton_status_show == 'an')
		{
		$quickwhatsapps_chatbutton_status_an = "<input name='quickwhatsapps_chatbutton_status' type='radio' value='an' checked>";
		$quickwhatsapps_chatbutton_status_aus = "<input name='quickwhatsapps_chatbutton_status' type='radio' value='aus'>";
		}
	else
		{
		$quickwhatsapps_chatbutton_status_an = "<input name='quickwhatsapps_chatbutton_status' type='radio' value='an'>";
		$quickwhatsapps_chatbutton_status_aus = "<input name='quickwhatsapps_chatbutton_status' type='radio' value='aus' checked>";
		}
	
	
	echo "<h2 id='chatactiv'>Chat Button aktiviert / deaktiviert? /Chat Button activ or inactiv</h2>";
	echo '<p>Wenn sie den normalen Chatbutton nicht angezeigt haben möchte, dann können Sie diesen hier deaktivieren.</p>';
	echo "<form method='post'>";
	echo "<table width='320' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quickwhatsapps_chatbutton_status_aus</td>";
	echo "<td width='300'>Chat Button ist deaktiviert / ausgeblendet</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quickwhatsapps_chatbutton_status_an</td>";
	echo "<td>Chat Button ist aktiv / eingeblendet</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_quickwhatsappchat_chatbutton_online' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_quickwhatsappchat_chatbutton_online', 'nonce_quickwhatsappchat_chatbutton_online' );
	echo "</form><br />";

/* ############################################################## */
	

/* #################### CHAT BUTTON ######################### */

// Online oder Offline
	
	$quickwhatsapp_status_online_show = get_option('quickwhatsapps_onlineoffline_status');
	
	if ($quickwhatsapp_status_online_show == 'an')
		{
		$quickwhatsappchat_status_online_an = "<input name='quickwhatsapps_onlineoffline_status' type='radio' value='an' checked>";
		$quickwhatsappchat_status_online_aus = "<input name='quickwhatsapps_onlineoffline_status' type='radio' value='aus'>";
		}
	else
		{
		$quickwhatsappchat_status_online_an = "<input name='quickwhatsapps_onlineoffline_status' type='radio' value='an'>";
		$quickwhatsappchat_status_online_aus = "<input name='quickwhatsapps_onlineoffline_status' type='radio' value='aus' checked>";
		}
	
	
	echo "<h2>Chat online oder offline schalten? / Chat Sign Online or Offline?</h2>";
	echo '<p>Sollten Sie mal nicht am Handy sitzen und lieber den Chat als offline anzeigen, dann können sie das hier mit diesem Button machen.</p>';
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quickwhatsappchat_status_online_aus</td>";
	echo "<td width='180'>Chat ist deaktiviert</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quickwhatsappchat_status_online_an</td>";
	echo "<td>Chat ist online</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_quickwhatsappchat_status_online' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_quickwhatsappchat_status_online', 'nonce_quickwhatsappchat_status_online' );
	echo "</form><br />";
/* ########################################################## */	
	
// an aus share funktion
$quickwhatsappsharing_show = get_option('quickwhatsappsharing');
	
	if ($quickwhatsappsharing_show == 'an')
		{
		$quickwhatsappsharing_button_an = "<input name='quickwhatsappsharing' type='radio' value='an' checked>";
		$quickwhatsappsharing_button_aus = "<input name='quickwhatsappsharing' type='radio' value='aus'>";
		}
	else
		{
		$quickwhatsappsharing_button_an = "<input name='quickwhatsappsharing' type='radio' value='an'>";
		$quickwhatsappsharing_button_aus = "<input name='quickwhatsappsharing' type='radio' value='aus' checked>";
		}

	echo "<h2>Quick WhatsApp Share Funktion</h2>";
	echo '<p>Sollten können zusätzlich zum Chat-Button noch ein Share-Button einblenden (Funktioniert nur wenn Chat-Button aktiv ist)</p>';
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quickwhatsappsharing_button_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quickwhatsappsharing_button_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_quickwhatsapp_sharestatus' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_sharestatus_field', 'nonce_sharestatus' );
	echo "</form><br />";
	
	  //eigenes WhatsApp ShareBild
  echo '<form method="post">';
  echo '<label for="quickwhatsappsharebutton"><strong>Eigener Button / Custom Button (http://www.deinedomain.ch/whatsappbutton.jpg)</strong><br />';
  echo '<input type="text"  name="quickwhatsappsharebutton" size="80" maxlength="80" value="' . $quickwhatsappsharebutton_show . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 30px; width: 250px" name="submit_sharesbutton" value="Sichern / Save">';
  wp_nonce_field( 'nonce_sharesbutton_field', 'nonce_sharesbutton' );
echo '</form><br />';
	//reset bild
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px;" name="submit_quickwhatsappsharebutton_reset" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_quickwhatsappsharebuttonreset_field', 'nonce_quickwhatsappsharebuttonreset' );
  echo '</form>';
  echo '<br /><br />';  

	
	
//Chat Button after - Add to cart Button - An / AUS
	/*
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quickwhatsappsharing_button_aus</td>";
	echo "<td width='180'>Share Funktion aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quickwhatsappsharing_button_an</td>";
	echo "<td>Share Funktion ein / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_quickwhatsapp_sharestatus' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_sharestatus_field', 'nonce_sharestatus' );
	echo "</form><br />";
	*/
	
// an aus share funktion
$quickwhatsapp_afteraddtocartbutton_show = get_option('quickwhatsapps_afteraddtocartbutton');
	
	if ($quickwhatsapp_afteraddtocartbutton_show == 'an')
		{
		$quickwhatsappchat_after_addtocart_button_an = "<input name='quickwhatsapps_afteraddtocartbutton' type='radio' value='an' checked>";
		$quickwhatsappchat_after_addtocart_button_aus = "<input name='quickwhatsapps_afteraddtocartbutton' type='radio' value='aus'>";
		}
	else
		{
		$quickwhatsappchat_after_addtocart_button_an = "<input name='quickwhatsapps_afteraddtocartbutton' type='radio' value='an'>";
		$quickwhatsappchat_after_addtocart_button_aus = "<input name='quickwhatsapps_afteraddtocartbutton' type='radio' value='aus' checked>";
		}
	
	
	echo "<h2>Chat Button nach dem Warenkorb Button einblenden?</h2>";
	echo '<p>Dieser Button erscheint im WooCommerce in der Produkt-Detail-Seite - direkt nach dem Add-To-Cart Button (Warenkorb-Button).</p>';
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quickwhatsappchat_after_addtocart_button_aus</td>";
	echo "<td width='180'>Aus / off</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quickwhatsappchat_after_addtocart_button_an</td>";
	echo "<td>Aktiv / on</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_quickwhatsappchat_after_addtocart_button' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_quickwhatsappchat_after_addtocart_button_field', 'nonce_quickwhatsappchat_after_addtocart_button' );
	echo "</form><br />";

	echo '<br /><br />'; 
	

/* #################### FLOATING BUTTON ######################### */

	
	$quickwhatsapps_floatingbutton_status_show = get_option('quickwhatsapps_floatingbutton_status');
	
	if ($quickwhatsapps_floatingbutton_status_show == 'an')
		{
		$quickwhatsapps_floatingbutton_status_an = "<input name='quickwhatsapps_floatingbutton_status' type='radio' value='an' checked>";
		$quickwhatsapps_floatingbutton_status_aus = "<input name='quickwhatsapps_floatingbutton_status' type='radio' value='aus'>";
		}
	else
		{
		$quickwhatsapps_floatingbutton_status_an = "<input name='quickwhatsapps_floatingbutton_status' type='radio' value='an'>";
		$quickwhatsapps_floatingbutton_status_aus = "<input name='quickwhatsapps_floatingbutton_status' type='radio' value='aus' checked>";
		}
	
	
	echo "<h2 id='floatingbutton'>Floating Button online oder offline schalten?</h2>";
	echo '<p>Wenn Sie wollen, können sie den Floating Button hier aktivieren. Damit ist auf der Rechten unteren Seite ein kleiner runder Button sichtbar.</p>';
	echo "<form method='post'>";
	echo "<table width='200' border='0'>";
	echo "<tr>";
	echo "<td width='20'>$quickwhatsapps_floatingbutton_status_aus</td>";
	echo "<td width='180'>Floating Button ist offline</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$quickwhatsapps_floatingbutton_status_an</td>";
	echo "<td>Floating Button ist online</td>";
	echo "</tr>";
	echo "</table>";
	echo "<input type='submit' style='height: 25px; width: 250px' name='submit_quickwhatsappchat_floatingbutton_online' value='Sichern / Save'>";
	wp_nonce_field( 'nonce_quickwhatsappchat_floatingbutton_online', 'nonce_quickwhatsappchat_floatingbutton_online' );
	echo "</form><br />";
	
	
	
	  //Floating Button Positionierung

	$quickwhatsapps_floation_posi_rechts_nach_links_show = get_option('quickwhatsapps_floation_posi_rechts_nach_links');
	
	$quickwhatsapps_floating_posi_unten_nach_oben_show = get_option('quickwhatsapps_floating_posi_unten_nach_oben');
	
	
  echo '<h2>Floating Button Position</h2>';
  echo '<form method="post">';
  echo '<label for="quickwhatsapp"><strong>Position von Rechts nach Links in Pixel /Position from right to left in px or %</strong><br />';
  echo '<input type="text"  name="quickwhatsapps_floation_posi_rechts_nach_links" size="50" maxlength="50"  value="' . $quickwhatsapps_floation_posi_rechts_nach_links_show . '"> ex. 100px or 10%';
  echo '</label><br />';
  echo '<label for="quickwhatsapp"><strong>Position von Unten nach Oben in Pixel / Position from bottom to above in px or%</strong><br />';
  echo '<input type="text"  name="quickwhatsapps_floating_posi_unten_nach_oben" size="50" maxlength="50"  value="' . $quickwhatsapps_floating_posi_unten_nach_oben_show . '"> ex. 100px or 10%';
  echo '</label><br />';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_quickwhatsappchat_floating_posi" value="Sichern / Save">';
  wp_nonce_field( 'nonce_quickwhatsappsharefloatingbuttonposi_field', 'nonce_quickwhatsappsharefloatingbuttonposi' );
echo '</form><br/>';

	echo '<hr>';

//Whatsapp Gruppe
$quickwhatsapps_grouplink_old = get_option('quickwhatsapps_groupelink');
$quickwhatsapps_grouplink_old_imgurl = get_option('quickwhatsapps_groupelink_imgurl');
	
	$quickwhatsapp_groupelink_button1 = '<img src="' . plugins_url( 'images/whatsapp-gruppe.png', __FILE__ ) . '" > ';
	
	echo '<h2 id="groupe">WhatsApp Group Link</h2>';
	echo '<p>This is your Shortcode: <span style="background-color: #F6D8CE">[quickwhatsapp_group]</span></p>';
  echo '<form method="post">';
  echo '<label for="quickwhatsappgroupelink"><strong>WhatsApp Group ID</strong>(Beispiel: C2aZdBG0iPnGUvgX0huTtB)<br />';
  echo '<input type="text"  name="quickwhatsapps_groupelink" size="80" maxlength="80" value="' . $quickwhatsapps_grouplink_old . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_whatsapp_groupelink" value="Sichern / Save">';
  wp_nonce_field( 'nonce_groupelink_field', 'nonce_groupelink' );
echo '</form><br />';
//gruppe id reset
	echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickwhatsapp_resetgroupelink" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_resetgroupelink_field', 'nonce_resetgroupelink' );
  echo '</form>';
  echo '<br /><br />';
	
 echo '<form method="post">';
  echo '<label for="quickwhatsapps_groupelink_imgurl"><strong>WhatsApp Groupe Button Image Link<br />';
  echo '<input type="text"  name="quickwhatsapps_groupelink_imgurl" size="80" maxlength="200" value="' . $quickwhatsapps_grouplink_old_imgurl . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit_quickwhatsapps_groupelink_imgurl" value="Sichern / Save">';
  wp_nonce_field( 'nonce_groupelinkimg_field', 'nonce_groupelinkimg' );
echo '</form><br />';
//greetings reset
	echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 450px" name="quickwhatsapps_resetgroupelink_imgurl" value="Zurücksetzen / Reset">';
  wp_nonce_field( 'nonce_resetgroupelinkimg_field', 'nonce_resetgroupelinkimg' );
  echo '</form>';
echo "if you dont use a own group button then you will see this button <br /> $quickwhatsapp_groupelink_button1";
  echo '<br /><br />';
	
	
  echo '<hr>';
	
/* ############################################################## */
//alt: beforefp: neu quickwhatsapp
  
  ?>
  </div>
  <hr />
  <div class="wrap">
  <h3 id="shortcode">Shortcode:</h3>
  Folgende Shortcodes sind verfügbar<br />
  <br />
  Chat Button: <span style="background-color: #F6D8CE">[quickwhatsapp_chat]</span>
  <br />
  Quick WhatsApp Share Button: <span style="background-color: #F6D8CE">[quickwhatsapp_share]</span>
<br />
	Quick WhatsApp Group Link: <span style="background-color: #F6D8CE">[quickwhatsapp_group]</span>
  <br /><br />
  </div>
  <hr />
  <div class="wrap">
 
  <h2>Infos</h2>
  <p>Dies ist das Quick WhatsApp Plugin - programmiert von Eric-Oliver M&auml;chler von <a href="http://www.chefblogger.me" target="_blank">www.chefblogger.me</a>. Mehr von meinen WordPress Plugins findet man übrigens unter <a href="https://www.ericmaechler.com/produkt-kategorie/wordpress-plugins/" target="_blank">hier</a> </p>
<hr />
	<h4>Anleitung / Manual</h4>
	<ul>
	<li>Brauchen Sie eine Anleitung? Hier finden Sie die <a href="https://www.ericmaechler.com/produkt/quick-whatsapp-fuer-wordpress/" target="_blank">Anleitung zum Quick WhatsApp</a> Plugin für WordPress.</li>
	<li>Do you need a <a href="https://www.ericmaechler.com/produkt/quick-whatsapp-fuer-wordpress/" target="_blank">Manual for this Quick WhatsApp WordPress Plugin</a>? Here you find it.</li>
	</ul>
  
  </div>
  <?php
 }
 /* --------------------------------------------------------------------------------------------------------------------------------------- */
?>