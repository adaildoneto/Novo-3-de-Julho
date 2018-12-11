<?php

/*

Template Name: Cleilton Amaral

*/

?>

<?php get_header(); ?>

    <div class="pgcolunas"><img class="responsive-img" src="https://3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/camaral-coluna.jpg" width="967px" alt="Blog do Cleilton Pessoa Amaral"></div>


        <div id="content" class="row">

          <div class="col s12 m12 l8">
            <?php query_posts('cat=45&posts_per_page=1'); ?>

              <?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'content', '' ); ?>



            <?php endwhile; // end of the loop. ?>

              </div> <!-- end #main -->


    		<div id="sidebar" class="col s12 m12 l4" role="complementary">
            <div><h8>O Colunista.</h8>
              <p>Cleilton Pessoa Amaral<br />
                Professor da rede pública<br />
                Gestor Público<br />
                Graduando de Jornalismo.</p><br /><hr><br />
            </div>
            <h8 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h8>

            <?php query_posts('offset=1&cat=45&showposts=5'); ?>
                                 <?php if (have_posts()): while (have_posts()) : the_post();?>

                                    <?php get_template_part( 'cardnews', '' ); ?>
                              <?php endwhile; else:?>
            		       <?php endif;?>

        </div>
        <?php get_sidebar() ?>
        </div> <!-- end #content -->

    <?php get_footer(); ?>
