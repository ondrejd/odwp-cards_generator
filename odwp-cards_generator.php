<?php
/**
 * Plugin Name: Cards Generator
 * Plugin URI: https://github.com/ondrejd/odwp-cards_generator
 * Description: Cards generator plugin
 * Version: 0.3
 * Author: Ondrej Donek
 * Author URI: https://ondrejd.com/
 * License: GPLv3
 * Requires at least: 4.8
 * Tested up to: 4.8.3
 * Tags: debug,log,development
 * Donate link: https://www.paypal.me/ondrejd
 *
 * Text Domain: odwpcg
 * Domain Path: /languages/
 *
 * @author Ondřej Doněk <ondrejd@gmail.com>
 * @link https://github.com/ondrejd/odwp-cards_generator for the canonical source repository
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License 3.0
 * @package odwp-cards_generator
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register "Card" custom post type
include_once( plugin_dir_path( __FILE__ ) . 'src/class-card-cpt.php' );
add_action( 'init', ['odwpcg\CardCpt', 'init'] );
