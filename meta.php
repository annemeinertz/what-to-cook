<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge; charset=UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link rel="apple-touch-icon" sizes="57x57" href="/src/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/src/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/src/images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/src/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/src/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/src/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/src/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/src/images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/src/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/src/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/src/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/src/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/src/images/favicons/favicon-16x16.png">
<link rel="manifest" href="/src/images/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/src/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="ourdomain" />
<meta property="og:locale" content="en_US">
<meta property="fb:app_id" content="">
<meta name="twitter:site" content="@ourdomain">
<meta name="twitter:card" content="website">
<meta name="author" content="ourdomain">
<meta name="copyright" content="Copyright <?php echo date('Y'); ?> ourdomain.com · All rights reserved.">

<?php

	$metaEnding = "→ Team KAJ";

  $metaTitle = "What to cook";
  $metaContent = "";

	if (!isset($metaImage) || empty($metaImage)) {
		$metaImage = "";
	}

	echo '
		<title>'. $metaTitle .' '. $metaEnding .'</title>
		<meta property="og:title" content="'. $metaTitle .' '. $metaEnding .'" />
		<meta name="description" content="'. $metaContent .'">
		<meta property="og:description" content="'. $metaContent .'" />
		<meta name="twitter:description" content="'. $metaContent .'">
		<meta name="twitter:image" content="'. $metaImage .'">
		<meta property="og:image" content="'. $metaImage .'" />
		<meta property="og:url" content="https://ourdomain.com/'. $metaPage .'" />
		<meta name="keywords" content="'. $metaKeywords .'">
	';

	if (isset($noindex) && $noindex == true) {
		echo '
			<meta name="robots" content="noindex,nofollow">
			<meta name="googlebot" content="noindex,nofollow">
		';
	} else {
		echo '
			<meta name="robots" content="index,follow">
			<meta name="googlebot" content="index,follow">
		';
	}

?>
