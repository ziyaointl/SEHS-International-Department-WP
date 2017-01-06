<?php get_header(); ?>
<main role="main">
    <?php
    $newsPosts = new WP_Query('cat=3&posts_per_page=1');
    if ($newsPosts->have_posts()):
        while ($newsPosts->have_posts()):
            $newsPosts->the_post(); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-2 col-md-7 col-md-offset-2" id="cover-photo">
                        <?php the_post_thumbnail('full', ['class' => 'img-responsive']) ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-6 col-md-5 col-md-offset-5 clearfix" id="cover-description">
                        <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
                        <a href="<?php the_permalink() ?>" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <?php
    $newsPosts = new WP_Query('cat=2,-3&posts_per_page=1');
    if ($newsPosts->have_posts()):
    while ($newsPosts->have_posts()):
    $newsPosts->the_post(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2" id="news">
                <h1>News</h1>
                <div class="horizontal-line"></div>
                <div class="row">
                    <div class="col-lg-6 section-col">
                        <?php the_post_thumbnail('full', ['id' => 'news-image']) ?>
                        <a href="<?php the_permalink(); ?>" class="news-title"><h1 class="news-title"><?php the_title(); ?></h1></a>
                        <h3 class="news-date">
                            <?php the_time('F j, Y'); ?>
                        </h3>
                    </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                    <div class="col-lg-6 section-col">

                        <?php
                        $newsPosts = new WP_Query('cat=2,-3&posts_per_page=5');

                        if ($newsPosts->have_posts()):
                            $lever = 0;
                            while ($newsPosts->have_posts()):
                                $newsPosts->the_post();
                                if ($lever == 0) {
                                    $lever = 1;
                                    continue;
                                }
                                ?>
                                <a href="<?php the_permalink() ?>" class="news-title"><h1 class="news-title"><?php the_title(); ?></h1></a>
                                <h3 class="news-date"><?php the_time('F j, Y'); ?></h3>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                        <a href="<?php echo home_url(); ?>/category/news/" id="news-button" class="btn btn-default">More
                            News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="container-fluid" id="featured-clubs">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 id="featured-clubs-title">Featured Clubs</h1>
            <a href="<?php echo home_url(); ?>/club/" class="btn-default btn" id="more-clubs">More Clubs</a>
            <div class="row">

                <?php
                $newsPosts = new WP_Query('post_type=club&posts_per_page=3&orderby=rand');
                if ($newsPosts->have_posts()):
                    while ($newsPosts->have_posts()):
                        $newsPosts->the_post(); ?>
                        <div class="col-lg-4 section-col">
                            <a href="<?php the_permalink(); ?>">
                                <div class="club-frame">
                                    <?php the_post_thumbnail('club-thumbnail', ['class' => 'club-img']) ?>
                                    <div class="overlay">
                                        <div class="floor-fade">
                                            <h2 class="club-title"><?php the_title(); ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="outstanding-individual">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 id="individual-title">Outstanding Individual</h1>
            <a href="<?php echo home_url(); ?>/individual/" class="btn btn-default" id="more-individuals">More
                Individuals</a>
            <div class="row">

                <?php
                $newsPosts = new WP_Query('post_type=individual&posts_per_page=1');
                if ($newsPosts->have_posts()):
                    while ($newsPosts->have_posts()):
                        $newsPosts->the_post(); ?>
                        <div class="col-md-3 section-col col-sm-4 col-xs-6">
                            <?php the_post_thumbnail('full', ['id' => 'outstanding-image']) ?>
                        </div>
                        <div class="col-lg-9 section-col">
                            <a href="<?php the_permalink(); ?>" id="individual-name"><h1><?php the_title(); ?></h1></a>
                            <p>
                                <?php html5wp_excerpt(30);?>
                            </p>
                            <a href="<?php the_permalink();?>" class="btn btn-default" id="individual-read-more">Read More</a>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="featured-video">
    <h1>2015 Graduation Video</h1>
    <div>
        <iframe frameborder="0" id="video-iframe"
                src="https://v.qq.com/iframe/player.html?vid=y0302fv2ipv&tiny=0&auto=0" allowfullscreen></iframe>
    </div>
</div>
<?php get_footer(); ?>
