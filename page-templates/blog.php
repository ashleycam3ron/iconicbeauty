<?php
/*
Template Name: Blog
*/

get_header(); ?>

<section id="blog" class="container-fluid">
	<div class="row">
		<h1><?php the_title(); ?></h1>
		<?php
    $sticky = get_option( 'sticky_posts' );
    rsort( $sticky );
    $sticky = array_slice( $sticky, 0, 1 );

	if (is_numeric($sticky[0])) {
	    /* Query sticky posts */
	    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
	        while ( have_posts() ) : the_post(); ?>
	        <article class="item col-md-8 sticky">
	        	<?php echo get_the_post_thumbnail($post_id, 'large', array( 'class' => 'img-responsive' )); ?>
	        </article>
	<?php  endwhile;
	    wp_reset_query();
	}
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

	    <article <?php post_class('item col-xs-6 col-md-4'); ?>>
			<?php if ( has_post_thumbnail()) { ?>
              <a href="<?php the_permalink(); ?>">
			  	<?php echo get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'img-responsive' )); ?>
              </a>
            <?php } ?>
<!--
		      <h3><?php the_title(); ?></h3>
		      <small class="date">
			    by <?php $posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
					    echo $tag->name . ' ';
					  }
					} ?>
				on <?php the_date('F d, Y'); ?></small>
		      <div class="excerpt"><?php the_excerpt(); ?></div>
-->
	    </article>

		<?php endwhile; ?>

		<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
		  <?php if (function_exists("wp_bs_pagination")){
		     //wp_bs_pagination($the_query->max_num_pages);
		     wp_bs_pagination();
			}
			?>
		<?php } ?>

	</div> <!-- end .row -->
</section>

<script>
var $container = jQuery('#blog row');
// init
$container.packery({
  itemSelector: '.item',
  columnWidth: '.grid-sizer',
  percentPosition: true,
  gutter: 0
});
</script>
<?php get_footer();?>