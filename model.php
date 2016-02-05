<?php // Model Template
	get_header();?>

	<section id="model" class="container">
		<?php while(have_posts()) : the_post();?>

		<div class="row">
			<h1>Meet <?php the_title();?></h1>
			<article class="bio col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4">
				<?php if( has_post_thumbnail()){
					the_post_thumbnail('headshot', array( 'class' => 'img-circle img-responsive'));
				} else { ?>
				<img class="img-responsive img-circle" src="http://placehold.it/330x330" alt="<?php the_title();?> Headshot">
				<?php } ?>
				<h2>Biography</h2>
				<p>A woman has the age she deserves. A girl should be two things: classy and fabulous. Some people think luxury is the opposite of poverty. It is not. It is the opposite of vulgarity. Elegance is not the prerogative of those who have just escaped from adolescence, but of those who have already taken possession of their future. Fashion is not something that exists in dresses only. Fashion is in the sky, in the street, fashion has to do with ideas, the way we live, what is happening.</p>
				<p>Elegance is not the prerogative of those who have just escaped from adolescence, but of those who have already taken possession of their future. A woman has the age she deserves. A girl should be two things: classy and fabulous. Fashion is not something that exists in dresses only. Fashion is in the sky, in the street, fashion has to do with ideas, the way we live, what is happening. Fashion fades, only style remains the same.</p>
				<nav id="social">
					<h3>Connect</h3>
					<ul>
						<li><a class="facebook" target="_blank" href="#">facebook</a></li>
						<li><a class="twitter" target="_blank" href="#">twitter</a></li>
						<li><a class="instagram" target="_blank" href="#">instagram</a></li>
						<li><a class="youtube" target="_blank" href="#">youtube</a></li>
						<li><a class="google" target="_blank" href="#">google+</a></li>
						<li><a class="email" target="_blank" href="#">contact</a></li>
					</ul>
				</nav>
			</article>
			<article class="slides col-xs-10 col-xs-offset-1 col-sm-7">
				<h2 class="hidden">Featured Images</h2>
			<?php if( have_rows('img_carousel') ):
				$count = 0; ?>
				<div id="carousel" class="carousel slide">
					<ol class="carousel-indicators">
			          <?php while( have_rows('img_carousel') ): the_row(); ?>
			            <li <?php if ( $count == 0){ echo 'class="active"';} ?> data-target="#carousel" data-slide-to="<?php echo $count++; ?>"><?php echo $count; ?></li>
			          <?php endwhile;  wp_reset_postdata(); ?>
			        </ol>
					<div class="carousel-inner">
						<?php $count = 0; while( have_rows('img_carousel') ): the_row();
							$image = get_sub_field('image'); ?>

							<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>">
								<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
					<a class="carousel-control prev" href="#carousel" data-slide="prev"></a>
					<a class="carousel-control next" href="#carousel" data-slide="next"></a>
				</div>
			<?php endif; ?>
			<blockquote><?php the_field('quote'); ?>In order to be irreplaceable one must always be different. Fashion fades, only style remains the same. A girl should be two things: classy and fabulous. Fashion fades, only style remains the same. Elegance is not the prerogative of those who have just escaped from adolescence, but of those who have already taken possession of their future. -Coco Chanel</blockquote>
			<div class="clear"></div>
		</article>
	</div>
	<article id="real" class="row">
		<h2>Real Life Me</h2>
		<div class="col-md-4">
			<img class="img-responsive" src="http://placehold.it/390x550" alt="">
			<figcaption>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</figcaption>
		</div>
		<div class="col-md-4">
			<img class="img-responsive" src="http://placehold.it/390x550" alt="">
			<figcaption>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</figcaption>
		</div>
		<div class="col-md-4">
			<img class="img-responsive" src="http://placehold.it/390x550" alt="">
			<figcaption>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</figcaption>
		</div>
	</article>
	<section id="inspiration" class="row">


		<article class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4">
			<h2>Headline</h2>
			<h3>Subheading</h3>
			<p>Some people think luxury is the opposite of poverty. It is not. It is the opposite of vulgarity. Some people think luxury is the opposite of poverty. It is not. It is the opposite of vulgarity. Fashion is always of the time in which you live. It is not something standing alone. But the grand problem, the most important problem, is to rejeuvenate women. To make women look young. Then their outlook changes. They feel more joyous. Luxury must be comfortable, otherwise it is not luxury. Fashion is not something that exists in dresses only. Fashion is in the sky, in the street, fashion has to do with ideas, the way we live, what is happening.</p>

	<p>Fashion is always of the time in which you live. It is not something standing alone. But the grand problem, the most important problem, is to rejeuvenate women. To make women look young. Then their outlook changes. They feel more joyous. A girl should be two things: classy and fabulous. A woman has the age she deserves. A woman has the age she deserves. Fashion is made to become unfashionable.</p>
		</article>
		<article class="inspiration col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-8">
			<h2>What makes me smile... & gives me inspiration.</h2>
			<div class="images">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
				<img class="img-responsive" src="http://placehold.it/200x200" alt="">
			</div>
		</article>
		<?php the_content();?>

		<?php endwhile;?>
	</section>
</div>
<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: false
		});
	});

<?php if ( wp_is_mobile() ) { ?>
	jQuery(document).ready(function() {
	   jQuery("#carousel").swiperight(function() {
	      jQuery(this).carousel('prev');
	    });
	   jQuery("#carousel").swipeleft(function() {
	      jQuery(this).carousel('next');
	   });
	});
<?php } ?>
</script>
<?php get_footer();?>