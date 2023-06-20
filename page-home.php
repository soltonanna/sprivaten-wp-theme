<?php get_header(); ?>

<main id="main" class="homepage-main">
    
    <!-- 'HEADER' SECTION -->
    <div class="homepage-main__header-section" style="background-image: url('<?php echo get_field('header_background_image') ?>');">
        <div class="container">
            <div class="header-info">
                <?php if( have_rows('content') ) : ?>

                    <?php while ( have_rows('content') ) : the_row(); ?>
                        
                        <?php if( get_row_layout() == 'header_section' ) : ?>
                           
                            <?php get_template_part('parts/section', 'header'); ?>

                        <?php endif; ?>  

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

            <div class="header-form">
                <?php get_template_part( 'templates/book-appointment-form' ); ?>
            </div>
        </div>
    </div>

    <!-- 'WHY CHOOSE US' SECTION -->
    <div class="homepage-main__choose-section">
        <div class="container">
            <?php if( have_rows('content') ) : ?>

                <?php while ( have_rows('content') ) : the_row(); ?>
                    
                    <?php if( get_row_layout() == 'choose_us_section' ) : ?>
                        
                        <?php get_template_part('parts/section', 'choose'); ?>

                    <?php endif; ?>  

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

    <!-- 'VIDEO' SECTION -->
    <div class="homepage-main__video-section">
        <div class="container">
            <?php if( have_rows('content') ) : ?>

                <?php while ( have_rows('content') ) : the_row(); ?>
                    
                    <?php if( get_row_layout() == 'video_section' ) : ?>
                    
                        <?php get_template_part('parts/section', 'video'); ?>

                    <?php endif; ?>  

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

    <!-- 'REVIEWS' SECTION -->
    <div class="homepage-main__reviews-section">
        <div class="container swiper swiper-review">
            <?php if( have_rows('content') ) : ?>

                <?php while ( have_rows('content') ) : the_row(); ?>
                    
                    <?php if( get_row_layout() == 'review_section' ) : ?>
                    
                        <?php get_template_part('parts/section', 'review'); ?>

                    <?php endif; ?>  

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
    
    <!-- 'TEAM' SECTION -->
    <div class="homepage-main__team-section">
        <div class="container swiper">
            <?php if( have_rows('content') ) : ?>

                <?php while ( have_rows('content') ) : the_row(); ?>
                    
                    <?php if( get_row_layout() == 'team_section' ) : ?>
                    
                        <?php get_template_part('parts/section', 'team'); ?>

                    <?php endif; ?>  

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

    <!-- 'CONTACT' SECTION -->
    <div class="homepage-main__contact-section" style="background-image: url('<?php echo get_field('contact_us_background_image') ?>');">
        <div class="container">
            <div class="contact-form">
                <p>Contact Us</p>
                <h3>Make an Appointment</h3>
                <?php get_template_part( 'templates/make-appointment-form' ); ?>
            </div>
        </div>
    </div>
    <div class="homepage-main__contact-section bottom">
        <div class="container">
            <?php if( have_rows('content') ) : ?>

                <?php while ( have_rows('content') ) : the_row(); ?>
                    
                    <?php if( get_row_layout() == 'contact_us' ) : ?>
                    
                        <?php get_template_part('parts/section', 'contact'); ?>

                    <?php endif; ?>  

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer();?>
