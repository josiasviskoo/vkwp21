<?php
/**
 * Template Name: Contato
 */
get_header();?>
		<main class="produtos-recimec">  
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <h1 class="text-center" style="margin-bottom: 15px"> Entre em Contato </h1>
        	<div class="row">
            <div class="col-md-6">
              <div class="mapa-contato">
              	<?php the_field('mapa'); ?>
              </div>
                <p><strong>Telefones: </strong><?php the_field('telefones'); ?></p>
                <p><strong>Endereço: </strong><?php the_field('endereco'); ?></p>
                <p><strong>Email: </strong><?php the_field('email'); ?></p>
            </div>
            <div class="col-md-6">
              <?php echo do_shortcode( '[contact-form-7 id="101" title="Formulário de contato 1"]' ); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
      
<?php get_footer(); ?>
