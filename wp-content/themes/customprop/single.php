<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
$image = get_the_post_thumbnail_url();
?>
<style>
	.home-banner-single {
		background-image: url('<?php echo $image; ?>');
	}
</style>
<?php
/* Start the Loop */
// while ( have_posts() ) :
// 	the_post();

// 	get_template_part( 'template-parts/content/content-single' );

// 	if ( is_attachment() ) {
// 		// Parent post navigation.
// 		the_post_navigation(
// 			array(
// 				/* translators: %s: Parent post link. */
// 				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
// 			)
// 		);
// 	}

// 	// If comments are open or there is at least one comment, load up the comment template.
// 	if ( comments_open() || get_comments_number() ) {
// 		comments_template();
// 	}

// 	// Previous/next post navigation.
// 	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
// 	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

// 	$twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
// 	$twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );

// 	the_post_navigation(
// 		array(
// 			'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
// 			'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
// 		)
// 	);
// endwhile; // End of the loop.
?>

<section class="section-single" id="posts">
	<div class="row">
		<div class="col-12 col-xs-12 banner_ht bg-cover home-banner-single pos-rel">
			<div class="overlay"></div>
			<!-- <?php
			// Display the featured image title and description
			the_title('<h1>', '</h1>');
			the_content();
			?> -->
			<div class="floatingContent">
				<div class="floatingContentdata">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
