<?php
/*
Plugin Name: WooCommerce State Update
Plugin URI: http://northwestmediacollective.com
Description: Use 2 letter states in the Woocommerce checkout.
Version: 0.3
Author: Travis Buck
Author URI: http://northwestmediacollective.com
License: GPLv3
*/



/**
This code will force two letters instead of the state name.  This solution was ideal for clients who expected to be able to just quickly set a state with typing two letters on checkout.
**/
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
 
function custom_woocommerce_states( $states ) {
 
$states['US'] = array(
	'AL' => __( 'AL', 'woocommerce' ),
	'AK' => __( 'AK', 'woocommerce' ),
	'AZ' => __( 'AZ', 'woocommerce' ),
	'AR' => __( 'AR', 'woocommerce' ),
	'CA' => __( 'CA', 'woocommerce' ),
	'CO' => __( 'CO', 'woocommerce' ),
	'CT' => __( 'CT', 'woocommerce' ),
	'DE' => __( 'DE', 'woocommerce' ),
	'DC' => __( 'DC', 'woocommerce' ),
	'FL' => __( 'FL', 'woocommerce' ),
	'GA' => __( 'GA', 'woocommerce' ),
	'HI' => __( 'HI', 'woocommerce' ),
	'ID' => __( 'ID', 'woocommerce' ),
	'IL' => __( 'IL', 'woocommerce' ),
	'IN' => __( 'IN', 'woocommerce' ),
	'IA' => __( 'IA', 'woocommerce' ),
	'KS' => __( 'KS', 'woocommerce' ),
	'KY' => __( 'KY', 'woocommerce' ),
	'LA' => __( 'LA', 'woocommerce' ),
	'ME' => __( 'ME', 'woocommerce' ),
	'MD' => __( 'MD', 'woocommerce' ),
	'MA' => __( 'MA', 'woocommerce' ),
	'MI' => __( 'MI', 'woocommerce' ),
	'MN' => __( 'MN', 'woocommerce' ),
	'MS' => __( 'MS', 'woocommerce' ),
	'MO' => __( 'MO', 'woocommerce' ),
	'MT' => __( 'MT', 'woocommerce' ),
	'NE' => __( 'NE', 'woocommerce' ),
	'NV' => __( 'NV', 'woocommerce' ),
	'NH' => __( 'NH', 'woocommerce' ),
	'NJ' => __( 'NJ', 'woocommerce' ),
	'NM' => __( 'NM', 'woocommerce' ),
	'NY' => __( 'NY', 'woocommerce' ),
	'NC' => __( 'NC', 'woocommerce' ),
	'ND' => __( 'ND', 'woocommerce' ),
	'OH' => __( 'OH', 'woocommerce' ),
	'OK' => __( 'OK', 'woocommerce' ),
	'OR' => __( 'OR', 'woocommerce' ),
	'PA' => __( 'PA', 'woocommerce' ),
	'RI' => __( 'RI', 'woocommerce' ),
	'SC' => __( 'SC', 'woocommerce' ),
	'SD' => __( 'SD', 'woocommerce' ),
	'TN' => __( 'TN', 'woocommerce' ),
	'TX' => __( 'TX', 'woocommerce' ),
	'UT' => __( 'UT', 'woocommerce' ),
	'VT' => __( 'VT', 'woocommerce' ),
	'VA' => __( 'VA', 'woocommerce' ),
	'WA' => __( 'WA', 'woocommerce' ),
	'WV' => __( 'WV', 'woocommerce' ),
	'WI' => __( 'WI', 'woocommerce' ),
	'WY' => __( 'WY', 'woocommerce' ),
	'AA' => __( 'AA (AA)', 'woocommerce' ),
	'AE' => __( 'AE (AE)', 'woocommerce' ),
	'AP' => __( 'AP (AP)', 'woocommerce' ),
	'AS' => __( 'AS', 'woocommerce' ),
	'GU' => __( 'GU', 'woocommerce' ),
	'MP' => __( 'NP', 'woocommerce' ),
	'PR' => __( 'PR', 'woocommerce' ),
	'UM' => __( 'UM', 'woocommerce' ),
	'VI' => __( 'VI', 'woocommerce' ),
);
 
return $states;
}

?>