<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('style', get_theme_file_uri().'/css/style.css');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
**************************************************/
function st_enqueue_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', false);
  wp_enqueue_script('main', get_theme_file_uri('js/script.js'), array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

/**************************************************
画像パスの読み込み
**************************************************/
function imagepassshort($arg) {
  $content = str_replace('"img/', '"' . get_theme_file_uri() . '/img/', $arg);
  return $content;
  }
  add_action('the_content', 'imagepassshort');

?>