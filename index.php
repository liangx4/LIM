<title><?php wp_title(''); ?></title>

<?php get_header(); ?>


<a href="/"><h1 style="text-align:justify">Random Pieces of Mind</h1></a> 





<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><b><?php the_title(); ?></b></a></h3>

<?php 	if (have_posts()) : the_post(); 
	the_content();
	endif; 
?>
<?php edit_post_link('Edit', '<p>', '</p>'); ?>
<br/>
<br/>

<?php previous_post('&laquo;  %', '', 'yes'); ?>
  ::    <?php next_post('%  &raquo; ', '', 'yes'); ?>
<br/>

<?php get_footer(); ?>
