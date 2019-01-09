<div class="col s12 l4">

        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>

        <div class="card destaque-post">
    <div class="card-image waves-effect waves-block waves-light">

        <img class="activator fit-center" src="<?php echo $image[0]; ?>">

    </div>

    <div class="card-reveal red darken-4 valign-wrapper">
      <span class="card-title white-text text-darken-4"><i class="material-icons right">close</i></span>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <h5 class="white-text center-align" >
        <?php the_title();?>
      </h5>  </a>
    </div>
  </div>

</div>
