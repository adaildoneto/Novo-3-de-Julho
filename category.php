<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="row">


			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</header><!-- .page-header -->

				<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'cardcategoria', '' );

						endwhile;

						// Page navigation.
						echo ('<div class="col s12 m12 l12 align-center"> <div class="center">');
						wp_pagination();
						echo ('</div></div>');

				endif;
			?>



</div>

<?php
get_footer();
