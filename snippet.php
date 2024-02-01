<?php

// Replace "Selection Option" with "Buy Now" for variable products on Shop & Category pages
function custom_variable_product_add_to_cart_text( $text, $product ) {
    if ( $product->is_type('variable') && ( is_shop() || is_product_category() ) ) {
        $text = esc_html__('Buy Now', 'your-textdomain'); // Change 'your-textdomain' to your actual theme or plugin text domain
    }

    return $text;
}
add_filter( 'woocommerce_product_add_to_cart_text', 'custom_variable_product_add_to_cart_text', 10, 2 );


?>
