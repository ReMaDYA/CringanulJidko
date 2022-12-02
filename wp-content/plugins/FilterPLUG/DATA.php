<?php
/*
Description: База данных, добавление товара
*/

// function dmp($var)
// {
// 	echo '<pre>';
// 	print_r($var);
// 	echo '</pre>';
// }
	
	function insert_for_sale(){
		global $wpdb;
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	$table_name = $wpdb->get_blog_prefix() . 'order_table';
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

INSERT INTO order_table (Id,City,Sale,Cost)
VALUES (1, 'Vladivostok', 'Kniga', 2000.00 );
 
INSERT INTO order_table (ID,NAME,AGE,ADDRESS,SALARY)
VALUES (2, 'Piter', 'Cringe', 9000 );
 
INSERT INTO order_table (ID,NAME,AGE,ADDRESS,SALARY)
VALUES (3, 'Uganda', 'Remote_control', 1000.00 );
 
}
php/>