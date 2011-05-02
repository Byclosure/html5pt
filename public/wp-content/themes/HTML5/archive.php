<?php get_header(); ?>
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div id="container">

	<div id="content">
	
	
	
		<!-- start posts loop -->
		<div class="leadhead">
		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h4 class="pagetitle">Arquivos da categoria &#8216;<?php single_cat_title(); ?>&#8217;</h4>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h4 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h4 class="pagetitle">Arquivados para <?php the_time('F jS, Y'); ?></h4>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h4 class="pagetitle">Arquivados para <?php the_time('F, Y'); ?></h4>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h4 class="pagetitle">Arquivados para <?php the_time('Y'); ?></h4>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h4 class="pagetitle">Arquivo do autor</h4>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h4 class="pagetitle">Arquivo do Blog</h4>
 	  <?php } ?>
		</div>
		<div class="clear"></div>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
		
				
				<div class="featurethumb">
					<a href="<?php the_permalink(); ?>"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '"'); ?></a>
				</div>
				
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente para <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				<small><?php the_time('M j, y') ?> &bull; <?php the_category(', ') ?> &bull; <?php comments_popup_link('Sem Comentários &#187;', '1 Comentário &#187;', '% Comentários &#187;'); ?></small><br/>
				<?php echo pov_excerpt( get_the_excerpt(), '250'); ?><br/>

		</div>
		
		

	
		
		
		
		
		<?php endwhile; ?>

			<!-- end pagination -->
			<div class="navigation">
				<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div>
			<!-- end pagination -->

	<?php else : ?>
		
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php wp_tag_cloud('smallest=8&largest=36&'); ?>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		</div>
	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
