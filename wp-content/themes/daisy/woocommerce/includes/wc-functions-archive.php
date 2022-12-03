<?php
add_action( 'woocommerce_before_main_content', 'daisy_archive_wrapper_start', 40 );
function daisy_archive_wrapper_start(){
    if(!is_product()){
    ?>
    <div class="container content_page">
    <div class="hidden_search">
                    <a href="#" class="open_filter"><i></i></a>
                </div>
        <div class="catalog_row">
        <?php
    }
}
add_action( 'woocommerce_after_main_content', 'daisy_archive_wrapper_end', 30 );
function daisy_archive_wrapper_end(){
    if(!is_product()){
    ?>
        </div>
    </div>
    <?php
}
}

add_action( 'woocommerce_before_main_content', 'daisy_archive_content_wrapper_start', 60 );
function daisy_archive_content_wrapper_start(){
    if(!is_product()){
        ?>
        <div class="catalog_content">
        <?php
    }
    ?>
    <?php
}
add_action( 'woocommerce_after_main_content', 'daisy_archive_content_wrapper_end', 60 );
function daisy_archive_content_wrapper_end(){
    if(!is_product()){
        ?>           
            </div>
        <?php
    }
}
add_action( 'woocommerce_before_shop_loop_item', 'daisy_loop_product_div_open', 5 );
function daisy_loop_product_div_open(){
  
        ?>           
            <div class="popular_goods_item radius-image">
            <div class="stickers">
                <?php global $product; echo wc_get_product_tag_list( $product->get_id() . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) ); ?>
            </div>
            <div class="popular_goods_tools">
            <?php
                echo do_shortcode('[yith_wcwl_add_to_wishlist]');
            ?>
                <!-- <a href="#"></a>
                <a href="#"></a> -->
            </div>
        <?php
    
}
add_action( 'woocommerce_after_shop_loop_item', 'daisy_loop_product_div_close', 20 );
function daisy_loop_product_div_close(){
   
        ?>           
           </div>
        <?php
    
}
remove_action( 'woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_single_add_to_cart', 15 );
// add_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 16 );

add_action( 'woocommerce_before_shop_loop', 'daisy_bef_loop_product_div_open', 5 );
function daisy_bef_loop_product_div_open(){
        ?>           
        <div class="sort_result radius-image">
            <div class="sort_result_header">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="sort_result_title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>
    <?php   
}
add_action( 'woocommerce_before_shop_loop', 'daisy_bef_loop_product_div_close', 25 );
function daisy_bef_loop_product_div_close(){
        ?>    
            </div>       
    <?php  
}
add_action( 'woocommerce_before_shop_loop', 'daisy_aft_loop_product_div_open', 30 );
function daisy_aft_loop_product_div_open(){
        ?>           
         <div class="sort_result_selcting"> 
            <?php dynamic_sidebar( 'sidebar-shop-sort' ); ?>          
    <?php   
}
add_action( 'woocommerce_before_shop_loop', 'daisy_aft_loop_product_div_close', 40 );
function daisy_aft_loop_product_div_close(){
        ?>    
            </div>       
        </div>
    <?php  
}

add_filter( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
// remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);