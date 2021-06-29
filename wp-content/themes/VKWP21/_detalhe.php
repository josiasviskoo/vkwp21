  <?php if (have_posts()) : ?>
  	<?php while (have_posts()) : the_post(); ?>

			<div class="row">
        <div class="col-md-6">
          <div class="post-thumbnail" style="padding:15px">
            <?php if ( ( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail() ) ) { 
              $post_thumbnail_id = get_post_thumbnail_id();
              $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
             ?>
            <div class="post-image">
                <img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" style="width:100%; height:auto;">
            </div>
        		<?php } ?>
          </div>
        </div>
        <div class="col-md-6">
        	<div class="row text-center">
      			<h1><?php the_title(); ?></h1>
    			</div>
          <?php $posttags = get_the_category();
                            if ($posttags) {
                              echo '<span class="label label-default" style="color:white"><i class="fas fa-bookmark"></i>';
                              foreach($posttags as $tag) {
                                echo ' '. $tag->name.' ';
                              }
                             echo '</span>';
                            }
                            ?>
                        <?php $posttagss = get_the_tags();
                            if ($posttagss) {
                              echo '<span class="label label-default label-tags" style="color:white"><i class="fas fa-tag"></i>';
                              foreach($posttagss as $tags) {
                                echo ' '. $tags->name.' ';
                              }
                             echo '</span>';
                            }
                            ?>

          <div class="row text-justify detalhe-post">
            <?php the_content(); ?>
            
          </div>


        </div>
    	<div class="row" style="display:none">
      	<?php comments_template(); ?>
    	</div>
  	<?php endwhile; ?>
  	<?php else : ?>
    	<p class="text-center">Não existe conteúdo aqui!</p>
  
        <?php endif; ?>
