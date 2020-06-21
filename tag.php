<?php get_header();?>
<div class="container d-flex <?php echo get_the_category()[0]->slug ?> <?php echo get_the_tags()[0]->slug ?> tag" style="flex-direction: column-reverse">
    <?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="breadcrumbs ms-depth-4">','</p>' );
        }
    ?>
    <button class="btn-more ms-depth-4" id="more-actions" v-on:click="HistoryBack()"><i class="ms-Icon ms-Icon--PageLeft"></i>
    </button>
</div>
<div class="container <?php echo get_the_category()[0]->slug ?>" id="categories" style="padding-top:0;">
    <?php while (have_posts()): the_post()?>
        <?php $has_image = has_images_by_post_id($post) ? 'has-image' : ''; ?>
            <?php $link_image = ($has_image) ? 
                                    get_background_image_header($post->post_content) != "" 
                                    ? get_background_image_header($post->post_content) : get_post_image($post->post_content) 
                                    :'';?>
        <div class="card ms-depth-4 <?php echo $has_image?>" style="<?php echo $link_image ?>">
            <div class="tags">
                <?php echo get_the_tag_list() ?>
            </div>
            <div class="content">
                <h4 class="title"><?php echo the_title()?></h4>
                <span class="info"><?php the_date()?></span>
                <div class="body">
                    <?php substr(the_excerpt(),0,140) ?>
                    <div class="footer">
                        <div class="icons">
                        <?php if (has_images_by_post_id($post)) : ?>
                            <span class="ms-Icon ms-Icon--Picture" style="color: #50003E"></span>
                        <?php endif ?>
                            <span class="ms-Icon ms-Icon--Message" style="color: #002D71"></span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="permalink btn ms-depth-8" href="<?php the_permalink() ?>">Iniciar Leitura</a>
        </div>
    <?php endwhile ?>
</div>
<div class="ms-sm12 <?php echo $page_class?>">
    <?php the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('<i class="ms-Icon ms-Icon--ChevronLeft"></i>', 'Anterior'),
        'next_text' => __('<i class="ms-Icon ms-Icon--ChevronRight"></i>', 'Anterior'),
        'screen_reader_text' => __(" "),
    )); ?>
</div>
<?php get_footer();?>