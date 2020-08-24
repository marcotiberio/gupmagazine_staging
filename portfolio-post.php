<?php
/*
 * Template Name: Portfolio
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="wrap">
    
    <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-custom', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

        </main><!-- #main -->
    </div><!-- #primary -->
		
    
    <!-- CUSTOM POST LAYOUT -->
    <!-- CUSTOM POST LAYOUT -->
    <!-- CUSTOM POST LAYOUT -->

    <?php if ( can_access_book_posts() ) { ?>


    <div id="post-title">
        <h2><?php the_field('portfolio_title'); ?></h2>
    </div>

    <hr style="margin: 0 10%;">
    
        <div id="post-credits_mobile-title">
			<h4>CREDITS</h4>
		</div>

		<div id="post-content">
			<div class="post-credits" id="toggle-credits-mobile">
                <div>
                    <?php if( get_field('portfolio_credits_author') ): ?>
                        <h4>GUP Author</h4>
                        <p><?php the_field('portfolio_credits_author'); ?></h4></p>
                    <?php endif; ?>
                </div>
                <hr style="margin-right:40%;">
                <div>
                    <?php if( get_field('portfolio_credits_artist') ): ?>
                        <h4>Artist</h4>
                        <p><?php the_field('portfolio_credits_artist'); ?></h4></p>
                    <?php endif; ?>
                </div>
                <div>
                    <?php 
                    $link = get_field('portfolio_credits_artist-website');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_blank';
                        ?>
                        <h4>Artist Website</h4>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="post-text">
                <p><?php the_field('portfolio_text'); ?></p>
            </div>
		
        </div>

    <?php } else { ?>
		<!-- There is some issue with them styling and the following div is hidden under the menu without the top margin -->
		<div class="buy--membership">
			<div id="text">
				<h2>Enjoy unlimited digital access to the archives of GUP Magazine</h2> 
				<h3>With new material specifically crafted for a better online experience.</h3>
				<br>
				<h2>45€/year</h2>
				<p>You can cancel anytime</p>
				<a href="https://gupmagazine.memberful.com/checkout?plan=47422">Subscribe now</a>
			</div>
			<div></div>
		</div>	
	<?php } ?>
	
</div>

<hr style="margin: 0 10%;">

<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 2, // Number of related posts that will be shown.
'ignore_sticky_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<div id="related_posts"><h3>Related Posts</h3><div class="related_posts-grid">';
while( $my_query->have_posts() ) {
$my_query->the_post();?>

    <div class="relatedthumb">
        <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'thumbnail-list-related' ); ?></a>
        <div class="relatedcontent">
            <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <?php $summary = get_field('portfolio_text');
                echo substr($summary, 0, 300); ?><span>...</span>
                <p><a href="<?php the_permalink(); ?>">Read More</a></p>
        </div>
    </div>

<?php
}
echo '</div></div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>


<?php
get_footer(); ?>