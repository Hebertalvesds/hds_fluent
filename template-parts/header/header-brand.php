<a href="<?php echo bloginfo('url') ?>" class="brand no-hover float-left ms-depth-8">
    <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <span class="title"><?php bloginfo('name') ?></span>
</a>