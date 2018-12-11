<?php

/*

Template Name: Esporte

*/

?>

<?php get_header(); ?>

<!--    <div class="esplogo"><img src="http://www.3dejulhonoticias.com.br/wp-content/uploads/2015/01/esporte-logo-joao.jpg" /></div> -->

    <div id="content" class="clearfix">

        

<div id="main" class="col620 clearfix" role="main">



<div class="esp2"> 



<?php query_posts('cat=6&offset=0&posts_per_page=1'); ?>

                     <?php if (have_posts()): while (have_posts()) : the_post();?>

               



<?php if(has_post_thumbnail( )): ?><div class="esp3-thumb"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('esp'); ?></a></div><?php endif; ?><?php  ?>



<div style="font-size:36px; line-height:1em; margin-bottom:30px;"><strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong></div>





<div style="margin-bottom:20px;"><hr/></div>

                  <?php endwhile; else:?>

		       <?php endif;?>



</div>



<div class="wggeral2">



<div class="esp4"> 

       

       

<?php query_posts('cat=6&offset=1&posts_per_page=15'); ?>

                     <?php if (have_posts()): while (have_posts()) : the_post();?>

               



<?php if(has_post_thumbnail( )): ?><div class="esp4-thumb"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('esp'); ?></a></div><?php endif; ?>



<div class="esp-h1"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>





                  <?php endwhile; else:?>

		       <?php endif;?>



</div>







<div class="esp3"> 

       

       

<?php query_posts('cat=6&offset=11&posts_per_page=15'); ?>

                     <?php if (have_posts()): while (have_posts()) : the_post();?>

               



<?php if(has_post_thumbnail( )): ?><div class="esp4-thumb"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('esp'); ?></a></div><?php endif; ?>



<div class="esp-h1"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>



                  <?php endwhile; else:?>

		       <?php endif;?>



</div>



</div>













<div align="center"> <?php if(function_exists('wp_page_numbers')) {wp_page_numbers();} ?></div> 



  <?php $wp_query = null; $wp_query = $todas;?>





</div><!-- #content -->





        <?php get_sidebar("esporte"); // sidebar 1 ?>

  

<?php get_footer(); ?>