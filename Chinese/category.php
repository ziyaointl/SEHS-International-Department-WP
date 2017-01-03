<?php get_header(); ?>

<main role="main">
    <div class="container-fluid catalog">
        <!-- section -->
        <h1 class="catalog-title"><?php single_cat_title() ?></h1>

        <?php get_template_part('loop'); ?>

    </div>
    <!-- /section -->
</main>

<?php get_footer(); ?>
