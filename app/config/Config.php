<?php

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvc_framework');

// Directory Separator
define('DS', DIRECTORY_SEPARATOR);

/* 
 * Application Enviroment
 * DEV  => Development
 * LIVE => Live
 * */ 
define('APPENV', 'DEV');

// App Root
define('APPROOT', dirname(dirname(__FILE__)).DS);

// URL Root
define('APPURL', 'http://localhost/mvc-framework/');

// Site Name
define('SITENAME', 'MVC-Framework');