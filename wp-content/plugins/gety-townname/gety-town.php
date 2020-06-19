<?php
/*
 * Plugin Name: gety.media townname
 * Plugin URI: https://gety.media
 * Description: Display Townname
 * Version: 1.0
 * Author: Lars Humpert
 * Author URI: https://gety.media
 * License: GPL2
 *
 * @package gety-maintenance-mode
 * @copyright Copyright (c) 2018, gety.media
 * @license GPL2+
*/

/**
 * Maintenance Page
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */
 
add_action( 'admin_menu', 'main_menu' );

function main_menu(  ) { 
	add_menu_page( 'getytown', 'Stadtname', 'manage_options', 'getytown', 'getytown' );
}

function getytown(){
	
	if(isset($_GET['fon'])){
		$fon = $_GET['fon'];
		file_put_contents(plugin_dir_path( __FILE__ ) . 'save/rufnummer.txt', $fon);
		echo '<meta http-equiv="refresh" content="0; URL=admin.php?page=getytown">';
	}
	
	if(isset($_GET['adresse'])){
		$adresse = $_GET['adresse'];
		file_put_contents(plugin_dir_path( __FILE__ ) . 'save/adress.txt', $adresse);
		echo '<meta http-equiv="refresh" content="0; URL=admin.php?page=getytown">';
	}
	
	if(isset($_GET['rew'])){
		$rew = $_GET['rew'];
		file_put_contents(plugin_dir_path( __FILE__ ) . 'save/reviews.txt', $rew);
		echo '<meta http-equiv="refresh" content="0; URL=admin.php?page=getytown">';
	}

	$rufnummer = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/rufnummer.txt');	
	$adress = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/adress.txt');	
	$rew = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/reviews.txt');	
	?>
<div class="wrap">
		<h2>Stadtname | <a href="https://gety.media">gety media</a></h2>
		<h2>Stadtname anzeigen mittels Shortcode, abhängig vom "Seitentitel" mit Filter. Shortcode [stadtname].</h2>
		<h2>Rufnummer anzeigen mittels Shortcode, Shortcode [telefon].</h2>
		<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="hidden" name="page" value="getytown" />
		Rufnummer <input type="text" name="fon" value="<? print $rufnummer?>"><br>
		Adresse  <input type="text" name="adresse" value="<? print $adress?>"><br>	
		Bewertungen  <input type="text" name="rew" value="<? print $rew?>"><br>
		<input type="submit" value="Speichern">
		</form>
	</div>
<?php
}

// Add Shortcode
function stadt_link(){
	$post = get_post( $post );
	$search = array('Schlüsseldienst', 'Entrümpelung', 'Haushaltsauflösung', 'Elektronotdienst');
	$replace = array('', '', '', '');
    return str_replace($search,$replace,$post->post_title);
}
add_shortcode('stadtname', 'stadt_link');

// Add Shortcode
function telefon(){
	$rufnummer = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/rufnummer.txt');
    return $rufnummer;
}
add_shortcode('telefon', 'telefon');


add_action('wp_head', 'ratingsstars');
function ratingsstars(){
	$rufnummer = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/rufnummer.txt');
	$adress = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/adress.txt');	
	$rew = file_get_contents(plugin_dir_path( __FILE__ ) . 'save/reviews.txt');	
	$post = get_post( $post );
?>
<script type="application/ld+json">
{
"@context": "http://www.schema.org",
"@type": "localbusiness",
"name":"<?print $post->post_title;?>",
"url":"<?print get_site_url();?>",
"telephone":"<?print $rufnummer;?>",
"address":"<? print $adress;?>",
"priceRange":"€€",
"openingHours": "Dauerhaft geöffnet",
"description": "<?print get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);?>",
"image":"https://image.ibb.co/iZ3MaK/background_cta1_1.jpg",
"aggregateRating": {
"@type": "aggregateRating",
"ratingValue": "4,9",
"ratingCount": "<? print $rew;?>",
"reviewCount": "<? print $rew;?>"
}
}
</script>

<?php
};
