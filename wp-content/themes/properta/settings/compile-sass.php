<?php

define('WP_USE_THEMES', false);

require_once '../../../../wp-load.php';
require_once '../aviators/libraries/phpsass/SassParser.php';


function loadCallback($file, $parser)
{
	$paths = array();
	foreach ($parser->extensions as $extensionName) {
		$namespace = ucwords(preg_replace('/[^0-9a-z]+/', '_', strtolower($extensionName)));
		$extensionPath = './' . $namespace . '/' . $namespace . '.php';
		if (file_exists($extensionPath)) {
			require_once($extensionPath);
			$hook = $namespace . '::resolveExtensionPath';
			$returnPath = call_user_func($hook, $file, $parser);
			if (!empty($returnPath)) {
				$paths[] = $returnPath;
			}

		}
	}

	return $paths;
}

function getFunctions($extensions)
{
	$output = array();
	if (!empty($extensions)) {
		foreach ($extensions as $extension) {
			$name = explode('/', $extension, 2);
			$namespace = ucwords(preg_replace('/[^0-9a-z]+/', '_', strtolower(array_shift($name))));
			$extensionPath = './' . $namespace . '/' . $namespace . '.php';
			if (file_exists(
				$extensionPath
			)
			) {
				require_once($extensionPath);
				$namespace = $namespace . '::';
				$function = 'getFunctions';
				$output = array_merge($output, call_user_func($namespace . $function, $namespace));
			}
		}
	}

	return $output;
}


if ($_GET['type'] == 'primary') {
	if (empty($_GET['color'])) {
		file_put_contents('../assets/scss/helpers/_color-primary.scss', '');
	} else {
		file_put_contents('../assets/scss/helpers/_color-primary.scss', '$color-primary: ' . $_GET['color'] . ';');
	}

} elseif ($_GET['type'] == 'secondary') {
	if (empty($_GET['color'])) {
    	file_put_contents('../assets/scss/helpers/_color-secondary.scss', '');
	} else {
		file_put_contents('../assets/scss/helpers/_color-secondary.scss', '$color-secondary: ' . $_GET['color'] . ';');
	}
}


$parser = new SassParser(array(
	'style' => 'expanded',
	'cache' => false,
	'syntax' => 'scss',
	'debug' => false,
	'load_path_functions' => array('loadCallback'),
	'load_paths' => array(dirname(__FILE__)),
	'functions' => getFunctions(array('Compass')),
	'extensions' => array('Compass')
));


$data = $parser->toCss('../assets/scss/properta.scss');
file_put_contents('../assets/css/properta-custom.css', $data);

echo $data;
