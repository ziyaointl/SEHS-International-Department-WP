<?php get_header(); ?>

	<!-- section -->
	<div class="centered post container clearfix">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<h4 class="post-time"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h4>
       		<h1 class="post-title"><?php the_title(); ?></h1>

       		<div class="post-author-group">
            	<h4 class="post-author"> 
            	<?php
            		$authors = get_post_meta(get_the_ID(), 'authors_1', true);
            		if ($authors[0] != "")
            			echo "Written by: ";
            		for ($i = 0; $i < count($authors) - 1; ++$i) {
            			echo $authors[$i], ", ";
            		}
            		echo $authors[count($authors) - 1];
				?>
            	</h4>
            	<h4 class="post-author">
            	<?php
            		$translators = get_post_meta(get_the_ID(), 'authors_2', true);
            		if ($translators[0] != "")
            			echo "Translated by: ";
            		for ($i = 0; $i < count($translators) - 1; ++$i) {
            			echo $translators[$i], ", ";
            		}
            		echo $translators[count($translators) - 1];
				?>
            	</h4>
        	</div>

			<!-- post thumbnail -->
<!--			--><?php //if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
<!--				<a href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">-->
<!--					--><?php //the_post_thumbnail('full', ['class' => 'img-responsive, post-thumbnail']); // Full size image for the single post ?>
<!--				</a>-->
<!--			--><?php //endif; ?>
<!--			<!-- /post thumbnail -->

			<?php the_content(); // Dynamic Content ?>


			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->
	<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	<a href="javascript:history.back()" id="back-button" class="btn btn-default">Back</a>
	</div>
<?php get_footer(); ?>
