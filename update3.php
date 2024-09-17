<?php

$out = array();
$cleaning_list = array(
	'.github',
	'admin/config-dist.php',
	'install',
	'tools',
	'.gitignore',
	'.php-cs-fixer.php_cs',
	'CHANGELOG.md',
	'composer.json',
	'composer.lock',
	'config-dist.php',
	'deleted.txt',
	'README.md',
	'LICENSE.txt',
	'phpstan.neon',
);

function delete($dir) {
	if (!file_exists($dir)) {
		return true;
	}

	if (!is_dir($dir)) {
		return unlink($dir);
	}

	foreach (scandir($dir) as $item) {
		if ($item == '.' || $item == '..') {
			continue;
		}

		if (!delete($dir . DIRECTORY_SEPARATOR . $item)) {
			return false;
		}
	}

	return rmdir($dir);
}
echo date('Y-m-d H:i:s') . ': starting...' . '<br/>';

switch (true) {
	case !is_dir('.git') && isset($_GET['install']):
		exec('git clone https://github.com/ocmod-space/opencart-3 ./x', $out);
		exec('mv x/.* x/* .');
		exec('rm -rf ./x');

		break;

	case isset($_GET['update']) && is_dir('.git'):
		exec('git reset --hard origin/main', $out);
		exec('git pull', $out);

		foreach ($cleaning_list as $item) {
			delete($item);
		}

		break;

	case isset($_GET['status']):
		exec('git status', $out);

		break;

	default:
		# code...
		break;
}

if ($out) {
	echo '<br/>';

	foreach ($out as $s) {
		echo $s . '<br/>';
	}

	echo '<br/>';
}

echo date('Y-m-d H:i:s') . ': Resetting OPCache: ' . (opcache_reset() ? 'true' : 'false');
echo '<br/>';
echo date('Y-m-d H:i:s') . ': done...';
