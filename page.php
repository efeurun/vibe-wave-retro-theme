<?php get_header(); ?>

<div class="site-container">
    <div class="content-area">
        <?php while (have_posts()) : the_post(); ?>
            <article class="page">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
    
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
