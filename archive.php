<?php get_header(); ?>

	<main role="main">
		<div class="container-fluid catalog">
		<!-- section -->

			<h1 class="catalog-title"><?php
				$title = get_post_type();
                $title = strtoupper(substr($title, 0, 1)) . substr($title, 1, strlen($title) - 1) . "s";
                echo $title;
                ?></h1>

			<?php get_template_part('loop'); ?>

        </div>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
