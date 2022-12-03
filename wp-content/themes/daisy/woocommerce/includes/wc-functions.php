<?php 
add_action('woocommerce_before_main_content', 'daisy_add_sidebar_only_archive', 50);
function daisy_add_sidebar_only_archive(){
   if(!is_product()){
    woocommerce_get_sidebar();
   }
}
function wcb_show_category_banner(){ 
   return false;
   }