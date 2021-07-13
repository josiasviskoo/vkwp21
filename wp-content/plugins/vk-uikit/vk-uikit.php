<?php /*
  Plugin name: VK UiKit - Plugin by Josias
  Plugin uri: https://getuikit.com/docs/introduction
  Description: Esse é um plugin do UiKit. Documentação em https://getuikit.com/docs/introduction
  Version: 1
  Author: Viskoo Propaganda e Marketing
  Author uri: http://www.viskoo.com.br
  License: GPL
*/



function vk_uikit() {
    ?>
    
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />
        
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>
    
    <?php
    
    
}
add_action( 'wp_head' , 'vk_uikit' );
