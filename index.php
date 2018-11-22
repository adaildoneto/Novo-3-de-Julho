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
<div class="container">
	<div class="row">
			<?php include(TEMPLATEPATH.'/mod-noticias-capa.php');?>
	</div>

</div>

<div class="divider">

</div>
<div class="row grey lighten-4">
	<div class="container">
		<div class="row">
			<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
		</div>

	</div>
</div>


<div class="divider">

</div>
<div class="container">
	<div class="row">

<?php include(TEMPLATEPATH.'/mod-noticias-capa2.php');?>
</div>
</div>
<?php
get_footer();
