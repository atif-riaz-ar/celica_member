<?php
define('ENVIRONMENT', 'development');
define('GlobalPassword', "ginseng..win..999");
define('PUBLIC_ROUTES', array("login", "signup", "u", "password"));
if(ENVIRONMENT == "development") {
	define("API_URL", "http://192.168.1.108/celica/api/");
	define("BASE_URL", "http://192.168.56.1/celica/member/");
	define("ASSETS_URL", "http://192.168.56.1/celica/member/assets/");
	define('SESSION_DURATION', 300);
}
if(ENVIRONMENT == "production") {
	define("API_URL", "https://api.gs.ezymlm.net/");
	define("BASE_URL", "https://m.gs.ezymlm.net/");
	define("ASSETS_URL", "https://m.gs.ezymlm.net/assets/");
	define('SESSION_DURATION', 300);
}
switch (ENVIRONMENT) {
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
		break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>=')) {
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		} else {
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
		break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1);
}
$system_path = 'system';
$application_folder = 'application';
$view_folder = '';
if (defined('STDIN')) {
	chdir(dirname(__FILE__));
}

if (($_temp = realpath($system_path)) !== FALSE) {
	$system_path = $_temp . DIRECTORY_SEPARATOR;
} else {
	$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR
		) . DIRECTORY_SEPARATOR;
}
if (!is_dir($system_path)) {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
	exit(3); // EXIT_CONFIG
}
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', $system_path);
define('FCPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('SYSDIR', basename(BASEPATH));
if (is_dir($application_folder)) {
	if (($_temp = realpath($application_folder)) !== FALSE) {
		$application_folder = $_temp;
	} else {
		$application_folder = strtr(
			rtrim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR
		);
	}
} elseif (is_dir(BASEPATH . $application_folder . DIRECTORY_SEPARATOR)) {
	$application_folder = BASEPATH . strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR
		);
} else {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: ' . SELF;
	exit(3);
}

define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);
if (!isset($view_folder[0]) && is_dir(APPPATH . 'views' . DIRECTORY_SEPARATOR)) {
	$view_folder = APPPATH . 'views';
} elseif (is_dir($view_folder)) {
	if (($_temp = realpath($view_folder)) !== FALSE) {
		$view_folder = $_temp;
	} else {
		$view_folder = strtr(
			rtrim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR
		);
	}
} elseif (is_dir(APPPATH . $view_folder . DIRECTORY_SEPARATOR)) {
	$view_folder = APPPATH . strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR
		);
} else {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: ' . SELF;
	exit(3);
}
define('VIEWPATH', $view_folder . DIRECTORY_SEPARATOR);
require_once BASEPATH . 'core/CodeIgniter.php';
