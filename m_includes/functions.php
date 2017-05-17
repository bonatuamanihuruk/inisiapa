<?php
function get_theme_path($theme){
    return ABSPATH . 'm_content/themes/' . $theme . '/';
}
function get_theme_url($theme) {
    return JURL . 'm_content/themes/' . $theme . '/';
}
function have_products() {
    global $jQuery;

    return $jQuery->have_products();
}
function pecah($kar,$data){
    $arr = explode($kar,$data);
    return $arr;
}
function product_loop($p,$cara) {
    global $jQuery;
    $url = new simpleUrl('/marketplace');
    //Get our query parameters
    if(isset($p))
        $p = $p;
    if(isset($cara))
        $cara = $cara;
    //If $p is empty, we're either on the home page or a category page... in either case, we want all posts
    if ( empty ( $p ) && empty ( $cara ) ) {
        $table = 'items';
        $sql = "SELECT * FROM $table ORDER BY ID LIMIT 10";
        $products = $jQuery->query($sql);

        return $products;
    } elseif ( !empty ( $p ) ) {
        $table = 'items';
        $sql = "SELECT * FROM $table INNER JOIN sellers INNER JOIN category INNER JOIN country INNER JOIN companys WHERE (items.seller_id=sellers.id OR items.category_id=category.id OR sellers.company_id=companys.id OR sellers.country_id=country.id) AND items.id= '" . $p . "' LIMIT 1";
        $products = $jQuery->query($sql);

        return $products;
    } elseif ( !empty ( $cara ) ) {
        //Get the slug for the passed category


        //Now, pull the products that that belong to the category
        $table = 'items';
        $sql = "SELECT *,items.id as itemid FROM $table INNER JOIN sellers INNER JOIN category where $table.seller_id=sellers.id AND $table.category_id=category.id ORDER BY items.date_added $cara LIMIT 8";
        
        $products = $jQuery->query($sql);
        return $products;
    } else {
        return array();
    }
}
?>