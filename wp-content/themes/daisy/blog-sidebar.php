<div class="blog_aside">
                       <div class="blog_aside_info">
                            <form action="" class="blog_aside_searh">
                                <input type="text" class="header_searh_input" placeholder="Поиск">
                                <input type="submit" class="header_searh_submit" value="">
                            </form>
                            <h3 class="blog_aside_title">Категории</h3>
                            <ul class="blog_aside_list">
                                <?php 
                                 $cat = get_category_by_slug('blog-term');
                                 $parent_id = $cat->term_id;

# получаем дочерние рубрики
$sub_cats = get_categories( array(
	'child_of' => $parent_id,
	'hide_empty' => 0
) );
if( $sub_cats ){
	foreach( $sub_cats as $cat ){

		// Данные в объекте $cat

		// $cat->term_id
		// $cat->name (Рубрика 1)
		// $cat->slug (rubrika-1)
		// $cat->term_group (0)
		// $cat->term_taxonomy_id (4)
		// $cat->taxonomy (category)
		// $cat->description ()
		// $cat->parent (0)
		// $cat->count (14)
		// $cat->object_id (2743)
		// $cat->cat_ID (4)
		// $cat->category_count (14)
		// $cat->category_description ()
		// $cat->cat_name (Рубрика 1)
		// $cat->category_nicename (rubrika-1)
		// $cat->category_parent (0)
        $cat_link = get_category_link( $cat->term_id );

		echo '<li><a href="'. $cat_link .'">'. $cat->name .'</a><span>('. $cat->count .')</span></li>';
	}

	wp_reset_postdata(); 
}
                                ?>  
                            </ul>
                            <h3 class="blog_aside_title">Pariatur</h3>
                            <ul class="blog_aside_list_tags">
                                <li><a href="#">#Cupidatat</a></li>
                                <li><a href="#">#Laborum</a></li>
                                <li><a href="#">#Nulla Lorem</a></li>
                                <li><a href="#">#Laborum</a></li>
                                <li><a href="#">#Nulla Lorem</a></li>
                                <li><a href="#">#Cupidatat</a></li>
                                <li><a href="#">#Sit</a></li>
                                <li><a href="#">#Amet</a></li>
                                <li><a href="#">#Cupidatat</a></li>
                            </ul>
                            <h3 class="blog_aside_title">Pariatur</h3>
                            <div class="blog_aside_info_slider">
                            <?php            
							$posts = get_posts( array(
							'numberposts' => 3,
							'category_name'    => 'blog-term',
							'orderby'     => 'rand',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						) );
						foreach( $posts as $post ){
							setup_postdata($post);
							?>
                             <div class="blog_aside_info_slider_item">
                                    <div class="blog_aside_info_slider_img"><img src="<?php the_post_thumbnail_url();?>" alt=""></div>
                                    <a href="<?php echo get_the_permalink();?>" class="blog_aside_info_slider_text"><?php the_title(); ?></a>
                                    <ul class="blog_article_description_list">
                                        <li><?php echo get_the_author(); ?></li>
                                        <li><?php echo get_the_date('j F Y'); ?></li>
                                    </ul>
                                </div>
									<?php
									}
									wp_reset_postdata();
									?>
                            </div>
                            <?php dynamic_sidebar( 'blog-social' ); ?>
                        </div>
                        <?php dynamic_sidebar( 'blog-calendar' ); ?>
                        <!-- <div class="blog_aside_slider_wrap">
                            <div class="blog_aside_slider">
                                <div class="blog_aside_slider_item"><img src="img/content/blog-aside-slider.jpg" alt=""></div>
                                <div class="blog_aside_slider_item"><img src="img/content/blog-aside-slider.jpg" alt=""></div>
                                <div class="blog_aside_slider_item"><img src="img/content/blog-aside-slider.jpg" alt=""></div>
                            </div>
                            <div class="advantages_slider_nav">
                                <span class="advantages_prev advantages_prev13">PREV</span>
                                <span class="advantages_next advantages_next13">NEXT</span>
                            </div>
                        </div>  -->
                        <!-- <div id="datepicker"></div> -->
                    </div>