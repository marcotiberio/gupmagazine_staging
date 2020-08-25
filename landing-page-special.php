<?php 
	/* Template Name: Landing Page Special */
?>

<?php get_header(); ?>

<section class="background_landing">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
	?>

	<div>
		<div class="intro">
			<?php 
			$image = get_field('intro_cover');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		<!-- <img id="introCover" src="https://gupmagazine.com/wp-content/uploads/2020/07/66gupbanner.png" alt="" /> -->
			<div id="introText">
				<?php the_field('intro_text'); ?>
			</div>
			<div class="landing-buttons">
				<button id="buynowButton">
					<?php 
					$link = get_field('left_button');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</button>	
				<button id="websiteButton">
				<?php 
					$link = get_field('right_button');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</button>	
			</div>
		</div>
	</div>

</section>


<?php
get_sidebar();
get_footer();