<?php get_header(); 
  $frontpage_text = get_field('front_text');
  if($frontpage_text) : ?>
    <section class="banner">
        <div class="welcome-box">
            <p><?php echo $frontpage_text ?> </p>
        </div>
    </section>
    <? endif ?>
    <section class="container">
    <?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category__not_in' => '14',
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
        wp_reset_postdata();
    else:  ?>
        <p><?php esc_html_e('Det finns inga inlägg'); ?> </p>
    <?php endif;
    ?> 
    <?php $frontpage_link = get_field('front_btn'); 
    if($frontpage_link) : ?>
    <section class="btn-bar single">
        <a class="btn" href="<?php echo $frontpage_link['url']; ?>">  
        <?php echo $frontpage_link['title']; ?>
        </a>
    </section>
    <?php endif; ?>
</section>
<?php get_footer(); ?>