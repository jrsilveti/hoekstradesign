<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package minimal-portfolio
 */

get_header();
$minimal_portfolio_single_blog_sidebar_sticky = minimal_portfolio_get_option( 'minimal_portfolio_single_blog_sidebar_sticky' );
?>
<?php if( 'portfolio' ==  get_post_type() ){ ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">
						
							<?php while ( have_posts() ) : the_post();
					
								get_template_part( 'template-parts/post/content-single' );
					
								endwhile; // End of the loop. ?>
						</main>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } else{ ?>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
				
						<?php while ( have_posts() ) : the_post();
					
							get_template_part( 'template-parts/post/content-single' );
					
							the_post_navigation();
					
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
					
						endwhile; // End of the loop. ?>
				
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-lg-3<?php if( $minimal_portfolio_single_blog_sidebar_sticky ): ?> sticky-sidebar<?php endif; ?>">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php get_footer();
