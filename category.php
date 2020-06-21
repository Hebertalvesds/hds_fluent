<?php get_header();?>
<?php 
$page_class = get_the_category()[0]->slug;
$stick = get_option('stick_posts');
$query = new WP_Query( 'p=' . $stick[0] );
?>
<div class="container <?php echo $page_class ?> pt-10 pb-10 pl-5">
    <h1 class="title"><?php echo get_the_category()[0]->name ?></h1>
</div>
<div class="container <?php echo $page_class?>" id="categories">
    <div class="row">
        <div class="cell-sm-12 cell-lg-3 d-none-sm d-block-lg">
            <div class="card ms-depth-4 bg-white image-header">
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
            
        </div>
        <div class="cell-lg-9 cell-sm-12">
        <?php while (have_posts()): 
            the_post()?>
            <?php $has_image = has_images_by_post_id($post) ? 'has-image' : ''; ?>
            <?php $link_image = ($has_image) ? 
                                    get_background_image_header($post->post_content) != "" 
                                    ? get_background_image_header($post->post_content) : get_post_image($post->post_content) 
                                    :'';?>
            <div class="card ms-depth-4 <?php echo $has_image?>">
            <?php if($has_image !== ""): ?>
            <div style="<?php echo $link_image?>" class="img pos-relative-sm pos-absolute-md cell-md-3 cell-sm-12"></div>
            <?php endif?>
                <div class="tags <?php if ($has_image) : ?> offset-md-3 <?php endif;?>p-2 bg-light">
                    <?php echo get_the_tag_list() ?>
                </div>
                <div class="content <?php if ($has_image) : ?> offset-md-3 <?php endif;?> pl-4 pr-4">
                    <a href="<?php the_permalink() ?>">
                        <h4 class="title mt-4 fg-dark"><?php echo the_title()?></h4>
                    </a>
                    <small class="fg-gray"><b class="fa fa-calendar"></b>&nbsp;<?php the_date()?></small>
                    <br>
                    <small class="fg-gray"><b class="fa fa-user"></b>&nbsp;<?php the_author()?></small>
                    <div class="body d-none-fs d-block-md indent-letter mt-4">
                        <?php substr(the_excerpt(),0,140) ?>
                    </div>
                </div>
                <p class="text-right">
                    <a class="button flat-button" href="<?php the_permalink() ?> p-4">Iniciar Leitura</a>
                </p>
            </div>
        <?php endwhile ?>
        <div class="cell-fs-12 d-flex flex-justify-center">
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