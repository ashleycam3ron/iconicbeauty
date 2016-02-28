<section id="testimonials" class="container">
	<h1 class="hidden">Testimonials</h1>
	<?php
		$args = array(
			'post_type' => 'post',
			'category_name' => 'Testimonials',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC' );
		$testimonials = new WP_Query( $args );

		if( $testimonials->have_posts() ) : ?>
			<div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
				<ul class="carousel-inner">
				  <?php
					$total = count( $testimonials );
					$counter = 0;
					while ( $testimonials->have_posts() ) : $testimonials->the_post();
						$counter++; ?>
						<li class="item <?php if ($counter == 1) { ?>active<?php } ?>">
						    <article class="entry col-sm-6 col-md-4 text-center" id="post-<?php the_ID(); ?>">
							    <img class="quote" src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="quote"/>
							    <div class="excerpt"><?php the_excerpt(); ?></div>
							    <hr>
							    <p class="author"><?php the_title(); ?></p>
								<?php if ( has_post_thumbnail()) { the_post_thumbnail('thumbnail', array( 'class' => 'img-circle' )); } ?>
						    </article>
						</li>
						<?php endwhile;
						  wp_reset_postdata();?>
				</ul>
			</div>
		<?php endif; ?>

		<!-- Controls -->
		<a class="left carousel-control" href="#testimonials-carousel" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#testimonials-carousel" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
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