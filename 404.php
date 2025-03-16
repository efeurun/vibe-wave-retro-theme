<?php get_header(); ?>

<div class="site-container">
    <div class="content-area">
        <article class="error-404">
            <h1>404 ERROR</h1>
            <h2>PAGE NOT FOUND</h2>
            
            <div class="error-content">
                <p class="blink">SYSTEM FAILURE</p>
                <p>The page you requested does not exist or has been moved.</p>
                <p>Try one of these instead:</p>
                
                <ul>
                    <li>Return to <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a></li>
                    <li>Use the search below</li>
                </ul>
                
                <?php get_search_form(); ?>
            </div>
        </article>
    </div>
    
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
