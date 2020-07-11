<?php
$hasImgHeader = has_image_header($post);
if ($hasImgHeader) {
    header_post_image_css();   
}
get_header(); ?>
<?php get_post(); ?>
<div class="container-fluid p-0 m-0 d-flex flex-justify-center flex-align-center flex-column">
    <div class="cell-sm-10 cell-xl-8 p-5 p-20-lg bg-white wp_single_post mt-20 ms-depth-4">
        <?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="breadcrumbs m-2 p-3 border-radius-2">','</p>' );
        }
        ?>
        <span class="fg-gray">
            <?php echo get_the_date() //date_format(new DateTime($post->post_date), "d M Y")?>
        </span>
        <h1><?php echo get_the_title() ?></h1>
        <span class="fg-gray">
            <?php echo get_the_author()?>
        </span>
        <?php echo $post->post_content; ?>
    </div>
    <div class="cell-sm-10 cell-xl-8 p-5 p-20-lg mt-2">
		<?php comments_template();?>
	</div>
</div>
<?php get_footer(); ?>