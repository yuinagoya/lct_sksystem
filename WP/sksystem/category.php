<?php
$post = $wp_query->post;
if (in_category("construction")) {
    include(TEMPLATEPATH . "/category-construction.php");
} elseif (in_category("magazine")) {
    include(TEMPLATEPATH . "/category-magazine.php");
} elseif (is_category("event")) {
    include(TEMPLATEPATH . "/category-info.php");
} elseif (is_category("blog")) {
    include(TEMPLATEPATH . "/category-info.php");
} elseif (is_category("cate_news")) {
    include(TEMPLATEPATH . "/category-info.php");
} else {
    include(TEMPLATEPATH . '/category-magazine.php');
}
?>
