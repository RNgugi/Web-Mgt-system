<?php
// ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);

// DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'writers');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// FILE PATHS
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
?>