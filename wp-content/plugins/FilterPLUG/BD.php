<?php
/*
Plugin Name: BD
Description: База данных
*/

// function dmp($var)
// {
// 	echo '<pre>';
// 	print_r($var);
// 	echo '</pre>';
// }

function create_table() {
	global $wpdb;

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	$table_name = $wpdb->get_blog_prefix() . 'order_table';
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

	$sql = "CREATE TABLE {$table_name} (
		Id  bigint(20) unsigned NOT NULL auto_increment,
		City varchar(255) NOT NULL default '',
		Sale varchar(255) NOT NULL default '',
		Cost TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY  (id)
		)
		{$charset_collate};";

	dbDelta($sql);
}

create_table();

add_action( 'wp_enqueue_scripts', 'bd_styles' );
function bd_styles() {
	wp_enqueue_style( 'main', plugins_url('main.css', __FILE__) );
}

add_action('admin_menu', function(){
	add_menu_page( 'Продукты на сайте', 'Продукты на тестовом сайте', 'manage_options', 'site-options', 'add_my_setting', '', 4 ); 
} );

function add_my_setting(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
		<?php
		global $wpdb;

		$table_name = $wpdb->get_blog_prefix() . 'order_table';
		$var = 0;

		$url = admin_url('admin.php?page=site-options');
		
		$results = $wpdb->get_results( "SELECT * FROM " . $table_name );
		
		
		?>
		<table class="activity-table wp-list-table widefat fixed striped users">
			<thead>
			<tr>
				<th>№</th>
				<th>Город</th>
				<th>Товар</th>
				<th>Цена</th>
			</tr>
		</thead>
		<?php
		foreach($results as $q): ?>
			<tr>
				<td><?php echo ++$var; ?></td>
				<td><?php echo $q->City ?></td>
				<td><?php echo $q->Sale ?></td>
				<td><?php echo $q->Cost ?></td>
			</tr>
		<?php endforeach; ?>
	</div>
		<?php }

add_action('admin_menu', function(){
	add_menu_page( 'Я кнопка', 'Нажми на меня', 'manage_options', 'site-options', 'add_my_setting', '', 6 ); 
} );