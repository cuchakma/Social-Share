<?php
/**
 * Plugin Name: Social Share
 * Plugin URI:  www.facebook.com
 * Description: This plugin contains social share templates in shortcode
 * Version:     1.0.0
 * Author:      Cupid Chakma
 * Author URI:  www.facebook.com
 * Text Domain: social-share
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Social Share
 * @author      Cupid Chakma
 * @copyright   2021 D&D
 * @license     GPL-2.0+
 *
 */

add_action('wp_enqueue_scripts', 'register_css_styles');

function register_css_styles() {
    wp_register_style('social-share-styles', plugins_url('', __FILE__) . '/assets/style.css', false, rand());
}


add_shortcode('social-share', 'social_share_contents');

function social_share_contents($atts) {
    wp_enqueue_style('social-share-styles');
    echo '<div class="social-btn">
        <a href="https://facebook.com/anampartho" target="_blank"><div class="social face"><i class="fa fa-facebook fa-2x"></i><span>Facebook</span></div></a>
        <a href="#" target="_blank"><div class="social twi"><i class="fa fa-twitter fa-2x"></i><span>Twitter</span></div></a>
        <a href="#" target="_blank"><div class="social in"><i class="fa fa-linkedin  fa-2x"></i><span>Linked In</span></div></a>
        <a href="#" target="_blank"><div class="social pin"><i class="fa fa-pinterest-p fa-2x"></i><span>Pinterest</span></div></a>
        <a href="#" target="_blank"><div class="social git"><i class="fa fa-github fa-2x"></i><span>Github</span></div></a>
    </div>';
}