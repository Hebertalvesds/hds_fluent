<?php get_header();?>
<?php 
$page_class = get_the_category()[0]->slug;
$stick = get_option('stick_posts');
$query = new WP_Query( 'p=' . $stick[0] );
?>
<div class="cel-fs-12 <?php echo $page_class?> categories" id="categories">
    <div class="row p-2">
        <!-- <div class="cell-fs-12 cell-lg-3 d-none-sm d-block-lg">
            <div class="card ms-depth-4 bg-white image-header m-0">
                <div class="card-header fg-white"
                     style="background-image: url(http://localhost/wordpress/wp-content/uploads/2020/06/IMG_20170806_142613619-2.jpg)">
                     Hebert Alves
                </div>
                <div class="card-content p-2">
                    <p>
                        O teu maior presente é a vida. O que acontecerá com ela é você quem vai decidir. Por tanto a força
                        para tornar real os sonhos está unicamente em nossas mãos.
                    </p>
                </div>
                <div class="card-footer d-flex flex-justify-center">
                <?php get_sidebar('social') ?>
                </div>  
            </div>
            <?php get_sidebar('left') ?>
            
        </div> -->
        <?php while (have_posts()): 
            the_post()?>
            <?php $has_image = has_images_by_post_id($post) ? 'has-image' : ''; ?>
            <?php $link_image = ($has_image) ? 
                                    get_background_image_header($post->post_content) != "" 
                                    ? get_background_image_header($post->post_content) : get_post_image($post->post_content) 
                                    :'';?>
            <div class="cell-fs-12 cell-sm-6 cell-lg-4 d-flex">
                <div class="pos-relative bd-transparent border-size-4 cell-fs-12 flex-align-self-start card m-0 <?php echo $has_image?>" style="<?php echo $link_image?>">
                <?php if($has_image !== ""): ?>
                <?php endif?>
                    <div class="tags <?php if ($has_image) : ?> <?php endif;?>p-2">
                        <?php echo get_the_tag_list() ?>
                    </div>
                    <a href="<?php the_permalink() ?>" style="display: block; text-decoration: none;">
                    <div class="content <?php if ($has_image) : ?> <?php endif;?> pl-4 pr-4">
                        <h4 class="title mt-4"><?php echo the_title()?></h4>
                        <small><b class="fa fa-calendar"></b>&nbsp;<?php the_date()?></small>
                        <br>
                        <small><b class="fa fa-user"></b>&nbsp;<?php the_author()?></small>
                    </div>
                    </a>
                </div>
            </div>
        <?php endwhile ?>
        <div class="p-1 container-fluid">
            <div class="cell-fs-12 d-flex flex-justify-center p-4 bg-dark border-radius-4">
                <?php the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('<i class="ms-Icon ms-Icon--ChevronLeft"></i>', 'Anterior'),
                    'next_text' => __('<i class="ms-Icon ms-Icon--ChevronRight"></i>', 'Anterior'),
                    'screen_reader_text' => __(" "),
                )); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>