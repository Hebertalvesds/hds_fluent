<?php
$hasImgHeader = has_image_header($post);
if ($hasImgHeader) {
    header_post_image_css();   
}
get_header(); ?>
<?php get_post(); ?>
<?php
    the_content();
?>
<?php get_footer(); ?>