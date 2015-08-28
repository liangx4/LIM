<?php
/**
 * @package WordPress
 * @subpackage Dogma
 */
/*
Template Name: All Posts
*/
?>
<h3>All posts</h3>
<ul class="l">
<?php
	$query = 	"SELECT ID, post_name, post_title 
			 FROM $wpdb->posts 
			 WHERE post_type = 'post' 
			 AND post_status = 'publish' 
			 ORDER BY post_date DESC";
	$key = md5($query);
	$cache = wp_cache_get( 'mp_archives' , 'general');
	if ( !isset( $cache[ $key ] ) ) {
  		$arcresults = $wpdb->get_results($query);
  		$cache[ $key ] = $arcresults;
  		wp_cache_add( 'mp_archives', $cache, 'general' );
	} 
	else {
  		$arcresults = $cache[ $key ];
	}
	if ($arcresults) {
  		foreach ( $arcresults as $arcresult ) {
?>
	<li>
		<a href="/<?php echo "?p={$arcresult->ID}"; ?>">
			<?php echo strip_tags(apply_filters('the_title', $arcresult->post_title)); ?>
	



</a>
	</li>

<?php
		}
	}
?>
</ul>
