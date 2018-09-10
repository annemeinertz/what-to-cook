<section class="module">
  <div class="container">
    <div class="content">
      <div class="category-title">
        <p><?php echo $page[1]; ?> recipes</p>
      </div>
      <div class="category-search">
        <span id="search-count">80</span>
        <input type="text" name="search" value="" class="search-recipes default" placeholder="Search recipe">
      </div>
      <div class="categories" id="recipe-list">
        <?php
          $recipes = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/src/json/". $page[1] .".json");
          $recipes = json_decode($recipes);
          $count = 0;
          foreach ($recipes->hits as $recipe) {
            $count++;
            $label = $recipe->recipe->label;
            $url = $recipe->recipe->url;
            $image = $recipe->recipe->image;
            $calories = $recipe->recipe->calories;
            $tags = '';
            foreach ($recipe->recipe->healthLabels as $tag) {
              $tags .= '
                <p class="label">'. $tag .'</p>
              ';
            }
            $cautions = '';
            foreach ($recipe->recipe->cautions as $caution) {
              $cautions .= '
                <p class="label">'. $caution .'</p>
              ';
            }
            if (empty($cautions)) {
              $cautions = '<p class="label">None</p>';
            }
            echo '
              <div class="category recipe">
                <a href="/recipes/'. $page[1] .'/'. $count .'">
                  <img src="'. $image .'" alt="'. $label .'">
                  <h4>'. $label .'</h4>
                  <div class="labels">
                    <p class="meta-title">Allergies</p>
                    '. $cautions .'
                  </div>
                  <div class="labels">
                    <p class="meta-title">Tags</p>
                    '. $tags .'
                  </div>
                </a>
                <div class="actions">
                  <button type="button" class="btn btn-sm do-fav-recipe" data-url="'. $url .'">
                    <i class="fa fa-fw fa-heart"></i>
                  </button>
                  <a href="https://www.facebook.com/sharer/sharer.php?u='. $url .'" class="btn btn-dark btn-sm" target="_blank">
                    <i class="fa fa-fw fa-share-alt"></i>
                  </a>
                </div>
              </div>
            ';
          }
        ?>
      </div>
    </div>
  </div>
</section>
