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
<script>(function(d,b){if(!d.exponea){var a=function(a,g){function k(c){return function(){var e=arguments;""==a&&"initialize"==c&&e&&e[0].modify&&e[0].modify.overlay&&"loading"==b.readyState&&(b.write('<div id="__inf__overlay__" style="position:absolute;background:#fff;left:0;top:0;width:100%;height:100%;z-index:1000000"></div>'),setTimeout(function(){var a=b.getElementById("__inf__overlay__");a&&b.body.removeChild(a);res.__=!0},e[0].modify.delay||500));d.exponea._.push([a+c,arguments])}}var h=g.split(" "),f,c;res={_:[]};for(c=0;c<h.length;c++)f=h[c],res[f]=k(f);return res};d.exponea=a("","initialize identify update track trackLink trackEnhancedEcommerce getHtml showHtml showBanner showForm ping getAbTest");d.exponea.notifications=a("notifications.","isAvailable isSubscribed subscribe unsubscribe");var a=b.createElement("script"),g="https:"===b.location.protocol?"https:":"http:";a.type="text/javascript";a.async=!0;a.src=g+"//api.exponea.com/js/exponea.min.js";b.getElementsByTagName("head")[0].appendChild(a)}})(window,document);</script>
<script type="text/javascript">
exponea.initialize({
        "token": "48f31fdc-8c0d-11e6-a87b-141877340e97",
        "track": {
            "visits": true
        }
});
</script>

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
            <a href="#team">Team</a>
            <a href="#contact">Contact</a>
            <a href="/sponsors">Sponsors</a>
            <a href="/blog">Blog</a>
        </div>
        <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
