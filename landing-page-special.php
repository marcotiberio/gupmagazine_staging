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
			<div class="left">
				<?php 
				$image = get_field('intro_cover');
				if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="right">
				<div id="introText">
					<?php the_field('intro_text'); ?>
				</div>
				<div class="numbers">
					<a href="https://shop.gupmagazine.com/products/limited-edition-unlock-01-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img class="soldout"
								src="https://gupmagazine.com/wp-content/uploads/2020/07/soldout2.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-02-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/2-1-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-03-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/3-2-scaled.jpg" alt=""></div>
					</a>
					<div class="numbers-img-container"><img class="soldout"
							src="https://gupmagazine.com/wp-content/uploads/2020/07/soldout2.jpg" alt=""></div>

					<a href="https://shop.gupmagazine.com/products/limited-edition-unlock-05-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/5-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-06-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/6-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-07-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/7-1-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-08-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/8-1-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-09-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/9-1-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-10-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/10-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-11-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/11-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-12-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/12-1-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-13-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/13-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-14-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/14-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-15-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/15-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-16-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/16-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-17-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/17-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-18-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/18-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-19-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/19-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-20-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/20-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-21-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/21-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-22-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/22-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-23-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/23-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-24-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/24-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-25-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/25-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-26-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/26-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-27-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/27-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-28-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/28-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-29-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/29-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-30-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/30-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-31-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/31-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-32-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/32-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-33-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/33-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-34-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/34-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-35-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/35-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-36-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/36-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-37-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/37-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-38-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/38-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-39-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/39-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-40-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/40-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-41-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/41-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-42-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/42-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-43-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/43-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-44-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/44-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-45-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/45-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-46-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/46-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-47-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/47-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-48-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/48-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-49-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/49-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-50-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/50-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-51-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/51-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-52-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/52-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-53-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/53-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-54-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/54-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-55-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/55-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-56-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/56-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-57-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/57-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-58-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/58-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-59-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/59-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-60-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/60-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-61-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/61-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-62-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/62-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-63-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/63-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-64-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/64-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-65-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img
								src="https://gupmagazine.com/wp-content/uploads/2020/07/65-scaled.jpg" alt=""></div>
					</a> <a href="https://shop.gupmagazine.com/products/limited-edition-unlock-66-66" target="_blank"
						rel="noopener noreferrer">
						<div class="numbers-img-container"><img class="soldout"
								src="https://gupmagazine.com/wp-content/uploads/2020/07/66-scaled.jpg" alt=""></div>
					</a>
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
	</div>

</section>


<?php
get_sidebar();
get_footer();