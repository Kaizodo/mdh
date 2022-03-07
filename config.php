<?php

require('config.main.php');

// HTTP
define('HTTP_SERVER', 'http://' . DOMAIN . '/');
define('HTTP_CATALOG', 'http://' . DOMAIN . '/');

// HTTPS
define('HTTPS_SERVER', 'https://' . DOMAIN . '/');
define('HTTPS_CATALOG', 'https://' . DOMAIN . '/');


// DIR
define('DIR_APPLICATION', DIR_ROOT . DS . 'catalog' . DS);
define('DIR_SYSTEM', DIR_ROOT . DS . 'system' . DS);
define('DIR_IMAGE', DIR_ROOT . DS . 'image' . DS);
define('DIR_STORAGE', DIR_ROOT . DS . 'storage' . DS);
define('DIR_LANGUAGE', DIR_APPLICATION . 'language' . DS);
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme' . DS);
define('DIR_CONFIG', DIR_SYSTEM . 'config' . DS);
define('DIR_CACHE', DIR_STORAGE . 'cache' . DS);
define('DIR_DOWNLOAD', DIR_STORAGE . 'download' . DS);
define('DIR_LOGS', DIR_STORAGE . 'logs' . DS);
define('DIR_MODIFICATION', DIR_STORAGE . 'modification' . DS);
define('DIR_SESSION', DIR_STORAGE . 'session' . DS);
define('DIR_UPLOAD', DIR_STORAGE . 'upload' . DS);
