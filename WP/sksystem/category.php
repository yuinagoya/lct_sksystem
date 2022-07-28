<?php
$post = $wp_query->post;
if (in_category("info")) {
    include(TEMPLATEPATH . "/category-info.php");
} elseif (in_category("blog")) {
    include(TEMPLATEPATH . "/category-magazine.php");
} else {
    include(TEMPLATEPATH . '/category-info.php');
}
?>