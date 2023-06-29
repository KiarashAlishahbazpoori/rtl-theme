<?php



function ls_film_post_type(){
	$labels = array(
		'name'                  => "فیلم",
		'singular_name'         => "فیلم",
		'menu_name'             => "فیلم ها",
		'name_admin_bar'        => "فیلم",
		'add_new'               => "افزودن فیلم",
		'add_new_item'          => "افزودن فیلم جدید",
		'new_item'              => "فیلم جدید",
		'edit_item'             => "ویرایش فیلم",
		'view_item'             => "مشاهده فیلم",
		'all_items'             => "همه فیلم ها",
		'search_items'          => "جستجوی فیلم ها",
		'parent_item_colon'     => "پدر فیلم",
		'not_found'             => "هیچ فیلمی یافت نشد",
		'not_found_in_trash'    => "هیچ فیلمی در زباله دان یافت نشد",
		'featured_image'        => "کاور فیلم",
		'set_featured_image'    => "ثبت کاور فیلم",
		'remove_featured_image' => "حذف کاور فیلم",
		'use_featured_image'    =>"استفاده از کاور فیلم",
		'archives'              => "بایگانی فیلم ها",
		'insert_into_item'      => "افزودن به فیلم",
		'uploaded_to_this_item' =>"بارگذاری در فیلم",
		'items_list'            => "لیست فیلم ها"
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'film' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon'             => 'dashicons-video-alt3',
	);
	register_post_type("film", $args);
}




add_action("init", "ls_film_post_type");
