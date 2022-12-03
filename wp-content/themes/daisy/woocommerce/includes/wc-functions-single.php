<?php
add_action( 'woocommerce_before_single_product', 'daisy_wrapper_product_start', 5 );
function daisy_wrapper_product_start(){
    ?>
    <div class="container card_product">
        <div class="products_day_slider_item radius-image">
            <!-- <div class="products_day_row">     -->
    <?php
}
add_action( 'woocommerce_after_single_product', 'daisy_wrapper_product_end', 15 );
function daisy_wrapper_product_end(){
    ?>
            <!-- </div> -->
        </div>
    </div> 
    <?php
}
add_action( 'woocommerce_before_single_product_summary', 'daisy_wrapper_product_img_start', 5 );
function daisy_wrapper_product_img_start(){
    ?>
    <div class="products_day_slider_inner_wrap">  
    <div class="stickers">
    <?php global $product; echo wc_get_product_tag_list( $product->get_id() . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) ); ?>
       <!-- <div class="hit stickers_item">хит</div>
       <div class="novelty stickers_item">новинка</div> -->
    </div>
    <div class="popular_goods_tools">
    <?php
      echo do_shortcode('[yith_wcwl_add_to_wishlist]');
    ?>

       <!-- <a href="#"></a>
       <a href="#"> </a> -->
    </div>
    <?php
}
add_action( 'woocommerce_before_single_product_summary', 'daisy_wrapper_product_img_end', 25 );
function daisy_wrapper_product_img_end(){
    ?>
    </div> 
    <?php
}
add_action( 'woocommerce_before_single_product_summary', 'daisy_wrapper_product_entry_start', 30 );
function daisy_wrapper_product_entry_start(){
    ?>
    <div class="products_day_desc">
    <?php
    
}
add_action( 'woocommerce_after_single_product_summary', 'daisy_wrapper_product_entry_end', 5 );
function daisy_wrapper_product_entry_end(){
    ?>
    </div> 
    <?php
}
add_filter( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5 );
remove_filter( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_filter( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 7 );
add_filter( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 8 );
// add_filter( 'woocommerce_product_tabs', 'daisy_tabs_remove_rev');
// function daisy_tabs_remove_rev($tabs){
//     unset( $tabs['reviews'] ); // Убираем вкладку "Отзывы"
 
//     return $tabs;
// }

add_action( 'wp_enqueue_scripts', 'daisy_woocommerce_scripts' );
function daisy_woocommerce_scripts() {
	wp_enqueue_style( 'daisy-woocommerce-style', get_template_directory_uri() . '/woocommerce.css');

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'daisy-woocommerce-style', $inline_font );
}
add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);
  function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
      $title = sprintf( __( 'Оценка %s из 5', 'woocommerce' ), $rating );
    } else {
      $title = 'Еще не оценено';
      $rating = 0;
    }
    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'из 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    return $rating_html;
  }

  add_filter( 'woocommerce_after_single_product', 'woocommerce_upsell_display', 15 );
  add_filter( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 20 );
  add_action( 'woocommerce_output_related_products_args', function($arg) {
      $arg['posts_per_page'] = 10;
      return $arg;
  }); 
