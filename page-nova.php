<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * Template Name: Nova Page
 * @package Odin
 * @since 2.2.0
 */

get_header(nova); ?>


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

<div class="row" style="margin-top: -20px;">
  <div class="col s12 m12 l12">
    <?php if ( dynamic_sidebar('banner_prefeitura') ) : else : endif; ?>
  </div>
</div>



	<div class="row">

				<?php include(TEMPLATEPATH.'/mod-noticias-nova.php');?>


	</div>

  <div class="row">
    <?php if ( dynamic_sidebar('h7-sidebar') ) : else : endif; ?>
  </div>


<div class="row">
  <div class="col s12 m12 l12">
    <h5 style="padding-bottom: 5px;">Tudo sobre Política</h5>
    <hr class="style-one">
    </div>
  <div class="col S12 m12 l6">

    <?php

      $myargs = array (
        'pagination'             => false,
        'cat'							   			=> array(6),
        'posts_per_page'         => 5,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();



          get_template_part( 'cardnews', 'hgrande' );


                wp_reset_postdata();

        }

      ?>
  </div>
  <div class="col S12 m12 l6">
    <?php

      $myargs = array (
        'pagination'             => false,
        'cat'							   			=> array(6),
        'offset'                  => 5,
        'posts_per_page'         => 5,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();



          get_template_part( 'cardnews', 'hgrande' );


                wp_reset_postdata();

        }

      ?>
  </div>

</div>


<?php
get_footer();