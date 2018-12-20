<?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
<div class="card destaque-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
<div class="card-content">
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
  <span class="white-text news-destaque" >
    <?php the_title();?>
  </span>  </a>
</div>

  </div>
