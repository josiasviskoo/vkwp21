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



	<header>
		<div class="uk-navbar-container tm-navbar-container" style="background-color: black;" uk-sticky="cls-active: tm-navbar-container-fixed">
			<div class="uk-container" uk-navbar>
				<div class="uk-navbar-left">
					<button class="uk-navbar-toggle uk-hidden@m" style="color: white;" uk-toggle="target: #menu-site" uk-navbar-toggle-icon></button>
					

						
					<a class="uk-logo" href="<?php echo $dominio_home; ?>">
						<img src="<?php echo $logo; ?>" width="50" class="uk-hidden-touch">
						<img src="<?php echo $logo; ?>" width="50" class="uk-hidden-notouch">
					</a>
					
					
						
					<nav class="uk-visible@m">
						<ul class="uk-navbar-nav">


							<?php
							foreach ($menu_vk as $key => $value) {
								if ($value['tipo'] == "simples"){
									?><li><a href="<?php echo $value['url']; ?>" style="color: white;"><?php echo $value['item']; ?></a></li><?php
								} else
								{
									?>
									<li><a href="<?php echo $value['url']; ?>" style="color: white;"><?php echo $value['item']; ?><span class="uk-margin-xsmall-left" uk-icon="icon: chevron-down; ratio: .75;"></span></a>
										<div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove-vertical" uk-drop="pos: bottom-justify;delay-show: 125;delay-hide: 50;duration: 75;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
											<div class="uk-container uk-container-small uk-margin-top uk-margin-bottom">
												<ul class="uk-nav uk-nav-default uk-column-1-4">

													<?php $subitems = $value['sub']; ?>

													<?php foreach ($subitems as $key => $value) {
															?> <li><a href="<?php echo $value['url']; ?>"><?php echo $value['titulo']; ?></a></li> <?php
													}; ?>

												</ul>
											</div>
										</div>
									</li>
									<?php
								};

							};
							?>


						</ul>
					</nav>
				</div>
				<div class="uk-navbar-right"><a class="uk-navbar-toggle tm-navbar-button" href="#" uk-search-icon></a>
					<div class="uk-navbar-dropdown uk-padding-small uk-margin-remove" uk-drop="mode: click;cls-drop: uk-navbar-dropdown;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
						<div class="uk-container">
							<div class="uk-grid-small uk-flex-middle" uk-grid>
								<div class="uk-width-expand">
									<form class="uk-search uk-search-navbar uk-width-1-1" action="<?php echo $dominio_home; ?>/" method="get">
										<input class="uk-search-input" id="s" name="s" type="search" placeholder="Buscar na <?php echo $nomeempresa; ?>..." autofocus>
									</form>
								</div>
								<div class="uk-width-auto"><a class="uk-navbar-dropdown-close" href="#" uk-close></a></div>
							</div>
						</div>
					</div>

					<a class="uk-navbar-item uk-link-muted tm-navbar-button" href="<?php echo $dominio_home; ?>/minha-conta/" uk-icon="user"></a>
					<div class="uk-padding-small uk-margin-remove" uk-dropdown="pos: bottom-right; offset: -10; delay-hide: 200;" style="min-width: 150px;">
						<ul class="uk-nav uk-dropdown-nav">
							<li><a href="<?php echo $dominio_home; ?>/minha-conta/">Minha conta</a></li>

							<li class="uk-nav-divider"></li>
							<li><a href="<?php echo $string = wc_logout_url( $redirect ); ?>">Sair</a></li>
						</ul>
					</div><a class="uk-navbar-item uk-link-muted tm-navbar-button" href="cart.html" uk-toggle="target: #cart-offcanvas" onclick="return false"><span uk-icon="cart"></span><span class="uk-badge" style="background-color: var(--carrinho-indicador-quantidade-fundo); color: var(--carrinho-indicador-quantidade-letra);">
						<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
					</span></a>
				</div>
			</div>
		</div>
	</header>
		<!--/HEADER VK-->



				<!--CARRINHO-->
				<div id="cart-offcanvas" uk-offcanvas="overlay: true; flip: true">
					<aside class="uk-offcanvas-bar uk-padding-remove">
						<div class="uk-card uk-card-default uk-card-small uk-height-1-1 uk-flex uk-flex-column tm-shadow-remove">
							<header class="uk-card-header uk-flex uk-flex-middle">
								<div class="uk-grid-small uk-flex-1" uk-grid>
									<div class="uk-width-expand">
										<div class="uk-h3">Carrinho</div>
									</div>
									<button class="uk-offcanvas-close" type="button" uk-close></button>
								</div>
							</header>
							<div class="uk-card-body uk-overflow-auto">

								<?php WC()->cart->get_cart(); ?>

									<ul class="uk-list uk-list-striped">


										<?php
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();

        foreach($items as $item => $values) {
            $_product =  wc_get_product( $values['data']->get_id());
            $price = get_post_meta($values['product_id'] , '_price', true);

						?><li><?php echo $_product->get_title(); ?> (<?php echo $values['quantity']; ?>x) <strong>R$<?php echo $price; ?></strong></li><?php
        }
?>


									</ul>



							</div>

							<footer class="uk-card-footer">

								<div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-1@m uk-margin-small" uk-grid>

									<div><a style="background-color: black;" class="uk-button uk-button-danger uk-margin-small uk-width-1-1" href="<?php echo wc_get_cart_url(); ?>">Finalizar compra</a></div>
								</div>
							</footer>
						</div>
					</aside>
				</div>
				<!-- Carrinho -->
