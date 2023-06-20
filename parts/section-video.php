<?php
$title = get_sub_field('main_title');
$description = get_sub_field('main_description');
$video_url = get_sub_field('video_url');
?>

<div class="title-desc-block normal">
    <p class="title"><?php echo $title; ?></p>
    <p class="desc"><?php echo $description; ?></p>
</div>

<?php if( $video_url ) { ?>
    <div class="video-block"><?php echo $video_url; ?></div>
<?php } else { ?>
    <div class="video-block"><p>Don't forget add video !!</p></div>
<?php }?>