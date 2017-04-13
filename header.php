<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hyped
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="navigation">
    <div class="navigation__wrapper">
        <div class="logo">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hyped-mark.png" width="17" alt="HypED Logo" />
            </a>
        </div>
        <div class="menu">
            <a href="/" class="active">Home</a>
            <a href="#about">About</a>
            <a href="/team">The Team</a>
            <a href="#contact">Contact</a>
            <a href="/blog">Blog</a>
            <a href="/sponsors">Sponsors</a>
        </div>
        <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
