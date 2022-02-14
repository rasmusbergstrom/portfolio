<?php 
/* 
    Template Name: Full width page
*/
get_header(); 
if(have_posts()) : 
    while(have_posts()) :   
        the_post();
?>
<section class="singlecontainer-section">
    <article class="card-content alternative-article">
        <h2><?php the_title(); ?> </h2>
        <div class="card-text">
            <p><?php the_content(); ?></p>
        </div>
        <figure>
            <?php the_post_thumbnail(); ?> 
        </figure>
        <?php $next_link = get_field('navigate_to_page'); 
        if($next_link) : ?>
        <div class="aboutme-button-bar">
            <div class="text-button end">
                <a href="<?php echo $next_link['url']; ?>">
                <?php echo $next_link['title']; ?></a>
                <span class="material-icons">
                arrow_forward
                </span>
            </div>
        </div>
        <?php endif; 
        $working_posts = get_field('working_posts');
        if($working_posts) : ?>
            <section class="work-section">
            <?php foreach($working_posts as $post) : 
               setup_postdata($post); ?>
            <article class="work-card">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
                <?php $working_date = get_field('datum'); 
                if($working_date) : ?>
                    <p class="date">
                    <span class="material-icons">
                        calendar_month
                        </span>
                        <?php echo $working_date ?>
                    </p>
                <?php endif; ?>
            </article>
        <?php wp_reset_postdata();
        endforeach; ?>
        <?php endif; ?>
        </section>
    </article>
    <div class="btn-bar end">
        <div class="btn">
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