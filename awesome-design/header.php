<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="theme-layout">
		<!-- Header -->
		<header>
            <div class="container">
            	<?php if ( function_exists('the_custom_logo') ) : ?>
	            	<div class="logo">
	            		<?php the_custom_logo(); ?>
	                </div>
                	<!--logo end-->
	            <?php endif; ?>

                <?php
                $phone_number = get_theme_mod('phone_number');
                if ( $phone_number ) : ?>
                    <div class="contact-info">
                        <h3><?php echo wp_kses( $phone_number, [] ); ?></h3>
                    </div>
                <?php endif; ?>
                <!--contact-info end-->

                <div class="menu-btn">
                    <a href="#" title="">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </a>
                </div>

                <!--menu-btn end-->
                <div class="clearfix"></div>
            </div>
        </header>

        <section class="navi-sec">
            <div class="container">
                <?php if ( is_active_sidebar( 'menu_sidebar' ) ) {
                    dynamic_sidebar( 'menu_sidebar' );
                } ?>

                <nav>
                	<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'main-menu',
					) ); ?>
                </nav>
                <!--navigation end-->
                <div class="clearfix"></div>
            </div>
        </section>
