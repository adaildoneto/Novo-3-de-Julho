
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card horizontal transparent hnewscard z-depth-0">
          <div class="card-image">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'quadrado' );?>
            <img class="responsive-img" src="<?php echo $image[0]; ?>" >
          </div>

              <div class="card-stacked">
                <div class="news-h grey-text text-darken-4">
                  <?php the_title();?>
                </div>
              </div>

            </div>
</a>
