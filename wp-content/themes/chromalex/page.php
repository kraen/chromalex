<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$video = get_post_custom_values('youtube');
?>		
		<?php if( has_post_thumbnail() || isset($video) ) : ?>
		
		<div id="hero">
			<?php
			if ( is_page('video') ) :
				
				foreach ( $video as $key => $value ) : ?>
					<object type="application/x-shockwave-flash" style="width:976px; height:400px;" 
						data="http://www.youtube.com/v/<?php echo $value; ?>?rel=0&hd=1&autoplay=1&autohide=1&showsearch=0&version=3&showinfo=0&modestbranding=1">
						
						<param name="movie" 
							value="http://www.youtube.com/v/<?php echo $value; ?>?rel=0&hd=1&showsearch=0&version=3&showinfo=0&modestbranding=1">
						<param name="allowFullScreen" value="true">
						<param name="allowscriptaccess" value="always">
					</object>
			<?php 
				endforeach;
			else :
				the_post_thumbnail('large');
			endif; ?>
        </div>
		<?php endif;?>
		
		<section id="content">
			<article id="post-<? the_ID(); ?>" <?php post_class(); ?>>
					
					
				<section class="left-col">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'forside', 'container' => false ) ); ?>
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

