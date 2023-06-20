<?php
$title = get_sub_field('main_title');
$description = get_sub_field('main_description');

$columns = get_sub_field('columns');
?>

<div class="title-desc-block normal">
    <p class="title"><?php echo $title; ?></p>
    <p class="desc"><?php echo $description; ?></p>
</div>

<div class="review-group swiper-wrapper">
    <?php foreach( $columns as $column) : ?>
        <div class="review-group__item swiper-slide">
            <img class="stars" src="<?php echo get_template_directory_uri(); ?>/images/stars.svg"  alt="stars-icon" />
            <p class="user-description"><?php echo $column['item_description']; ?></p>
            <div class="user-info">
                <img src="<?php echo $column['item_image']; ?>" alt="<?php echo $column['item_name']; ?>" />
                <div>
                    <p class="user-name"><?php echo $column['item_name']; ?></p>
                    <p class="user-role"><?php echo $column['item_role']; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>    