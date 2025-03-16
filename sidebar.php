<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <section class="widget">
            <h2 class="widget-title">Search</h2>
            <?php get_search_form(); ?>
        </section>
        
        <section class="widget">
            <h2 class="widget-title">Recent Posts</h2>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));
                foreach ($recent_posts as $post) {
                    echo '<li><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></li>';
                }
                wp_reset_postdata();
                ?>
            </ul>
        </section>
        
        <section class="widget">
            <h2 class="widget-title">Categories</h2>
            <ul>
                <?php wp_list_categories(array('title_li' => '')); ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>
