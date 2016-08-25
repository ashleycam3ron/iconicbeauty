<?php
/*
Template Name: 2017 Landing Page
*/

get_header(); ?>

<div id="twentyseventeen" class="container-fluid">
	<h1 class="hidden">2017 Iconic Beauty – Look Good, Feel Good, Do Good Event</h1>
	<section id="welcome" class="container">
		<img style="margin: auto" class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/2017-Iconic-Beauty.png" alt="2017 Iconic Beauty"/>
		<div class="col-xs-10 col-xs-offset-1 col-md-6 col-sm-offset-0">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/hello-beauty.png" alt="Hello Beauty" />
		</div>
		<div class="entry col-xs-10 col-sm-offset-1 col-md-6 col-md-offset-0">
			<?php the_content(); ?>
		</div>
	</section>
	<section id="mission" class="container">
		<div class="col-sm-6">
			<?php $image = get_field('mission_image');
				$alt = $image['alt'];
				$size = 'large';
				$medium = $image['sizes'][ $size ]; ?>
			<img class="img-responsive" style="width: 100%;height:auto;" src="<?php echo $medium;?>" alt="<?php echo $alt ?>" />
		</div>
		<div class="col-sm-6 accordion">
			<h2><?php the_field('title');?></h2>
			<div><?php the_field('mission');?></div>
			<h2><?php the_field('title2');?></h2>
			<div><?php the_field('vision');?></div>
			<h2><?php the_field('title1');?></h2>
			<div><?php the_field('position');?></div>
		</div>
	</section>
	<section id="pledge" class="row">
		<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			<?php the_field('pledge');?>
		</div>
		<div class="gradient-black"></div>
	</section>
	<section id="expect">
		<h2><?php the_field('title3');?></h2>
		<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			<?php the_field('expect');?>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/detail2.png" style="margin:auto;position: relative;display: block;clear: both;" alt="detail"/>
		<div class="col-md-4">
			<h3>Look Good</h3>
		</div>
		<div class="col-md-4">
			<h3>Feel Good</h3>
		</div>
		<div class="col-md-4">
			<h3>Do Good</h3>
		</div>
	</section>
	<section id="dates" class="row">
		<h2>Dates &amp; Location</h2>
		<div class="col-md-10 col-md-offset-2"><?php the_field('dates');?></div>
	</section>
	<section id="invest" class="row">
		<h2><span>The</span> Investment</h2>
		<div class="col-md-10 col-md-offset-1"><?php the_field('investment');?></div>
	</section>
	<section id="testimonials2" class="row">
		<h2>Testimonials</h2>

		<div id="allSlides" style="display:none;">
		<?php if( have_rows('models') ):
		    $count = 0; ?>
			<?php while( have_rows('models') ): the_row();
				$slide = $count++;
				$quote = get_sub_field('quote');
				$author = get_sub_field('author');
				$title = get_sub_field('author_title');
				$authorImage = get_sub_field('author_image');
				$alt = $authorImage['alt'];
				$thumb = $authorImage['sizes']['thumbnail']; ?>

				<div class="item <?php if (  $slide == 0){ echo 'active';};?>" data-project='1'>
					<div class="col-md-10 col-md-offset-2">
						<img style="float: left;" src="<?php echo get_stylesheet_directory_uri();?>/images/quote.png" alt="quote"/>
					    <div class="col-md-8"><?php echo $quote; ?></div>
						<div class="author">
							<img class="img-circle" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
					   		<p class="name"><?php echo $author; ?></p>
					   		<p class="title"><?php echo $title; ?></p>
					    </div>
				    </div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

	    <?php if( have_rows('moms') ):
		    $count = 0; ?>
			<?php while( have_rows('moms') ): the_row();
				$slide = $count++;
				$quote = get_sub_field('quote');
				$author = get_sub_field('author');
				$title = get_sub_field('author_title'); ?>

				<div class="item <?php if (  $slide == 0){ echo 'active';};?>" data-project='2'>
					<div class="col-md-10 col-md-offset-2">
						<img style="float: left;" src="<?php echo get_stylesheet_directory_uri();?>/images/quote.png" alt="quote"/>
					    <div class="col-md-8"><?php echo $quote; ?></div>
						<div class="author">
					   		<p class="name"><?php echo $author; ?></p>
					   		<p class="title"><?php echo $title; ?></p>
					    </div>
				    </div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('applicants') ):
		    $count = 0; ?>
			<?php while( have_rows('applicants') ): the_row();
				$slide = $count++;
				$quote = get_sub_field('quote');
				$author = get_sub_field('author');
				$title = get_sub_field('author_title'); ?>

				<div class="item <?php if (  $slide == 0){ echo 'active';};?>" data-project='3'>
					<div class="col-md-10 col-md-offset-2">
						<img style="float: left;" src="<?php echo get_stylesheet_directory_uri();?>/images/quote.png" alt="quote"/>
					    <div class="col-md-8"><?php echo $quote; ?></div>
						<div class="author">
					   		<p class="name"><?php echo $author; ?></p>
					   		<p class="title"><?php echo $title; ?></p>
					    </div>
				    </div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

		<ol class="carousel-linked-projects pagination">
		  <li class="active"><a href="#1" data-project='1'>Reigning Models</a></li>
		  <li><a href="#2" data-project='2'>Iconic Beauty Moms</a></li>
		  <li><a href="#3" data-project='3'>Former Applicants</a></li>
		</ol>

		<div class="col-md-10 col-md-offset-1" style="background: white;min-height: 100%;">
			<div id="myCarousel" class="carousel slide">
			  <!-- Carousel items -->
			  <img class="img-responsive title" src="<?php echo get_stylesheet_directory_uri();?>/images/reigning-iconic-beauty-models-title.png" alt="Reigning Iconic Beauty Models"/>
			   <div class="carousel-inner">

			    <?php if( have_rows('models') ):
				    $count = 0; ?>
					<?php while( have_rows('models') ): the_row();
						$slide = $count++;
						$quote = get_sub_field('quote');
						$author = get_sub_field('author');
						$title = get_sub_field('author_title');
						$authorImage = get_sub_field('author_image');
						$alt = $authorImage['alt'];
						$thumb = $authorImage['sizes']['thumbnail']; ?>

						<div class="item <?php if (  $slide == 0){ echo 'active';};?>" data-project='1'>
							<div class="col-md-10 col-md-offset-2">
								<img style="float: left;" src="<?php echo get_stylesheet_directory_uri();?>/images/quote.png" alt="quote"/>
							    <div class="col-md-8"><?php echo $quote; ?></div>
								<div class="author">
									<img class="img-circle" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
							   		<p class="name"><?php echo $author; ?></p>
							   		<p class="title"><?php echo $title; ?></p>
							    </div>
						    </div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			  </div>

			  <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
			</div>
			<!-- LINKED NAV -->
			<!--
<ol class="carousel-linked-nav pagination">
			  <li class="active"><a href="#1">1</a></li>
			  <li><a href="#2">2</a></li>
			  <li><a href="#3">3</a></li>
			</ol>
-->

		</div>

	</section>
	<section id="registration" class="row text-center">
		<h2>Registration</h2>
		<div class="container">
			<?php the_field('registration');
				$file = get_field('packet');
			?>
			<a class="btn-default" href="<?php echo $file['url']; ?>">Start Your Journey Today</a>
			<a class="btn-default" href="/2017-faqs">2017 FAQs</a>
		</div>
	</section>
	<section id="checklist" class="row">
		<h2>The Checklist</h2>
		<div class="container"><?php the_field('checklist');?></div>
	</section>
</div>

<script>
  jQuery(function() {
    $( ".accordion" ).accordion({heightStyle: "content"});
  });


 var myCarousel = $('#myCarousel')
, carouselLinkedNav = $('.carousel-linked-nav')
, carouselLinkedProjects = $('.carousel-linked-projects')
, allSlides = $('#allSlides').find('div.item')
// invoke the carousel
$('#myCarousel').carousel({
  interval: 3000
});

/* SLIDE ON CLICK */

carouselLinkedNav.find('li > a').click(function() {
    var $this = $(this)
    // grab href, remove pound sign, convert to number
      , item = $this.attr('href').substring(1) | 0;

    // slide to number -1 (account for zero indexing)
    $('#myCarousel').carousel(item - 1);

    // remove current active class
    carouselLinkedNav.find('.active').removeClass('active');

    // add active class to just clicked on item
    $this.closest('li').addClass('active');

    // don't follow the link
    return false;
});

carouselLinkedProjects.find(' li > a').click(function() {
    carouselLinkedProjects.find('li').removeClass('active')
    $(this).closest('li').addClass('active')

    var currentProject = $(this).data('project')

     myCarousel.find('.item').remove()
     $slides = allSlides.filter( function () {
          return $(this).data('project') == currentProject
     })

     $slides.eq(0).addClass('active')

     console.log(this, currentProject , $slides )

     myCarousel.find('.carousel-inner').append($slides)

     myCarousel.carousel("pause").removeData().carousel(0)

    return false
});
/* AUTOPLAY NAV HIGHLIGHT */

// bind 'slid' function
myCarousel.bind('slid', function() {

    // remove active class
    carouselLinkedNav.find('.active').removeClass('active');

    // get index of currently active item
    var idx = myCarousel.find('item.active').index();

    // select currently active item and add active class
    $('.carousel-linked-nav li:eq(' + idx + ')').addClass('active');

});

  </script>


<?php get_footer();?>