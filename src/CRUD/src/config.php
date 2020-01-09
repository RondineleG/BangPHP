<?php

// Host name
define('DB_HOST', 'den1.mysql1.gear.host');

// Database name
define('DB_NAME', 'phpcrud');

// User name
define('DB_USER', '');

// Password
define('DB_PASSWORD', 'Tr6XDNm~V_i7');


if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

if (!defined('BASEURL'))
    define('BASEURL', '/CRUD/');

if (!defined('DBAPI'))
    define('DBAPI', ABSPATH . '/database.php');
