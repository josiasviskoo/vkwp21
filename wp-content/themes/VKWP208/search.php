<?php
/**
 */

get_header(); ?>

<?php
$s=get_search_query();
$args = array(
          's' =>$s
      );
?>
<div class="uk-container" style="padding-top: 30px; padding-bottom: 30px;">

<?php
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
  _e(""); ?>
	
	
	<div class="uk-child-width-1-2@m" uk-grid>
	<?php
  while ( $the_query->have_posts() ) {
     $the_query->the_post();
           ?>

    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('imagemblog'); ?></a>
            </div>
            <div class="uk-card-body">
                <p><?php the_title(); ?></p>
                
            </div>
        </div>
    </div>
  
           <?php
  }
}else{
?>
  <h2 style='font-weight:bold;color:#000'>Ops!</h2>
  <div class="alert alert-info">
    <p>Não encontramos nenhum resultado nessa pesquisa!</p>
  </div>
<?php } ?>
</div>
</div>
<?php get_footer(); ?>
