<div class="comments">
	<div class="wrapper">
		<?php if (post_password_required()) : ?>
			<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'thoughtstheme' ); ?></p>
			</div>
		<?php return; endif; ?>

		<?php if (have_comments()) : ?>

			<h2><?php comments_number(); ?></h2>

			<ul>
				<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
			</ul>

		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p><?php _e( 'Comments are closed here.', 'thoughtsthemes' ); ?></p>

		<?php endif; ?>

		<?php comment_form(array(
			'title_reply' => '',
			'comment_notes_before' => '',
			'comment_notes_after' => ''
	//		'comment_notes_after' => '<p class="milli color--light mb--">You may use some HTML tags in your comment.</p>'
		)); ?>
	</div>
</div>
