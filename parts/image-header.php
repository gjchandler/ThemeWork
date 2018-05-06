
	<?php 
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>

	<div class="fi-wrap" style="background-image:url(<?php echo $image; ?>)">
		
		
<?php 
/*$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
echo $image;

echo "hi there";

$custom = get_post_custom();

foreach($custom as $key => $value) {
     echo $key.': '.$value.'<br />';
}

if(isset($custom['price'])) {
    echo 'Price: '.$custom['price'];
}*/
?>

	</div>

	test