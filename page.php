<?php get_header(); 
if(have_posts()) : 
    while(have_posts()) :   
        the_post();
?>
<section class="singlecontainer-section">
    <article class="card-content">
        <h1><?php the_title(); ?> </h1>
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
        <?php endif; ?>
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