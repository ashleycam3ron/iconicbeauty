<article class="slides col-xs-10 col-xs-offset-1 col-sm-6 col-lg-7">
	<h2 class="hidden">Featured Images</h2>
	<?php if( have_rows('img_carousel') ){
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
	<?php } else { ?>
		<div id="carousel" class="carousel slide">
			<ol class="carousel-indicators">
	            <li class="active" data-target="#carousel" data-slide-to="0">1</li>
	            <li data-target="#carousel" data-slide-to="1">2</li>
	            <li data-target="#carousel" data-slide-to="2">3</li>
	        </ol>
			<div class="carousel-inner">
				<div class="item active" data-slide-number="0">
					<img class="img-responsive" src="http://placehold.it/800x1200/efefef/A18F45" alt="placeholder" />
				</div>
				<div class="item" data-slide-number="1">
					<img class="img-responsive" src="http://placehold.it/800x1200/efefef/A18F45" alt="placeholder" />
				</div>
				<div class="item" data-slide-number="2">
					<img class="img-responsive" src="http://placehold.it/800x1200/efefef/A18F45" alt="placeholder" />
				</div>
			</div>
			<a class="carousel-control prev" href="#carousel" data-slide="prev"></a>
			<a class="carousel-control next" href="#carousel" data-slide="next"></a>
		</div>
	<?php } ?>
	<?php if( get_field('quote')){ ?>
		<blockquote>
			<span class="quote">"</span>
			<?php the_field('quote'); ?>"
			<?php if( get_field('quote_author')){ ?><span class="author">– <?php the_field('quote_author'); ?></span><?php } ?>

		</blockquote>
	<?php } ?>
	<div class="clear"></div>
</article>