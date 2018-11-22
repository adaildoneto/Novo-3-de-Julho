
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">
          <div class="nocanto1">
            <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<span class="new badge blue-grey darken-5" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
                    }?>
          </div>
              <div class="card-image">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
                <img class="responsive-img" src="<?php echo $image[0]; ?>" >
              </div>
              <div class="card-stacked">
                <div class="news-hgrande blue-grey-text text-darken-4">
                  <?php the_title();?>
                  <hr class="style-one">
                  </div>
                  <div class="news-text blue-grey-text">
                  <?php echo excerpt('20'); ?>
                  </div>
              </div>
            </div>
</a>
