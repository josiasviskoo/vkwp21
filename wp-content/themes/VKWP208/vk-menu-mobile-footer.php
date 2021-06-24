<style>
/* Menu footer */

.menu-footer-fixo {
  position: fixed;
  z-index: 9999;
  bottom: 0px;
  left: 0px;
  width: 100%;
  border-radius: 0px 30px 0px 0px;
}

.menu-footer-fixo .item-bottom-menu {
  padding: 10px;
  font-size: 12px;
}

.item-bottom-menu{
  text-align: center;
  font-size: 10px;
  padding-top: 5px;
  padding-bottom: 5px;
}

.item-bottom-menu a{
  color: white;
}

.item-bottom-menu a:hover{
  color: white;
  border-radius: 5px;
  text-decoration: none;
}

.item-bottom-menu:hover {
  background-color: rgba(0, 0, 0, 0.3);
  color: white;
  border-radius: 10px;
}

.item-bottom-menu i{
  font-size: 12px;
  text-align: center;
}

.item-bottom-menu span{
  position: absolute;
  width: 21px;
  font-size: 12px;
  height: 21px;
  border-radius: 100px;
  background-color: red;
  padding: 2px;
  color: white;
}

.menu-footer-fixo .active{
  background-color: rgba(0, 0, 0, 0.1);
}

</style>

<div style="min-height: 50px;" class="uk-hidden-notouch">
  <!-- pra dar um espaço no footer -->
</div>
<div class="uk-hidden-notouch">
	<div class="menu-footer-fixo uk-child-width-1-4 uk-grid-small uk-text-center" style="background-color: var(--menu-mobile-cor-fundo);" uk-grid>
		<div>
			<div class="uk-card uk-card-body item-bottom-menu active">
			  <a href="<?php echo get_home_url(); ?>" style="color: var(--menu-mobile-cor-letra);"><i class="uk-margin-small-center" uk-icon="home"></i></br> Home</a>
			</div>
		</div>
		<div>
			<div class="uk-card uk-card-body item-bottom-menu">
			  <a href="#menu-site" style="color: var(--menu-mobile-cor-letra);" uk-toggle><i class="uk-margin-small-center" uk-icon="menu"></i></br> Categorias</a>
			</div>
		</div>
		<div>
			<div class="uk-card uk-card-body item-bottom-menu">
			  <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" style="color: var(--menu-mobile-cor-letra);"><i class="uk-margin-small-center" uk-icon="cart"></i></br>
				Carrinho <span style="background-color: var(--menu-mobile-cor-fundo-carrinho); color: var(--menu-mobile-cor-letra-carrinho);"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
			</div>
		</div>
		<div>
			<div class="uk-card uk-card-body item-bottom-menu">
			  <?php if ( is_user_logged_in() ) { ?>
				<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" style="color: var(--menu-mobile-cor-letra);"><i class="uk-margin-small-center" uk-icon="user"></i></br> Conta</a>
			   <?php }
			   else { ?>
				<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" style="color: var(--menu-mobile-cor-letra);"><i class="uk-margin-small-center" uk-icon="user"></i></br> Registrar</a>
			   <?php } ?>
			</div>
		</div>
	</div>
</div>



<div id="menu-site" uk-offcanvas style="z-index:999;">
    <div class="uk-offcanvas-bar" style="background-color: black !important; color: white !important;">

        <button style="color: white;" class="uk-offcanvas-close" type="button" uk-close></button>

		<br><br>

		<form action="<?php echo $dominio_home; ?>/" method="get" class="uk-search uk-search-default" style="width: 100% !important;">
			<a href="" class="uk-search-icon-flip" uk-search-icon></a>
			<input name="s" class="uk-search-input" type="search" placeholder="Buscar na <?php echo $nomeempresa; ?>..." style="border-radius: 50px; ">
		</form>

    <br><br>

        <!-- itens -->

          <?php
            $menu_name = 'vk-menu-1';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
          ?>

          <nav>
          <ul class="uk-nav uk-nav-primary uk-nav-left uk-margin-auto-vertical">
              <?php
              $count = 0;
              $submenu = false;

              foreach( $menuitems as $item ):

                  $link = $item->url;
                  $title = $item->title;
                  // item does not have a parent so menu_item_parent equals 0 (false)
                  if ( !$item->menu_item_parent ):

                  // save this id for later comparison with sub-menu items
                  $parent_id = $item->ID;
              ?>

              <li class="item">
                  <a href="<?php echo $link; ?>" class="title" style="color: white !important; font-size: 14px;">
                      <?php echo $title; ?>
                  </a>
              <?php endif; ?>

                  <?php if ( $parent_id == $item->menu_item_parent ): ?>

                      <?php if ( !$submenu ): $submenu = true; ?>
                      <ul class="uk-nav-sub">
                      <?php endif; ?>

                          <li>
                              <a href="<?php echo $link; ?>" class="title" style="color: white !important; font-size: 14px;">
                                <span uk-icon="icon: chevron-right"></span> <?php echo $title; ?>
                              </a>
                          </li>


                      <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                      </ul>
                      <?php $submenu = false; endif; ?>

                  <?php endif; ?>

              <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
              </li>
              <li class="uk-nav-divider"></li>
              <?php $submenu = false; endif; ?>

          <?php $count++; endforeach; ?>

          </ul>
          </nav>


    </div>
</div>
