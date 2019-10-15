<?php defined('ABSPATH') or die("restricted access");

// Make sure we have a post id
if ( ! get_the_ID() ) {
    return null;
}

$display_slider = get_field("slider_status");
$slider_posts = get_field("slider_posts");

// Display only if the status is on and posts selected
if ( "show" != $display_slider || empty( $slider_posts ) ) {
    return false;
} ?>

<!--banner-sec start -->
<section class="banner-sec">
    <div class="container">
        <div class="banner-slider">
            <?php foreach( $slider_posts as $post ) : setup_postdata( $post ); ?>
                <div class="banner-slide">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="banner-info">
                                <span>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/clock.png' ); ?>" alt="<?php esc_attr_e('Clock Image', 'awesome-design'); ?>" />
                                    <?php echo get_the_date('j, F Y'); ?>
                                </span>

                                <!-- Banner Title -->
                                <?php the_title('<h2>', '</h2>'); ?>

                                <!-- Readmore Link -->
                                <a href="<?php the_permalink(); ?>" class="lnk-default">
                                    <?php esc_html_e('Read More', 'awesome-design'); ?>
                                </a>
                            </div>
                            <!--banner-info end-->
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'full' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-banner-placeholder.jpg'); ?>" alt="<?php esc_attr_e('image not available', 'awesome-design'); ?>" />
                                <?php endif; ?>
                            </div>
                            <!--banner-img end-->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!--banner-slider end-->
    </div>
</section>
<!--banner-sec end-->

<?php wp_reset_postdata(); ?>
