<?php
/**
 * Template name: Блог
 */
        get_header();
    ?>
    <div class="container content_page">
                <div class="blog_header">
                    <div class="blog_article">
                        <ul class="blog_article_tabs">
                            <li class="active">Voluptate</li>
                            <li>Exercitation</li>
                        </ul>
                        <div class="blog_article_box active">
                            <ul class="blog_article_list">
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_article_box">
                            <ul class="blog_article_list">
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                                <li>
                                    <a href="#">Amet minim pariatur duis cillum minim tempor enim</a>
                                    <div class="blog_article_date">29 марта 2021</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog_article_description">
                        <div class="blog_article_description_slider">
                            <div class="blog_article_description_content">
                                <h3 class="blog_article_description_title">Amet minim pariatur<br>duis cillum minim tempor enim</h3>
                                <ul class="blog_article_description_list">
                                    <li>Katrin Matrin</li>
                                    <li>Category</li>
                                    <li>29 марта 2021</li>
                                </ul>
                                <p class="blog_article_description_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <p class="blog_article_description_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <a href="#" class="main_slider_btn">Ullamco</a>
                            </div>
                            <div class="blog_article_description_content">
                                <h3 class="blog_article_description_title">Amet minim pariatur<br>duis cillum minim tempor enim</h3>
                                <ul class="blog_article_description_list">
                                    <li>Katrin Matrin</li>
                                    <li>Category</li>
                                    <li>29 марта 2021</li>
                                </ul>
                                <p class="blog_article_description_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <p class="blog_article_description_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <a href="#" class="main_slider_btn">Ullamco</a>
                            </div>
                            <div class="blog_article_description_content">
                                <h3 class="blog_article_description_title">Amet minim pariatur<br>duis cillum minim tempor enim</h3>
                                <ul class="blog_article_description_list">
                                    <li>Katrin Matrin</li>
                                    <li>Category</li>
                                    <li>29 марта 2021</li>
                                </ul>
                                <p class="blog_article_description_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <p class="blog_article_description_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <a href="#" class="main_slider_btn">Ullamco</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="blog_main_row">
                    <ul class="blog_main_list">
                    <?php            
							$posts = get_posts( array(
							'numberposts' => 10,
							'category_name'    => 'blog-term',
							'orderby'     => 'date',
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
                            <li class="blog_main_item">
                            <div class="blog_main_item_img">
                                <a href="<?php echo get_the_permalink();?>" class="blog_main_item_img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </a>
                                <a href="" class="blog_heard"><img src="<?php echo bloginfo('template_url');?>/assets/img/main-slider-social/5.svg" alt=""></a>
                            </div>
                            <div class="blog_main_item_text">
                                <a href="<?php echo get_the_permalink();?>" class="blog_main_item_title"><?php the_title(); ?></a>
                                <p class="blog_main_item_info"><?php echo carbon_get_the_post_meta('post_descr');?></p>
                                <ul class="blog_article_description_list">
                                    <li><?php echo get_the_author(); ?></li>
                                    <li><?php echo get_the_category()[0]->name; ?></li>
                                    <li><?php echo get_the_date('j F Y'); ?></li>
                                </ul>
                            </div>
                        </li>
									<?php
									}
									wp_reset_postdata();
									?>
                    </ul>
                    <?php
            get_template_part('blog-sidebar');
         ?>

                </div>
            </div>
  <?php
        get_footer();