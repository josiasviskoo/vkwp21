<?php
/**
*
*/

get_header(); ?>

<section id="primary" class="site-content">
<div id="content" role="main" style="padding-top: 10px !important; padding-bottom: 10px !important;">
	<?php // include("vk-menu-filtro.php"); ?>
<?php dynamic_sidebar( 'sidebar-product' ); ?>
<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>


<div class="uk-container">
      <div class="uk-child-width-1-2@m" uk-grid>
      <?php

      // The Loop
      while ( have_posts() ) : the_post(); ?>

          <div>
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                      <img src="<?php echo the_post_thumbnail_url('600x600'); ?>" alt="<?php the_title_attribute(); ?>">
                    </a>
                  </div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="color: black;">
                        <?php the_title(); ?>
                        </a>
                      </h3>

                  </div>
              </div>
          </div>


      <?php endwhile;

      else: ?>
      <p>Não tem nada aqui!</p>

      <?php endif; ?>
      </div>
</div>
</div>
</section>


<?php // get_sidebar(); ?>
<?php get_footer(); ?>
