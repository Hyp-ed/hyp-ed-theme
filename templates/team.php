<?php
/**
 * Template Name: The Team
 * 
 */

get_header();
?>




<div class="hero-team">
    <div class="heading light">
        <div class="heading__wrapper">
            <div class="heading__background">The Team</div>
            <h1>The Team</h1>
        </div>
    </div>
</div>

<div class="team-group-wrapper">

<?php if( have_rows('team') ): ?>
<?php while( have_rows('team') ): the_row();
$team_name = get_sub_field('team_name');
$team_description = get_sub_field('team_description');
?>

<div class="team-group">
    <div class="text-block">
        <h2><?php echo $team_name; ?></h2>
        <p><?php echo $team_description; ?></p>
    </div>
    
    
    <div class="team-members">
        <?php if( have_rows('team_members') ): ?>
        <?php while( have_rows('team_members') ): the_row();
        $name = get_sub_field('name');
        $photo = get_sub_field('photo');
        $short_description = get_sub_field('short_description');
        $bio = get_sub_field('bio');
        $facebook = get_sub_field('facebook');
        $linkedin = get_sub_field('linkedin');
        ?>
        
        <div class="member">
            <div class="image-wrapper">
                <div class="overlay"></div>
                <img src="<?php echo $photo['url']; ?>" />
            </div>
            <h3><?php echo $name; ?></h3>
            <span><?php echo $short_description; ?></span>
            <div class="description">
                <span>x</span>
                <p><?php echo $bio; ?></p>
            </div>
            <div class="social-links">
                <?php if($facebook) : ?>
                    <a href="<?php echo $facebook; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="Facebook" width="32"></a>
                <?php endif; ?>
                <?php if($linkedin) : ?>
                    <a href="<?php echo $linkedin; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="LinkedIn" width="32"></a>
                <?php endif; ?>
            </div>
        </div>
        
        
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>

<script>
    /* global $ */
    $('.member').click(function(e) {
        $(e.target).parent().parent().find('.description').slideToggle();
    });
    
    // $('.description > span').click(function(e) {
    //     $(e.target).parent().slideToggle();
    // });
    
</script>

<?php
get_footer();
?>