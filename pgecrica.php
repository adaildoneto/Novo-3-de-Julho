<?php
/*
Template Name: Crica
*/
?>
<?php get_header(); ?>
    <div class="pgcolunas"><img class="responsive" src="https://3dejulhonoticias.com.br/wp-content/themes/3dejulho/library/images/crica-logo.jpg" width="967px" alt="Blog do Crica"></div>


    <div id="content" class="row">

      <div class="col s12 m12 l8">
        <?php query_posts('cat=28&posts_per_page=1'); ?>

          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', '' ); ?>



        <?php endwhile; // end of the loop. ?>

          </div> <!-- end #main -->


		<div id="sidebar" class="col s12 m12 l4" role="complementary">
        <div><h8>O Colunista.</h8>
        		<p>Luís Carlos Moreira Jorge, formado em Direito, militante há 40 anos no jornalismo político. Foi diretor de Divulgação dos Governos Geraldo Mesquita e Joaquim Macedo, secretário de Comunicação dos governadores Nabor Junior, Iolanda Lima, Romildo Magalhães e dos prefeitos Mauri Sérgio, Flaviano Melo e Isnard Leite. Trabalhou em O RIO BRANCO, O JORNAL, na Difusora Acreana, TV-ACRE, TV-GAZETA e Jornal GAZETA, onde escreve hoje uma coluna política. É um dos nomes mais respeitados do jornalismo acreano.</p><br /><hr><br />
        </div>
        <h8 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h8>

        <?php query_posts('offset=1&cat=28&showposts=10'); ?>
                             <?php if (have_posts()): while (have_posts()) : the_post();?>

                                <?php get_template_part( 'cardnews', '' ); ?>
                          <?php endwhile; else:?>
        		       <?php endif;?>

    </div>
    <?php get_sidebar() ?>           
    </div> <!-- end #content -->

<?php get_footer(); ?>
