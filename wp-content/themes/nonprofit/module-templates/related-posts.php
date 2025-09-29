<?php
/**
 * Related Posts.
 *
 */

$options = get_option('vslmd_options');

$related_posts_heading = $options['related_posts_heading'] ?: 'Recommended For You';
$related_posts_image = $options['related_posts_image'] ?: '';
$related_posts_excerpt = $options['related_posts_excerpt'] ?: '';
$related_posts_image_resolution = $options['related_posts_image_resolution'] ?: 'thumbnail';
$related_posts_value = $options['related_posts_value'] ?: '6';

?>

<div class="visualmodo-related-posts">

<h3 class="visualmodo-related-posts-title wrapper"><?php echo $related_posts_heading; ?></h3>

<?php

function get_excerpt(){
	$options = get_option('vslmd_options');
	$related_posts_excerpt_value = $options['related_posts_excerpt_value'] ?: '60';
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $related_posts_excerpt_value);
	return $excerpt;
}

$related = get_posts( 
	array( 
		'category__in' => wp_get_post_categories(get_the_ID()), 
		'numberposts' => $related_posts_value, 
		'post__not_in' => array(get_the_ID()) 
	) 
);

if( $related ) ?>

<div class="card-columns"> 

<?php foreach( $related as $post ) {
setup_postdata($post); ?>
	<div class="card">
		<a rel="bookmark" href="<?php the_permalink(); ?>">

			<?php if ($related_posts_image == true) { the_post_thumbnail( $related_posts_image_resolution, array( 'class' => 'card-img-top' ) ); } ?>
			
			<div class="card-body">
				<h6 class="card-title"><?php the_title(); ?></h6>
				<?php if ($related_posts_excerpt == true) { echo '<p>'. get_excerpt() .'</p>'; } ?>
			</div>

		</a>
	</div>
<?php } ?>

</div>

<?php wp_reset_postdata(); ?>