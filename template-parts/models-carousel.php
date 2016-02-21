<section id="beauties" class="row">

	<h1>Iconic Beauties</h1>
		<?php
			if ( wp_is_mobile() ) { $divider = 6; } else { $divider = 9; }
			$models = new WP_Query( array( 'cat' => 2, 'posts_per_page' => -1, 'orderby' => 'title', 'order'   => 'ASC' ) ); ?>
			<?php if( $models->have_posts() ) : ?>
				<div id="mini-carousel" class="carousel slide" data-ride="carousel">
					<ul class="carousel-inner">
						<li class="item active">
							<?php
								$total = count( $models );
								$counter = 0;
								while( $models->have_posts() ) : $models->the_post();
									$counter++; ?>

							<a href="<?php the_permalink(); ?>" class="img-<?php echo $counter; ?>" rel="mini">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
								} else { ?>
									<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
							<?php } ?>
							</a>
							<?php $current_position = $models->current_post + 1; // current_post starts at 0
								//if position is equal to the divider and not the last result close the currently open div and start another
								if ( $current_position < $models->found_posts && $current_position % $divider == 0 ) : ?>
									</li><li class="item">
							<?php endif; ?>
						<?php endwhile;
							  wp_reset_postdata();?>
					  	</li>
					</ul>
				</div>
			<?php endif; ?>

			<!-- Controls -->
			<a class="left carousel-control" href="#mini-carousel" role="button" data-slide="prev">
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#mini-carousel" role="button" data-slide="next">
				<span class="sr-only">Next</span>
			</a>

		  </div>
</section>

<script>
jQuery(document).ready(function($) {
	$('#mini-carousel').carousel({
	  interval: 6000
	});
});
</script>