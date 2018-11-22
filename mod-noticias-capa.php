<div class="col s12 m12 l6">
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


  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> array(2,7),
      'posts_per_page'         => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();


    echo ('<div>');
        get_template_part( 'cardnews', 'hgrande' );
        echo ('</div>');


              wp_reset_postdata();

      }

    ?>

</div>



<div class="col S12 m12 l3">

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



					get_template_part( 'cardnews', '' );


								wp_reset_postdata();

				}

			?>
	</div>

	<div class="col S12 m12 l3">

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
