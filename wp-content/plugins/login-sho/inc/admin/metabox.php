<?php


function ls_register_video_url_metabox() {
	add_meta_box(
		"ls_video_url_metabox",
		"آدرس ویدئو",
		"ls_video_url_metabox_handler",
		"post",
		"normal"
	);
}

function ls_video_url_metabox_handler( $post ) {
    wp_nonce_field("ls_video_url_nonce", "ls_video_url_nonce_field");
	?>
    <div>
        <input id="video_url" type="text" name="video_url"
               placeholder="لینک ویدئو را وارد کنید..." style="width: 100%;"
               value="<?php echo get_post_meta( $post->ID, '_ls_video_url', true ); ?>">
    </div>
	<?php
}

function ls_save_url_video_handler( $post_id ) {

   if (! wp_verify_nonce($_POST['ls_video_url_nonce_field'],"ls_video_url_nonce")){
       return $post_id;
   }

	if ( ! empty( $_POST['video_url'] ) ) {
		update_post_meta( $post_id, "_ls_video_url", sanitize_text_field( $_POST['video_url'] ) );
	}
	if ( ! empty( $_POST['url_link'] ) ) {
		update_post_meta( $post_id, "_ls_url_link", sanitize_text_field( $_POST['url_link'] ) );
	}
	if ( ! empty( $_POST['title_link'] ) ) {
		update_post_meta( $post_id, "_ls_title_link", sanitize_text_field( $_POST['title_link'] ) );
	}
}

function ls_register_download_metabox() {
	add_meta_box(
		"ls_download_metabox",
		"باکس دانلود",
		"ls_render_download_matabox",
		"post",
		"normal"
	);
}

function ls_render_download_matabox($post) {
	?>
    <label for="title_link">عنوان لینک</label>
    <input type="text" id="title_link" name="title_link" value="<?php echo get_post_meta($post->ID,'_ls_title_link',true);?>">
    <label for="url_link">آدرس لینک</label>
    <input type="text" id="url_link" name="url_link" value="<?php echo get_post_meta($post->ID,'_ls_url_link',true);?>">

	<?php
}

add_action( "add_meta_boxes", "ls_register_video_url_metabox" );
add_action( "add_meta_boxes", "ls_register_download_metabox" );
add_action( "save_post", "ls_save_url_video_handler" );
