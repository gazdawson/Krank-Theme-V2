<section class="home-intro">
	<div class="container">
		<div class="row">
			<?php
				// krank_carousel($slide_type, $id, $controls, $indicators, $captions, $trans)
				if ($krank['home_slides_switch'] == 1) {
					krank_carousel('home_slides', 'home-carousel', false, false, true, 'fade'); 
				}
			?>
			<div id="spinning-logo">
				<image src="<?php echo get_template_directory_uri() . '/assets/img/' . 'krank_cog.png' ?>" class="logo-outer spin" />
				<image src="<?php echo get_template_directory_uri() . '/assets/img/' . 'krank_txt.png' ?>" class="logo-inner" />
				<image src="<?php echo get_template_directory_uri() . '/assets/img/' . 'cog_shadow.png' ?>" class="logo-shadow" />
			</div>
		</div>
	</div>
</section><!--/.home-intro -->

<section class="krank-services brand">
	<div class="container">
		<div class="row">
			<div class="arrow-up"></div>
			<div class="heading">
				<h2><?php echo get_post_meta($post->ID, '_krank_service_title', true); ?></h2>
				<p class="lead"><?php echo get_post_meta($post->ID, '_krank_service_lead', true); ?></p>
			</div>
			<?php echo get_post_meta($post->ID, '_krank_service_code', true); ?>
		</div>
	</div>
</section><!--/.krank-services -->

<section class="krank-recent-work container">
	<div id="portfolio-carousel" class="carousel slide">
		<div class="heading">
			<h2>Some of Our Recent Work</h2>
			<p class="lead">Take a look and see what we've been up to.</p>
		</div>
	    <ol class="carousel-indicators">
			<?php
				$cats = get_terms('portfolio_category');
				$i = 0;
				foreach($cats as $cat):
				if($i == 0):
					$active = ' active';
				else:
					$active = '';
				endif;
			?>
			 <li data-target="#portfolio-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"><?php echo $cat->name; ?></li>
			<?php
				$i++;
				endforeach;
			?>
	    </ol>
		<div class="carousel-inner row">
			<?php portfolio_carousel(4); ?>
		</div><!--/.carousel-inner-->
		<p class="lead">Like what you see? Take a look at the rest of our work.</p> 
		<a href="/portfolio" class="btn btn-primary">View our full portfolio</a>
	</div><!--/#portfolio-carousel -->
</section><!--/.krank-recent-work -->

<div class="container">
	<?php get_template_part('templates/content', 'page'); ?>
</div>
