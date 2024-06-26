<?php
/*
Plugin Name: CI Simplifying fractions calculator
Plugin URI: https://www.calculator.io/simplifying-fractions-calculator/
Description: Simplifying fractions calculator to reduce fractions. Simplify proper and improper fractions and convert improper fractions to mixed numbers.
Version: 1.0.0
Author: Simplifying Fractions Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_simplifying_fractions_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Simplifying Fractions Calculator by www.calculator.io";

function display_calcio_ci_simplifying_fractions_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Simplifying Fractions Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_simplifying_fractions_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_simplifying_fractions_calculator', 'display_calcio_ci_simplifying_fractions_calculator' );