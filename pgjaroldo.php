<?php
/*
Template Name: Jacks Aroldo
*/
?>
<?php get_header(); ?>
    <div class="pgcolunas"><img src="http://www.3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/jaroldo-coluna.jpg" width="967px" alt="Coluna do Jacks Aroldo"></div>
    
<?php query_posts('cat=39&posts_per_page=1'); ?>
	
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
        		<p>Jacks Aroldo.</p>
                <p>Jacks Aroldo Batista Pessoa, formado em Matemática pela Universidade Federal do Acre - UFAC, Professor da rede pública estadual de ensino na Escola Instituto Odilon Pratagi. É um dos fundadores do Movimento Acorda Brasiléia – MAB, paralelo ao ensino, tem um programa de rádio aos domingos das 07:00 as 09:00 da manhã intitulado Rádio MAB (Acorda Cidade) pela Jovem Pan Internacional FM 105,7.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Mmaciel' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Jaroldo' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>