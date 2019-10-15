<?php
/* Template Name: HomePage */

get_header(); ?>

<?php
while( have_posts() ) : the_post();
    $about_us_text = get_field('about_us'); ?>

    <!-- Home Page banner -->
    <?php get_template_part('template-parts/home', 'banner'); ?>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <?php if ( ! empty( $about_us_text ) ) : ?>
                <div class="about-us">
                    <h3><?php echo esc_html_e('About Us', 'awesome-design'); ?></h3>
                    <p><?php echo wp_kses( $about_us_text, wp_kses_allowed_html('post') ); ?></p>
                </div>
                <!--about-us end-->
            <?php endif; ?>

            <!-- News Section -->
            <?php get_template_part('template-parts/home', 'news'); ?>

            <!--blog-section end-->
            <div class="clearfix"></div>
        </div>
    </section>
    <!--main-content end-->

<?php endwhile; ?>
<?php get_footer(); ?>
