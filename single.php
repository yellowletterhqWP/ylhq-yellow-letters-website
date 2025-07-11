<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package YLHQ-Yellow-Letter-Website
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="register-hero-background-v2"></div>

		<div class="blog-page global-page-wrapper">        
			
			<img
			alt="RightImage6672"
			src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/rightimage6672-cck6-300w.png"
			class="register-right-image"
			/>
			<img
			alt="LeftImage6672"
			src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/leftimage6672-vfcz-300w.png"
			class="register-left-image"
			/>

			<div class="blog-post-detail-view-page">
				<span class="hero-header-title-blue">Blogs</span>
				<span class="hero-header-desc-black-mini">We save your budget and your bandwidth with premium direct mail that drives immediate response.</span>
				<?php
					get_template_part( 'template-parts/form-elements/button', null, array(
						'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
						'title' => 'See Mail Options',
					) );
				?>

				<div class="featured-image-top">
					<?php ylhq_yellow_letter_website_post_thumbnail(); ?>
				</div>

				<div class="blog-posts-detail-wrapper">
					<div class="leftsidebar">
						<aside class="sidebar-left">
							<?php get_sidebar(); ?>
						</aside>
					</div>

					<div class="mainpost">
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );

								/* the_post_navigation(
									array(
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ylhq-yellow-letter-website' ) . '</span> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ylhq-yellow-letter-website' ) . '</span> <span class="nav-title">%title</span>',
									)
								); */

								// If comments are open or we have at least one comment, load up the comment template.
								/* if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif; */

							endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>

			
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
