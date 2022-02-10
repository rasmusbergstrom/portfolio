<?php get_header(); 
/* 
    Template Name: Contact page
*/
get_header(); 
if(have_posts()) : 
    while(have_posts()) :   
        the_post();
?>
<section class="about-me-section">
<?php 
    
?>
<article class="card-content">
    <div class="form-div">
        <h1> <?php the_title(); ?></h1>
        <?php echo apply_shortcodes( '[contact-form-7 id="187" title="Kontaktformulär 1" html_id="contact-form"]' ); ?>
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
<?php endwhile; 
endif; ?>
<?php get_footer(); ?>