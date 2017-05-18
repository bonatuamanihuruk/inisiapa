<?php
    require_once('load.php');
    $theme='emerald_dragon';
    $theme_path = get_theme_path($theme);
    
    //Load our theme's functions file if it exists
//	if ( file_exists ( $theme_path . 'functions.php' ) ) {
//		include( $theme_path . 'functions.php' );
//	}
    $url = new simpleUrl('/inisiapa');
    if(!$url->segment(1))
        $page = 'home';
    else
        $page = $url->segment(1);
    
    include($theme_path.'header.php');
    include($theme_path.'nav.php');
    
//    include($theme_path.'index.php');
    
    switch($page){
        case 'home':
            include($theme_path.'banner.php');
            include($theme_path."templates/home.php");
            include($theme_path.'subscribe.php');
            break;
        case 'produk':
            if(!$url->segment(2))
                include($theme_path."templates/produk.php");
            else
                include($theme_path."templates/detail-produk.php");
            break; 
        case 'produk-list':
            include($theme_path."templates/produk2.php");
            break;  
        default:
            echo "Not found page";
            break;
        
    }
    include($theme_path.'footer.php');
?>