<div class="center-align">

	<a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<i class="far fa-newspaper"></i>	<?php bloginfo( 'name' ); ?>
	</a></br>
</div>
<div class="row">
  <div class="col s12 m6 l6">
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



          get_template_part( 'cardnews', 'hgrande' );


                wp_reset_postdata();

        }

      ?>
  </div>


    <div class="col s12 m6 l6">
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'							   			=> array(2,7),
          'posts_per_page'         => 1,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();



            get_template_part( 'slider', '' );


                  wp_reset_postdata();

          }

        ?>
    </div>

</div>
<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> array(2,7),
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>
