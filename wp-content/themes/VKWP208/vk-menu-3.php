<!--HEADER VK-->
<?php
$menu_name = 'vk-menu-1';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<?php $menu_vk = array(); ?>

<?php
$contador = 0;

foreach ($menuitems as $key => $value) {

    if ($value->menu_item_parent == "0"){
      $menu_vk[$value->ID]['item'] = $value->title;
      $menu_vk[$value->ID]['url'] = $value->url;
      $menu_vk[$value->ID]['tipo'] = "simples";
      $menu_vk[$value->ID]['sub'] = array();
    }

    $contador = $contador + 1;

};

$contador = 0;

foreach ($menuitems as $key => $value) {
    if ($value->menu_item_parent <> "0"){
        $pai = $value->menu_item_parent;
        $titulo = $value->title;
        $url = $value->url;
        $menu_vk[$pai]['tipo'] = "composto";
        $menu_vk[$pai]['sub'][$contador]['titulo'] = $titulo;
        $menu_vk[$pai]['sub'][$contador]['url'] = $url;
        $contador = $contador + 1;
    }
};
?>

<div style="background-color: black;" class="uk-hidden-touch">
      <nav class="uk-navbar-container uk-container" style="background-color: black;" uk-navbar>
          <div class="uk-navbar-center">

              <ul class="uk-navbar-nav">

                <?php
  							foreach ($menu_vk as $key => $value) {
  								if ($value['tipo'] == "simples"){
  									?><li class="item" class="title"><a href="<?php echo $value['url']; ?>" style="color: white !important;"><?php echo $value['item']; ?></a></li><?php
  								} else
  								{
  									?>
  									<li class="item" class="title"><a href="<?php echo $value['url']; ?>" style="color: white !important;"><?php echo $value['item']; ?><span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>

                      <div class="uk-navbar-dropdown" style="margin-top: -10px;">
                        <ul class="uk-nav uk-navbar-dropdown-nav">


                          <?php $subitems = $value['sub']; ?>

													<?php foreach ($subitems as $key => $value) {
															?> <li class="item"><a href="<?php echo $value['url']; ?>" class="title" style="color: black !important;"><?php echo $value['titulo']; ?></a></li> <?php
													}; ?>


                       </ul>
                     </div>

  									</li>
  									<?php
  								};

  							};
  							?>


      </ul>
      </div>
      </nav>
</div>








<!-- MENU CELULAR -->

<?php
$menu_name = 'vk-menu-2';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<div style="background-color: black;" class="uk-hidden-notouch">
      <nav class="uk-navbar-container uk-container" style="background-color: black; padding: 5px;" uk-navbar>
          <div class="uk-navbar-right">

              <ul class="uk-navbar-nav">
                <a href="#menu-site" style="color: white;" uk-toggle>
                  Menu <span  class="uk-margin-small-right" style="color: white;"  uk-icon="icon: menu; ratio: 2"></span>
                </a>
              </ul>
      </div>
      </nav>
</div>


