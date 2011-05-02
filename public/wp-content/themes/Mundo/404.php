<?php get_header(); ?>
<div id="container">
	<div id="content">

		<div class="post">
			<h2 class="center">No posts found. Try a different search?</h2>
				<div style="float:left;">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</div>
				
			<div style="clear: both;"></div>
				<br/>
			<h2>Or use these Tags to move on:</h2>
				<br/>
				<?php wp_tag_cloud('smallest=8&largest=36&'); ?>
		</div>
		

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>