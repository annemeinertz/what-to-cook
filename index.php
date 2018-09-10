<?php

  include 'functions.php';

  $page = page();

  include 'header.php';

  if (check_login() == false) {
    /*
      FORCE LOGIN
      - not secure!
    */
    get_page('screens/login.php');

  } elseif (check_personalization() == false) {

    // FORCE PERSONALIZATION STEP
    get_page('screens/personalize.php');

  } elseif (isset($_GET)) {

    if (empty($page[0])) {

      // RECENT OR NEW RECIPES
      get_page('screens/index.php');

    } elseif ($page[0] == "kitchen") {

      // LIST OF INGREDIENTS IN KITCHEN
      get_page('screens/kitchen.php');

    } elseif ($page[0] == "add-ingredient") {

      // LIST OF INGREDIENTS IN KITCHEN
      get_page('screens/add-ingredient.php');

    } elseif ($page[0] == "add-to-kitchen") {

      // A SCANNER TO ADD PRODUCT TO KITCHEN
      get_page('screens/add-to-kitchen.php');

    } elseif ($page[0] == "recipes" && !empty($page[1]) && !empty($page[2])) {

      // GET SINGLE RECIPE
      get_page('screens/recipe.php');


    } elseif ($page[0] == "recipes" && !empty($page[1])) {

      // LIST OF RECIPES IN A CATEGORY
      get_page('screens/recipes.php');


    } elseif ($page[0] == "profile") {

      // PROFILE & SETTINGS
      get_page('screens/profile.php');


    } elseif ($page[0] == "favourites") {

      // FAVOURITES
      get_page('screens/favourites.php');


    } else {

      // WHERE ARE THEY GOING?
      // - Let's fix it with a joke...
      get_page('screens/404.php');

    }

  } elseif (isset($_POST)) {

    // Handle POST request
    // Return JSON

    /*

      - ADD TO FRIDGE
      - REMOVE FROM FRIDGE

    */

  }

  include 'footer.php';

 ?>
