<?php get_header(); ?>

<section id="models" class="container">
	<h1 class="hidden">Our Iconic Beauty Models</h1>
<?php if (have_posts()) : ?>
	<div id="carousel" class="carousel slide">
    	<?php $slider = new WP_Query(array(
				'post_type' => 'post',
				'cat'		=> 2,
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				));
			  $count = 0;
		    ?>
        <ol class="carousel-indicators">
          <?php while($slider->have_posts()): $slider->the_post(); ?>
            <li <?php if ( $count == 0){ echo 'class="active"';} ?> data-target="#carousel" data-slide-to="<?php echo $count++; ?>"></li>
          <?php endwhile;  wp_reset_postdata(); ?>
        </ol>

        <div class="carousel-inner">
          <?php
			       $count = 0;
             while ($slider->have_posts()) : $slider->the_post();
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
             ?>
			<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;">
			     <h3><?php the_title();?></h3>
			</div><!-- item active -->
			<?php endwhile; wp_reset_postdata(); ?>

        </div>
        <a class="carousel-control prev" href="#carousel" data-slide="prev"></a>
        <a class="carousel-control next" href="#carousel" data-slide="next"></a>
    </div><!-- end #carousel -->



<!--
	<article class="col-sm-3 text-center col" id="post-<?php the_ID(); ?>">
		<?php if ( has_post_thumbnail() ) { ?>
	     	 <?php the_post_thumbnail('medium', array( 'class' => 'img-responsive'));?>
		 <?php } else { ?>
				<img class="img-responsive img-circle" src="http://placehold.it/250x250">
		 <?php } ?>
		<h2><?php the_title(); ?></h2>
	</article>

-->

<?php else : ?>
	<h2>Not Found</h2>
<?php endif; ?>
</section>

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
<?php get_footer(); ?>