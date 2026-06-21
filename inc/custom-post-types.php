<?php
/**
 * TOREX SAFARI Custom Post Types
 * @package TOREX_SAFARI
 */

/* ===== Destination CPT ===== */
function torex_register_destination_cpt() {
    $labels = array(
        'name'               => __( 'Destinations', 'torex-safari' ),
        'singular_name'      => __( 'Destination', 'torex-safari' ),
        'menu_name'          => __( 'Destinations', 'torex-safari' ),
        'add_new'            => __( 'Add Destination', 'torex-safari' ),
        'add_new_item'       => __( 'Add New Destination', 'torex-safari' ),
        'edit_item'          => __( 'Edit Destination', 'torex-safari' ),
        'view_item'          => __( 'View Destination', 'torex-safari' ),
        'all_items'          => __( 'All Destinations', 'torex-safari' ),
        'search_items'       => __( 'Search Destinations', 'torex-safari' ),
        'not_found'          => __( 'No destinations found.', 'torex-safari' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-location-alt',
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'destinations' ),
        'show_in_rest'       => true,
    );
    
    register_post_type( 'destination', $args );
}
add_action( 'init', 'torex_register_destination_cpt' );

/* ===== Safari / Tour Package CPT ===== */
function torex_register_safari_cpt() {
    $labels = array(
        'name'               => __( 'Safari Packages', 'torex-safari' ),
        'singular_name'      => __( 'Safari Package', 'torex-safari' ),
        'menu_name'          => __( 'Safari Packages', 'torex-safari' ),
        'add_new'            => __( 'Add Safari', 'torex-safari' ),
        'add_new_item'       => __( 'Add New Safari Package', 'torex-safari' ),
        'edit_item'          => __( 'Edit Safari', 'torex-safari' ),
        'view_item'          => __( 'View Safari', 'torex-safari' ),
        'all_items'          => __( 'All Safaris', 'torex-safari' ),
        'search_items'       => __( 'Search Safaris', 'torex-safari' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-palmtree',
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'safaris' ),
        'show_in_rest'       => true,
    );
    
    register_post_type( 'safari', $args );
}
add_action( 'init', 'torex_register_safari_cpt' );

/* ===== Testimonial CPT ===== */
function torex_register_testimonial_cpt() {
    $labels = array(
        'name'               => __( 'Testimonials', 'torex-safari' ),
        'singular_name'      => __( 'Testimonial', 'torex-safari' ),
        'menu_name'          => __( 'Testimonials', 'torex-safari' ),
        'add_new'            => __( 'Add Testimonial', 'torex-safari' ),
        'add_new_item'       => __( 'Add New Testimonial', 'torex-safari' ),
        'edit_item'          => __( 'Edit Testimonial', 'torex-safari' ),
        'all_items'          => __( 'All Testimonials', 'torex-safari' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true,
    );
    
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'torex_register_testimonial_cpt' );

/* ===== Custom Meta Boxes ===== */
function torex_destination_meta_boxes() {
    // Destination meta box
    add_meta_box( 'torex_destination_details', __( 'Destination Details', 'torex-safari' ), 'torex_destination_meta_callback', 'destination', 'normal', 'high' );
    
    // Safari meta box
    add_meta_box( 'torex_safari_details', __( 'Safari Package Details', 'torex-safari' ), 'torex_safari_meta_callback', 'safari', 'normal', 'high' );
    
    // Testimonial meta box
    add_meta_box( 'torex_testimonial_details', __( 'Testimonial Details', 'torex-safari' ), 'torex_testimonial_meta_callback', 'testimonial', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'torex_destination_meta_boxes' );

function torex_destination_meta_callback( $post ) {
    wp_nonce_field( 'torex_destination_nonce', 'torex_destination_nonce_field' );
    
    $location    = get_post_meta( $post->ID, '_torex_location', true );
    $badge       = get_post_meta( $post->ID, '_torex_badge', true );
    $price       = get_post_meta( $post->ID, '_torex_price', true );
    $price_label = get_post_meta( $post->ID, '_torex_price_label', true );
    $activities  = get_post_meta( $post->ID, '_torex_activities', true );
    $best_time   = get_post_meta( $post->ID, '_torex_best_time', true );
    $featured    = get_post_meta( $post->ID, '_torex_featured', true );
    
    echo '<p><label><strong>' . __( 'Location / Region', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_location" value="' . esc_attr( $location ) . '" style="width:100%;max-width:500px;" placeholder="e.g. Southwestern Uganda"></label></p>';
    
    echo '<p><label><strong>' . __( 'Badge Text', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_badge" value="' . esc_attr( $badge ) . '" style="width:100%;max-width:500px;" placeholder="e.g. UNESCO Heritage, Gorilla Trekking"></label></p>';
    
    echo '<p><label><strong>' . __( 'Price From (USD)', 'torex-safari' ) . '</strong><br>';
    echo '<input type="number" name="torex_price" value="' . esc_attr( $price ) . '" style="width:200px;" placeholder="e.g. 350"></label></p>';
    
    echo '<p><label><strong>' . __( 'Price Label', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_price_label" value="' . esc_attr( $price_label ) . '" style="width:300px;" placeholder="e.g. per person"></label></p>';
    
    echo '<p><label><strong>' . __( 'Activities (comma separated)', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_activities" value="' . esc_attr( $activities ) . '" style="width:100%;max-width:500px;" placeholder="e.g. Gorilla Trekking, Bird Watching, Nature Walks"></label></p>';
    
    echo '<p><label><strong>' . __( 'Best Time to Visit', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_best_time" value="' . esc_attr( $best_time ) . '" style="width:300px;" placeholder="e.g. June - September, Dec - Feb"></label></p>';
    
    echo '<p><label><input type="checkbox" name="torex_featured" value="1" ' . checked( $featured, '1', false ) . '> <strong>' . __( 'Featured Destination (shows larger on front page)', 'torex-safari' ) . '</strong></label></p>';
}

function torex_safari_meta_callback( $post ) {
    wp_nonce_field( 'torex_safari_nonce', 'torex_safari_nonce_field' );
    
    $duration     = get_post_meta( $post->ID, '_torex_duration', true );
    $price        = get_post_meta( $post->ID, '_torex_safari_price', true );
    $destinations = get_post_meta( $post->ID, '_torex_route', true );
    $includes     = get_post_meta( $post->ID, '_torex_includes', true );
    
    echo '<p><label><strong>' . __( 'Duration', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_duration" value="' . esc_attr( $duration ) . '" style="width:300px;" placeholder="e.g. 3 Days / 2 Nights"></label></p>';
    
    echo '<p><label><strong>' . __( 'Price (USD)', 'torex-safari' ) . '</strong><br>';
    echo '<input type="number" name="torex_safari_price" value="' . esc_attr( $price ) . '" style="width:200px;" placeholder="e.g. 1200"></label></p>';
    
    echo '<p><label><strong>' . __( 'Route / Stops (comma separated)', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_route" value="' . esc_attr( $destinations ) . '" style="width:100%;max-width:600px;" placeholder="e.g. Kampala, Murchison Falls, Ziwa Rhino"></label></p>';
    
    echo '<p><label><strong>' . __( 'What\'s Included (comma separated)', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_includes" value="' . esc_attr( $includes ) . '" style="width:100%;max-width:600px;" placeholder="e.g. Transport, Accommodation, Meals, Park Fees"></label></p>';
}

function torex_testimonial_meta_callback( $post ) {
    wp_nonce_field( 'torex_testimonial_nonce', 'torex_testimonial_nonce_field' );
    
    $country = get_post_meta( $post->ID, '_torex_country', true );
    $rating  = get_post_meta( $post->ID, '_torex_rating', true );
    $trip    = get_post_meta( $post->ID, '_torex_trip', true );
    
    echo '<p><label><strong>' . __( 'Country', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_country" value="' . esc_attr( $country ) . '" style="width:300px;" placeholder="e.g. United Kingdom"></label></p>';
    
    echo '<p><label><strong>' . __( 'Rating (1-5)', 'torex-safari' ) . '</strong><br>';
    echo '<input type="number" name="torex_rating" value="' . esc_attr( $rating ) . '" min="1" max="5" style="width:100px;"></label></p>';
    
    echo '<p><label><strong>' . __( 'Trip / Safari Taken', 'torex-safari' ) . '</strong><br>';
    echo '<input type="text" name="torex_trip" value="' . esc_attr( $trip ) . '" style="width:100%;max-width:500px;" placeholder="e.g. 3-Day Gorilla Trekking Safari"></label></p>';
}

/* ===== Save Meta Boxes ===== */
function torex_save_destination_meta( $post_id ) {
    if ( isset( $_POST['torex_destination_nonce_field'] ) && wp_verify_nonce( $_POST['torex_destination_nonce_field'], 'torex_destination_nonce' ) ) {
        $fields = array( 'torex_location', 'torex_badge', 'torex_price', 'torex_price_label', 'torex_activities', 'torex_best_time' );
        foreach ( $fields as $field ) {
            if ( isset( $_POST[ $field ] ) ) {
                update_post_meta( $post_id, '_torex_' . str_replace( 'torex_', '', $field ), sanitize_text_field( $_POST[ $field ] ) );
            }
        }
        update_post_meta( $post_id, '_torex_featured', isset( $_POST['torex_featured'] ) ? '1' : '0' );
    }
    
    if ( isset( $_POST['torex_safari_nonce_field'] ) && wp_verify_nonce( $_POST['torex_safari_nonce_field'], 'torex_safari_nonce' ) ) {
        update_post_meta( $post_id, '_torex_duration', sanitize_text_field( $_POST['torex_duration'] ?? '' ) );
        update_post_meta( $post_id, '_torex_safari_price', sanitize_text_field( $_POST['torex_safari_price'] ?? '' ) );
        update_post_meta( $post_id, '_torex_route', sanitize_text_field( $_POST['torex_route'] ?? '' ) );
        update_post_meta( $post_id, '_torex_includes', sanitize_text_field( $_POST['torex_includes'] ?? '' ) );
    }
    
    if ( isset( $_POST['torex_testimonial_nonce_field'] ) && wp_verify_nonce( $_POST['torex_testimonial_nonce_field'], 'torex_testimonial_nonce' ) ) {
        update_post_meta( $post_id, '_torex_country', sanitize_text_field( $_POST['torex_country'] ?? '' ) );
        update_post_meta( $post_id, '_torex_rating', intval( $_POST['torex_rating'] ?? 5 ) );
        update_post_meta( $post_id, '_torex_trip', sanitize_text_field( $_POST['torex_trip'] ?? '' ) );
    }
}
add_action( 'save_post', 'torex_save_destination_meta' );

/* ===== Destination Taxonomy ===== */
function torex_register_destination_taxonomy() {
    $labels = array(
        'name'          => __( 'Destination Types', 'torex-safari' ),
        'singular_name' => __( 'Destination Type', 'torex-safari' ),
    );
    
    register_taxonomy( 'destination_type', 'destination', array(
        'labels'       => $labels,
        'hierarchical' => true,
        'public'       => true,
        'rewrite'      => array( 'slug' => 'destination-type' ),
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'torex_register_destination_taxonomy' );
