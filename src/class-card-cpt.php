<?php
/**
 * @author Ondřej Doněk <ondrejd@gmail.com>
 * @link https://github.com/ondrejd/odwp-cards_generator for the canonical source repository
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License 3.0
 * @package odwp-cards_generator
 * @since 0.1.0
 */

namespace odwpcg;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * @since 0.1.0
 */
class CardCpt {
    /**
     * Initialize CPT.
     * @return void
     * @since 0.1.0
     */
    public static function init() {
        $labels = [
            'name'                  => _x( 'Cards', 'Post type general name', 'odwpcg' ),
            'singular_name'         => _x( 'Card', 'Post type singular name', 'odwpcg' ),
            'menu_name'             => _x( 'Cards', 'Admin Menu text', 'odwpcg' ),
            'name_admin_bar'        => _x( 'Card', 'Add New on Toolbar', 'odwpcg' ),
            'add_new'               => __( 'Add New', 'odwpcg' ),
            'add_new_item'          => __( 'Add New Card', 'odwpcg' ),
            'new_item'              => __( 'New Card', 'odwpcg' ),
            'edit_item'             => __( 'Edit Card', 'odwpcg' ),
            'view_item'             => __( 'View Card', 'odwpcg' ),
            'all_items'             => __( 'All Cards', 'odwpcg' ),
            'search_items'          => __( 'Search Cards', 'odwpcg' ),
            'parent_item_colon'     => __( 'Parent Cards:', 'odwpcg' ),
            'not_found'             => __( 'No cards found.', 'odwpcg' ),
            'not_found_in_trash'    => __( 'No cards found in Trash.', 'odwpcg' ),
            'featured_image'        => _x( 'Card Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'odwpcg' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'odwpcg' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'odwpcg' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'odwpcg' ),
            'archives'              => _x( 'Card archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'odwpcg' ),
            'insert_into_item'      => _x( 'Insert into card', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'odwpcg' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this card', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'odwpcg' ),
            'filter_items_list'     => _x( 'Filter cards list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'odwpcg' ),
            'items_list_navigation' => _x( 'Cards list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'odwpcg' ),
            'items_list'            => _x( 'Cards list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'odwpcg' ),
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => _( 'card', 'odwpcg' )],
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title','editor','author','comments'],//'thumbnail'
        ];

        register_post_type( 'card', $args );
    }
}
