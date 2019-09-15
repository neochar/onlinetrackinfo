<?php

try {
	file_put_contents(
		__DIR__ . '/activity.txt',
		htmlspecialchars($_REQUEST['activity'])
	);
} catch(Exception $e) {}

exit();
