<?php
/*
Template Name: Social
*/
?>
<?php get_header(); ?>
    <div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/10/emfoco-coluna.jpg" width="967px" alt="Em foco"></div>
    
<?php query_posts('cat=44&posts_per_page=1'); ?>
	
    <div id="content" class="clearfix">
        
    <div id="content" class="clearfix">
        
        <div id="main" class="col620 clearfix" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'contentoff', 'single' ); ?>

				<?php attorney_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

        </div> <!-- end #main -->


		<div id="sidebar" class="widget-area col300" role="complementary">
        <div><h4>Wesley Cardoso</h4>
        		<p>Repórter Cinematográfico sobre o registro DRT102/08  Fotógrafo a mais de 20 anos, realiza cobertura de eventos sociais, culturais, políticos e religiosos. Tem como objetivo principal expressar nesta coluna os costumes de nossa gente bem como manter viva a cultura do povo do Vale do Acre.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Asterio1' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Social' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>