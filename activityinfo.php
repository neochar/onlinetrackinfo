<?php

$filepath = __DIR__ . '/activity.txt';

if (file_exists($filepath)) {
	$data = file_get_contents($filepath);
	echo $data;
} else {
	echo 'nothing';
}

exit();
