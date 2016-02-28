<?php get_header();?>
	<section class="container">
		<?php while(have_posts()) : the_post();?>

			<article class="entry col-md-10 col-md-offset-1">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</article>

		<?php endwhile;?>
	</section>

<?php if (is_page(7)){
	get_template_part('/template-parts/testimonials-carousel');
 } ?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>

<?php get_footer();?>