<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage hdsfluent
 * @since 1.0
 * @version 1.0
 */
?>
<?php
    $filter = array(
        'posts_per_page' => 3,
        'orderby' => 'DESC',
        'cat' => 3
    );
    query_posts( $filter )
?>
    <div class="container">
        <?php while(have_posts()):?>
            <?php the_post() ?>
            <?php $has_image = has_images_by_post_id($post) ? 'has-image' : ''; ?>
            <?php $link_image = ($has_image) ? 
                                    get_background_image_header($post->post_content) != "" 
                                    ? get_background_image_header($post->post_content) : get_post_image($post->post_content) 
                                    :'';?>
            <a href="<?php the_permalink() ?>" class="card ms-depth-4 blog-feature card-feature <?php echo $has_image ?>"
               style="<?php echo $link_image;?>">
            <div>
                <span class="tag"><?php echo get_the_category()[0]->slug?></span>
                <?php the_title("<h2>", "</h2>")?>
                <span class="tag"><b class="ms-Icon ms-Icon--Contact"></b>&nbsp;<?php the_author() ?></span>
                <span class="tag"><b class="ms-Icon ms-Icon--EventDate"></b>&nbsp;<?php the_date("d-m-y", "", "")?></span>
            </div>
            </a>
        <?php endwhile;?>
    </div>