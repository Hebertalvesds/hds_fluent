<?php get_header();?>
<?php 
    get_post();
    echo $post->post_content;
?>
<?php get_footer();?>