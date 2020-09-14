<?php get_header();?>
<?php
    add_theme_support( 'wp-block-styles' );
    get_post();
    echo $post->post_content;
?>
<?php get_footer();?>