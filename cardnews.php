
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <div class="card transparent z-depth-0 newscard">
        <div class="nocanto2">
          <?php $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  echo '<span class="new badge blue-grey darken-5" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
                  }?>

        </div>
        <div class="card-image">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cardnews' );?>
          <img class="responsive-img" src="<?php echo $image[0]; ?>" >

            </div>
        <div class="news grey-text text-darken-4">
          <?php the_title();?>
        </div>
      </div>
    </a>
