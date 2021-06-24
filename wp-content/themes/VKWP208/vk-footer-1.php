<footer style="background-color: black;">
	<?php $cordasletras = "white"; ?>
  <section class="uk-section uk-section-small uk-light">
    <div class="uk-container">
      <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-4@m" uk-grid>
        <div><a class="uk-logo" href="<?php echo $dominio_home; ?>"><img src="<?php echo $logolight; ?>" width="250"></a>
          <p class="uk-text-small" style="color: <?php echo $cordasletras ?>">Agência de criação focada
em Lojas Virtuais, Sites, Redes Sociais e Design
da forma mais inovadora possível!</p>
          <ul class="uk-iconnav">
            <li><a href="https://www.facebook.com/viskoopropaganda" title="Facebook" uk-icon="facebook" target="_blank" style="color: <?php echo $cordasletras ?>"></a></li>
            <li><a href="https://twitter.com/josiasviskoo" title="Twitter" uk-icon="twitter" target="_blank" style="color: <?php echo $cordasletras ?>"></a></li>
            <li><a href="https://www.youtube.com/c/josiasviskoodaagenciaviskoo?sub_confirmation=1" title="YouTube" uk-icon="youtube" target="_blank" style="color: <?php echo $cordasletras ?>"></a></li>
            <li><a href="https://www.instagram.com/agencia.viskoo" title="Instagram" uk-icon="instagram" target="_blank" style="color: <?php echo $cordasletras ?>"></a></li>
          </ul>
        </div>
        <div>
          <nav class="uk-grid-small uk-child-width-1-2" uk-grid>
            <div>
              <ul class="uk-nav uk-nav-default">

                <?php
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['vk-menu-3'];
                $primaryNav = wp_get_nav_menu_items($menuID);

                foreach ( $primaryNav as $navItem ) {
                    echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'" style="color: '.$cordasletras.';">'.$navItem->title.'</a></li>';
                }; ?>

              </ul>
            </div>
            <div>
              <ul class="uk-nav uk-nav-default">

                <?php
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['vk-menu-4'];
                $primaryNav = wp_get_nav_menu_items($menuID);

                foreach ( $primaryNav as $navItem ) {
                    echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'" style="color: '.$cordasletras.';">'.$navItem->title.'</a></li>';
                }; ?>

              </ul>
            </div>
          </nav>
        </div>
        <div>
          <ul class="uk-list uk-text-small">
            <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right" uk-icon="receiver" style="color: <?php echo $cordasletras ?>"></span><span class="tm-pseudo" style="color: <?php echo $cordasletras ?>">(16) 9 9343.8187</span></a></li>
            <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right" uk-icon="mail" style="color: <?php echo $cordasletras ?>"></span><span class="tm-pseudo" style="color: <?php echo $cordasletras ?>">contato@viskoo.com.br</span></a></li>
            <li>
              <div class="uk-text-muted"><span class="uk-margin-small-right" uk-icon="location" style="color: <?php echo $cordasletras ?>"></span><span style="color: <?php echo $cordasletras ?>">Rua Aquidaban, 1 - centro São Carlos</span>
              </div>
            </li>
            <li>
              <div class="uk-text-muted"><span class="uk-margin-small-right" uk-icon="clock" style="color: <?php echo $cordasletras ?>"></span><span style="color: <?php echo $cordasletras ?>">9h às 17h</span>
              </div>
            </li>

          </ul>
        </div>
        <div>
          
			
			<!-- Plugin Newsletter por Autor: Stefano Lissa & The Newsletter Team -->
			<form method="post" action="<?php echo $dominio_home; ?>/?na=s" onsubmit="return newsletter_check(this)">
			<input type="hidden" name="nlang" value="">
			<div class="tnp-field tnp-field-email"><label style="color: <?php echo $cordasletras ?>">Email</label>
				<input class="tnp-email uk-input" type="email" name="ne" placeholder="E-mail" required></div>
			<div class="tnp-field tnp-field-button"><br><input class="tnp-submit uk-button uk-button-default" type="submit" value="Assinar" style="color: <?php echo $cordasletras ?>">
			</div>
			</form>
			
          <div class="uk-margin uk-text-small uk-text-muted" style="color: <?php echo $cordasletras ?> !important">Você pode receber novidades de novos produtos</div>
        </div>
      </div>
    </div>
  </section>
</footer>
