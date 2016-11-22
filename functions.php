<?php

function updated_purduetwentyfourteen_scripts() {
wp_enqueue_style( 'bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
wp_enqueue_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), true);
}
remove_action( 'wp_enqueue_scripts', 'purduetwentyfourteen_scripts' );
add_action( 'wp_enqueue_scripts', 'updated_purduetwentyfourteen_scripts' );

function purdue2015_parent_theme_enqueue_styles() {
  wp_deregister_style( 'style-css' );
  wp_enqueue_style('purdue2015-style', get_stylesheet_directory_uri() . '/style-pu2015.css');
  wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat');
  wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
  wp_enqueue_style('archivo-narrow-font', 'https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' );
  wp_enqueue_style('archivo-black-font', 'https://fonts.googleapis.com/css?family=Archivo+Black' );
  wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'titilium_font', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,700' );
  wp_enqueue_script( 'addthis', 'https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56d09899de4347ce');
  wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'purdue2015_parent_theme_enqueue_styles' );
