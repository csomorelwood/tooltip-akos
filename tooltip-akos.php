<?php
/**
* Plugin Name: Tooltipper by Ákos
* Plugin URI: https://vassgergo.me
* Description: Tudtad, hogy az Ákos visszafelé Soká?
* Version: 1.0
* Author: Csömör
* Author URI: https://profiles.wordpress.org/csomorelwood/
**/

function TBA_register_styles_and_i_need_to_use_custom_function_names_for_better_debugging_but_also_the_last_name_was_pretty_cool() {
  wp_register_style('akos_style_lol', plugins_url('assets/css/style.css',__FILE__ ));
  wp_enqueue_style('akos_style_lol');
  
}
add_action( 'init','TBA_register_styles_and_i_need_to_use_custom_function_names_for_better_debugging_but_also_the_last_name_was_pretty_cool');


function TBA_register_scripts_then_drink_a_cup_of_coffee_while_writing_a_plugin_under_ten_minutes() {
  wp_register_script('akos_script_lol', plugin_dir_url( __FILE__ ) . '/assets/js/akos.js' );
  wp_enqueue_script( 'akos_script_lol');
}
add_action('init', 'TBA_register_scripts_then_drink_a_cup_of_coffee_while_writing_a_plugin_under_ten_minutes');
