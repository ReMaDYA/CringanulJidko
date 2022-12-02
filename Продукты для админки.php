<?php
add_action( 'wp_enqueue_scripts', 'bd_styles' );
function bd_styles() {
  wp_enqueue_style( 'main', plugins_url('main.css', __FILE__) );
}

add_action('admin_menu', function(){
  add_menu_page( 'Добавить продукты на сайт', 'Добавить продукты на тестовом сайте', 'manage_options', 'site-options', 'add_my_setting', '', 4 ); 
} );
  $host = 'localhost';  
  $user = 'WOWOWO';  
  $pass = 'CRINGEEXPERT777'; 
  $db_name = 'wp_order_table';   
  $link = mysqli_connect($host, $user, $pass, $db_name); 
  if (!$link) {
     echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
