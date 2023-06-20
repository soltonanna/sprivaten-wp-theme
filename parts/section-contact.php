<?php
$title = get_sub_field('main_title');
$description = get_sub_field('main_description');
$contact_button = get_sub_field('main_link');
?>

<div class="title-desc-block small">
    <p class="title"><?php echo $title; ?></p>
    <p class="desc"><?php echo $description; ?></p>
</div>

<a href="<?php echo $contact_button; ?>" target="_blank" class="btn btn-orange">Contact Us</a>