<?php if ( have_products() ) : $products = product_loop(); foreach( $products as $product ) : ?>
    <h2><?= $product->name; ?></h2>
<?php endforeach; endif; ?>
