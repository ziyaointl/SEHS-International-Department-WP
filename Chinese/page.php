<?php get_header(); ?>

    <div class="centered post container clearfix">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>
        <a href="<?php echo home_url();?>" id="back-button" class="btn btn-default">Back to Home</a>
    </div>
    <!-- /section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
