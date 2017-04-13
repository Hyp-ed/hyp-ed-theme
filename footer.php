<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hyped
 */

?>
<div class="footer">
    <a href="http://www.ed.ac.uk/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/uoe-logo.png" width="200">
    </a>
    
    <div class="social">
        <a href="https://www.facebook.com/hypedinburgh/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="Facebook" width="32">
        </a>
        <a href="https://www.linkedin.com/company-beta/10669902/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="LinkedIn" width="32">
        </a>
    </div>
    
    <div class="navigation">
        <div class="navigation__wrapper">
            <div class="menu">
                <a href="#" class="active">Home</a>
                <a href="#">About</a>
                <a href="#">The Team</a>
                <a href="#">Contact</a>
                <a href="#">Blog</a>
                <a href="#">Press</a>
            </div>
        </div>
    </div>
    <div class="division"></div>
    <div class="copy">
        <p>&copy;Hyped 2016. All rights reserved</p>
    </div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/scripts.js"></script>
<?php wp_footer(); ?>

</body>
</html>
