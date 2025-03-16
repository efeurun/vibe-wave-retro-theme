<?php get_header(); ?>

<div class="site-container">
    <div class="content-area">
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span class="date"><?php the_time('F j, Y'); ?></span> by 
                    <span class="author"><?php the_author(); ?></span> in
                    <span class="categories"><?php the_category(', '); ?></span>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-tags">
                    <?php the_tags('<span>Tags:</span> ', ', ', ''); ?>
                </div>
            </article>

            <nav class="post-navigation">
                <div class="prev-post"><?php previous_post_link('%link', '&laquo; Previous Post'); ?></div>
                <div class="next-post"><?php next_post_link('%link', 'Next Post &raquo;'); ?></div>
            </nav>

            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        <?php endwhile; ?>
    </div>
    
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
