<?php get_header(); ?>

	<main role="main">
		<div class="container-fluid catalog">
		<!-- section -->

			<h1 class="catalog-title">Clubs</h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div class="catalog-block clearfix">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('medium-thumbnail', ['class' => 'catalog-img']);?>
									</a>
								</div>
								<div class="info col-md-8">
									<a href="<?php the_permalink();?>" class="catalog-post-title">
										<h2 class="catalog-post-title">
											<?php the_title(); ?>
										</h2>
									</a>
									<p class="catalog-time">
										<?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>
									</p>
									<p class="excerpt">
                                        <?php html5wp_excerpt(30);?>
                                    </p>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
				<div class="pagination-outer">
					<?php get_template_part('pagination'); ?>
				</div>
			<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
				</article>
				<!-- /article -->
			<?php endif;
			?>

        </div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
