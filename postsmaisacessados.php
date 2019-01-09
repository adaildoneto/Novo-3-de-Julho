<?php
$nova_consulta = new WP_Query(
    array(
        'posts_per_page'      => 5,                 // Máximo de 5 artigos
        'no_found_rows'       => true,              // Não conta linhas
        'post_status'         => 'publish',         // Somente posts publicados
        'ignore_sticky_posts' => true,              // Ignora posts fixos
        'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
        'meta_key'            => 'tp_post_counter', // A nossa post meta
        'order'               => 'DESC'             // Ordem decrescente
    )
);
?>

<div class="row">
      <?php if ( $nova_consulta->have_posts() ): ?>
      <?php while ( $nova_consulta->have_posts() ): ?>
      <?php $nova_consulta->the_post(); ?>
      <?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>


  <?php  if ( $nova_consulta->current_post == 0  ): {  // first post

                   get_template_part ('destaque', 'maisacessado1');

        } endif; ?>

  <?php  if ( $nova_consulta->current_post == 1  ): {  // first post

                    get_template_part ('destaque', 'maisacessado1');

        } endif; ?>


  <?php  if ( $nova_consulta->current_post == 2  ): {  // first post

                    get_template_part ('destaque', 'maisacessado2');

        } endif; ?>
  <?php  if ( $nova_consulta->current_post == 3  ): {  // first post

                    get_template_part ('destaque', 'maisacessado2');

        } endif; ?>
  <?php  if ( $nova_consulta->current_post == 4  ): {  // first post

                    get_template_part ('destaque', 'maisacessado2');

        } endif; ?>

        <?php endwhile; ?>
    <?php endif; // have_posts ?>

    <?php wp_reset_postdata(); ?>
</div> <!-- .mais-vistos -->
