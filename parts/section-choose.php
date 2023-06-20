<?php
$title = get_sub_field('main_title');
$description = get_sub_field('main_description');

$columns = get_sub_field('columns');
?>

<div class="title-desc-block normal">
    <p class="title upper"><?php echo $title; ?></p>
    <p class="desc"><?php echo $description; ?></p>
</div>

<div class="choose-group">
    <?php foreach( $columns as $column) : ?>
        <div class="choose-group__item">
            <p class="top">
                <img src="<?php echo $column['item_image']; ?>" alt="<?php echo $column['item_title']; ?>" />
                <span><?php echo $column['item_title']; ?></span>
            </p>
            <p class="middle"><?php echo $column['item_description']; ?></p>
            <p class="bottom"><a href="<?php echo $column['item_link']; ?>">Learn more</a></p>
        </div>          
    <?php endforeach; ?>
</div>