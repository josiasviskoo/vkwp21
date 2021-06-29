<div class="categorias">
	<h3>Segmentos:</h3>
  	<ul>
      <?php $categories = get_categories();
					foreach ($categories as $category) {
    				echo '<li>';
    				echo '<a href="'.site_url().'/category/'.$category->slug.'">';
    				echo $category->cat_name;
    				echo "</a>";
    				echo '</li>';
          }?>
    </ul>
</div>