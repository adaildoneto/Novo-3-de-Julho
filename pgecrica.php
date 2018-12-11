<?php
/*
Template Name: Crica
*/
?>
<?php get_header(); ?>
    <div class="pgcolunas"><img src="https://3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/crica-logo.jpg" width="967px" alt="Blog do Crica"></div>
    
<?php query_posts('cat=28&posts_per_page=1'); ?>
	
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
        		<p>Luís Carlos Moreira Jorge, formado em Direito, militante há 40 anos no jornalismo político. Foi diretor de Divulgação dos Governos Geraldo Mesquita e Joaquim Macedo, secretário de Comunicação dos governadores Nabor Junior, Iolanda Lima, Romildo Magalhães e dos prefeitos Mauri Sérgio, Flaviano Melo e Isnard Leite. Trabalhou em O RIO BRANCO, O JORNAL, na Difusora Acreana, TV-ACRE, TV-GAZETA e Jornal GAZETA, onde escreve hoje uma coluna política. É um dos nomes mais respeitados do jornalismo acreano.</p><br /><hr><br />
        </div>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Crica1' ); ?><br />

		<?php if ( ! dynamic_sidebar( 'Coluna-Crica' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
        </div>
        
        
                    <div id="sidebar" class="widget-area col300" role="complementary">

<h4 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h4>    
    
<?php query_posts('offset=2&cat=28&showposts=10'); ?>       
                     <?php if (have_posts()): while (have_posts()) : the_post();?>
               
<div class="coluna-wdg">


<div><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4></div>

	<div>
    <strong><?php the_date(); ?></strong>
    </div>
    <div>
		<?php the_excerpt(); ?>
	</div>

</div>
                  <?php endwhile; else:?>
		       <?php endif;?>

			</div>
        

    </div> <!-- end #content -->
        
<?php get_footer(); ?>