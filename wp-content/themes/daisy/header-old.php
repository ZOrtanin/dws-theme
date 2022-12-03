<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
	<title>Главная</title>
    <?php
             wp_head();
         ?>
</head>
    <body>
        <style>
            body{
                color: <?php echo carbon_get_theme_option( 'theme_text_color' ) ?>;
                --anchor-color: <?php echo carbon_get_theme_option( 'theme_text_two_color' ) ?>;
                --bg-cart: <?php echo carbon_get_theme_option( 'theme_card_bg_color' ) ?>;
                --bg-small-cart: #FBFBFB;
                --bg-searh: #FBFBFB;
                --bg-button-sl: #FBFBFB;
                --bg-dots: #9D9D9D;
                --title-second-color: #000;
                --bg-input: #fff;
                --header-logo: #313131;
                --gray-light: #F3F3F3;
                --light-light: #FBFBFB;
                --bg-arrowcal: #1F77FC;
                --bg-fl-header: #F3F3F3;
                --bg-filter: #F3F3F3;
            }
            .advantages_slider_header, .d__note{
                border-color: <?php echo carbon_get_theme_option( 'theme_text_color' ) ?>;
            }
            img{
                border-radius: inherit;
            }
            .theme-btn, .single_add_to_cart_button{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color' ) ?>;
                border-radius: <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?>
            }
            .theme-btn:hover, .single_add_to_cart_button:hover{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color_hover' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color_hover' ) ?>;
            }
            .theme-btn:active, .single_add_to_cart_button:active{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color_active' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color_active' ) ?>;
            }
            .theme-btn:disabled, .single_add_to_cart_button:disabled{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color_dis' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color_dis' ) ?>;
            }
            .theme-btn-two, .products .single_add_to_cart_button{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color' ) ?>;
                border-radius: <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?>;
            }
            .theme-btn-two:hover, .products .single_add_to_cart_button:hover{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color_hover' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color_hover' ) ?>;
            }
            .theme-btn-two:active, .products .single_add_to_cart_button:active{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color_active' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color_active' ) ?>;
            }
            .theme-btn-two:disabled, .products .single_add_to_cart_button:disabled{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color_dis' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color_dis' ) ?>;
            }
            .radius-image{
                border-radius: <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?>;
                overflow: hidden;
            }
            .radius-image video{
                overflow: hidden;
            }
            .radius-image_top{
                border-radius: <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> 0 0;
            }
            .radius-image_right{
                border-radius: 0 <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> 0;
            }
            .radius-sbtn{
                border-radius: 0 <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?> <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?> 0;
            }
            .radius-search{
                border-radius: <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?>;
            }
            .d__dot{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color' ) ?>;
            }
            .second_title{
                color: <?php echo carbon_get_theme_option( 'theme_section_title_color' ) ?>;
            }
            .footer{
                background: <?php echo carbon_get_theme_option( 'theme_footer_color' ) ?>;
            }
            .par-cat{
                background: <?php echo carbon_get_theme_option( 'theme_cat_par_bg' ) ?>;
            }
            .par-cat__item{
                color: <?php echo carbon_get_theme_option( 'theme_cat_par_color' ) ?>;
            }
            .par-cat__item:hover{
                <?php if(carbon_get_theme_option( 'theme_cat_par_bg_hover' )) { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_par_bg_hover' ) ?>;
               <?php } else { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg' ) ?>;
              <?php } ?>
              <?php if(carbon_get_theme_option( 'theme_cat_par_color_hover' )) { ?>
                    color: <?php echo carbon_get_theme_option( 'theme_cat_par_color_hover' ) ?>;
               <?php } else { ?>
                    color: <?php echo carbon_get_theme_option( 'theme_cat_par_bg' ) ?>;
              <?php } ?>
            }
            .cild-1__item{
                background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_cat_child1_color' ) ?>;
            } 
            .cild-1__item:hover{
                <?php if(carbon_get_theme_option( 'theme_cat_child1_bg_hover' )) { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg_hover' ) ?>;
               <?php } else { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child2_bg' ) ?>;
              <?php } ?>
              <?php if(carbon_get_theme_option( 'theme_cat_child1_color_hover' )) { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child1_color_hover' ) ?>;
               <?php } else { ?>
                color: #000;
              <?php } ?>
            }         
            .child-1{
                background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg' ) ?>;
            }
            .child-2{
                background: <?php echo carbon_get_theme_option( 'theme_cat_child2_bg' ) ?>;
            }
            .cild-2__item{
                color: <?php echo carbon_get_theme_option( 'theme_cat_child2_color' ) ?>;
            } 
            .cild-2__item:hover{
              <?php if(carbon_get_theme_option( 'theme_cat_child2_color_hover' )) { ?>
                    color: <?php echo carbon_get_theme_option( 'theme_cat_child2_color_hover' ) ?>;
               <?php } else { ?>
                color: <?php echo carbon_get_theme_option( 'theme_cat_par_bg' ) ?>;
              <?php } ?>
            } 
            <?php $cat_image_hidden = carbon_get_theme_option( 'theme_catalog_image_hidden' ); 
            if($cat_image_hidden == 'no') { ?>
                .woocommerce-loop-product__link img{
                    display: none;
                }
                .woocommerce-loop-product__title {
                    margin-top: 40px;
                }
                .woocommerce-product-gallery{
                    display: none;
                }
                .product, .flex-control-thumbs{
                    align-items: flex-start;
                }
                .main_note_slider_goods .popular_goods_slider{
                    display: none;
                }
           <?php } ?>
           .main_slider_social li a, .advantages_slider_icon{
                background-color: <?php echo carbon_get_theme_option( 'theme_icon_bg_color' ) ?>;
                transition: .3s;
           }
           .main_slider_social li a:hover{
                background-color: <?php echo carbon_get_theme_option( 'theme_icon_bg_color_hover' ) ?>;
                transition: .3s;
           }
            /* .woocommerce-loop-product__title{
                margin-top: 30px;
            }
            .size-woocommerce_thumbnail, .woocommerce-placeholder{
                display: none;
            } */
            .plyr{
                min-width: 60%;
                }
        </style>
    <?php $location = carbon_get_theme_option( 'daisy_header_location' ); ?>
    <div class="video-popup hide">
        <div class="video-popup__wrap">
            <!-- <div class="js-player video-popup__content" data-plyr-provider="youtube" >
                <iframe
                    src="https://www.youtube.com/embed/6wJAdfTJZUQ"
                    allowfullscreen
                    allowtransparency    
                    allow="autoplay"
                 ></iframe>
            </div> -->
        </div>                                                        
    </div>
    <div class="top_tool">
                <div class="container top_tool_container">
                    <div class="top-left__tool">
                        <?php if (carbon_get_theme_option( 'daisy_header_sity' )){ ?>
                            <div class="locations"><?php echo carbon_get_theme_option( 'daisy_header_sity' ); ?></div>
                            <?php
                        }
                     $addresses = carbon_get_theme_option('daisy_header_address_block' ); 
                    if ( ! empty( $addresses ) ): ?>
                    <div class="select_locations">
                        <select>
                        <?php foreach ( $addresses as $address ): ?>
                            <option><?php echo $address['daisy_header_address']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <?php endif; ?>
                    <?php if (carbon_get_theme_option( 'daisy_header_phone' )){ ?>
                    <a href="tel:<?php echo carbon_get_theme_option( 'daisy_header_phone' ); ?>" class="top_tool_phone"><?php echo carbon_get_theme_option( 'daisy_header_phone' ); ?></a>
                        <?php
                    } ?>
                    </div>
                    <div class="top-right__tool">
                     <?php
                        wp_nav_menu( [
                            'theme_location'  => 'header-menu',
                            'container'       => 'nav',
                            'container_class' => 'menu',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); ?>
                        <ul class="lang">
                            <li><a href="#">RU</a></li>
                        </ul>
                    </div>
                    <div class="nav_block">
                        <ul class="nav_hidden">
                        <?php 
                            $taxonomy     = 'product_cat';
                            $orderby      = 'name';  
                            $show_count   = 0;
                            $pad_counts   = 0; 
                            $hierarchical = 1; 
                            $title        = '';  
                            $empty        = 0;
                            $shop_category = array(
                            'taxonomy'     => $taxonomy,

                            );
                            $cat_product = get_categories( $shop_category )?>
                            <?php foreach ($cat_product as $cat_p) : ?>
                            <li>
                            <?php 
                                if($cat_p->category_parent == 0) {
                                    $category_id = $cat_p->term_id; ?>
                                    <a href="<?php echo get_term_link( $category_id ,'product_cat') ?>"><?php echo $cat_p->name; }?></a>
                                <ul>
                                <?php
                                $taxonomy = 'product_cat';
                                $term = $cat_p;

                                $children = get_terms( 
                                $term->taxonomy, array(
                                    'parent' => $term->term_id,
                                    'hide_empty' => false
                                )
                                );
                                foreach ($children as $subcat) :  
                                    $subcat_id = $subcat->term_id;
                                ?> 
                                    <li><a href="<?php echo get_term_link( $subcat ,'product_cat') ?>"><?php echo $subcat -> name ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="nav_block_address">
                        <?php if (carbon_get_theme_option( 'daisy_header_phone' )){ ?>
                    <a href="tel:<?php echo carbon_get_theme_option( 'daisy_header_phone' ); ?>" class="nav_block_address_phone"><?php echo carbon_get_theme_option( 'daisy_header_phone' ); ?></a>
                        <?php
                    } $addresses = carbon_get_theme_option('daisy_header_address_block' ); 
                    if ( ! empty( $addresses ) ): ?>
                            <div class="select_locations select_locations_nav_block">
                                <select>
                                <?php foreach ( $addresses as $address ): ?>
                                    <option><?php echo $address['daisy_header_address']; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                            <?php endif; ?>
                            <?php if (carbon_get_theme_option( 'daisy_header_sity' )){ ?>
                            <div class="locations nav_block_address_locations"><?php echo carbon_get_theme_option( 'daisy_header_sity' ); ?></div>
                            <?php } ?>
                        </div>
                        <!-- <ul class="main_slider_social">
                            <li><a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/main-slider-social/1.svg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/main-slider-social/2.svg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/main-slider-social/3.svg" alt=""></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>



            <header class="header">
                <div class="container header_container">
                    <div class="logo_catalog">
                    <?php 
                      $file = carbon_get_theme_option( 'daisy_header_logo' );
                      $file_url = wp_get_attachment_image_src( $file, 'full' );
                        if( $file_url ){
                           ?>
                          <a href="#" class="header_logo"><img class="img_svg" src="<?php echo ($file_url[0]); ?>" alt="Logo"></a> 
                            <?php
                            } 
                            ?> 
                            <div class="cat-modal-mask hide"></div>     
                    <div class="to_cat_wrapper">
                            <div class="cat-modal hide">
                        <div class="par-cat">
                            <?php 
                            $taxonomy     = 'product_cat';
                            $orderby      = 'name';  
                            $show_count   = 0;
                            $pad_counts   = 0; 
                            $hierarchical = 1; 
                            $title        = '';  
                            $empty        = 0;
                            $shop_category = array(
                            'taxonomy'     => $taxonomy,

                            );
                            $cat_product = get_categories( $shop_category )?>
                            <?php foreach ($cat_product as $cat_p) : ?>
                                <?php 
                                if($cat_p->category_parent == 0) {
                                    $category_id = $cat_p->term_id;
                                    // $term_id = get_queried_object_id();
                                    // $term_icon = carbon_get_term_meta( $term_id, 'cat_thumb_icon' );
                                    $term_thumbnail_id = carbon_get_term_meta(  $category_id, 'cat_thumb_icon');
                                    $term_thumbnail_url = wp_get_attachment_image_url( $term_thumbnail_id, 'full' );
                                    $term_thumbnail_id_hover = carbon_get_term_meta(  $category_id, 'cat_thumb_icon_hover');
                                    $term_thumbnail_url_hover = wp_get_attachment_image_url( $term_thumbnail_id_hover, 'full' );
                                    $thumbnail_id   = get_term_meta( $cat_p->term_id, 'thumbnail_id', true );
                                    ?>
                                <div class="par-link">
                                    <a href="<?php echo get_term_link( $category_id ,'product_cat') ?>" class="par-cat__item">
                                    <div class="par-cat__item-icon par-cat__item-icon_t1">
                                        <img src="<?php if($term_thumbnail_url) { echo $term_thumbnail_url;  } ?>" alt="">
                                    </div>
                                    <div class="par-cat__item-icon par-cat__item-icon_t2">
                                        <img src="<?php if($term_thumbnail_url_hover) { echo $term_thumbnail_url_hover;  } ?>" alt="">
                                    </div>
                                    <?php echo $cat_p->name; ?>
                                </a>
                                <div class="child-1 hide">
                                <?php
                                $taxonomy = 'product_cat';
                                $term = $cat_p;

                                $children = get_terms( 
                                $term->taxonomy, array(
                                    'parent' => $term->term_id,
                                    'hide_empty' => false
                                )
                                );
                                foreach ($children as $subcat) :  
                                    $subcat_id = $subcat->term_id;
                                ?> 
                                 <div class="child-link">                                <a href="<?php echo get_term_link( $subcat ,'product_cat') ?>" class="cild-1__item"><?php echo $subcat -> name ?></a>
                                
                            <div class="child-2 hide">
                                <?php
                                $taxonomy = 'product_cat';
                                $term = $subcat; 
                                $child = get_terms( 
                                    $subcat->taxonomy, array(
                                    'parent' => $subcat->term_id,
                                    'hide_empty' => false
                                )
                                );
                                foreach ($child as $subcat) :  
                                    $subcat_id = $subcat2->term_id;
                                ?>                               
                                <a href="<?php echo get_term_link( $subcat ,'product_cat') ?>" class="cild-2__item"><?php echo $subcat -> name ?></a>
                            <?php endforeach; ?>
                                </div></div>                             
                            <?php endforeach; ?>
                                </div>
                                </div>
                                <?php } ?>
                            <?php endforeach; ?>
                            <!-- <div class="cat-modal__close">&times;</div> -->
                        </div>
                    </div>
                    <a href="<?php echo get_home_url(); ?>/shop" class="to_catalog_btn theme-btn radius-btn">Каталог</a>
                            </div>        
                    </div>
                    <?php if (carbon_get_theme_option( 'daisy_header_search_inp') == 'yes'){ 
                        get_search_form();
                     } ?>
                    <div class="header_tools">
                    <?php
                     wp_nav_menu( [
                        'theme_location'  => 'comparison-link',
                        'container'       => 'div',
                        'container_class' => 'header_tools-link bar_chart',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] ); 
                        wp_nav_menu( [
                            'theme_location'  => 'wish-link',
                            'container'       => 'div',
                            'container_class' => 'header_tools-link heart',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); 
                        wp_nav_menu( [
                            'theme_location'  => 'cart-link',
                            'container'       => 'div',
                            'container_class' => 'header_tools-link cart-icon',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); 
                        wp_nav_menu( [
                            'theme_location'  => 'profile-link',
                            'container'       => 'div',
                            'container_class' => 'header_tools-link account',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); 
                        ?>
                       </div>
                        <!-- <a href="#" class="header_tools-link bar_chart"></a> -->
                        <!-- <a href="#" class="header_tools-link heart"></a>
                        <a href="<?php echo get_home_url(); ?>/cart" class="header_tools-link cart-icon"></a>
                        <div class="header_tools-link account_wrap">
                            <a href="#" class="account"></a>
                            <div class="account_drop">
                                <div class="account_avatar"><img src="<?php echo bloginfo('template_url');?>/assets/img/content/account.jpg" alt=""></div>
                                <div class="account_name">Иван Иванов</div>
                                <a href="#" class="to_go">Перейти</a>
                                <a href="#" class="log_off">Выйти</a>
                            </div> -->

                        <!-- <label class="switch" role="button" for="toggle">
                            <input type="checkbox" class="switch__control" id="toggle">
                            <span class="switch__label switch__label--sun"></span>
                            <span class="switch__label switch__label--moon"></span>
                        </label> -->
                        <div class="burger">
                            <span class="bar bar1"></span>
                            <span class="bar bar2"></span>
                            <span class="bar bar3"></span>
                            <span class="bar bar4"></span>
                            <span class="bar bar5"></span>
                        </div>
                    </div>
                </div>  
            </header>



            <nav class="nav">
                <ul class="container nav_list">
                <?php 
                    $taxonomy     = 'product_cat';
                    $orderby      = 'name';  
                    $show_count   = 0;
                    $pad_counts   = 0; 
                    $hierarchical = 1; 
                    $title        = '';  
                    $empty        = 0;
                    $shop_category = array(
                    'taxonomy'     => $taxonomy,

                    );
                    $cat_product = get_categories( $shop_category )?>
                    <?php foreach ($cat_product as $cat_p) : ?>
                        <?php 
                        if($cat_p->category_parent == 0) {
                            $category_id = $cat_p->term_id;
                            ?>
                            <li><a href="<?php echo get_term_link( $category_id ,'product_cat') ?>"><?php echo $cat_p->name; ?></a></li>
                        <?php } ?>
                    <?php endforeach; ?>
                    <!-- <li><a href="#">Nulla Lorem</a></li>
                    <li><a href="#">Cupidatat</a></li>
                    <li class="drop_nav"><a href="#">Laborum</a></li>
                    <li><a href="#">Nulla Lorem</a></li>
                    <li><a href="#">Laborum</a></li> -->
                </ul>
            </nav>