<?php get_header();
if (in_category(2)){
	get_template_part( 'model' );
} else { ?>
	<section class="container">
		<?php while(have_posts()) : the_post(); ?>

			<article class="entry col-xs-12">
				<h1><?php the_title();?></h1>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="col-sm-6 col-md-5"><?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?></div>

				<?php } ?>
				<div class="col-md-5"><?php the_content();?></div>
			</article>

		<?php endwhile;?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>
	</section>
<?php } ?>

<?php get_footer();?>