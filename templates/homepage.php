<?php
/**
 * Template Name: Homepage
 * 
 */

get_header();
?>

<div class="hero">
    <div class="hero__wrapper">
        <div class="hero__claim">
            <h2><?php the_field('hero_heading'); ?></h2>
            <p><?php the_field('hero_text'); ?></p>
            <a href="<?php the_field('hero_learn_more_link'); ?>" target="_blank" class="button">Learn More</a>
        </div>
    </div>
</div>
<div class="about" id="about">
    <div class="about__wrapper">
        <div class="heading">
            <div class="heading__wrapper">
                <div class="heading__background">About</div>
                <h1>What is Hyperloop?</h1>
            </div>
        </div>
    </div>
    <div class="text-block">
        <p>Hyperloop is Elon Musk’s concept for the future of mass transportation. The Hyperloop is a new way of transporting people and goods quickly, safely, efficiently and sustainably.</p>
    </div>
    
    <div class="hyped__shuttle">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hyped-shuttle.png" width="1120" alt="Hyperloop Concept Shuttle" />
    </div>
    <div class="text-block">
        <p>The HypED pod introduces advanced new technologies to offer a faster, safer and more comfortable experience. The pod has been designed from the ground up to employ renewable energy solutions and further the advances in autonomous travel. This is Hyperloop.</p>
    </div>
</div>

<div class="team" id="team">
    <div class="heading light">
        <div class="heading__wrapper">
            <div class="heading__background">The Team</div>
            <h1>The Team</h1>
        </div>
    </div>
    <div class="text-block">
        <p>The HypED team is entered in two international competitions, with the aim of revolutionising the mass transport industry through the development of Hyperloop. Over the next year we will devise a business case study for Hyperloop in the UK as part of the ‘<a href="https://hyperloop-one.com/global-challenge" target="_blank">Hyperloop One Global Challenge</a>’. The engineering team will design and build a fully functioning pod for use in SpaceX’s ‘<a href="http://www.spacex.com/hyperloop" target="_blank">Hyperloop Pod Competition</a>’ and compete against universities from around the world, to create the fastest and most innovative pod.</p>
    </div>
    <a href="/team" class="button center">Meet the Team</a>
</div>

<div class="contact" id="contact">
    <div class="heading">
        <div class="heading__wrapper">
            <div class="heading__background">Contact</div>
            <h1>Contact</h1>
        </div>
    </div>
    <div class="contact__row">
        <div class="contact__column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/hyped-ticket.png" / alt="Hyperloop Concept Ticket" />
        </div>
        <div class="contact__column">
            <div class="form__wrapper">
                <div class="input__wrapper">
                    <input type="text" name="name" placeholder="Name *">
                </div>
                <div class="input__wrapper">
                    <input type="email" name="email" placeholder="Email *">
                </div>
                <div class="input__wrapper">
                    <textarea name="message" cols="30" rows="5" placeholder="Message *"></textarea>
                </div>
                <a href="#" class="button">Send</a>
                <div class="errors"></div>
                <div class="success"></div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>
