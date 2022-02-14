<?php get_header(); ?>
<section class="container">
<nav class="category-menu">
    <?php wp_nav_menu(array(
        'theme_location' => 'categorymenu',
        'menu_class' => 'categorys'
        ));
    ?>
</nav>
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
            <ul class="categorys"> 
            <?php $categories = get_the_category();
                foreach ($categories as $category) {
                    $catName = $category -> name;
                    $catLink = get_category_link($category -> term_id);
                    echo "<li><a href='$catLink'>". $catName ."</a></li>";
                }
            ?>
            </ul>
    </article>
</div>
<?php 
        endwhile;
    else : ?> 
    <p> <?php esc_html_e('Det finns inga inlägg'); ?></p>
    <?php endif;

?>
</section>
<?php get_footer(); ?>