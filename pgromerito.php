<?php
/*
Template Name: Romerito Aquino
*/
?>
<?php get_header(); ?>
    <div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/romerito-coluna.jpg" width="967px" alt="Blog do Romerito Aquino"></div>
    
<?php query_posts('cat=34&posts_per_page=1'); ?>
	
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
        		<p>Coluna Romerito Aquino.</p>
                <p>Romerito Aquino é jornalista desde 1976. Nasceu em Rio Branco (AC), formou-se em jornalismo na UnB (1980) e trabalhou, entre outros, no Jornal do Brasil, O Globo, Correio Braziliense, Jornal de Brasília, A Crítica, A Gazeta do Acre, Varadouro, Folha do Acre, O Rio Branco, Página 20 e A Tribuna.
Ganhador do prêmio José Chalub Leite de Jornalismo (AC) de 2004 com a série de reportagens “Acre, terra da biodiversidade”.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Raquino' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Romerito' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>