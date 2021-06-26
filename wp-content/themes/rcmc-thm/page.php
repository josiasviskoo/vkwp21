<?php get_header(); ?>

    <main class="pagina">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9">
            <?php get_template_part('_detalhe'); ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
