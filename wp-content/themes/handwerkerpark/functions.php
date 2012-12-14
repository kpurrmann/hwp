<?php

function enqueue_scripts()
{
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/scripts/modernizr.custom.2.6.2.min.js', array(), '20120208', false);
    wp_enqueue_script('colorbox', get_template_directory_uri() . '/scripts/jquery.colorbox-min.js', array('jquery'), '1', true);
    wp_enqueue_script('functions', get_template_directory_uri() . '/scripts/functions.js', array('jquery'), '1', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/sources/normalize.css', false, '1.1', 'screen');
    wp_enqueue_style('colorbox', get_template_directory_uri() . '/sources/colorbox.css', false, '1.1', 'screen');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/sources/fonts.css', false, '1.1', 'screen');
    wp_enqueue_style('layout', get_template_directory_uri() . '/sources/layout.css', false, '1.1', 'screen');
    wp_enqueue_style('navigation', get_template_directory_uri() . '/sources/navigation.css', false, '1.1', 'screen');
    wp_enqueue_style('content', get_template_directory_uri() . '/sources/content.css', false, '1.1', 'screen');
    wp_enqueue_style('forms', get_template_directory_uri() . '/sources/forms.css', false, '1.1', 'screen');
    wp_enqueue_style('print', get_template_directory_uri() . '/sources/print.css', false, '1.1', 'print');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

add_theme_support('post-thumbnails');
add_theme_support('menus');


register_sidebar(array(
   'class' => '',
   'before_widget' => '',
   'after_widget' => "",
   'before_title' => '<h2 class="hidden">',
   'after_title' => "</h2>",
));

register_sidebar(array(
   'name' => 'Mieterübersicht',
   'id' => 'mieter',
   'class' => '',
   'before_widget' => '',
   'after_widget' => "",
   'before_title' => '<h2 class="hidden">',
   'after_title' => "</h2>",
));

add_filter('the_content', 'addlightboxrel_replace', 12);
add_filter('get_comment_text', 'addlightboxrel_replace');
function addlightboxrel_replace ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="gallery'.$post->ID.'"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}