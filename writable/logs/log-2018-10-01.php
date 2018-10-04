<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-10-01 18:59:01 --> syntax error, unexpected ';', expecting ',' or ')'
#0 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(761): class_exists('\\App\\Controller...', true)
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(295): CodeIgniter\CodeIgniter->startController()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
