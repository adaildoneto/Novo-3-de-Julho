<?php
/*
Template Name: Astério
*/
?>
<?php get_header(); ?>
<div class="row">
  <?php if ( dynamic_sidebar('imgtopo-sidebar') ) : else : endif; ?>
</div>
    <div id="content" class="row">

    <div class="col s12 m12 l8">
      <?php query_posts('cat=29&posts_per_page=1'); ?>

    		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', '' ); ?>



			<?php endwhile; // end of the loop. ?>

        </div> <!-- end #main -->


		<div id="sidebar" class="col s12 m12 l4" role="complementary">
        <div><h8>O Colunista.</h8>
        		<p>Jornalista, radialista e apresentador de televisão.</p><br /><hr><br />
        </div>

        <h8 style="margin-bottom:10px; border-bottom: dashed 1px #CCCCCC; ">VEJA OUTRAS PUBLICAÇÕES DESTA COLUNA</h8>

        <?php query_posts('offset=2&cat=29&showposts=15'); ?>
                             <?php if (have_posts()): while (have_posts()) : the_post();?>

                                <?php get_template_part( 'cardnews', '' ); ?>
                          <?php endwhile; else:?>
        		       <?php endif;?>
        </div>

<?php get_sidebar() ?>




    </div> <!-- end #content -->

<?php get_footer(); ?>
