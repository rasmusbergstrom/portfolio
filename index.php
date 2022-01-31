<?php get_header(); ?>
<section class="start-section">
<nav class="category-menu">
    <ul class="categorys">
        <li>
            <a href="/archive.html">Webb</a>
        </li>
        <li>
            <a href="/archive.html">JavaScript</a>
        </li>
        <li>
            <a href="/archive.html">C#</a>
        </li>
        <li>
            <a href="/archive.html">UI</a>
        </li>
        <li>
            <a href="/archive.html">SCSS</a>
        </li>
        <li>
            <a href="/archive.html">UX</a>
        </li>
    </ul>
</nav>
<section class="portfolio-section">
<?php 
    if(have_posts()) : 
        while(have_posts()) : 
            the_post();  
?>
<div class ="portfolio-div">
    <div class="portfolio-header">
        <div class="portfolio-label">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="portfolio-button">
            <div class="port-btn">
                <a href="<?php the_permalink(); ?>">Läs mer</a>
                <span class="material-icons">
                arrow_forward
                </span>
            </div>
        </div>
    </div>
    <article class="portfolio-content">
        <h4><?php the_title(); ?></h4>
        <p><?php the_excerpt(); ?></p>
    </article>
    <div class="portfolio-category-div">
        <div class="category"></div>
    </div>
</div>
<?php 
        endwhile;
    else : ?> 
    <p> <?php esc_html_e('Det finns inga inlägg'); ?></p>
    <?php endif;

?>
</section>
<?php get_footer(); ?>