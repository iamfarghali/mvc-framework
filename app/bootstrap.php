<?php
// Load Config
require_once 'config/Config.php';

// Autoloading libs classes
spl_autoload_register(function($class) {
    require_once 'libs/' . $class . '.php';
});

