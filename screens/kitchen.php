<section class="module">
  <div class="container">
    <div class="content">
      <div class="category-title has-action">
        <p>Your kitchen</p>
        <a href="/add-ingredient" class="btn btn-sm">
          <i class="fa fa-fw fa-plus"></i> Add ingredient
        </a>
      </div>
      <div class="kitchen-title">
        <p>You can make:</p>
      </div>
      <div class="kitchen-recipes">
        <?php
          $recipes = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/src/json/kitchen.json");
          $recipes = json_decode($recipes);
          foreach ($recipes->hits as $recipe) {
            $label = $recipe->recipe->label;
            $url = $recipe->recipe->url;
            $image = $recipe->recipe->image;
            echo '
              <div class="single">
                <a href="'. $url .'" target="_blank">
                  <img src="'. $image .'" alt="'. $label .'">
                  <p class="tooltip">'. $label .'</p>
                </a>
              </div>
            ';
          }
        ?>
      </div>
      <div class="kitchen-title has-border">
        <p>Your ingredients:</p>
      </div>
      <div class="category-search">
        <span id="search-count">10</span>
        <input type="text" name="search" value="" class="search-recipes default" placeholder="Search your ingredients">
      </div>
      <div class="categories ingredients" id="recipe-list">
        <!-- Start  -->

          <div class="category recipe">
            <h4>Milk</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Expires:</p>
                <p class="label"><span class="expired">Expired</span></p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">1</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Pork meat</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">09 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">1</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Chicken breasts</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">08 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">3</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Cow meat</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">09 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">10</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Butter</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">22 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">1</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Carrots</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">14 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">11</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Garlic</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">04 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">3</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Onions</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">12 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">1</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Apples</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">13 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">1</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="category recipe">
            <h4>Apples</h4>
            <div class="labels">
              <div class="single">
                <p class="meta-title">Date:</p>
                <p class="label">04 / 08</p>
              </div>
              <div class="single action-label">
                <p class="meta-title">Count:</p>
                <p class="label">1</p>
                <div class="actions">
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm">
                    <i class="fa fa-fw fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

        <!-- End -->
      </div>
    </div>
  </div>
</section>
