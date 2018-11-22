<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div class="row">
			<form method="get" class="col s12" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
				<div class="input-field col s10">
					 <input id="icon_prefix" type="search" value="<?php echo get_search_query(); ?>" class="validate" name="s"/>

				 </div>
				 <div class="class col s2">
			 <label for="icon_prefix" class="label-icon right"><i class="material-icons">search</i></label>
				 </div>

			 </form>
</div>
