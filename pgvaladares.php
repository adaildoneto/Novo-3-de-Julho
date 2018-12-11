<?php
/*
Template Name: Dr Valadares
*/
?>
<?php get_header(); ?>
    <div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/drvaladares-coluna.jpg" width="967px" alt="Blog do Dr. Valadares"></div>
    
<?php query_posts('cat=35&posts_per_page=1'); ?>
	
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
        <div><h4>O Colunista.</h4>
        		<p>Francisco Valadares Neto, advogado, graduado pelo Instituto Luterano de Ensino Superior de Ji-Paraná (ILES/ULBRA), sócio fundador do Escritório de Advocacia FV ADVOCACIA, pós-graduado em Direito Público pela Faculdade Integrada de Pernambuco, Doutorando em Ciências.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Dvaladres' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Valadares' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>