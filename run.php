<?php

// CLI Entry point

echo 'PHP Skeleton' . PHP_EOL;

if (PHP_SAPI !== 'cli') {
	echo <<<HTML
	<div style="font:12px/1.35em arial, helvetica, sans-serif;">
		<div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
			<h2>A Command Line App</h2>
			<h3>Should not be accessible to the public</h3>
		</div>
	</div>
HTML;
	exit(1);
}

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php');

/* @var Gpcrocker\Module\ClassOf */
$gc = new \Gpcrocker\Module\ClassOf('Graham Crocker');
echo ($gc->getName() . PHP_EOL);