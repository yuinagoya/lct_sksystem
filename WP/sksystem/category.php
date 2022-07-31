<?php
$post = $wp_query->post;
if (in_category("construction")) {
    include(TEMPLATEPATH . "/category-construction.php");
} elseif (in_category("magazine")) {
    include(TEMPLATEPATH . "/category-magazine.php");
} else {
    include(TEMPLATEPATH . '/category-magazine.php');
}
?>
