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
		<div class="intro"><img id="introCover" src="https://gupmagazine.com/wp-content/uploads/2020/07/66gupbanner.png"
				alt="" />
			<h2 id="introText">GUP #66 presents a limited edition of 66 issues with an original signed print of the
				Dutch photographer Justine Tjallinks only for €100! Pick and order your desired numbered issue now by
				clicking on the number you like most hereunder!</h2>
		</div>
	</div>

</section>


<?php
get_sidebar();
get_footer();