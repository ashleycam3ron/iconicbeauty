<?php
/*
Template Name: 2017 Landing Page
*/

get_header(); ?>

<div id="twentyseventeen" class="container-fluid">
	<h1 class="hidden">2017 Iconic Beauty – Look Good, Feel Good, Do Good Event</h1>

	<div id="navbar-menu" class="hidden-xs">
		<div class="arrow"></div>
		<h4>Menu</h4>
		<ul class="nav">
		  	<li><a class="page-scroll" href="#welcome">Welcome</a></li>
		  	<li><a class="page-scroll" href="#mission">Mission</a></li>
		  	<li><a class="page-scroll" href="#pledge">Pledge</a></li>
		  	<li><a class="page-scroll" href="#expect">What To Expect</a></li>
		  	<li><a class="page-scroll" href="#dates">Event Dates</a></li>
		  	<li><a class="page-scroll" href="#invest">Investment</a></li>
		  	<li><a class="page-scroll" href="#testimonials2">Testimonials</a></li>
		  	<li><a class="page-scroll" href="#registration">Registration</a></li>
		  	<li><a class="page-scroll" href="#checklist">Checklist</a></li>
		</ul>
	</div>


	<section id="welcome" class="container">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1" style="padding:0;"><img style="margin: 5% auto 6%;" class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/2017-Iconic-Beauty.png" alt="2017 Iconic Beauty"/></div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-sm-offset-0">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/hello-beauty.png" alt="Hello Beauty" />
		</div>
		<div class="entry col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0">
			<?php the_content(); ?>
		</div>
	</section>
	<section id="mission" class="container">
		<div class="col-sm-6">
			<?php $image = get_field('mission_image');
				$alt = $image['alt'];
				$size = 'large';
				$medium = $image['sizes'][ $size ]; ?>
			<img class="img-responsive" style="width: 100%;height:auto;margin-bottom: 4px;" src="<?php echo $medium;?>" alt="<?php echo $alt ?>" />
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
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			<?php the_field('pledge');?>
		</div>
		<div class="gradient-black"></div>
	</section>
	<section id="expect">
		<h2><?php the_field('title3');?></h2>
		<div class="col-sm-10 col-sm-offset-1">
			<?php the_field('expect');?>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/detail2.png" style="margin:auto;position: relative;display: block;clear: both;" alt="detail"/>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center" style="padding: 0;margin-top: 2.5%;margin-bottom: 5%;">
			<div class="col-sm-6 col-md-4">
				<div class="num">1</div>
				<h3>Look Good</h3>
				<p>This is the part where we put the BEAUTY in ICONIC BEAUTY!</p>
				<h4>PHOTOSHOOTS</h4>
				<p>With some of ICONIC BEAUTY’s favorite photographers</p>
				<h4>FASHION SHOW & AFTER PARTY</h4>
				<p>Strut your stuff up and down the ICONIC BEAUTY runway during our 2017 Fashion Show then enjoy cocktails, hors d’oeuvres, networking and lots of fun and good times at the Official ICONIC BEAUTY After Party.</p>
				<h4>RED CARPET INTERVIEWS</h4>
				You’ll get the authentic “celebrity” experience when all eyes are on you as you’re gracing the ICONIC BEAUTY Red Carpet for your interviews and photos with Bryiana and the reigning ICONIC BEAUTY Dream Team.</p>
				<div class="mask-1"></div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="num">2</div>
				<h3>Feel Good</h3>
				<p>Naturally, when you Look Good, you Feel Good. But at ICONIC BEAUTY, we’re taking that Feel Good to a whole different level so you feel your BEST.</p>
				<h4>ORIENTATION + PANEL</h4>
				<p>Bryiana will host an opening orientation to share more about herself, her story, and Iconic Beauty. Then open up a panel discussion with reigning ICONIC BEAUTY Models to introduce you to them, their stories and their successes.</p>
				<h4>MENTORED WORKSHOPS + BREAKOUT SESSIONS</h4>
				<p>Everyone will breakout into smaller, more intimate groups where the reigning ICONIC BEAUTY Models will act as “Team Leaders”. During these sessions, you’ll learn how to personally develop yourself, participate in hands on activities, bonding, mentorship and Q&A’s.</p>
				<div class="mask-1"></div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="num">3</div>
				<h3>Do Good</h3>
				<p>ICONIC BEAUTY is huge on philanthropy! The entire event will be centered around not only living your own dreams, having a more developed sense of gratitude for all your blessings, but will also focus on charitable giving.</p>
				<div class="mask-1"></div>
			</div>
		</div>
		<div style="clear:both;"></div>
	</section>
	<section id="dates" class="row">
		<h2>Dates &amp; Location</h2>
		<div class="col-md-10 col-md-offset-1"><?php the_field('dates');?></div>
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
					<div class="col-md-9 col-md-offset-2">
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

				<div class="item <?php if ( $slide == 0){ echo 'active';};?>" data-project='2'>
					<div class="col-md-9 col-md-offset-2">
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

				<div class="item <?php if ( $slide == 0){ echo 'active';};?>" data-project='3'>
					<div class="col-md-9 col-md-offset-2">
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

		<div class="col-md-10 col-md-offset-1" style="background: white;min-height: 100%;max-width: 100%;">
			<div id="myCarousel" class="carousel slide">
			  <!-- Carousel items -->
			  <img class="img-responsive active title title1" src="<?php echo get_stylesheet_directory_uri();?>/images/reigning-iconic-beauty-models-title.png" alt="Reigning Iconic Beauty Models"/>
			  <img class="img-responsive title title2" src="<?php echo get_stylesheet_directory_uri();?>/images/ib-moms.png" alt="Iconic Beauty Moms"/>
			  <img class="img-responsive title title3" src="<?php echo get_stylesheet_directory_uri();?>/images/ib-applicants.png" alt="Former Iconic Beauty Applicants"/>
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
							<div class="col-md-9 col-md-offset-2">
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
			<a class="btn-default" target="_blank" href="<?php echo $file['url']; ?>">Start Your Journey Today</a>
			<a class="btn-default" target="_blank" href="/blog/2017-event-faqs/">2017 FAQs</a>
		</div>
	</section>
	<section id="checklist" class="row">
		<h2><span>The</span> Checklist</h2>
		<div class="col-xs-12 col-sm-9 col-sm-offset-2">
			<div class="col-md-6">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/checklist.png" alt="Mail to"/>
				<?php the_field('checklist');?></div>
			<div class="col-md-6">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/mailto.png" alt="Mail to"/>
			</div>
		</div>
	</section>
</div>

<script>
	jQuery('body').scrollspy({target: "#navbar-menu"})
	//jQuery to collapse the navbar on scroll
	jQuery(window).scroll(function() {
	    if (jQuery("#navbar-menu .nav").offset().top > 20) {
	        jQuery("#navbar-menu .nav").addClass("top-nav-collapse");
	    } else {
	        jQuery("#navbar-menu .nav").removeClass("top-nav-collapse");
	    }
	});

	//jQuery for page scrolling feature - requires jQuery Easing plugin
	jQuery(function() {
	    jQuery('a.page-scroll').bind('click', function(event) {
	        var $anchor = $(this);
	        jQuery('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1500, 'easeInOutExpo');
	        event.preventDefault();
	    });
	});
</script>
<script>
  jQuery(function() {
    $( ".accordion" ).accordion({heightStyle: "content"});
  });

    jQuery(".accordion h2").click(function () {
        jQuery(this).toggleClass("expanded");
    });


 var myCarousel = $('#myCarousel')
, carouselLinkedNav = $('.carousel-linked-nav')
, carouselLinkedProjects = $('.carousel-linked-projects')
, allSlides = $('#allSlides').find('div.item')
// invoke the carousel
$('#myCarousel').carousel({
  interval: false
});
$(function() {
	$(".carousel-linked-projects a").click(function () {
		$("#myCarousel img.title").removeClass("active");
		if ($(".carousel-linked-projects :nth-child(1)").hasClass('active')) {
		      $("#myCarousel img.title1").addClass('active');
		    }
		if ($(".carousel-linked-projects :nth-child(2)").hasClass('active')) {
		      $("#myCarousel img.title2").addClass('active');
		    }
		if ($(".carousel-linked-projects :nth-child(3)").hasClass('active')) {
		      $("#myCarousel img.title3").addClass('active');
		    }
	});
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