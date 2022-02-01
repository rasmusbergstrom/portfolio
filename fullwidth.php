<?php 
/* 
    Template Name: Full width page
*/
get_header(); 
if(have_posts()) : 
    while(have_posts()) :   
        the_post();
?>
<section class="global-section p-10">
    <article class="card-content alternative-article">
        <div>
            <h2><?php the_title() ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <figure>
            <img src="/img/profilbild_mobile.png" srcset="/img/profilbild_table.png 568w" alt="Profilepicture for mobile" >
        </figure>
        <div class="aboutme-button-bar">
            <div>
                <a href="continue-about-me.html">Läs mer</a>
                <span class="material-icons">
                arrow_forward
                </span>
            </div>
        </div>
    </article>
    <div class="button-section">
        <div class="back-button">
            <a href="/home.html">
                Tillbaka
            </a>
        </div>
    </div>
</section>
<?php 
    endwhile;
else : ?>
    <p><?php esc_html_e("Det finns inget innehåll att visa")?></p>
<?php endif;
?>
<?php get_footer(); ?>