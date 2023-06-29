<?php


function ls_genre_taxonomy() {
	$labels = array(
		'name'              => "ژانر",
		'singular_name'     => "ژانر",
		'search_items'      => "جستجوی ژانرها",
		'all_items'         => "همه ژانر ها",
		'parent_item'       => "پدر ژانر",
		'parent_item_colon' => "پدر ژانر",
		'edit_item'         => "ویرایش ژانر",
		'update_item'       => "بروزرسانی ژانر",
		'add_new_item'      => "افزودن ژانر",
		'new_item_name'     => "نام ژانر جدید",
		'menu_name'         => "ژانر",
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);
	register_taxonomy("genre",array("film"),$args);
}






add_action("init", "ls_genre_taxonomy");
