<?php
/**
 * Plugin Name: Kosovo Region Addon
 * Description: Adds Kosovo (XK) as a country in WooCommerce with regions for billing and shipping.
 * Version: 1.0.0
 * Author: Butrint Krasniqi
 * Author URI: https://butrintkrasniqi.com/
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: kosovo-region-addon
 * Domain Path: 
 */

// Add Kosovo to the list of countries
add_filter( 'woocommerce_countries', 'add_kosovo_country' );
function add_kosovo_country( $countries ) {
    $countries['XK'] = 'Kosovo';
    return $countries;
}

// Allow Kosovo at checkout/shipping
add_filter( 'woocommerce_allowed_countries', 'allow_kosovo_checkout' );
function allow_kosovo_checkout( $countries ) {
    $countries[] = 'XK';
    return $countries;
}

// Add Kosovo states (cities as regions)
add_filter( 'woocommerce_states', 'add_kosovo_regions' );
function add_kosovo_regions( $states ) {
    $states['XK'] = array(
        'PR' => 'Prishtinë',
        'PE' => 'Pejë',
        'GJ' => 'Gjakovë',
        'GN' => 'Gjilan',
        'MZ' => 'Mitrovicë',
        'FZ' => 'Ferizaj',
        'PZ' => 'Prizren',
        'KM' => 'Kamenicë',
        'DE' => 'Deçan',
        'IS' => 'Istog',
        'KL' => 'Klinë',
        'RA' => 'Rahovec',
        'MA' => 'Malishevë',
        'SK' => 'Skenderaj',
        'VU' => 'Vushtrri',
        'SU' => 'Suharekë',
        'LI' => 'Lipjan',
        'OB' => 'Obiliq',
        'DR' => 'Dragash',
        'SH' => 'Shtërpcë',
        'VS' => 'Viti',
        'LE' => 'Leposaviq',
        'ZE' => 'Zveçan',
        'ZR' => 'Zubin Potok'
    );
    return $states;
}

// Kosovo ZIP code mapping for developers (no validation logic included yet)
function get_kosovo_zip_map() {
    return array(
        'Prishtinë' => '10000',
        'Ferizaj' => '70000',
        'Prizren' => '20000',
        'Pejë' => '30000',
        'Mitrovicë' => '40000',
        'Gjakovë' => '50000',
        'Gjilan' => '60000',
        'Kamenicë' => '62000',
        'Deçan' => '51000',
        'Istog' => '31000',
        'Klinë' => '32000',
        'Rahovec' => '21000',
        'Malishevë' => '21230',
        'Skenderaj' => '41000',
        'Vushtrri' => '42000',
        'Suharekë' => '23000',
        'Lipjan' => '14000',
        'Obiliq' => '15000',
        'Dragash' => '22000',
        'Shtërpcë' => '73000',
        'Viti' => '61000',
        'Leposaviq' => '40050',
        'Zveçan' => '40060',
        'Zubin Potok' => '40070'
    );
}
