<?php
$facebook = get_sub_field('facebook');
$instagram = get_sub_field('instagram');
$twitter = get_sub_field('twitter');
$youtube = get_sub_field('youtube');
?>

<div class="social-media-section">
    <a class="facebook-group" href="<?php echo $facebook['icon_url']; ?>" target="_blank">
        <img src="<?php echo $facebook['icon_image']; ?>" alt="facebook" />
    </a>
    <a class="instagram-group" href="<?php echo $instagram['icon_url']; ?>" target="_blank">
        <img src="<?php echo $instagram['icon_image']; ?>" alt="instagram" />
    </a>
    <a class="twitter-group" href="<?php echo $twitter['icon_url']; ?>" target="_blank">
        <img src="<?php echo $twitter['icon_image']; ?>" alt="twitter" />
    </a>
    <a class="youtube-group" href="<?php echo $youtube['icon_url']; ?>" target="_blank">
        <img src="<?php echo $youtube['icon_image']; ?>" alt="youtube" />
    </a>
</div>