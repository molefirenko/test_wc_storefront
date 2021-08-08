<?php
//Custom field name
$field_name = 'genre';
$genres = array(
    '' => 'Select genre',
    'ftp' => 'Free to play',
    'action' => 'Action',
    'adventure' => 'Adventure',
    'casual' => 'Casual',
    'indie' => 'Indie'    
);


//Add genres select to product
function cfwc_create_general_genre_select_field() {
    global $field_name, $genres;

    $args = array(
        'id' => $field_name,
        'label' => 'Genre',
        'description' => 'Game genre',
        'desc_tip' => true,
        'options' => $genres
    );

    woocommerce_wp_select( $args );
}

add_action( 'woocommerce_product_options_general_product_data', 'cfwc_create_general_genre_select_field' );

function cfwc_save_genre_field( $post_id ) {
    global $field_name;
    
    $product = wc_get_product( $post_id );
    $option = isset( $_POST[$field_name] ) ? $_POST[$field_name] : '';
    $product->update_meta_data( $field_name, sanitize_text_field( $option ) );
    $product->save();
}

add_action( 'woocommerce_process_product_meta', 'cfwc_save_genre_field' );

//Add genre to product view
function item_with_genre() {
    global $post, $genres;

    $product = wc_get_product( $post->ID );

    $genre = $product->get_meta( 'genre' );

    if ( $genre ) {
        echo sprintf( '<span class="posted_in">Genre: %s</span></br>', $genres[$genre] );
    }

    if ( ! $product->managing_stock() && ! $product->is_in_stock() ) {
        echo '<button id="callmeButton" class="button">' . __('Call me', 'storefrontchild') . '</button>';
    }

}

add_action( 'woocommerce_after_shop_loop_item_title', 'item_with_genre', 20 );

//Can be changed to diferent output if needed
add_action( 'woocommerce_product_meta_end', 'item_with_genre', 30 );

//Modal window Call me
function modal_feedback_form() {

    get_template_part( 'template', 'call_me' );

}

add_action( 'storefront_after_footer', 'modal_feedback_form', 30 );


//Add jBox scripts
function jBox_scripts() {

    wp_enqueue_style( 'jBox-style', get_stylesheet_directory_uri() . '/assets/jBox/jBox.all.min.css', '' );

    wp_enqueue_script( 'jBox-script', get_stylesheet_directory_uri() . '/assets/jBox/jBox.all.min.js' );
}

add_action( 'wp_enqueue_scripts', 'jBox_scripts' );
