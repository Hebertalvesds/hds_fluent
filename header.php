<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hdsfluent
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/11.0.0/css/fabric.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
        <?php wp_enqueue_style( "metro-all.min", get_template_directory_uri() . '/assets/css/metro-all.min.css','', '', 'all') ?>
        <?php wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), true); ?>
        <title>
                <?php echo bloginfo('name') ?>
        </title>
    </head>
    <body class="light" data-role="touch">
    <div>
    <header class="app-bar" data-expand-point="md">
        <div class="container">
            <input type="checkbox" id="toggle"/>
            <label class="toggle-btn ms-depth-4" for="toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </label>
            <?php get_template_part( 'template-parts/header/header', 'brand' ) ?>
            <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        </div>
    </header>
    <!-- ContentWordpress -->
    <div class="content-render">
        