<?php 
add_theme_support('title-tag');
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );


/* --------------------------------
 * js呼び出し
 * -------------------------------- */
function navdrawer_scripts(){
  wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/zdo_drawer_menu.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'navdrawer_scripts' );

function lightbox_scripts(){
  wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/lightbox.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'lightbox_scripts' );

/* --------------------------------
 * サイドバーをウィジェット追加
 * -------------------------------- */
function widgetarea_init() {
register_sidebar(array(
    'name'=>'サイドバー',
    'id' => 'side-widget',
    'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );


/* --------------------------------
 * ギャラリー用ショートコード 
 * -------------------------------- */
function gallery_box($atts, $content=null){
    $content = do_shortcode( shortcode_unautop( $content ) ); 
    return '<div id="gallery" class="row text-center scrollto clearfix">' . $content . '</div>';
}

add_shortcode('gbox','gallery_box');

function shortcode_gallery($attr){
        extract(shortcode_atts(array(
                'url' => 'please input url'
        ), $attr));
        return '<a rel="lightbox[sample-group]" href=" '. $url . ' " data-featherlight="image" class="col-3 wow fadeIn"><img src=" '. $url . ' " alt="Landing Page"/></a>';
}

add_shortcode('photos','shortcode_gallery');

/* --------------------------------
 * 自己紹介セクション
 * -------------------------------- */
function introduction_section($atts, $content=null){
    return '<div class="intro-wrapper"><div class="intro-inner">'. $content . '</div></div>';
}

add_shortcode('intro','introduction_section');

/* --------------------------------
 * ブログスライダーセクション
 * -------------------------------- */
function blog_section($atts,$content=null){
    $content = do_shortcode( shortcode_unautop( $content ) ); 
    return '<div id="slider" class="swiper-container"><div class="swiper-wrapper">'. $content . '</div><div class="swiper-button-prev swiper-button-white"></div><div class="swiper-button-next swiper-button-white"></div></div>';
}
 
add_shortcode('bbox','blog_section');


function blog_slide($attr){
    extract(shortcode_atts(array(
                'id' => 'please input id'
        ), $attr));
    $url = get_permalink($id);
    $title = get_the_title($id);
    $thumbnail = get_the_post_thumbnail_url($id);
    $output .= <<<EOF
            <div class="swiper-slide">
                <a href="{$url}"><img src="{$thumbnail}" ></a>
                      <p class="title-text">{$title}</p>
            </div>
EOF;


    return $output;
}

add_shortcode('bslide','blog_slide');

/* --------------------------------
 * アバウトセクション用ショートコード   
 * -------------------------------- */

function about_section($attr){
    extract(shortcode_atts(array(
                'url' => 'please input url',
                'txt' => 'please input txt'
        ), $attr));
    return '<div class="card"><div class="card-block"><h2>Who I am</h2><div class="boxrow clearfix"><div class="aboutimg"><img src="'. $url . '" class="img-responsive"></div><div class="about-text"><p>'. $txt . '</p></div></div></div></div>';
}

add_shortcode('about','about_section');


/* --------------------------------
 * ショートコード改行整形  
 * -------------------------------- */

function shortcode_p_fix($content) {
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'shortcode_p_fix');


/* --------------------------------
 * ソーシャルアイコン表示 
 * -------------------------------- */

function my_user_meta($prof_items) {
 $prof_items['twitter_url']   = 'URL：twitter';
 $prof_items['facebook_url']  = 'URL：facebook';
 $prof_items['instagram_url'] = 'URL：Instagram';
 return $prof_items;
}
add_filter('user_contactmethods','my_user_meta');













