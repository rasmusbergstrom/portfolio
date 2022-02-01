<?php get_header(); ?>
<section class="start-section">
<?php 
    if(have_posts()) : 
        while(have_posts()) :
            the_post();
?>  
    <div class="single-portfolio-card">
        <div class="portfolio-header">
            <div class="portfolio-label">
                <h4><?php the_title(); ?></h4>
            </div>
        </div>
        <article class="portfolio-content">
            <div class="content-text">
                <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            </div>
            <div class="portfolio-category-div">
                <ul class="categories"> 
                <?php $categories = get_the_category();
                    foreach ($categories as $category) {
                       $catName = $category -> name;
                       $catLink = get_category_link($category -> term_id);
                       echo "<li><a href='$catLink'>". $catName ."</a></li>";
                    }
                ?>
                </ul>
            </div>                   
            <div class="portfolio-img-container">
                <figure>
                    <img src="img/example3.mobile.png" alt="">
                </figure>
                <figure>
                    <img src="img/example1.mobile.png" alt="">
                </figure>
            </div>
        </article>
    </div>
<?php 
        endwhile;
    else : ?>
        <p><?php esc_html_e('Det finns inget innehåll')?></p>
<?php endif;
?>
</section>
<?php get_footer(); ?>
</body>
</html>