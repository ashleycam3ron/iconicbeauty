<?php get_header(); ?>

<?php the_post_thumbnail('full',array('class' => 'feature')); ?>
<div id="home" class="container-fluid">
    <section id="intro" class="row">
	    <h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>
		<article>
			<div class="col-xs-10 col-xs-offset-1">
				<?php if (get_field('title')){ ?><h2><?php the_field('title'); ?></h2><?php } ?>
				<?php if (get_field('subheading')){ ?><h3><span><?php the_field('subheading'); ?></span></h3><?php } ?>
			</div>
			<div class="content col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1">
				<?php the_content(); ?></div>
			<div class="responsive-video col-xs-10 col-xs-offset-1 col-sm-10 col-md-offset-0 col-md-5">
			  <iframe class="responsive-video iframe" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/rDh0i9UvKZc"></iframe>
			</div>
		</article>
    </section><!-- end .row -->

	<?php if( have_rows('custom_layouts') ):
		    while ( have_rows('custom_layouts') ) : the_row();
				$image = get_sub_field('image');
		        if( get_row_layout() == '2_col_1' ): ?>
				<section id="products" class="row">
		        	<div class="content col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1">
		        		<?php the_sub_field('text'); ?>
		        	</div>
		        	<img class="img-responsive hidden-xs col-sm-4 col-sm-offset-1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
				</section>
		        <?php elseif( get_row_layout() == '2_col_2' ): ?>
		        <section id="tours" class="row">
					<img class="img-responsive col-xs-8 col-sm-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
		        	<div class="content col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1">
		        		<?php the_sub_field('text'); ?>
		        	</div>
		        </section>
		        <?php endif;
		    endwhile;
		else :
		    // no layouts found
		endif; ?>
</div>

<?php get_footer(); ?>