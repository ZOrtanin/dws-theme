<?php
/**
 * Template name: Корзина
 */
        get_header();
    ?>
    <div class="container content_page">
    <?php
      echo do_shortcode('[woocommerce_cart]');
      ?>
    </div>
  <?php
        get_footer();