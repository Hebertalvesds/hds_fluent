<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Hebertds
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
        <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
        <?php wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), true); ?>
        <title>
                <?php echo bloginfo('name') ?>
        </title>
        <style>
        .menu-navigation{
            background: var(--<?php echo get_the_category()[0]->slug ?>-color) !important;
        }
        .branding{
            color: var(--<?php echo get_the_category()[0]->slug ?>-color) !important;
        }
        <?php if(is_user_logged_in()):?>
            .app-bar{
                margin-top: 32px;
            }
        <?php endif; ?>
        </style>
    </head>
    <body class="light" data-role="touch">
    <div>
    <header data-role="app-bar" data-expand-point="md">
        <div class="container">
            <?php get_template_part( 'template-parts/header/header', 'brand' ) ?>
            <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        </div>
        <button class="button square pos-absolute pos-top-right alert no-shadow d-none-md" id="sidebar-toggle-2">
            <span class="mif-menu"></span>
        </button>
    </header>
    <?php get_template_part( 'template-parts/navigation/navigation', 'left' ); ?>
        <!-- ContentWordpress -->
        <div class="content-render">
        