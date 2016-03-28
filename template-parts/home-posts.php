<section id="posts" class="container">
	<h4 class="hidden">Featured Posts</h4>
	<?php
		$args = array(
			'post_type' => 'post',
			'category_name' => 'Home',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC' );
		$home = new WP_Query( $args );

		if( $home->have_posts() ) : ?>
				<ul>
				  <?php while ( $home->have_posts() ) : $home->the_post(); ?>
					<li class="col-xs-6 col-md-4" id="post-<?php the_ID(); ?>">
					    <article>
							<div class="border">
						    	<div class="text">
								    <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
								    <hr>
								    <p class="date"><?php the_time('F j, Y'); ?></p>
								    <?php the_excerpt(); ?>
								    <a href="<?php echo the_permalink(); ?>"><img class="arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-gradient.png" alt="arrow"/></a>
							    </div>
						    </div>
							<div class="mask"></div>
							<?php if ( has_post_thumbnail()) { the_post_thumbnail('medium', array( 'class' => 'img-responsive' )); } ?>
					    </article>
					</li>
					<?php endwhile;
					  wp_reset_postdata();?>
				</ul>
		<?php endif; ?>

</section>

<script>
jQuery(document).ready(function($) {
	$('#testimonials-carousel').carousel({
	  interval: 10000
	});
<?php if ( !wp_is_mobile() ) { ?>
	$('.carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));

	  if (next.next().length>0) {
	    next.next().children(':first-child').clone().appendTo($(this));
	  }
	  else {
	  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});
	<?php } ?>
});
</script>