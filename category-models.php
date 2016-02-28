<?php get_header(); ?>

<section id="models" class="container">
	<h1 class="hidden">Our Iconic Beauty Models</h1>
	<?php
		$numCol = 2; // Set number of columns
		$counter = 0; // Start Counter
		while(have_posts()) : the_post();
		$counter ++; ?>

	<article class="col-xs-6 col-md-4 text-center view <?php if ($counter % 2 == 0) { echo "even";} ?>" id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink();?>">
		<?php if ( has_post_thumbnail() ) { ?>
	     	 <?php the_post_thumbnail('vertical', array( 'class' => 'img-responsive'));?>
		 <?php } else { ?>
				<img class="img-responsive" src="http://placehold.it/390x585/efefef/A18F45">
		 <?php } ?>
		 </a>
		 <div class="mask">
			<div class="order"><?php echo $counter; ?></div>
		    <h2><?php the_title(); ?></h2>
		    <?php $thecontent = get_the_content();
				  if(!empty($thecontent)) {
					the_excerpt();
				  } else { ?>
				  	<p>Biography here.</p>
			<?php } ?>
			<a href="<?php the_permalink();?>" class="info">View Look Book <span class="look">→</span></a>
		 </div>
		 <div class="mask-1"></div>
	</article>

	<?php endwhile;?>
</section>

<?php get_footer(); ?>