<?php 
if(! is_active_sidebar('sidebar-shop')){
    return;
}
?>
<div class="filter_column filter_column_content radius-image">
    <?php dynamic_sidebar( 'sidebar-shop' ); ?>
</div>
