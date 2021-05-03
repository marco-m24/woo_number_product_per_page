// Copia questo codice nel tuo file functions.php del tuo tema WordPress
// Change the Number of WooCommerce Products Displayed Per Page
add_filter( 'loop_shop_per_page', 'mrc_loop_shop_per_page', 30 );

function mrc_loop_shop_per_page( $products ) {
 $products = 12; // CAMBIA QUESTO VALORE
 return $products;
}
