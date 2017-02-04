<?php

require_once(__DIR__ . '/vendor/autoload.php');
$translations = require_once(__DIR__ . '/translations.php');

$themes = [];
$themeIterator = new DirectoryIterator(__DIR__ . '/themes');
foreach ($themeIterator as $theme) {
	if ($theme->isDir() && !$theme->isDot()) {
		$themes[] = $theme->getFilename();
	}
}

$statusCodes = [
	400,
	401,
	403,
	404,
	405,
	406,
	408,
	413,
	414,
	417,
	500,
	502,
	503,
	504,
];

foreach ($themes as $theme) {
	$loader = new Twig_Loader_Filesystem([__DIR__ . '/themes/' . $theme], __DIR__ . '/themes/' . $theme);
	$twig = new Twig_Environment($loader, ['debug' => true]);
	$twig->addExtension(new Twig_Extension_Debug());
	foreach ($statusCodes as $statusCode) {
		if (
			file_exists(__DIR__ . '/themes/' . $theme . '/' . $statusCode . '.html.twig') &&
			array_key_exists($statusCode, $translations['errorPages'])
		) {
			$data = $translations['errorPages'][$statusCode];
			$data['languageCodes'] = array_keys($translations['languages']);
			$data['languages'] = $translations['languages'];
			$data['defaultLanguageCode'] = 'en';
			$data['statusCode'] = $statusCode;
			if (!file_exists(__DIR__ . '/compiled/' . $theme)) {
				mkdir(__DIR__ . '/compiled/' . $theme);
			}
			file_put_contents(
				__DIR__ . '/compiled/' . $theme . '/' . $statusCode . '.html',
				$twig->render($statusCode . '.html.twig', $data)
			);

			foreach ($translations['languages'] as $languageCode => $languageName) {
				$data = $translations['errorPages'][$statusCode];
				$data['languageCodes'] = [$languageCode];
				$data['languages'] = [$languageCode => $languageName];
				$data['defaultLanguageCode'] = $languageCode;
				$data['statusCode'] = $statusCode;
				file_put_contents(
					__DIR__ . '/compiled/' . $theme . '/' . $statusCode . '.' . $languageCode . '.html',
					$twig->render($statusCode . '.html.twig', $data)
				);
			}
		}
	}
}
