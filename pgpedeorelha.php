<?php
/*
Template Name: Pé de Orelha
*/
?>
<?php get_header(); ?>
<div class="row">
  <?php if ( dynamic_sidebar('imgtopo-sidebar') ) : else : endif; ?>
</div>
    <div id="content" class="row">

      <div class="col s12 m12 l8">
        <?php query_posts('cat=124&posts_per_page=1'); ?>

          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', '' ); ?>



        <?php endwhile; // end of the loop. ?>

          </div> <!-- end #main -->


		<div id="sidebar" class="col s12 m12 l4" role="complementary">
        <div><h8>O Colunista.</h8>
            <p>Prazer, Victor Augusto, 30 anos, acreano e sou jornalista. Sou fascinado em descobrir coisas novas e ensinar ao próximo. Por isso, criei este espaço onde compartilho minhas experiências e aprendizados. Afinal, acredito que conhecimento deve ser diário para nossa evolução. Por aqui, abordo assuntos sobre estilo de vida, com ênfase em levar uma vida baseada na informação, já que é minha área de formação e atuação.</p>
            <p>Sou conhecido também pelo apelido de Victor Bombonzão. Filho de Manoel Coelho de Farias e Mauricelia Maria Lima Nogueira. Sou formado em Comunicação Social com Habilitação em Jornalismo pelo instituto de Ensino Superior do Acre (Iesacre).</p>
            <p>Sou membro do Rotary Club de Rio Branco – Penápolis, cujo o qual, já fui presidente no biênio de 2012 a 2013. Fui eleito presidente do Sindicato dos Jornalistas Profissionais do Estado do Acre (Sinjac), por dois mandatos, o primeiro para o triênio 2013 a 2016, e o segundo de 2017 a 2019.</p>
<br /><hr><br />
        </div>
        <h8 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h8>

        <?php query_posts('offset=1&cat=124&showposts=15'); ?>
                             <?php if (have_posts()): while (have_posts()) : the_post();?>

                                <?php get_template_part( 'cardnews', '' ); ?>
                          <?php endwhile; else:?>
        		       <?php endif;?>

    </div>
    <?php get_sidebar() ?>
    </div> <!-- end #content -->

<?php get_footer(); ?>
