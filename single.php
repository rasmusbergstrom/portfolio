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
        <p><?php the_content(); ?></p>
        </div>                  
        <div class="single-portfolio-img-container">
            <?php 
                $img1 = get_field('bild_1');
                $img2 = get_field('bild_2');
            ?>
            <?php if($img1 && $img2) : ?>
                <figure>
                    <img src="<?php echo $img1['url'];?>" alt="<?php echo $img1['alt'];?>">
                </figure>
                <figure>
                    <img src="<?php echo $img2['url'];?>" alt="<?php echo $img2['alt'];?>">
                </figure>  
            <?php elseif($img1 && empty($img2['url'])) : ?>
                <figure>
                    <img src="<?php echo $img1['url'];?>" alt="<?php echo $img1['alt'];?>">
                </figure>         
            <?php endif; ?>
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
    <?php if(!get_previous_post_link() && get_next_post_link()) : ?>
    <section class="btn-bar end">
    <?php next_post_link('%link', 'Nästa<span class="material-icons">chevron_right</span></a>' , '14');
          ?> </section>
          <?php 
    else : ?>
    <section class="btn-bar"> 
    <?php 
    previous_post_link('%link','<span class="material-icons">chevron_left</span>Föregående</a>', '14');
    next_post_link('%link', 'Nästa<span class="material-icons">chevron_right</span></a>' , '14');
    ?> </section>
    <?php
    endif ?>
<?php 
        endwhile;
    else : ?>
        <p><?php esc_html_e('Det finns inget innehåll')?></p>
<?php endif;
?>
<?php get_footer(); ?>
</body>
</html>