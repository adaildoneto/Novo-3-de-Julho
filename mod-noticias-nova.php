

<div class="row">
  <div class="col S12 m6 l3">

        <?php

          $myargs = array (
            'pagination'             => false,
            'cat'							   			=> array(3),
            'posts_per_page'         => 5,
            'ignore_sticky_posts'    => true,

          );
          // The Query
          $myquery = new WP_Query( $myargs );

          // The Loop
          while ( $myquery->have_posts() ) {

              $myquery->the_post();



              get_template_part( 'cardnews', '' );


                    wp_reset_postdata();

            }

          ?>
  </div>

  <div class="col s12 m12 l6">
    <div class="row">
      <?php if ( dynamic_sidebar('h1-sidebar') ) : else : endif; ?>
    </div>
      <div class="row">
      <?php if ( dynamic_sidebar('h2-sidebar') ) : else : endif; ?>
        </div>
        <div class="row">
          <?php if ( dynamic_sidebar('h3-sidebar') ) : else : endif; ?>
        </div>
</div>
  <div class="col S12 m6 l3">

        <?php

          $myargs = array (
            'pagination'             => false,
            'cat'							   			=> array(3),
            'posts_per_page'         => 5,
            'offset'                  => 5,
            'ignore_sticky_posts'    => true,

          );
          // The Query
          $myquery = new WP_Query( $myargs );

          // The Loop
          while ( $myquery->have_posts() ) {

              $myquery->the_post();



              get_template_part( 'cardnews', '' );


                    wp_reset_postdata();

            }

          ?>
  </div>
</div>
<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> array(3),
      'posts_per_page'         => 4,
      'offset'                  => 10,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();


        echo ('<div class="col s12 m6 l3">');
        get_template_part( 'cardnews', '' );
        echo ('</div>');

              wp_reset_postdata();

      }

    ?>

</div>
  <div class="row black" style="padding: 20px;">
    <div class="col s12 m12 l8">
        <?php if ( dynamic_sidebar('video-sidebar') ) : else : endif; ?>
    </div>

    <div class="col s12 m12 l4">
      <?php if ( dynamic_sidebar('listavideo-sidebar') ) : else : endif; ?>
    </div>
  </div>


  <div class="row">
    <?php if ( dynamic_sidebar('h4-sidebar') ) : else : endif; ?>
  </div>


    <div class="col S12 m6 l3">
      <?php if ( dynamic_sidebar('n3-sidebar') ) : else : endif; ?>
    </div>

    <div class="col S12 m6 l3">
      <?php if ( dynamic_sidebar('n4-sidebar') ) : else : endif; ?>
    </div>



      <div class="col S12 m6 l3">
      <?php if ( dynamic_sidebar('n5-sidebar') ) : else : endif; ?>
      </div>

      <div class="col S12 m6 l3">
    <?php if ( dynamic_sidebar('n6-sidebar') ) : else : endif; ?>
      </div>
      <div class="row">
        <?php if ( dynamic_sidebar('h6-sidebar') ) : else : endif; ?>
      </div>


        <div class="col S12 m12 l6">
          <?php if ( dynamic_sidebar('n7-sidebar') ) : else : endif; ?>
        </div>

        <div class="col S12 m12 l6">
              <?php if ( dynamic_sidebar('n8-sidebar') ) : else : endif; ?>
             </div>
