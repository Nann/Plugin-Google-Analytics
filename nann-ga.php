<?php
/*
Plugin Name: Nann Google Analytics 
Plugin URI: https://www.nannstudio.com/
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Chalermchai "Nann" Prompunya
Version: 1.0
 */

function nann_ga () { ?>
    <!-- Past Google Analytics Code -->
<?php }
add_action( 'wp_head', 'nann_ga', 10 );