<?php

return [
	'languages' => [
		'en' => 'English',
		'de' => 'Deutsch',
		'hu' => 'Magyar',
		'ru' => 'Русский',
	],
	'errorPages' => [
		400 => [
			'titles' => [
				'en' => 'Bad Request',
				'de' => 'Fehlerhafte Anfrage',
				'hu' => 'Hibás lekérdezés',
				'ru' => 'Неверный запрос',
			],
			'statusTexts' => [
				'en' => 'Your Browser sent a Bad Request',
				'de' => 'Ihr Browser hat eine fehlerhafte Anfrage geschickt',
				'hu' => 'A böngészője hibás lekérdezést küldött',
				'ru' => 'Ваш браузер послал неверный запрос',
			],
			'descriptions' => [
				'en' => 'Your browser sent a request our server <strong>couldn\'t process</strong>. Please try again or follow the steps below to resolve this issue.',
				'de' => 'Ihr Browser hat eine Anfrage geschickt die unser Server <strong>nicht verarbeiten konnte</strong>. Bitte versuchen sie diese Schritte um den Fehler zu beheben.',
				'hu' => 'A böngészője olyan lekérdezést küldött, amit a szerverünk <strong>nem tudott feldolgozni</strong>. Kérjük, kövesse az alábbi lépéseket a probléma megoldása érdekében.',
				'ru' => 'Ваш браузер послал запрос, который наш сервер не в состоянии обработать. Пожалуйста, попытайтесь снова или следуйте инструкциям ниже для решения проблемы.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Check for any <strong>updates</strong> for your browser.',
					'de' => 'Laden sie eine <strong>neuere Version</strong> ihres Browsers runter.',
					'hu' => '<strong>Frissítse a böngészőjét</strong> a legfrissebb verzióra.',
					'ru' => 'Проверьте для <strong>обновлений Вашего браузера</strong>.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'If you typed the address for this site, check that you typed everything correctly.',
					'de' => 'Wenn sie die Addresse eingetippt haben, kontrollieren sie diese auf Tippfehler.',
					'hu' => 'Ha a címet kézzel adta be, ellenőrizze ezt gépelési hibákra.',
					'ru' => 'При наборе адреса этого сайта, проверьте корректность набора.',
				],
			]
		],
		401 => [
			'titles' => [
				'en' => 'Unauthorized',
				'de' => 'Passwort erforderlich',
				'hu' => 'Jelszó szükséges',
				'ru' => 'Неавторизован',
			],
			'statusTexts' => [
				'en' => 'Please enter a password',
				'de' => 'Bitte Passwort angeben',
				'hu' => 'Adjon meg jelszót',
				'ru' => 'Пожалуйста, введите пароль',
			],
			'descriptions' => [
				'en' => 'To view this site, you must <strong>enter a password</strong>. Please <a href="" onclick="window.location.reload();return false;">refresh this page</a> and enter your credentials in the window presented.',
				'de' => 'Zum ansehen dieser Seite müssen sie ein <strong>Passwort eingeben</strong>. Bitte <a href="" onclick="window.location.reload();return false;">laden sie die Seite neu</a> und geben sie ihre Zugangsdaten ein.',
				'hu' => 'Az oldal megtekintéséhez <strong>meg kell adnia a jelszavát</strong>. <a href="" onclick="window.location.reload();return false;">Frissítse az oldalt</a> és adja meg hozzáférési adatait!',
				'ru' => 'Для просмотра данного сайта необходимо ввести пароль. Пожалуйста, <a href="" onclick="window.location.reload();return false;">обновите страницу</a> и введите ваши данные в предоставленное окно.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="" onclick="window.location.reload();return false;">Refresh this page</a> and enter your password.',
					'de' => '<a href="" onclick="window.location.reload();return false;">Laden sie die Seite neu</a> und geben sie ihr Passwort ein.',
					'hu' => '<a href="" onclick="window.location.reload();return false;">Töltse újra az oldalt</a> és adja meg jelszavát!',
					'ru' => '<a href="" onclick="window.location.reload();return false;">Обновите страницу</a> и введите Ваш пароль.',
				],
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Kehren sie auf die letzte Seite zurück</a> und versuchen sie es erneut.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Térjen vissza az előző oldalra</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
			]
		],
		403 => [
			'titles' => [
				'en' => 'This page is not public',
				'de' => 'Diese Seite ist nicht öffentlich',
				'hu' => 'Ez az oldal nem nyilvános',
				'ru' => 'Данная страница не является публичной',
			],
			'statusTexts' => [
				'en' => 'This page is not public',
				'de' => 'Diese Seite ist nicht öffentlich',
				'hu' => 'Ez az oldal nem nyilvános',
				'ru' => 'Данная страница не является публичной',
			],
			'descriptions' => [
				'en' => 'This site is not available for public viewing. Please see our <a href="/">site</a> for valid links to click.',
				'de' => 'Diese Seite ist nicht für öffentliche Betrachtung freigegeben. Bitte kehren sie zur <a href="/">Startseite</a> zurück um öffentliche Verweise zu finden.',
				'hu' => 'Ez az oldal nem olvasható nyilvánosan. Térjen vissza a <a href="/">nyitólapra</a> és keressen kattintható hivatkozásokat ott.',
				'ru' => 'Данный сайт не предназначен для публичного просмотра. Пожалуйста, просмотрите <a href="/">сайт</a> на наличие доступных для просмотра ссылок.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
			]
		],
		404 => [
			'titles' => [
				'en' => 'Not found',
				'de' => 'Nicht gefunden',
				'hu' => 'Nem található',
				'ru' => 'Не найдено',
			],
			'statusTexts' => [
				'en' => 'Page not found, sorry',
				'de' => 'Die Seite wurde nicht gefunden',
				'hu' => 'Az oldal nem található',
				'ru' => 'Станица не обнаружена',
			],
			'descriptions' => [
				'en' => 'The page you requested was <strong>not found</strong> on our servers.',
				'de' => 'Die gewünschte Seite wurde auf unserem Server <strong>nicht gefunden</strong>.',
				'hu' => 'A kért oldal <strong>nem található</strong> a szerverünkön.',
				'ru' => 'Запрошенная страница на наших серверах <strong>не найдена</strong>.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => 'If you typed the address for this site, check that you typed everything correctly.',
					'de' => 'Wenn sie die Addresse eingetippt haben, kontrollieren sie diese auf Tippfehler.',
					'hu' => 'Ha a címet kézzel adta be, ellenőrizze ezt gépelési hibákra.',
					'ru' => 'При наборе адреса этого сайта, проверьте корректность набора.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
			]
		],
		405 => [
			'titles' => [
				'en' => 'Method Not Allowed',
				'de' => 'Methode nicht erlaubt',
				'hu' => 'Nem engedélyezett hozzáférési mód',
				'ru' => 'Метод не поддерживается',
			],
			'statusTexts' => [
				'en' => 'Your Browser sent an invalid request',
				'de' => 'Ihr Browser hat eine ungültige Anfrage geschickt',
				'hu' => 'A böngészője érvénytelen lekérdezést küldött',
				'ru' => 'Ваш браузер послал неверный запрос',
			],
			'descriptions' => [
				'en' => 'Your browser sent a request our server <strong>couldn\'t process</strong> because the access method it tried to use is invalid for this page. Please try again or follow the steps below to resolve this issue.',
				'de' => 'Ihr Browser hat versucht eine Abfragemethode zu verwenden die für diese Seite nicht genehmigt wurde. Bitte versuchen sie die Schritte unten um das Problem zu lösen.',
				'hu' => 'A böngészője olyan lekérdezési móddal fordult a szerverünkhöz, ami erre az oldalra nem engedélyezett. Próbálja meg a lenti lépéseket a probléma megoldása érdekében.',
				'ru' => 'Ваш браузер послал запрос, который наш сервер не в состоянии обработать в связи с тем, что примененный им метод доступа недоступен для данной страницы. Пожалуйста, попытайтесь снова или следуйте указаниям ниже для решения данной проблемы.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Check for any <strong>updates</strong> for your browser.',
					'de' => 'Laden sie eine <strong>neuere Version</strong> ihres Browsers runter.',
					'hu' => '<strong>Frissítse a böngészőjét</strong> a legfrissebb verzióra.',
					'ru' => 'Проверьте для <strong>обновлений Вашего браузера</strong>.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'If you typed the address for this site, check that you typed everything correctly.',
					'de' => 'Wenn sie die Addresse eingetippt haben, kontrollieren sie diese auf Tippfehler.',
					'hu' => 'Ha a címet kézzel adta be, ellenőrizze ezt gépelési hibákra.',
					'ru' => 'При наборе адреса этого сайта, проверьте корректность набора.',
				],
			],
		],
		406 => [
			'titles' => [
				'en' => 'Not Acceptable',
				'de' => 'Nicht akzeptabel',
				'hu' => 'Nem elfogadható',
				'ru' => 'Ваш запрос не может быть выполнен',
			],
			'statusTexts' => [
				'en' => 'Can\'t satisfy your needs',
				'de' => 'Ihre Anforderungen können icht erfüllt werden',
				'hu' => 'Az igények nem kielégíthetőek',
				'ru' => 'Ваш запрос не может быть выполнен',
			],
			'descriptions' => [
				'en' => 'Your browser sent us a requirement we couldn\'t satisfy. Please try the steps below to resolve this issue.',
				'de' => 'Ihr Browser hat eine Anforderung gestellt die wir nicht erfüllen können.',
				'hu' => 'A böngészője olyan követelményt támasztott, amit nem tudunk kielégíteni.',
				'ru' => 'Ваш браузер послал запрос, который мы не в состоянии удовлетворить. Пожалуйста, следуйте указаниям ниже для решения проблемы.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Check for any <strong>updates</strong> for your browser.',
					'de' => 'Laden sie eine <strong>neuere Version</strong> ihres Browsers runter.',
					'hu' => '<strong>Frissítse a böngészőjét</strong> a legfrissebb verzióra.',
					'ru' => 'Проверьте для <strong>обновлений Вашего браузера</strong>.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'If you typed the address for this site, check that you typed everything correctly.',
					'de' => 'Wenn sie die Addresse eingetippt haben, kontrollieren sie diese auf Tippfehler.',
					'hu' => 'Ha a címet kézzel adta be, ellenőrizze ezt gépelési hibákra.',
					'ru' => 'При наборе адреса этого сайта, проверьте корректность набора.',
				],
			],
		],
		408 => [
			'titles' => [
				'en' => 'Request Timeout',
				'de' => 'Zeitüberschreitung',
				'hu' => 'Időtúllépés',
				'ru' => 'Истекло время ожидания',
			],
			'statusTexts' => [
				'en' => 'Too slow, sorry',
				'de' => 'Zu langsam!',
				'hu' => 'Túl lassú!',
				'ru' => 'Запрос обрабатывается слишком медленно!',
			],
			'descriptions' => [
				'en' => 'Your browser took too long to send your request. Please see the list below to resolve your issue.',
				'de' => 'Ihr Browser war zu langsam in der Anfrage. Bitte versuchen sie die Schritte unten um dieses Problem zu lösen.',
				'hu' => 'A böngészője túl lassú volt a lekérdezés közben. Kérem, próbálja meg az alábbi lépéseket a probléma orvoslása érdekében.',
				'ru' => 'Ваш браузер посылает запрос слишком медленно. Пожалуйста, просмотрите список ниже для решения Вашей проблемы.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => 'Check your <a href="http://www.speedtest.net/">Internet Connection speed</a>.',
					'de' => 'Kontrollieren sie ihre <a href="http://www.speedtest.net/">Internetgeschwindigkeit</a>.',
					'hu' => 'Ellenőrizze az <a href="http://www.speedtest.net/">internet sebességét</a>.',
					'ru' => '<a href="http://www.speedtest.net/">Проверьте скорость работы сети Интернет.</a>',
				],
				[
					'en' => 'Contact your internet provider and ask if they are performing maintenance.',
					'de' => 'Kontaktieren sie ihren Internetdienstleister und fragen sie nach ob Wartungsarbeiten zu Gange sind.',
					'hu' => 'Lépjen kapcsolatba az internet szolgáltatójával és érdeklődjön esetleges karbantartás után.',
					'ru' => 'Свяжитесь с Вашим Интернет провайдером по вопросам технического обслуживания.',
				],
				[
					'en' => '<a href="" onclick="window.location.reload();return false;">Refresh this page.</a>',
					'de' => '<a href="" onclick="window.location.reload();return false;">Laden sie die Seite neu.</a>',
					'hu' => '<a href="" onclick="window.location.reload();return false;">Töltse újra az oldalt!</a>',
					'ru' => '<a href="" onclick="window.location.reload();return false;">Обновить страницу.</a>',
				],
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'Try again at a later time.',
					'de' => 'Versuchen sie es später erneut.',
					'hu' => 'Próbálja újra később.',
					'ru' => 'Попытайтесь снова позже.',
				],
			],
		],
		413 => [
			'titles' => [
				'en' => 'Request Entity Too Large',
				'de' => 'Anfrage zu groß',
				'hu' => 'A lekérdezés túl nagy',
				'ru' => 'Размер запроса слишком велик',
			],
			'statusTexts' => [
				'en' => 'Too big!',
				'de' => 'Zu groß!',
				'hu' => 'Túl nagy!',
				'ru' => 'Слишком большой',
			],
			'descriptions' => [
				'en' => 'Your browser sent us a waaaaay <strong>too large request</strong> which we couldn\'t process.',
				'de' => 'Ihr Browser hat uns eine viiiiel <strong>zu große Anfrage</strong> geschickt die wir nicht verarbeiten konnten.',
				'hu' => 'A böngészője túl nagy lekérdezést küldött.',
				'ru' => 'Ваш браузер послал слишком большой запрос, который мы не в состоянии обработать.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => 'Clear the cookies in your browser for this site.',
					'de' => 'Löschen sie die Cookies in ihrem Browser',
					'hu' => 'Törölje a sütiket a böngészőjében!',
					'ru' => 'Очистите cookie-файлы Вашего браузера для этого сайта.',
				],
				[
					'en' => 'Check for any <strong>updates</strong> for your browser.',
					'de' => 'Laden sie eine <strong>neuere Version</strong> ihres Browsers runter.',
					'hu' => '<strong>Frissítse a böngészőjét</strong> a legfrissebb verzióra.',
					'ru' => 'Проверьте для <strong>обновлений Вашего браузера</strong>.',
				],
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
			],
		],
		414 => [
			'titles' => [
				'en' => 'Request-URI Too Long',
				'de' => 'Die Addresse ist zu lang',
				'hu' => 'A cím túl hosszú',
				'ru' => 'Запрашиваемый URI слишком длинный',
			],
			'statusTexts' => [
				'en' => 'Too long!',
				'de' => 'Zu lang!',
				'hu' => 'Túl hosszú!',
				'ru' => 'Адрес слишком длинный!',
			],
			'descriptions' => [
				'en' => 'Your browser sent us a waaaaay too long address and we couldn\'t process it.',
				'de' => 'Ihr Browser hat uns eien viiiiel zu lange Addresse geschickt die wir nicht verarbeiten konnten.',
				'hu' => 'A böngészője túl hosszú címet küldött, amit nem tudtunk feldolgozni.',
				'ru' => 'Ваш браузер послал нам слишком длинный адрес и мы не можем его обработать.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => 'If you typed the address for this site, check that you typed everything correctly.',
					'de' => 'Wenn sie die Addresse eingetippt haben, kontrollieren sie diese auf Tippfehler.',
					'hu' => 'Ha a címet kézzel adta be, ellenőrizze ezt gépelési hibákra.',
					'ru' => 'При наборе адреса этого сайта, проверьте корректность набора.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
			],
		],
		417 => [
			'titles' => [
				'en' => 'Expectation Failed',
				'de' => 'Erwartung nicht erfüllt',
				'hu' => 'Követelmény nem teljesült',
				'ru' => 'Ожидаемое неприемлемо',
			],
			'statusTexts' => [
				'en' => 'Can\'t satisfy your expectations',
				'de' => 'Wir können den Erwartungen nicht entsprechen',
				'hu' => 'Nem tudnk megfelelni a követelményeknek',
				'ru' => 'Невозможно удовлетворить Ваши ожидания',
			],
			'descriptions' => [
				'en' => 'Your browser sent us an expectation we couldn\'t satisfy. Please try the steps below to resolve your issue.',
				'de' => 'Ihr Browser hat uns eine Erwartung geschickt die der wir nicht entsprechen können. Bitte versuchen sie die Schritte unten um das Problem zu lösen.',
				'hu' => 'A böngészője olyan követelményt küldött a lekérdezés során, amit nem tudunk teljesíteni. Kérem, próbálja meg az alábbi lépéseket a probléma orvoslása érdekében.',
				'ru' => 'Ваш браузер послал нам запрос, который мы не можем удовлетворить. Пожалуйста, следуйте указаниям ниже для решения проблемы.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Check for any <strong>updates</strong> for your browser.',
					'de' => 'Laden sie eine <strong>neuere Version</strong> ihres Browsers runter.',
					'hu' => '<strong>Frissítse a böngészőjét</strong> a legfrissebb verzióra.',
					'ru' => 'Проверьте для <strong>обновлений Вашего браузера</strong>.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'If you typed the address for this site, check that you typed everything correctly.',
					'de' => 'Wenn sie die Addresse eingetippt haben, kontrollieren sie diese auf Tippfehler.',
					'hu' => 'Ha a címet kézzel adta be, ellenőrizze ezt gépelési hibákra.',
					'ru' => 'При наборе адреса этого сайта, проверьте корректность набора.',
				],
			],
		],
		500 => [
			'titles' => [
				'en' => 'Internal Server Error',
				'de' => 'Interner Serverfehler',
				'hu' => 'Belső szerverhiba',
				'ru' => 'Ошибка сервера Интернет',
			],
			'statusTexts' => [
				'en' => 'An error happened, sorry',
				'de' => 'Ein Fehler ist passiert',
				'hu' => 'Hiba történt',
				'ru' => 'Произошла ошибка',
			],
			'descriptions' => [
				'en' => 'Our server has encountered an error it can\'t recover from. Please try to trace back your steps. If the error persists, contact us.',
				'de' => 'Unser Server ist während der Verarbeitung auf einen Fehler gestoßen. Bitte versuchen sie ihre Schritte rückzuverfolgen. Wenn der Fehler weiterhin besteht, wenden sie sich bitte an uns.',
				'hu' => 'Az egyik szerverünk hibára futott. Próbálja meg visszakövetni a lépéseit. Ha továbbra is fennáll a hiba, értesítsen minket.',
				'ru' => 'Наш сервер столкнулся с ошибкой, невозможной для исправления. Пожалуйста, попытайтесь отследить Ваши действия. Если ошибка повторится, свяжитесь с нами.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
			],
		],
		502 => [
			'titles' => [
				'en' => 'Bad Gateway',
				'de' => 'Gateway Fehler',
				'hu' => 'Átjáró hiba',
				'ru' => 'Ошибочный шлюз',
			],
			'statusTexts' => [
				'en' => 'Background Error',
				'de' => 'Hintergrundfehler',
				'hu' => 'Háttérkiszolgáló hiba',
				'ru' => 'Фоновая ошибка',
			],
			'descriptions' => [
				'en' => 'We are not able to process your request because our server has encountered an error in one of our background servers.',
				'de' => 'Wir können ihre Anfrage nicht bearbeiten weil einer unserer Hintergrundserver auf einen Fehler gelaufen ist.',
				'hu' => 'Az egyik háttérkiszolgáló hibára futott, ezért a lekérdezését nem tudjuk teljesíteni.',
				'ru' => 'Мы не в состоянии обработать Ваш запрос, так как наш сервер обнаружил ошибку одного из Ваших фоновых серверов.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'Try again at a later time.',
					'de' => 'Versuchen sie es später erneut.',
					'hu' => 'Próbálja újra később.',
					'ru' => 'Попытайтесь снова позже.',
				],
			],
		],
		503 => [
			'titles' => [
				'en' => 'Maintenance',
				'de' => 'Wartungsarbeiten',
				'hu' => 'Karbantartás',
				'ru' => 'Техническое обслуживание',
			],
			'statusTexts' => [
				'en' => 'Maintenance',
				'de' => 'Wartungsarbeiten',
				'hu' => 'Karbantartás',
				'ru' => 'Техническое обслуживание',
			],
			'descriptions' => [
				'en' => 'Our servers need love too, so we are performing scheduled maintenance at the moment. Please come back in a little while.',
				'de' => 'Unsere Server brauchen auch liebe, deshalb unternehmen wir grade Wartungsarbeiten. Bitte schauen sie in ein paar Minuten wieder zurück.',
				'hu' => 'A szervereknek is kell a szeretet, ezért jelenleg karbantartást végzünk. Nézzen vissza pár perc múlva.',
				'ru' => 'Наши серверы тоже нуждаются во внимании, поэтому в настоящий момент осуществляется их техническое обслуживание. Пожалуйста, обновите страницу позже.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => 'Grab a cup of coffee.',
					'de' => 'Holen sie sich einen Kaffee.',
					'hu' => 'Igyon egy kávét.',
					'ru' => 'Попейте кофейку.',
				],
				[
					'en' => 'Read a (paper) newspaper.',
					'de' => 'Lesen sie eine Zeitung.',
					'hu' => 'Olvasson egy újságot.',
					'ru' => 'Почитайте газетку.',
				],
				[
					'en' => '<a href="" onclick="window.location.reload();return false;">Refresh this page</a>, maybe we\'re done already.',
					'de' => '<a href="" onclick="window.location.reload();return false;">Laden sie die Seite neu</a>, vieleicht sind wir schon fertig.',
					'hu' => '<a href="" onclick="window.location.reload();return false;">Frissítse az oldalt</a>, hátha már készen vagyunk.',
					'ru' => '<a href="" onclick="window.location.reload();return false;">Обновите страницу</a>, возможно, мы уже закончили.',
				],
			],
		],
		504 => [
			'titles' => [
				'en' => 'Bad Gateway',
				'de' => 'Gateway Fehler',
				'hu' => 'Átjáró hiba',
				'ru' => 'Ошибочный шлюз',
			],
			'statusTexts' => [
				'en' => 'Background Error',
				'de' => 'Hintergrundfehler',
				'hu' => 'Háttérkiszolgáló hiba',
				'ru' => 'Фоновая ошибка',
			],
			'descriptions' => [
				'en' => 'We are not able to process your request because our background server is taking too long to respond.',
				'de' => 'Wir können ihre Anfrage nicht bearbeiten weil einer unserer Hintergrundserver zu langsam antwortet.',
				'hu' => 'Nem tudjuk teljesíteni a lekérést, mert az egyik háttérkiszolgáló túl lassan válaszol.',
				'ru' => 'Мы не в состоянии обработать Ваш запрос, так как наш фоновый сервер отвечает слишком долго.',
			],
			'instructionHeaders' => [
				'en' => 'Please follow these steps to get back on track:',
				'de' => 'Bitte versuchen sie folgendes:',
				'hu' => 'Próbálja meg az alábbiakat:',
				'ru' => 'Пожалуйста, следуйте данным указаниям для возвращения в обычный режим:',
			],
			'instructions' => [
				[
					'en' => '<a href="" onclick="window.location.reload();return false;">Refresh this page.</a>',
					'de' => '<a href="" onclick="window.location.reload();return false;">Laden sie die Seite neu.</a>',
					'hu' => '<a href="" onclick="window.location.reload();return false;">Töltse újra az oldalt!</a>',
					'ru' => '<a href="" onclick="window.location.reload();return false;">Обновить страницу.</a>',
				],
				[
					'en' => '<a href="/" onclick="window.history.back();return false;">Go back</a> and try again.',
					'de' => '<a href="/" onclick="window.history.back();return false;">Gehen sie zurück</a> und versuchen sie es noch einmal.',
					'hu' => '<a href="/" onclick="window.history.back();return false;">Menjen vissza</a> és próbálja újra.',
					'ru' => '<a href="/" onclick="window.history.back();return false;">Вернитесь</a> и попытайтесь снова.',
				],
				[
					'en' => 'Go to our <a href="/">Homepage</a> and try again from there.',
					'de' => 'Gehen sie zu unserer <a href="/">Homepage</a> und versuchen sie es von da erneut.',
					'hu' => 'Térjen vissza a <a href="/">kezdőlapra</a> és próbálja újra onnan.',
					'ru' => 'Вернитесь на <a href="/">домашнюю страницу</a> и попытайтесь снова.',
				],
				[
					'en' => 'Try again at a later time.',
					'de' => 'Versuchen sie es später erneut.',
					'hu' => 'Próbálja újra később.',
					'ru' => 'Попытайтесь снова позже.',
				],
			],
		],
	],
];