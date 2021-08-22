<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$baseDirectory = '/';
$categories = explode('/', substr($path, strlen($baseDirectory)));
if (count($categories) > 2 && $categories[2] != "") {
	echo "404 Not Found!";
} else {
	if ($categories[0] == "con") {
		if (isset($categories[1])) {
			if ($categories[1] == "cac") {
				echo "Cặc is selected!";
			} elseif ($categories[1] == "") {
				echo "You are in Con!";
			} else {
				echo "404 Not Found!";
			}
		} else {
			echo "You are in Con!";
		}
	} else {
		echo "404 Not Found!";
	}
}

?>