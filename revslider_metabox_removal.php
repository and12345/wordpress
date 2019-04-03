/**
 * Remove the Revslider Metabox from being on every CPT edit screen
 *
 * @param $post_type
 */
function remove_revslider_metabox($post_type)
{
    add_action('do_meta_boxes', function () use ($post_type) {
        remove_meta_box('mymetabox_revslider_0', $post_type, 'normal');
        remove_meta_box('airi_options', $post_type, 'normal');
    });
}
add_action('registered_post_type', 'remove_revslider_metabox');
