<?php

echo ("Hoeveel stapels wil je hebben?") . PHP_EOL;

$stack = readline("");
$values = ['*'];
$string = '';

for ($i = 0; $i < $stack; $i++) {
	foreach ($values as $value) {
		$string .= $value;
	}

	echo $string;

	echo "" . PHP_EOL;

}