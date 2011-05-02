<script type='text/javascript'> 
$(document).ready(function(){
  $('#celebs ul > li ul')
    .click(function(e){
      e.stopPropagation();
    })
    .filter(':not(:first)')
    .hide();
    
  $('#celebs ul > li').click(function(){
    var selfClick = $(this).find('ul:first').is(':visible');
    if(selfClick) {
      return;
    }
    $(this)
      .parent()
      .find('> li ul:visible')
      .slideToggle();
    
    $(this)
      .find('ul:first')
      .stop(true, true)
      .slideToggle();
  });
});
</script> 





<div id="celebs">

<?php 
	$featucat = get_option('pov_slide_category');
	$my_query = new WP_Query('showposts=5&category_name='. $featucat .'');	 
	if ($my_query->have_posts()) :
?>

<ul id="accordion">
<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
        	<li class="active">
        		<h3>
				<?php 
				// short_title($after, $length)
				echo short_title('...', 8); 
				?>
                </h3>
                
        		<ul>
                	
        			<li>
                    
                    
                    <div class="image"><a href="<?php the_permalink() ?>"><?php dp_attachment_image($post->ID, 'Large', 'alt="' . $post->post_title . '"'); ?></a></div>
              		<small><?php the_category(', ') ?> &bull; <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small>
                    <div style="float:right"><small><a href="<?php the_permalink() ?>">Read More &rarr;</a></small></div></li>
            </ul>
        	</li>
<?php endwhile; ?>        	
</ul> 

<?php endif; ?>       
</div>
