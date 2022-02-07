<?php get_header(); ?>
<section class="singlecontainer-section">
<?php 
    if(have_posts()) : 
        while(have_posts()) :
            the_post();
?>  
    <div class="single-portfolio-card">
        <div class="single-portfolio-header">
            <div class="single-portfolio-label">
                <h4><?php the_title(); ?></h4>
            </div>
        </div>
        <article class="single-portfolio-content">
            <div class="single-content-text">
                <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            </div>                  
            <div class="single-portfolio-img-container">
                <?php 
                    $img1 = get_field('bild_1');
                    $img2 = get_field('bild_2');
                ?>
                <figure>
                    <img src="<?php echo $img1['url'];?>" alt="<?php echo $img1['alt'];?>">
                </figure>
                <figure>
                    <img src="<?php echo $img2['url'];?>" alt="<?php echo $img2['alt'];?>">
                </figure>
            </div>
            <div class="single-portfolio-category-div">
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
        </article>
    </div>
<?php 
        endwhile;
    else : ?>
        <p><?php esc_html_e('Det finns inget innehåll')?></p>
<?php endif;
?>
<section class="btn-bar">
    <a class="btn" href="#">
    <span class="material-icons">chevron_left</span>
        Föregående
    </a>
    <a class="btn" href="#">
        Nästa
    <span class="material-icons">chevron_right</span>
    </a>
</section>
<?php get_footer(); ?>
</body>
</html>