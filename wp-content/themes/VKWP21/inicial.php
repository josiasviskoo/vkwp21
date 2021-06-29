<?php
/**
 * Template Name: Pagina Inicial
 */
get_header(); ?>
  <main>
    <section class="banner-slide">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: auto; margin: auto 0">
        <div class="carousel-inner">
          <?php  $args12 = array(
           'orderby' => 'rand',
  					'posts_per_page' => '-1',
  					'post_type' => 'banner',
           ); ?>
           <?php $custom_query = new WP_Query($args12);
						while($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <?php if( $custom_query->current_post == 0 && !is_paged() ) : ?>
            <div class="carousel-item active">
						<?php else : ?>
            <div class="carousel-item">
            <?php endif; ?>
              			<a href="<?php the_field('link')?>"><div class="slide-item" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>"></div></a>
          	</div>
         <?php endwhile; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="destaques-produtos">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h3>Destaques</h3>
              <section class="customer-logos slider">
                  <?php  $args1 = array(
                  'orderby' => 'rand',
  								'posts_per_page' => '20',
  								'category_name' => 'destaque',
                ); ?>
                <?php $custom_query = new WP_Query($args1);
								while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                	<div class="slide">
                	<img src="<?php the_post_thumbnail_url('medium'); ?>">
                    <i class="fas fa-star" id="icon"></i>
                    <h5><?php the_title(); ?></h5>
                    <?php $codigo = get_field('codigo_do_produto');
										if( !empty($codigo) ): ?>
                    <p><?php the_field('codigo_do_produto')?></p>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>">Detalhes</a>
                  </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); // reset the query ?>
              </section>
          </div>
      </div>
    </section>
    <section class="banner-meio">
      <div class="container">
        <div class="row">
          <a href="<?php the_field('banner_meio_link')?>"><img src="<?php the_field('banner_meio_pagina')?>"></a>
        </div>
      </div>
    </section>
    <section class="mais-produtos">
    <div class="container">
        <div class="row">
          <div class="col-md-12"><br><br>
              <section class="produtos-slider slider">
                <?php  $args = array(
                  'orderby' => 'rand',
  								'posts_per_page' => '20',
                  'category_name' => 'banhos',
                ); ?>
                <?php $custom_query = new WP_Query($args);
								while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                	<div class="slide">
                	<a data-fancybox="gallery" href="<?php the_post_thumbnail_url('full'); ?>"><img src="<?php the_post_thumbnail_url('medium'); ?>"></a>
                    <h5><?php the_title(); ?></h5>
                    <?php $codigo = get_field('codigo_do_produto');
										if( !empty($codigo) ): ?>
                    <p><?php the_field('codigo_do_produto')?></p>
                    <?php endif; ?>
                    <!--<a data-fancybox="gallery" href="<?php the_post_thumbnail_url('medium'); ?>"><center>Detalhes</center></a>-->
                  </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); // reset the query ?>
              </section>
          </div>
      </div>
    </section>

  </main>
<?php get_footer(); ?>
