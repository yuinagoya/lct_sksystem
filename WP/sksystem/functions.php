<?php
/* 画像のパスを変更 */
function imagepassshort($arg) {
$content = str_replace('images/', get_bloginfo('template_directory').'/images/', $arg);
    return $content;
}
add_action('the_content', 'imagepassshort');

/* 固定ページ一覧にスラッグを追加 */
function add_page_column_title( $columns ) {
  $columns[ 'slug' ] = "スラッグ";
  return $columns;
}
function add_page_column( $column_name, $post_id ) {
  if( $column_name == 'slug' ) {
    $post = get_post( $post_id );
    $slug = $post->post_name;
    echo esc_attr( $slug );
  }
}
add_filter( 'manage_pages_columns', 'add_page_column_title' );
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2 );

//ショートコードを使ったphpファイルの呼び出し
function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default', 'category' => 'info', 'count' => 5), $params));
    ob_start();
    $param_category = $category;
    $param_count = $count;
    include(get_theme_root().'/'.get_template() . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');

/* カスタムメニューの表示 */
register_nav_menus(
    array(
        'global' => 'グローバル',
        'footer' => 'フッター',
    )
);

//add_filter( 'show_admin_bar', '__return_false' );

/*アイキャッチ画像の有効化 */
add_theme_support( 'post-thumbnails' );

// 記事内の最初の画像を取得する
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    //$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $output = preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post->post_content, $matches);
    $first_img = $matches [1][0];
    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = get_bloginfo('template_directory')."/images/case/dummy.jpg";
    }
    return $first_img;
}
