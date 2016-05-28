<?php
/*
Template Name: About
*/

get_header(); ?>

<section id="about" class="container">
	<h1 class="hidden">About Iconic Beauty</h1>
	<div class="col-md-11 col-md-offset-1">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-2 col-sm-9 col-sm-offset-2 col-md-3 col-md-offset-0 gold">
				<h2><?php the_field('title');?></h2>
				<?php the_field('mission');?>
			</div>
			<div class="entry col-sm-9 col-sm-offset-2 col-md-9 col-md-offset-0">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-md-4 text-center text-justify">
				<?php $image = get_field('position_image');
					$alt = $image['alt'];
					$size = 'medium';
					$medium = $image['sizes'][ $size ]; ?>
				<img class="img-responsive" style="width: 100%;height:auto;" src="<?php echo $medium;?>" alt="<?php echo $alt ?>" />
				<svg class="white" viewBox="0 0 165.5 165.5">
					<rect x="24.7" y="24.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 82.7314 -34.2685)" class="plus"/>
					<g><line class="plus" x1="82.7" y1="54.2" x2="82.7" y2="111.2"/><line class="plus" x1="111.2" y1="82.7" x2="54.2" y2="82.7"/></g>
				</svg>
				<h2 class="text-center"><?php the_field('title1');?></h2>
				<?php the_field('position');?>
			</div>
			<div class="col-md-8">
				<div class="col-md-8">
					<svg class="pink" viewBox="0 0 165.5 165.5">
						<rect x="24.7" y="24.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 82.7314 -34.2685)" class="plus"/>
						<g><line class="plus" x1="82.7" y1="54.2" x2="82.7" y2="111.2"/><line class="plus" x1="111.2" y1="82.7" x2="54.2" y2="82.7"/></g>
					</svg>
					<h2 style="margin-top: 0;"><?php the_field('title2');?></h2>
					<?php the_field('vision');?>
				</div>
				<?php $image = get_field('vision_image');
					$alt = $image['alt'];
					$size = 'medium';
					$medium = $image['sizes'][ $size ]; ?>
				<img class="col-md-4 img-responsive" src="<?php echo $medium;?>" alt="<?php echo $alt ?>" />
				<?php $image = get_field('experience_image');
					$alt = $image['alt'];
					$size = 'large';
					$lg = $image['sizes'][ $size ]; ?>
				<img class="col-sm-6 col-md-7 img-responsive" src="<?php echo $lg;?>" alt="<?php echo $alt ?>" />
				<div class="col-md-5">
					<svg class="blue" viewBox="0 0 165.5 165.5">
						<rect x="24.7" y="24.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 82.7314 -34.2685)" class="plus"/>
						<g><line class="plus" x1="82.7" y1="54.2" x2="82.7" y2="111.2"/><line class="plus" x1="111.2" y1="82.7" x2="54.2" y2="82.7"/></g>
					</svg>
<!--
					<h2 style="margin-top: 0;"><?php the_field('title3');?></h2>
					<?php the_field('experience');?>
-->
				</div>
				<div class="col-md-6" style="margin-left: -17%;">
<!--
					<svg class="pink lg pull-right" viewBox="0 0 165.5 165.5">
						<rect x="24.7" y="24.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 82.7314 -34.2685)" class="plus"/>
						<g><line class="plus" x1="82.7" y1="54.2" x2="82.7" y2="111.2"/><line class="plus" x1="111.2" y1="82.7" x2="54.2" y2="82.7"/></g>
					</svg>
-->
<!--
					<h2><?php the_field('title4');?></h2>
					<?php the_field('opportunity');?>
-->
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>