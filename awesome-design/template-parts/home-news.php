<?php defined('ABSPATH') or die("restricted access");

// Make sure we have a post id
$news_posts = get_field('news_posts');

if ( ! get_the_ID() || ! $news_posts ) {
    return null;
} ?>

<div class="blog-section">
    <h3><?php esc_html_e('Our News', 'awesome-design'); ?></h3>
    <div class="blog-posts">
        <?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
            <div class="blog-post">
                <div class="post-img">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/news-default-image.jpg' ); ?>" alt="<?php esc_attr_e('no image available', 'awesome-design'); ?>" />
                    <?php endif; ?>
                </div>

                <!--post-img end-->
                <div class="post-info">
                    <span class="posted-date"><?php echo get_the_date('j, F Y'); ?></span>
                    <p><?php the_content(); ?></p>
                </div>
                <!--post-info end-->
            </div>
        <?php endforeach; ?>
    </div>
    <!--blog-posts end-->
</div>

<?php wp_reset_postdata(); ?>
