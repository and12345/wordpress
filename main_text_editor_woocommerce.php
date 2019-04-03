/**
 *Remove main text editor field from WooCommerce product edit page
 */
function remove_product_editor() {
  remove_post_type_support( 'product', 'editor' );
}
add_action( 'init', 'remove_product_editor' );
