<?php
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_all_filters( 'woocommerce_after_single_product_summary');
remove_filter('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_filter( 'woocommerce_product_additional_information_heading', 'daisy_heading_descr_remove');
remove_all_filters( 'woocommerce_before_shop_loop');
add_filter( 'woocommerce_product_description_heading', 'daisy_heading_descr_remove');
function daisy_heading_descr_remove($header){
    $header = false;
    return $header;
}
// remove_all_filters('woocommerce_product_tabs');
// remove_all_filters( 'woocommerce_single_product_summary');