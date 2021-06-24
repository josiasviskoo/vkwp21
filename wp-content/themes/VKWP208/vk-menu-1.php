	<!--HEADER VK-->
		<header id="header" style="background-color: #fff; padding-top: 10px; padding-bottom: 10px; " data-uk-sticky="show-on-up: true; animation: uk-animation-fade; media: @l">
			<div class="uk-container">
				<nav id="navbar" data-uk-navbar="mode: click;">
					<div class="uk-navbar-left nav-overlay uk-visible@m">
						<ul class="uk-navbar-nav">

								<?php
						if ( is_user_logged_in() ) {
							?>
								<li>
								<a style="color: black;" href="<?php echo $dominio_home; ?>/minha-conta/" title="Área do cliente">Área do Cliente</a>
							</li>
							<?php
						} else {
							?>
								<li>
								<a style="color: black;" href="<?php echo $dominio_home; ?>/minha-conta/" title="Cadastre-se">Cadastre-se</a>
							</li>
							<?php
						}
						?>

						</ul>
					</div>
					<div class="uk-navbar-center nav-overlay">
						<a class="uk-navbar-item uk-logo" href="<?php echo $dominio_home; ?>" title="<?php echo $nomeempresa; ?>"><img src="<?php echo $logo; ?>" alt="<?php echo $nomeempresa; ?>" width="300px"></a>
					</div>
					<div class="uk-navbar-right nav-overlay">
						<a class="uk-navbar-toggle uk-visible@m" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
						<div class="uk-navbar-item">
							<a class="uk-visible@s" style="margin-right: 4px; color: black;" href="https://www.facebook.com/viskoopropaganda" data-uk-icon="facebook"></a>
							<a class="uk-visible@s" style="margin-right: 4px; color: black;" href="https://www.instagram.com/agencia.viskoo" data-uk-icon="instagram"></a>
							<a class="uk-visible@s" style="margin-right: 4px; color: black;" href="https://www.youtube.com/channel/UCsnFIxuWldwbff67arVJEJg" data-uk-icon="youtube"></a>
							<a class="uk-visible@s" style="margin-right: 4px; color: black;" href="https://api.whatsapp.com/send?phone=5516993438187&text=" data-uk-icon="whatsapp"></a>
							<!-- <a class="uk-navbar-toggle uk-hidden@m" data-uk-toggle data-uk-navbar-toggle-icon href="#menu-site"></a> -->
						</div>

					</div>
					<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
						<div class="uk-navbar-item uk-width-expand">
							<form class="uk-search uk-search-navbar uk-width-1-1" action="/">
								<input class="uk-search-input" type="search" placeholder="Buscar na <?php echo $nomeempresa; ?>...">
							</form>
						</div>
						<a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
					</div>
				</nav>
			</div>
		</header>
		<!--/HEADER VK-->
