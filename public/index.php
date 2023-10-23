<?php

//  Auto loader
require_once '../vendor/autoload.php';


// Load Config
require_once 'config/config.php';

// Routes
require_once '../routes/web.php';
require_once '../app/Router.php';


// site name 
define ('SITE_NAME', 'aj-simple-mvc');

// App Root 
define ('APP ROOT', dirname(dirname(__FILE__)));
define ('URL_ROOT', 'http://localhost/aj-simple-mvc');
define('URL_SUB_FOLDER', '/aj-simple-mvc');

// DB Params 
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', 'rootroot');
define ('DB_NAME', 'aj-simple-mvc');

