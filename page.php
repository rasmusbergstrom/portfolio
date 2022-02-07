<?php get_header(); 
if(have_posts()) : 
    while(have_posts()) :   
        the_post();
?>
<section class="about-me-section">
    <article class="card-content">
        <h2><?php the_title(); ?> </h2>
        <div class="card-text">
            <p><?php the_content(); ?></p>
        </div>
        <figure>
            <?php the_post_thumbnail(); ?> 
        </figure>
        <div class="aboutme-button-bar">
            <div class="text-button end">
                <a href="continue-about-me.html">Läs mer</a>
                <span class="material-icons">
                arrow_forward
                </span>
            </div>
        </div>
    </article>
    <div class="button-section">
        <div class="back-button">
            <a href="javascript:history.back()">
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