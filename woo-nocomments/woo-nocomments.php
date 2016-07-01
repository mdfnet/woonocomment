<?php
/*
Plugin Name: Woo No Comments
Plugin URI: https://github.com/mdfnet/woonocomment
Description: Elimina los comentarios en los productos de WooCommerce
Author: Manuel Flores
Author URI: https://profiles.wordpress.org/mdfnet
Version: 1.1
Text Domain: woo-nocomments
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs)
{
   unset($tabs['reviews']);
   return $tabs;
}
?>
