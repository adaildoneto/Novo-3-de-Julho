
  <div class="row">
    <div class="sl1der">
                <?php

                  $myargs = array (
                    'pagination'             => false,
                    'cat'							   			=> array(2,7),
                    'posts_per_page'         => 6,
                    'ignore_sticky_posts'    => true,

                  );
                  // The Query
                  $myquery = new WP_Query( $myargs );

                  // The Loop
                  while ( $myquery->have_posts() ) {

                      $myquery->the_post();


                      echo ('<div class="col s12">');
                      get_template_part( 'slider', '' );
                      echo ('</div>');

                            wp_reset_postdata();

                    }

                  ?>
    </div>
  </div>
<div class="row">
  <?php if ( dynamic_sidebar('h1-sidebar') ) : else : endif; ?>
</div>


  <div class="row">
    <div class="flash">
                <?php

                  $myargs = array (
                    'pagination'             => false,
                    'cat'							   			=> array(2,7),
                    'posts_per_page'         => 6,
                    'ignore_sticky_posts'    => true,

                  );
                  // The Query
                  $myquery = new WP_Query( $myargs );

                  // The Loop
                  while ( $myquery->have_posts() ) {

                      $myquery->the_post();


                      echo ('<div class="col s12">');
                      get_template_part( 'slider', '' );
                      echo ('</div>');

                            wp_reset_postdata();

                    }

                  ?>
    </div>
</div>
<div class="row">
  <?php if ( dynamic_sidebar('h2-sidebar') ) : else : endif; ?>
</div>


  <div class="col S12 m12 l6">
    <h5 style="padding-bottom: 5px;">Geral</h5>
    <hr class="style-one">
    <?php

      $myargs = array (
        'pagination'             => false,
        'cat'							   			=> array(2,7),
        'posts_per_page'         => 7,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();



          get_template_part( 'cardnews', 'horizontal' );


                wp_reset_postdata();

        }

      ?>
  </div>

  <div class="col S12 m12 l6">
    <h5 style="padding-bottom: 5px;">Polícia</h5>
    <hr class="style-one">
    <?php

      $myargs = array (
        'pagination'             => false,
        'cat'							   			=> array(2,7),
        'posts_per_page'         => 7,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();



          get_template_part( 'cardnews', 'horizontal' );


                wp_reset_postdata();

        }

      ?>
  </div>

  <div class="row">
    <?php if ( dynamic_sidebar('h3-sidebar') ) : else : endif; ?>
  </div>


    <div class="col S12 m12 l6">
      <h5 style="padding-bottom: 5px;">Saúde</h5>
      <hr class="style-one">
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'							   			=> array(2,7),
          'posts_per_page'         => 3,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();



            get_template_part( 'cardnews', 'horizontal' );


                  wp_reset_postdata();

          }

        ?>
    </div>

    <div class="col S12 m12 l6">
      <h5 style="padding-bottom: 5px;">Educação</h5>
      <hr class="style-one">
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'							   			=> array(2,7),
          'posts_per_page'         => 3,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();



            get_template_part( 'cardnews', 'horizontal' );


                  wp_reset_postdata();

          }

        ?>
    </div>
    <div class="row">
      <?php if ( dynamic_sidebar('h4-sidebar') ) : else : endif; ?>
    </div>


      <div class="col S12 m12 l6">
        <h5 style="padding-bottom: 5px;">Mundo</h5>
        <hr class="style-one">
        <?php

          $myargs = array (
            'pagination'             => false,
            'cat'							   			=> array(2,7),
            'posts_per_page'         => 3,
            'ignore_sticky_posts'    => true,

          );
          // The Query
          $myquery = new WP_Query( $myargs );

          // The Loop
          while ( $myquery->have_posts() ) {

              $myquery->the_post();



              get_template_part( 'cardnews', 'horizontal' );


                    wp_reset_postdata();

            }

          ?>
      </div>

      <div class="col S12 m12 l6">
        <h5 style="padding-bottom: 5px;">Nacional</h5>
        <hr class="style-one">
        <?php

          $myargs = array (
            'pagination'             => false,
            'cat'							   			=> array(2,7),
            'posts_per_page'         => 3,
            'ignore_sticky_posts'    => true,

          );
          // The Query
          $myquery = new WP_Query( $myargs );

          // The Loop
          while ( $myquery->have_posts() ) {

              $myquery->the_post();



              get_template_part( 'cardnews', 'horizontal' );


                    wp_reset_postdata();

            }

          ?>
      </div>
      <div class="row">
        <?php if ( dynamic_sidebar('h6-sidebar') ) : else : endif; ?>
      </div>


        <div class="col S12 m12 l6">
          <h5 style="padding-bottom: 5px;">Cultura</h5>
          <hr class="style-one">
          <?php

            $myargs = array (
              'pagination'             => false,
              'cat'							   			=> array(2,7),
              'posts_per_page'         => 3,
              'ignore_sticky_posts'    => true,

            );
            // The Query
            $myquery = new WP_Query( $myargs );

            // The Loop
            while ( $myquery->have_posts() ) {

                $myquery->the_post();



                get_template_part( 'cardnews', 'horizontal' );


                      wp_reset_postdata();

              }

            ?>
        </div>

        <div class="col S12 m12 l6">
          <h5 style="padding-bottom: 5px;">Concurso</h5>
          <hr class="style-one">
          <?php

            $myargs = array (
              'pagination'             => false,
              'cat'							   			=> array(2,7),
              'posts_per_page'         => 3,
              'ignore_sticky_posts'    => true,

            );
            // The Query
            $myquery = new WP_Query( $myargs );

            // The Loop
            while ( $myquery->have_posts() ) {

                $myquery->the_post();



                get_template_part( 'cardnews', 'horizontal' );


                      wp_reset_postdata();

              }

            ?>
        </div>
        <div class="row">
          <?php if ( dynamic_sidebar('h7-sidebar') ) : else : endif; ?>
        </div>


          <div class="col S12 m12 l12">
            <h5 style="padding-bottom: 5px;">Tudo sobre Política</h5>
            <hr class="style-one">
            <?php

              $myargs = array (
                'pagination'             => false,
                'cat'							   			=> array(2,7),
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
