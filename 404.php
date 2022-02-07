<?php 
/**
 * Template Name: 404 Content
 */
get_header(); ?>
    <section class="container">
        <div class ="error-div">
            <div class="error-header">
                <div class="error-label">
                    <h4 class="errorlabel">404</h4>
                </div>
            </div>
            <article class="error-content">
                <h1>Ops! Här blev det fel</h1>
            </article>
        </div>
        <div class="btn-bar single">
            <div class="btn">
                <a href="javascript:history.back()">
                    Tillbaka
                </a>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
<?php get_footer(); ?>