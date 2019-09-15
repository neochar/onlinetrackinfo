<?php

try {
	$fields = [
		'songname',
		'songlength'
	];
	$request = [];
	foreach($fields as $field) {
		$request[$field] = htmlspecialchars(
			$_REQUEST[$field]
		);
	}
	file_put_contents(
		__DIR__ . '/info.json',
		json_encode(
			$request, 
			JSON_UNESCAPED_UNICODE
		)
	);
} catch(Exception $e) {}

exit();
