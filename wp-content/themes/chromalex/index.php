<?php get_header(); ?>
		
		<div class="slider-wrapper theme-default" id="hero">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_url'); ?>/images/Aks_4gule_3turkise_1magent_1karmin_1zinnober_1.jpg" alt="">
				<img src="<?php bloginfo('template_url'); ?>/images/Aks_4gule_3turkise_1magenta_2zinnober_1.jpg" alt="">
				<img src="<?php bloginfo('template_url'); ?>/images/Aks_4gule_3turkise_3magenta_1.jpg" alt="">
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
		
		<section id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<? the_ID(); ?>" <?php post_class(); ?>>
									
					<section class="left-col">
						
					</section>
					
					<section class="right-col">
						<header>
							<h1><? the_title(); ?></h1>
						</header>
						
						<?php the_content(); ?>
					</section>
					
					
				</article>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</section>
		
<?php get_footer(); ?>