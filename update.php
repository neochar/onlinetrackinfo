<?php

$songdata = htmlspecialchars($_REQUEST['songdata']);

if ($songdata) {
	file_put_contents(
		__DIR__ . '/info.json',
		json_encode([
			'songname' => $songdata
		])
	);
}

exit();
