<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="produtos-recimec">
<div class="blog" role="main">
 <div class="blog-posts" style="margin-top:0px">
      <div class="container">
        <h2>Segmento: <?php echo single_cat_title(); ?></h2>
        <div class="row">
            <div class="col-md-12">
              <div class="row">
               <?php
							// the query
							$wpb_all_query = new WP_Query(array('cat' => get_query_var('cat'),'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
              <?php $contador = 1 ;?>
              <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                  <div class="col-md-3" >
                      <div class="post" style="max-height: 300px;">
                        <div class="img" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); max-width: 200px; max-height: 200px;"></div>
                        <div class="background">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php $codigo = get_field('codigo_do_produto');
                            if( !empty($codigo) ): ?>
                            <p><?php the_field('codigo_do_produto')?></p>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  <?php if($contador == 4): ?>
                    </div>
                    <div class="row">
                    <?php $contador = 0; ?>
                  <?php endif; $contador++;  ?>

                <?php endwhile; ?>
                <?php else : ?>

                      <p>Nenhum Post Encontrado.</p>





    <?php endif; ?>
    </div>
    </div>
     
        </div>
   </div>
   </section>
 
<?php get_footer(); ?>