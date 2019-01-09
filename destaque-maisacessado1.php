<div class="col s12 l6">

        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>

        <div class="card slider-post">
    <div class="card-image waves-effect waves-block waves-light">

          <img class="activator fit-center" src="<?php echo $image[0]; ?>">


    </div>

    <div class="card-reveal red darken-4">
        <span class="card-title white-text text-darken-4"><i class="material-icons right">close</i></span>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <h1 class="white-text news-slider center-align" >
        <?php the_title();?>
      </h1>  </a>
    </div>
  </div>

</div>
