<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Page Title</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="theme-color" content="">
	<meta name="format-detection" content="telephone=no">
	<link rel="canonical" href="<?php /* canonical_url */ ?>">
	<meta name="description" content="<?php /* page_description */ ?>">

	<?php
		require(DOCUMENT_ROOT . '/tmpl/include/meta-tags.php');
	?>

	<?php
		include(DOCUMENT_ROOT . '/tmpl/include/favicons.php');
	?>

	<script src="/assets/animations.min.js<?=$cacheParameter?>" defer="defer"></script>
	
	<link rel="preload" href="/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>
	
	<style>
		@font-face {
	    font-family: 'Roboto';
	    src: url('/fonts/Roboto-Regular.woff2') format('woff2'),
	        url('/fonts/Roboto-Regular.woff') format('woff');
	    font-weight: normal;
	    font-style: normal;
	    font-display: swap;
		}

		@font-face {
	    font-family: 'Roboto';
	    src: url('/fonts/Roboto-Bold.woff2') format('woff2'),
	        url('/fonts/Roboto-Bold.woff') format('woff');
	    font-weight: bold;
	    font-style: normal;
	    font-display: swap;
		}

		:root {
			--font-body-family: 'Roboto', system-ui, sans-serif;
			--font-body-weight: normal;

			--font-heading-family: 'Roboto', system-ui, sans-serif;
			--font-heading-weight: bold;

			--html-font-size: 100%;
			--base-font-size: 1rem;
			--base-font-line-height: 1.6;
			--body-bg: #FFF;
		}
		
	</style>

	<link rel="preload" href="/assets/base.min.css<?=$cacheParameter?>" as="style" />

	<link rel="stylesheet" href="/assets/vendor.min.css<?=$cacheParameter?>" />
	<link rel="stylesheet" href="/assets/base.min.css<?=$cacheParameter?>" />
	
</head>
<body>
	<div class="visually-hidden">
    <?php
			require(DOCUMENT_ROOT . '/tmpl/include/svgs.php');
		?>
  </div>
  <div class="main-layout">
  	<div class="main-layout__content">
  		<?php
				include(DOCUMENT_ROOT . '/tmpl/snippets/header-group.php');
			?>
  		
