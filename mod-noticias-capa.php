
  <div class="row">
    <div class="sl1der">
                <?php

                  $myargs = array (
                    'pagination'             => false,
                    'cat'							   			=> array(17),
                    'posts_per_page'         => 4,
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
                    'cat'							   			=> array(3),
                    'posts_per_page'         => 4,
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
  <?php if ( dynamic_sidebar('n1-sidebar') ) : else : endif; ?>
  </div>

  <div class="col S12 m12 l6">
<?php if ( dynamic_sidebar('n2-sidebar') ) : else : endif; ?>
  </div>

  <div class="row">
    <?php if ( dynamic_sidebar('h3-sidebar') ) : else : endif; ?>
  </div>


    <div class="col S12 m12 l6">
      <?php if ( dynamic_sidebar('n3-sidebar') ) : else : endif; ?>
    </div>

    <div class="col S12 m12 l6">
      <?php if ( dynamic_sidebar('n4-sidebar') ) : else : endif; ?>
    </div>
    <div class="row">
      <?php if ( dynamic_sidebar('h4-sidebar') ) : else : endif; ?>
    </div>


      <div class="col S12 m12 l6">
      <?php if ( dynamic_sidebar('n5-sidebar') ) : else : endif; ?>
      </div>

      <div class="col S12 m12 l6">
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
        <div class="row">
          <?php if ( dynamic_sidebar('h7-sidebar') ) : else : endif; ?>
        </div>


          <div class="col S12 m12 l12">
            <h5 style="padding-bottom: 5px;">Tudo sobre Política</h5>
            <hr class="style-one">
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
