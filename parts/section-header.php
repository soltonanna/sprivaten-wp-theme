<?php
$title = get_sub_field('header_title');
$description = get_sub_field('header_description');
$button_1 = get_sub_field('header_button_1');
$button_2 = get_sub_field('header_button_2');
?>

<div class="title-desc-block main">
    <h1 class="title"><?php echo $title; ?></h1>
    <p class="desc"><?php echo $description; ?></p>
</div>

<?php if ($button_1) : ?>
    <a href="<?php echo $button_1; ?>" class="btn btn-blue" target="_blank"> Get Quote now </a>
<?php endif; ?>

<?php if ($button_2) : ?>
    <a href="<?php echo $button_2; ?>" class="btn btn-trans" target="_blank"> Learn more </a>
<?php endif; ?>
                            