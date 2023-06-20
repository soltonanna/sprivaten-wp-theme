<?php 
    /** Classes for header tag */
    $wrapper_classes  = 'site-header';
    $wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
    $wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
    $wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';

    /** Site header info */
    $blog_info    = get_bloginfo( 'name' );
    $description  = get_bloginfo( 'description', 'display' );
    $show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
    $header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<header class="<?php echo esc_attr( $wrapper_classes ); ?>">
    <div class="container">
        <!-- LOGO -->
        <?php if ( has_custom_logo() && $show_title ) : ?>
            <div class="site-logo ssss"><?php the_custom_logo(); ?></div>
        <?php endif; ?>

        <div class="site-header-information">
            <?php if ( $blog_info ) : ?>
                <?php if ( is_front_page() && ! is_paged() ) : ?>
                    <h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
                <?php elseif ( is_front_page() && ! is_home() ) : ?>
                    <h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
                <?php else : ?>
                    <p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
                <?php endif; ?>
            <?php endif; ?>

            <div class="menu-button-container">
                <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
                    <span class="dropdown-icon open active">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-menu.svg"  alt="burger-icon" />
                    </span>
                </button>
            </div>

            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'sprivaten' ); ?>">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'menu_class'      => 'menu-wrapper',
                            'container_class' => 'primary-menu-container',
                            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </nav>
            <?php endif; ?>

            <div class="top-icons">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/search-icon.svg' )?>"  alt="search-icon" />
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/cart-icon.svg' )?>"  alt="cart-icon" />
            </div>
        </div>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav id="site-navigation" class="primary-navigation mobile" aria-label="<?php esc_attr_e( 'Primary menu', 'sprivaten' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'menu_class'      => 'menu-wrapper',
                        'container_class' => 'primary-menu-container',
                        'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
                ?>
            </nav>
        <?php endif; ?>

    </div>
</header><!-- #header -->
