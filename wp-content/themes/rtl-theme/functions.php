<?php

global $wpdb;
$table_name = $wpdb->prefix . 'ks_tickets';

/*$title = "title ticket update";
$content = "content ticket update";
$id = 1;*/
/*$wpdb->query(
	$wpdb->prepare("update {$table_name} set title = %s, content = %s where id = %d", $title, $content, $id)
);
*/
/*$data = ['title' => $title, 'content' => $content];
$data_format =['%s', '%s'];
$where = ['id' => $id];
$where_format = ['%d'];

$wpdb->update($table_name, $data, $where, $data_format, $where_format);*/

$id = 4;
/*$wpdb->query(
	$wpdb->prepare("delete from {$table_name} where id = %d", $id)
);*/

$where = ['id' => $id];
$where_format = ['%d'];
$wpdb->delete($table_name, $where, $where_format);