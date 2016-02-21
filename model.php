<?php // Model Template
	get_header();?>

	<section id="model" class="container">
		<?php while(have_posts()) : the_post();?>

		<div class="row">
			<h1>Meet <?php the_title();?></h1>
			<article class="bio col-xs-10 col-xs-offset-1 col-sm-5 col-md-4 col-lg-offset-0">
				<?php
					$image = get_field('headshot');
					if( !empty($image) ):
						$url = $image['url'];
						$title = $image['title'];
						$alt = $image['alt'];
						$caption = $image['caption'];

						// thumbnail
						$size = 'headshot';
						$headshot = $image['sizes'][ $size ];
					endif; ?>
				<?php if( get_field('headshot')){ ?>
					<img class="img-circle img-responsive" src="<?php echo $headshot; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
				<?php } else { ?>
					<img class="img-responsive img-circle" src="http://placehold.it/350x350/efefef/A18F45" alt="<?php the_title();?> Headshot">
				<?php } ?>
				<h2>Biography</h2>
				<?php $thecontent = get_the_content();
					  if(!empty($thecontent)) { the_content(); } else { ?>Biography here. <?php } ?>
				<nav id="social">
					<h3>Connect</h3>
					<ul>
						<?php if (get_field('facebook')){ ?><li><a class="facebook" target="_blank" href="<?php the_field('facebook'); ?>">facebook</a></li><?php } ?>
						<?php if (get_field('twitter')){ ?><li><a class="twitter" target="_blank" href="<?php the_field('twitter'); ?>">twitter</a></li><?php } ?>
						<?php if (get_field('instagram')){ ?><li><a class="instagram" target="_blank" href="<?php the_field('instagram'); ?>">instagram</a></li><?php } ?>
						<?php if (get_field('youtube')){ ?><li><a class="youtube" target="_blank" href="<?php the_field('youtube'); ?>">youtube</a></li><?php } ?>
						<?php if (get_field('google')){ ?><li><a class="google" target="_blank" href="<?php the_field('google'); ?>">google+</a></li><?php } ?>
						<?php if (get_field('email')){ ?><li><a class="email" target="_blank" href="mailto:<?php the_field('email'); ?>">contact</a></li><?php } ?>
					</ul>
				</nav>
			</article>
			<?php get_template_part('/template-parts/model-slider'); ?>
	</div>
	<article id="real" class="row">
		<h2><span>Real Life Me</span></h2>
		<?php if( have_rows('real_life') ) { ?>
			<?php while( have_rows('real_life') ): the_row();
				$image = get_sub_field('real_image');
				$vertical = $image['sizes']['vertical'];
				$caption = $image['caption']; ?>
			<div class="col-xs-6 col-sm-4 col-sm-offset-0">
				<img class="img-responsive" src="<?php echo $vertical; ?>" alt="<?php echo $image['alt'] ?>" />
				<?php if( $caption ): ?><figcaption><?php echo $image['caption']; ?></figcaption><?php endif; ?>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		<?php } else { ?>
			<div class="col-xs-6 col-sm-4 col-sm-offset-0">
				<img class="img-responsive" src="http://placehold.it/390x585/efefef/A18F45" alt="placeholder">
				<figcaption>Caption here.</figcaption>
			</div>
			<div class="col-xs-6 col-sm-4 col-sm-offset-0">
				<img class="img-responsive" src="http://placehold.it/390x585/efefef/A18F45" alt="">
				<figcaption>Caption here.</figcaption>
			</div>
			<div class="col-xs-6 col-sm-4 col-sm-offset-0">
				<img class="img-responsive" src="http://placehold.it/390x585/efefef/A18F45" alt="">
				<figcaption>Caption here.</figcaption>
			</div>
		<?php } ?>
	</article>

	<section id="inspiration" class="row">
		<article class="col-xs-10 col-xs-offset-1 col-sm-5 col-md-4 col-lg-offset-0 ">
			<?php if (get_field('content')){ ?>
				<?php the_field('content'); ?>
			<?php } else { ?>
				<h2>Headline</h2>
				<h3>Subheading</h3>
				<p>Content Here</p>
			<?php } ?>
		</article>
		<article class="inspiration col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-0 col-lg-8">
			<h2 class="smile">What makes me smile... <br/><span><span class="amp">&</span> gives me inspiration.</span></h2>
			<?php if (get_field('inspiration')){ ?>
				<section id="gallery" class="images">
				 <?php $images = get_field('inspiration');
					if( $images ): ?>
		            <?php foreach( $images as $image ): ?>
		            <img class="img-responsive" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['title']; ?>" />
		            <?php endforeach; ?>
			    </section>
				<?php endif; ?>
			<?php } else { ?>
				<div class="images">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
					<img class="img-responsive placeholder" src="http://placehold.it/200x200/eeeeee/A18F45" alt="placeholder">
				</div>
			<?php } ?>
		</article>
	</section>
	<?php get_template_part('/template-parts/models-carousel'); ?>

	<?php endwhile;?>
</section>
<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: false
		});
	});

<?php if ( wp_is_mobile() ) { ?>
	jQuery(document).ready(function($) {
		$(".carousel-inner").swipe( {
			//Generic swipe handler for all directions
			swipeLeft:function(event, direction, distance, duration, fingerCount) {
				$(this).parent().carousel('prev');
			},
			swipeRight: function() {
				$(this).parent().carousel('next');
			},
			//Default is 75px, set to 0 for demo so any distance triggers swipe
			threshold:0
		});
	});
<?php } ?>
</script>
<?php get_footer();?>