<?php 
function exception_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        // Этот код ошибки не входит в error_reporting
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
}

set_error_handler('exception_error_handler');


// Проверяем установлен плагин Carbon Fields
try { 

    $d = carbon_get_theme_option( 'social_site_icon')['class'];
    $color = carbon_get_theme_option('social_site_icon_color');

}catch(\ErrorException $e) {

    $d = 'none';
    $color = '#fff';

}
?>

    <div class="news_action">
        <div class="container news_action_container">              
            <i class="<?php echo $d; ?>" style="color: <?php echo $color ?>"></i>
            <div class="news_action_icon">Срочная новость / акция</div>
            <a href="#" class="news_action_close"></a>
        </div>
    </div>



   

