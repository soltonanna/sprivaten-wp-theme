<?php
$title = get_sub_field('main_title');
$description = get_sub_field('main_description');

$columns = get_sub_field('columns');
?>

<div class="title-desc-block normal">
    <p class="title"><?php echo $title; ?></p>
    <p class="desc"><?php echo $description; ?></p>
</div>

<div class="team-group swiper-wrapper">
    <?php foreach( $columns as $column) : ?>
        <div class="team-group__item swiper-slide">
    
            <?php if( $column['item_image'] ) { ?>
                <img class="member-image" src="<?php echo $column['item_image']; ?>" alt="<?php echo $column['item_name']; ?>" />
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="<?php echo $column['item_title']; ?>" />
            <?php } ?>
            
            <p class="member-name"><?php echo $column['item_name']; ?></p>
            <p class="member-role"><?php echo $column['item_role']; ?></p>

            <div class="social-icons">
                <?php if ($column['item_facebook_url']) : ?>
                    <a href="<?php echo $column['item_facebook_url']; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.svg" alt="fb-icon" />
                    </a>
                <?php endif; ?>
                <?php if ($column['item_instagram_url']) : ?>
                    <a href="<?php echo $column['item_instagram_url']; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/inst-icon.svg" alt="fb-icon" />
                    </a>
                <?php endif; ?>
                <?php if ($column['item_twitter_url']) : ?>
                    <a href="<?php echo $column['item_twitter_url']; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg" alt="fb-icon" />
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>    