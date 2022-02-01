<?php get_header(); ?>
<section class="start-section">
    <div class="welcome-box">
        <p>Välkommen till min portfolio, här kan ni se mina arbeten som jag jobbat med! </p>
    </div>
</section>
<section class="portfolio-section">
<?php 
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'ID'
);
$the_query = new WP_Query($args);
if($the_query -> have_posts()) :
    while($the_query -> have_posts()) : 
        $the_query -> the_post();
?> 
 <div class ="portfolio-div">
        <div class="portfolio-header">
            <div class="portfolio-label">
                <h4><?php the_title(); ?></h4>
            </div>
            <div class="portfolio-button">
                <div class="text-button">
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
    wp_reset_postdata();
else:  ?>
    <p><?php esc_html_e('Det finns inga inlägg'); ?> </p>
<?php endif;
?> 
</section>
<section class="btn-bar single">
    <a class="btn" href="#">
    Alla inlägg
    </a>
</section>
<?php get_footer(); ?>