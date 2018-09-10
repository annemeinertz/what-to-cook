<?php
  $isHome = "";
  $isRecipes = "";
  $isFavourites = "";
  $isKitchen = "";
  $isProfile = "";

  if(empty($page[0]) || $page[0] == "recipe" || $page[0] == "recipes") {
    $isHome = "active";
  } elseif($page[0] == "favourites") {
    $isFavourites = "active";
  } elseif($page[0] == "kitchen" || $page[0] == "add-ingredient") {
    $isKitchen = "active";
  } elseif($page[0] == "profile") {
    $isProfile = "active";
  }

?>
  </main><!-- End #app -->
  <footer>
    <div class="container">
      <nav>
          <ul>
            <li class="<?php echo $isHome; ?>">
              <a href="/">
                <i class="fa fa-fw fa-utensils"></i>
                <span>Recipes</span>
              </a>
            </li>
            <li class="<?php echo $isKitchen; ?>">
              <a href="/kitchen">
                <i class="fa fa-fw fa-plus-hexagon"></i>
                <span>My kitchen</span>
              </a>
            </li>
            <li class="<?php echo $isFavourites; ?>">
              <a href="/favourites">
                <i class="fa fa-fw fa-heart"></i>
                <span>Favourites</span>
              </a>
            </li>
            <li class="<?php echo $isProfile; ?>">
              <a href="/profile">
                <i class="fa fa-fw fa-user"></i>
                <span><?php echo $_COOKIE["username"]; ?></span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </footer>
	<script src="/src/js/main.js?v=2"></script>

</body>
</html>
