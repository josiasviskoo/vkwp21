<div class="uk-container" style="padding-top: 5px; padding-bottom: 5px; border-top: solid 3px black; border-bottom: solid 3px black;">
    <div class="uk-grid-match uk-grid-small uk-text-left" uk-grid>
      <div class="uk-width-1-4@m">
          <div class="uk-card uk-card-body">

            <ul class="uk-list uk-list-divider">
            <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['vk-menu-3'];
            $primaryNav = wp_get_nav_menu_items($menuID);

            foreach ( $primaryNav as $navItem ) {
                echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'" style="color: gray;">'.$navItem->title.'</a></li>';
            }; ?>
            </ul>

          </div>
      </div>
        <div class="uk-width-1-4@m">
            <div class="uk-card uk-card-body">

              <ul class="uk-list uk-list-divider">
              <?php
              $menuLocations = get_nav_menu_locations();
              $menuID = $menuLocations['vk-menu-4'];
              $primaryNav = wp_get_nav_menu_items($menuID);

              foreach ( $primaryNav as $navItem ) {
                  echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'" style="color: gray;">'.$navItem->title.'</a></li>';
              }; ?>
              </ul>

            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="uk-card uk-card-body">

              <ul class="uk-list uk-list-divider">
              <?php
              $menuLocations = get_nav_menu_locations();
              $menuID = $menuLocations['vk-menu-5'];
              $primaryNav = wp_get_nav_menu_items($menuID);

              foreach ( $primaryNav as $navItem ) {
                  echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'" style="color: gray;">'.$navItem->title.'</a></li>';
              }; ?>
              </ul>

            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="uk-card uk-card-body">

              <ul class="uk-list uk-list-divider">
              <?php
              $menuLocations = get_nav_menu_locations();
              $menuID = $menuLocations['vk-menu-6'];
              $primaryNav = wp_get_nav_menu_items($menuID);

              foreach ( $primaryNav as $navItem ) {
                  echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'" style="color: gray;">'.$navItem->title.'</a></li>';
              }; ?>
              </ul>

            </div>
        </div>
    </div>
</div>
