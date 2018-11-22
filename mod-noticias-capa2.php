<div class="row">
	<div class="col S12 m12 l3">

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



					get_template_part( 'cardnews', '' );


								wp_reset_postdata();

				}

			?>
	</div>

	<div class="col S12 m12 l6">
		<div class="row no-padding">

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

	<div class="col S12 m12 l3">

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



					get_template_part( 'cardnews', '' );


								wp_reset_postdata();

				}

			?>
	</div>





</div>
