<?php
	define ('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
	$disableCache = true; // set to `false` to enable cache
	$cacheLock = $disableCache ? rand(1000, 9999) : '';
	$cacheParameter = $disableCache ? "?nocache=$cacheLock" : '';
?>