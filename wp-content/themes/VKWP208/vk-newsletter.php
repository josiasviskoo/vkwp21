<div style="background-color: black;">
    <div class="uk-container">
        <div class="uk-text-center" uk-grid>

          <div class="uk-width-1-3@l uk-width-1-1@m">
              <div class="uk-card uk-card-body">
                <img src="<?php echo $logolight; ?>">
              </div>
          </div>

          <div class="uk-width-1-3@l uk-width-1-1@m">
              <div class="uk-card uk-card-body uk-text-right" style="color: white;">

                <strong>INSCREVA-SE NA VISKOO</strong>
                SEJA O PRIMEIRO A SABER DAS NOVIDADES DO SITE!


              </div>
          </div>

          <div class="uk-width-1-3@l uk-width-1-1@m">
              <div class="uk-card uk-card-body uk-text-center">

				 <!-- Plugin Newsletter por Autor: Stefano Lissa & The Newsletter Team -->
                <form method="post" action="<?php echo $dominio_home; ?>/?na=s" onsubmit="return newsletter_check(this)">
                  <div class="uk-margin" uk-margin>
                      <div uk-form-custom="target: true">
                          <input class="tnp-email uk-input" type="email" name="ne" placeholder="Deixe seu e-mail!">
						 

                      </div>
                      
					  <input class="tnp-submit uk-button uk-button-default" style="color: white;" type="submit" value="Inscrever-se" >
                  </div>

              </form>
				  
				  
			

              </div>
          </div>

      </div>
    </div>
</div>
