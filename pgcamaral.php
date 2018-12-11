<?php

/*

Template Name: Cleilton Amaral

*/

?>

<?php get_header(); ?>

    <div class="pgcolunas"><img src="https://3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/camaral-coluna.jpg" width="967px" alt="Blog do Cleilton Pessoa Amaral"></div>

    

<?php query_posts('cat=45&posts_per_page=1'); ?>

	

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

        		<p>Cleilton Pessoa Amaral<br />
        		  Professor da rede pública<br />
        		  Gestor Público<br />
       		    Graduando de Jornalismo.</p><br /><hr><br />

        </div>



<?php if(function_exists( 'wp_bannerize' ))

	wp_bannerize( 'group=Amaral' ); ?><br />



		<?php if ( ! dynamic_sidebar( 'Coluna-Amaral' ) ) : ?>



		<?php endif; // end sidebar widget area ?>

        </div>


<div id="sidebar" class="widget-area col300" role="complementary">



<h4 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h4>    

    

<?php query_posts('offset=1&cat=45&showposts=10'); ?>       

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