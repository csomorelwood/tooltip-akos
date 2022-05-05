<?php
/**
* Plugin Name: Tooltipper by Ákos
* Plugin URI: https://vassgergo.me
* Description: Tudtad, hogy az Ákos visszafelé Soká?
* Version: 1.0
* Author: Csömör
* Author URI: https://profiles.wordpress.org/csomorelwood/
**/

function register_the_unlimited_power_of_akos_raised_by_csomorelwood() {
  wp_register_style('akos_style_lol', plugins_url('assets/css/style.css',__FILE__ ));
  wp_enqueue_style('akos_style_lol');
  
}
add_action( 'init','register_the_unlimited_power_of_akos_raised_by_csomorelwood');


function magical_script_from_the_god_himself_akos() {
  wp_register_script('akos_script_lol', plugin_dir_url( __FILE__ ) . '/assets/js/akos.js' );
  wp_enqueue_script( 'akos_script_lol');
}
add_action('init', 'magical_script_from_the_god_himself_akos');
