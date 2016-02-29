<?php
/*
Template Name: Blog
*/

get_header(); ?>

<section class="container-fluid">
	<div id="blog" class="row">
		<h1><?php the_title(); ?></h1>
		<?php
/*
    $sticky = get_option( 'sticky_posts' );
    rsort( $sticky );
    $sticky = array_slice( $sticky, 0, 1 );

	if (is_numeric($sticky[0])) {
	    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
	        while ( have_posts() ) : the_post(); ?>
	        <article class="grid-item col-md-8 sticky">
	        	<?php echo get_the_post_thumbnail($post_id, 'large', array( 'class' => 'img-responsive' )); ?>
	        </article>
	<?php  endwhile;
	    wp_reset_query();
	}
*/
?>

		<?php
			$big = 999999999; // need an unlikely integer
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'category_name' => 'Blog',
				'post__not_in' => get_option( 'sticky_posts' ),
				'posts_per_page' => 12,
				'paged' => $paged,
				'orderby' => 'date',
				'order' => 'DESC' );
			$wp_query = new WP_Query( $args );
			while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>


<?php
	$feature = get_field('format') == 'feature';
	$square = get_field('format') == 'square';
	$horizontal = get_field('format') == 'h1';
	$vertical = get_field('format') == 'v1';
	$imgRight = get_field('format') == 'h2';
	$imgLeft = get_field('format') == 'h3';

	if ($feature) { ?>
		<article <?php post_class('grid-item col-xs-6 col-md-8 feature'); ?>>
			<a href="<?php the_permalink(); ?>">
		  		<?php echo get_the_post_thumbnail($post_id, 'large', array( 'class' => 'img-responsive' )); ?>
        	</a>
	<?php } elseif ($vertical) { ?>
		<article <?php post_class('grid-item col-xs-6 col-md-4 v1'); ?>>
			<a href="<?php the_permalink(); ?>">
		  		<?php echo get_the_post_thumbnail($post_id, 'vertical', array( 'class' => 'img-responsive' )); ?>
        	</a>
	<?php } elseif ($horizontal) { ?>
		<article <?php post_class('grid-item col-xs-6 h1'); ?>>
			<a href="<?php the_permalink(); ?>">
		  		<?php echo get_the_post_thumbnail($post_id, 'horizontal', array( 'class' => 'img-responsive' )); ?>
        	</a>
    <?php } elseif ($imgRight) { ?>
		<article <?php post_class('grid-item col-xs-6 half'); ?>>
        	<div class="col-sm-6 text">
	         <div class="cat"><?php the_category(', '); ?></div>
        	  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		      <small class="date"><?php the_time('F jS, Y') ?></small>
		      <?php the_excerpt(); ?>
		      <a class="btn-default" href="<?php the_permalink(); ?>">Read More</a>
        	</div>
        	<a href="<?php the_permalink(); ?>">
		  		<div class="col-sm-6">
			  		<?php echo get_the_post_thumbnail($post_id, 'vertical', array( 'class' => 'img-responsive' )); ?>
		  		</div>
        	</a>
    <?php } elseif ($imgLeft) { ?>
		<article <?php post_class('grid-item col-xs-6 half gradient'); ?>>
			<a href="<?php the_permalink(); ?>">
				<div class="col-sm-6">
		  		<?php echo get_the_post_thumbnail($post_id, 'vertical', array( 'class' => 'img-responsive' )); ?>
		  		</div>
        	</a>
        	<div class="col-sm-6 text">
	          <div class="cat"><?php the_category(', '); ?></div>
        	  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		      <small class="date">
			    <?php /*
$posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
					    echo $tag->name . ' ';
					  }
					}
*/ ?>
				<?php the_time('F jS, Y') ?></small>
		      <div class="excerpt"><?php the_excerpt(); ?></div>
		      <a class="btn-default" href="<?php the_permalink(); ?>">Read More</a>
			    <img class="arrow img-responsive pull-right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right.png" />
        	</div>
	<?php } else { ?>
		<article <?php post_class('grid-item col-xs-6 square'); ?>>
			<a href="<?php the_permalink(); ?>">
		  		<?php echo get_the_post_thumbnail($post_id, 'headshot', array( 'class' => 'img-responsive' )); ?>
        	</a>
	<?php } ?>
	    </article>

		<?php endwhile; ?>

		<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
		  <?php if (function_exists("wp_bs_pagination")){
		     //wp_bs_pagination($the_query->max_num_pages);
		     wp_bs_pagination();
			}
			?>
		<?php } ?>
		<div class="clear"></div>
	</div> <!-- end .row -->
</section>

<script>
/*
jQuery(document).ready(function($) {
    var $container = $('#blog').isotope({
		itemSelector : 'article',
		masonry: {
	      columnWidth: '.item',
	    },
	}).imagesLoaded(); //Isotope fix - make sure images are loaded before initializing
});
*/
</script>

<?php //$placeholdergif = get_bloginfo('template_directory').'/images/grey.gif'; ?>
<!--
<script type="text/javascript">
jQuery(document).ready(function($){
	if (navigator.platform == "iPad") return;
	jQuery("img").not(".cycle img").lazyload({
	effect:"fadeIn",
	placeholder: "<?php echo $placeholdergif; ?>"
	});
});
</script>
-->

<?php get_footer();?>