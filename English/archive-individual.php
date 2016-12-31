<?php get_header(); ?>

<main role="main">
	<div class="container catalog">
		<!-- section -->

		<h1 class="catalog-title">Outstanding Individuals</h1>

		<?php
		$count = 0;
        if (have_posts()): while (have_posts()) : the_post();
            if ($count == 0)
                echo "<div class=\"row\">";
            $date = get_post_meta(get_the_ID(), 'authors_3', true);
            $year = (int) current_time('Y');
            $month = (int) current_time('m');
            $day = (int) current_time('d');
            if ($year == $date || ($year - 1 == $date && $month < 9))
                $grade = "Grade 10";
            elseif (($year - 1 == $date && $month >= 9) || ($year - 2 == $date && $month < 9))
                $grade = "Grade 11";
            elseif (($year - 2 == $date && $month >= 9) || ($year - 3 == $date && $month < 9))
                $grade = "Grade 12";
            else
                $grade = "Graduate";
            ?>
            <div class="col-sm-3 col-xs-offset-1 col-xs-10 col-sm-offset-0 portrait">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<!-- post thumbnail -->
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('medium-thumbnail');?>
				</a>
                <?php endif; ?>
				<!-- /post thumbnail -->
                <div class="portrait-title">
				<a href="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
				</a>
                    <h4><?php echo $grade;?></h4>
                </div>
            </div>
            <?php
            ++$count;
            if ($count === 4) {
                echo "</div>";
                $count = 0;
            }
            ?>
		<?php endwhile; ?>
			<?php if (get_previous_posts_link()) : ?>
				<a href="<?php echo get_previous_posts_page_link(); ?>" class="btn read-more previous-page">< Previous Page</a>
			<?php endif; ?>
			<?php if (get_next_posts_link()) : ?>
				<a href="<?php echo get_next_posts_page_link(); ?>" class="btn next-page read-more">Next Page ></a>
			<?php endif;
			wp_reset_postdata();?>
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
