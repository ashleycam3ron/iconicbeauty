<?php
/*
Template Name: Watch Me Beauty
*/

?>

<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
<style>
.fancybox-nav { width: 60px; }
.fancybox-nav span { visibility: visible; }
.fancybox-next { right: -60px; }
.fancybox-prev { left: -60px; }
.fancybox,.fancybox img{transition: all 0.5s ease;}
.fancybox img{border: 8px solid #d2508c;margin:0 auto 10px;}
.fancybox img:hover{opacity: .9;border-color:rgba(176,255,228,1); }
#page a.fancybox{padding: 0 5px !important;}
</style>
<?php } ?>

<?php get_header(); ?>
<section id="page" class="container-fluid videos">
<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="entry">
    	<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php if( have_rows('videos') ):
		    while ( have_rows('videos') ) : the_row();
		    $image = get_sub_field('video_thumbnail');
		    $size = 'medium';
			$med = $image['sizes'][ $size ];?>

	        <a class="fancybox fancybox.iframe col-xs-12 col-sm-6 col-md-4" href="<?php the_sub_field('url'); ?>">
		        <?php if ($image){ ?>
		       		<img class="img-responsive" src="<?php echo $med; ?>"/>
		        <?php }else{ ?>
		       		<img class="img-responsive" src="http://placehold.it/400x250">
		       	<?php } ?>
		    </a>
		<?php endwhile; endif; ?>
    </article>
<?php endwhile; ?>
</section>

<script src="http://www.youtube.com/player_api"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.entry-content a').addClass('fancybox fancybox.iframe').attr('rel', 'gallery');
		jQuery(".fancybox").click(function(event) {
            event.preventDefault();
		    jQuery.fancybox({
		        'type' : 'iframe',
		        // hide the related video suggestions and autoplay the video
		        'href' : this.href.replace(new RegExp('watch\\?v=', 'i'), 'embed/') + '?rel=0&autoplay=1',
		        'overlayShow' : true,
		        'centerOnScroll' : true,
		        'speedIn' : 100,
		        'speedOut' : 50,
		        'maxWidth '	: 800,
				'maxHeight'	: 500,
				'fitToView'	: false,
				'width	  '	: '60%',
				'height	  '	: '60%',
		    });
        });
	});
</script>
<?php get_footer(); ?>