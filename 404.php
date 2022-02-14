<?php 
/**
 * Template Name: 404 Content
 */
get_header(); 
$id = 177; //404-page ID
$title = get_field('title_404', $id);
$textcontent = get_field('textfield_404', $id);
$link = get_field('link_404', $id);
?>
    <section class="container">
        <div class ="error-div">
            <div class="error-header">
                <div class="error-label">
                    <?php if($title) : ?> 
                        <h4 class="errorlabel"><?php echo $title; ?></h4>
                    <?php endif; ?> 
                </div>
            </div>
            <article class="error-content">
                <?php if($textcontent) : ?>
                    <h1><?php echo $textcontent; ?> </h1>
                <?php endif; ?>
            </article>
        </div>
        <div class="btn-bar single">
            <?php if(!empty($link['url'])) : ?>
                <div class="btn">
                    <a href="<?php echo $link['url']; ?>">
                        <?php echo $link['title']; ?>
                    </a>
                </div>
            <?php endif; ?> 
        </div>
    </section>
    <script src="script.js"></script>
<?php get_footer(); ?>