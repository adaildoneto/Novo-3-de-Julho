<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="row">
  <?php if ( dynamic_sidebar('destaque-sidebar') ) : else : endif; ?>
</div>
<div class="row black" style="padding: 20px;">
  <div class="col s12 m12 l8">
      <?php if ( dynamic_sidebar('video-sidebar') ) : else : endif; ?>
  </div>

  <div class="col s12 m12 l4">
    <?php if ( dynamic_sidebar('listavideo-sidebar') ) : else : endif; ?>
  </div>
</div>

<div id="colunas" class="row orange lighten-5" style="margin-top: -20px;">
  <div class="col s12 m12 l12">
    <h5 class="red-text text-darken-4" style="padding-bottom: 5px; font-weight: 700;">Colunas</h5>
    <div class="diviser">

    </div>
  </div>


  <div class="col s12 m12 l3">
  <div class="card transparent z-depth-0 center">
    <img class="circle responsive-img z-depth-1" style="width: 100px; height: 100px;" src="https://3dejulhonoticias.com.br/wp-content/uploads/2018/12/47591999_1013389978845318_4001141784347410432_n-e1544499406711.gif">

    <div class=""><a href="https://3dejulhonoticias.com.br/blog-do-crica/"><h4 class="red-text text-darken-4" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Coluna do Crica</h4></a>
    </div>

  </div>
  </div>

  <div class="col s12 m12 l3">
  <div class="card transparent z-depth-0 center">
    <img class="circle responsive-img z-depth-1" style="width: 100px; height: 100px;" src="https://3dejulhonoticias.com.br/wp-content/uploads/2015/01/asterio-e1544500027182.png">

    <div class=""><a href="https://3dejulhonoticias.com.br/coluna-do-asterio-moreira/"><h4 class="red-text text-darken-4" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Coluna do Astério Moreira</h4></a>
    </div>

  </div>
  </div>

  <div class="col s12 m12 l3">
  <div class="card transparent z-depth-0 center">
    <img class="circle responsive-img z-depth-1" style="width: 100px; height: 100px;" src="https://3dejulhonoticias.com.br/wp-content/uploads/2015/02/JACKS-e1544500270218.png">

    <div class=""><a href="https://3dejulhonoticias.com.br/jacks-aroldo/"><h4 class="red-text text-darken-4" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Coluna do Jacks Aroldo</h4></a>
    </div>

  </div>
  </div>

  <div class="col s12 m12 l3">
  <div class="card transparent z-depth-0 center">
    <img class="circle responsive-img z-depth-1" style="width: 100px; height: 100px;" src="https://3dejulhonoticias.com.br/wp-content/uploads/2018/12/48275316_1621205861312922_7401799174519259136_n-e1544500804882.jpg">

    <div class=""><a href="https://3dejulhonoticias.com.br/politica-sem-fronteira/"><h4 class="red-text text-darken-4" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Coluna do Amaral</h4></a>
    </div>

  </div>
  </div>

</div>

	<div class="row">
		<div class="col s12 m12 l8">
				<?php include(TEMPLATEPATH.'/mod-noticias-capa.php');?>
		</div>
    <div class="col s12 m12 l4">
      <div class="gofibra">
        <?php if ( dynamic_sidebar('gofibra-sidebar') ) : else : endif; ?>
      </div>
    </div>
  		<?php get_sidebar();?>


	</div>




<?php
get_footer();
