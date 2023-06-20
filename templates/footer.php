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

<footer class="site-footer">
    <div class="footer-top-section">
        <div class="container">
            
            <div class="logo-social">
                <!-- LOGO -->
                <?php if ( has_custom_logo() && $show_title ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php if ( $blog_info ) : ?>
                    <?php if ( is_front_page() && ! is_paged() ) : ?>
                        <h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
                    <?php elseif ( is_front_page() && ! is_home() ) : ?>
                        <h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
                    <?php else : ?>
                        <p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- SOCIAL ICONS -->
                <?php if( have_rows('footer_content') ) : ?>

                    <?php while ( have_rows('footer_content') ) : the_row(); ?>
                        
                        <?php if( get_row_layout() == 'footer_social_icons' ) : ?>
                            
                            <?php get_template_part('parts/section', 'footerIcons'); ?>

                        <?php endif; ?>  

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

            <div class="footer-menu">
                
            </div>
        </div>
    </div>

    <div class="footer-bottom-section">
        <div class="container">
            <?php if( have_rows('footer_content') ) : ?>

                <?php while ( have_rows('footer_content') ) : the_row(); ?>
                    
                    <?php if( get_row_layout() == 'copyrights' ) : ?>
                        
                        <p class="copyright"><?php echo get_sub_field('copyright_text'); ?></p>

                    <?php endif; ?>  

                <?php endwhile; ?>

            <?php endif; ?>
            
        </div>
    </div>
</footer>