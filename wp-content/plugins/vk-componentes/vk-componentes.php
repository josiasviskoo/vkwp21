<?

/*
  Plugin name: VK Componentes (Obrigatório)
  Plugin uri: http://www.viskoo.com.br
  Description: Habilita componentes necessários de operações do sistema VK
  Version: 1.0
  Author: Viskoo Propaganda e Marketing
  Author uri: http://www.viskoo.com.br
  License: GPL ou later
*/


function cutom_login_logo() {

$url = plugin_dir_url( $file );

echo "<style type=\"text/css\">
body.login div#login h1 a {
background-image: url(". $url ."/vk-componentes/logo-admin.png);
-webkit-background-size: auto;
background-size: auto;
margin: 0 0 25px;
width: 320px;
}
</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );


add_filter('admin_footer_text', 'bl_admin_footer');
function bl_admin_footer() {
  echo "Loja ou Site desenvolvimento por <a href='http://www.viskoo.com.br' target='_blank'>Viskoo Propaganda e Marketing</a>";
}

?>
