<?php

$filepath = __DIR__ . '/info.json';

if (file_exists($filepath)) {
	$data = json_decode(
		file_get_contents($filepath),
		true
	);

	echo $data['songname'];
} else {
	echo 'nothing';
}

exit();
