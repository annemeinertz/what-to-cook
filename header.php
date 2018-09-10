<?php
  if (check_login() === false || check_personalization() === false) {
    $bodyClass = "clean";
  } else {
    $bodyClass = "";
  }
?>
<!DOCTYPE html>
<html>
<head>

  <?php include 'meta.php'; ?>

  <link href="/src/css/fonticons.css" rel="stylesheet">
	<link href="/src/css/reset.css?v=21" rel="stylesheet">
	<link href="/src/css/main.css?v=21" rel="stylesheet">

</head>
<body class="<?php echo $bodyClass; ?>">

  <div class="loader">
    <div class="content">
      <div class="pan">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="Calque 2" id="Calque_2"><path d="M87.1,58.62H66.64V54.11a1.5,1.5,0,0,0-1.5-1.5H16.86a1.5,1.5,0,0,0-1.5,1.5V87.92a1.5,1.5,0,0,0,1.5,1.5H65.14a1.5,1.5,0,0,0,1.5-1.5V67.68H87.1a4.54,4.54,0,1,0,0-9.06ZM54.64,67.68h9V86.42H18.36V55.61H63.64v3h-9a1.5,1.5,0,0,0,0,3h9v3.06h-9a1.5,1.5,0,0,0,0,3Zm32.46-3H66.64V61.62H87.1a1.56,1.56,0,1,1,0,3.06Z"/><path d="M27.69,42.8a1.48,1.48,0,1,0,2.6,1.4c4.2-7.9,2.5-13.9.9-19.2-1.2-4-2.2-7.7-.8-12a1.49,1.49,0,0,0-2.8-1c-1.8,5.1-.5,9.5.8,13.8C29.89,31,31.39,35.9,27.69,42.8Z"/><path d="M38.09,42.8a1.48,1.48,0,1,0,2.6,1.4c4.2-7.9,2.5-13.9.9-19.2-1.2-4-2.2-7.7-.8-12A1.49,1.49,0,0,0,38,12c-1.8,5.1-.5,9.5.8,13.8C40.29,31,41.79,35.9,38.09,42.8Z"/><path d="M48.49,42.8a1.48,1.48,0,0,0,2.6,1.4c4.2-7.9,2.5-13.9.9-19.2-1.2-4-2.2-7.7-.8-12a1.49,1.49,0,0,0-2.8-1c-1.8,5.1-.5,9.5.8,13.8C50.69,31,52.19,35.9,48.49,42.8Z"/></g></svg>
      </div>
      <div class="food">
        <?php
          $foods = array(
            '<img src="/src/images/food/baking.png" alt="">',
            '<img src="/src/images/food/dairy.png" alt="">',
            '<img src="/src/images/food/fruits.png" alt="">',
            '<img src="/src/images/food/meat.png" alt="">',
            '<img src="/src/images/food/spices.png" alt="">',
            '<img src="/src/images/food/vegetables.png" alt="">'
          );
          shuffle($foods);
          echo $foods[0];
          echo $foods[1];
          echo $foods[2];
          echo $foods[3];
          echo $foods[4];
          echo $foods[5];
        ?>
      </div>
    </div>
  </div>
  <header>
    <div class="container">
      <nav>
        <a class="logo" href="/" itemprop="url">
          <p>What to Cook</p>
          <img src="/src/images/logo.png" alt="What to cook">
					<meta itemprop="logo" content="/src/images/logo.png">
					<meta itemprop="name" content="What to cook">
          <!-- FULL URL'S WOULD BE NEEDED (in all 5 above lines) -->
				</a>
    	</nav>
    </div>
  </header>

  <main class="app" id="app">
