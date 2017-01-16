<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="catalog-block clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('medium-thumbnail', ['class' => 'catalog-img']);?>
                        </a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo home_url();?>/wp-content/uploads/2017/01/placeholder_600x400-6-400x225.png" alt="placeholder" class="catalog-img">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="info col-md-8">
                        <a href="<?php the_permalink();?>" class="catalog-post-title">
                            <h2 class="catalog-post-title">
                                <?php the_title(); ?>
                            </h2>
                        </a>
                        <h4 class="post-author">
                            <?php
                            $authors = get_post_meta(get_the_ID(), 'authors_1', true);
                            $translators = get_post_meta(get_the_ID(), 'authors_2', true);
                            if ($authors[0] != "") {
                                echo "Written by: ";
                                for ($i = 0; $i < count($authors) - 1; ++$i) {
                                    echo $authors[$i], ", ";
                                }
                                echo $authors[count($authors) - 1];
                            }
                            if ($authors[0] != "" && $translators[0] != "")
                                echo " | ";
                            if ($translators[0] != "") {
                                echo "Translated by: ";
                                for ($i = 0; $i < count($translators) - 1; ++$i) {
                                    echo $translators[$i], ", ";
                                }
                                echo $translators[count($translators) - 1];
                            }
                            ?>
                        </h4>
                        <p class="catalog-time">
                            <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>
                        </p>
                    </div>
                </div>
            </div>
<!--			<p class="excerpt">-->
<!--				--><?php
////                html5wp_excerpt('html5wp_index');
//                html5wp_excerpt(30);
//                ?>
<!--			</p>-->
<!--            <a href="--><?php //the_permalink(); ?><!--" class="btn read-more">Read More</a>-->
    </div>
<?php endwhile; ?>
<!--    <div class="pagination-outer">-->
<!--        --><?php //get_template_part('pagination'); ?>
<!--    </div>-->
    <?php if (get_previous_posts_link()) : ?>
        <a href="<?php echo get_previous_posts_page_link(); ?>" class="btn read-more previous-page">< 上一页</a>
    <?php endif; ?>
    <?php if (get_next_posts_link()) : ?>
        <a href="<?php echo get_next_posts_page_link(); ?>" class="btn next-page read-more">下一页 ></a>
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
