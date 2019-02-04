<?php
/*
Template Name: coluna do zen
*/
?>
<?php get_header(); ?>
<div class="row">
  <?php if ( dynamic_sidebar('imgtopo-sidebar') ) : else : endif; ?>
</div>

    <div id="content" class="row">

      <div class="col s12 m12 l8">
        <?php query_posts('cat=142&posts_per_page=1'); ?>

          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', '' ); ?>



        <?php endwhile; // end of the loop. ?>

          </div> <!-- end #main -->


		<div id="sidebar" class="col s12 m12 l4" role="complementary">
        <div><h8>O Colunista.</h8>
        		<p>Bacharel e mestre em Direito, foi Secretário de Estado de Cultura e Secretário Estadual de Educação e Esporte. É deputado estadual, no Acre, pelo PT, Líder do Governo na ALEAC e presidente licenciado do Diretório Regional do PT/AC.</p><br /><hr><br />
        </div>
        <h8 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h8>

        <?php query_posts('offset=1&cat=142&showposts=10'); ?>
                             <?php if (have_posts()): while (have_posts()) : the_post();?>

                                <?php get_template_part( 'cardnews', '' ); ?>
                          <?php endwhile; else:?>
        		       <?php endif;?>

    </div>
    <?php get_sidebar() ?>
    </div> <!-- end #content -->

<?php get_footer(); ?>
