<?php
$theme = wp_get_theme(); // gets the current theme
$theme_name = strtolower($theme->name);

$file = CLEVERFOX_PLUGIN_URL .'inc/'.$theme_name.'/images/logo.png';
$ImagePath = CLEVERFOX_PLUGIN_URL .'inc/'.$theme_name.'/images';

$images = array(
    $ImagePath. '/logo.png',
);
$parent_post_id = null;
foreach($images as $name) {
    $filename = basename($name);
    $remote_content = wp_remote_get($name);

    if (!is_wp_error($remote_content) && $remote_content['response']['code'] === 200) {
        $upload_file = wp_upload_bits($filename, null, $remote_content['body']);
        if (!$upload_file['error']) {
            $wp_filetype = wp_check_filetype($filename, null );
            $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_parent' => $parent_post_id,
                'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                'post_excerpt' => 'giant caption',
                'post_status' => 'inherit'
            );
            $ImageId[] = $attachment_id = wp_insert_attachment($attachment, $upload_file['file'], $parent_post_id );

            if (!is_wp_error($attachment_id)) {
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
                wp_update_attachment_metadata($attachment_id,  $attachment_data);
            }
        }
    }
}

update_option('giant_media_id', $ImageId);
?>