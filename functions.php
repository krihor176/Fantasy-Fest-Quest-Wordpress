<?php 

function fantasy_festival_load_resources() {
    wp_enqueue_style('Karla', "https://fonts.googleapis.com/css2?family=Anta&family=Karla:ital,wght@0,200..800;1,200..800&display=swap");
    wp_enqueue_style('IM Fell English SC', "https://fonts.googleapis.com/css2?family=Anta&family=IM+Fell+English+SC&family=Karla:wght@200..800&display=swap");

    wp_enqueue_style('fantasy-festival-style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}


add_action('wp_enqueue_scripts', 'fantasy_festival_load_resources', "fantasy_festival-style");

function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "acf_remove_gutenberg");

