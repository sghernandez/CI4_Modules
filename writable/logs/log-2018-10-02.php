<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2018-10-02 12:04:59 --> Too few arguments to function Blog\Controllers\Usuarios::__construct(), 0 passed in /opt/lampp/htdocs/ci4/system/CodeIgniter.php on line 782 and exactly 2 expected
#0 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#1 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 12:07:36 --> Too few arguments to function Blog\Controllers\Usuarios::__construct(), 0 passed in /opt/lampp/htdocs/ci4/system/CodeIgniter.php on line 782 and exactly 2 expected
#0 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#1 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 12:07:55 --> Cannot call constructor
#0 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#1 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 12:08:19 --> Cannot call constructor
#0 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#1 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 12:11:39 --> Cannot call constructor
#0 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#1 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2018-10-02 12:14:38 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';'
#0 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Blog\\Controller...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Blog\\Controller...')
#3 [internal function]: spl_autoload_call('Blog\\Controller...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(761): class_exists('\\Blog\\Controlle...', true)
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(295): CodeIgniter\CodeIgniter->startController()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-10-02 12:23:46 --> Too few arguments to function Blog\Models\UsuariosModel::validar_usuario(), 0 passed in /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php on line 20 and exactly 1 expected
#0 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(20): Blog\Models\UsuariosModel->validar_usuario()
#1 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#3 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2018-10-02 12:29:14 --> Too few arguments to function CodeIgniter\Validation\Validation::withRequest(), 0 passed in /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php on line 17 and exactly 1 expected
#0 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(17): CodeIgniter\Validation\Validation->withRequest()
#1 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(20): Blog\Models\UsuariosModel->validar_usuario(Object(CodeIgniter\HTTP\IncomingRequest))
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#3 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-02 17:13:49 --> syntax error, unexpected '}', expecting ',' or ';'
#0 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Blog\\Models\\Usu...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Blog\\Models\\Usu...')
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(16): spl_autoload_call('Blog\\Models\\Usu...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-10-02 17:14:28 --> syntax error, unexpected '}', expecting ',' or ';'
#0 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Blog\\Models\\Usu...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Blog\\Models\\Usu...')
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(16): spl_autoload_call('Blog\\Models\\Usu...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-10-02 17:14:57 --> Undefined variable: validation
#0 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(10): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(22): Blog\Models\UsuariosModel->validar_usuario(Object(CodeIgniter\HTTP\IncomingRequest))
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#3 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-02 17:15:49 --> syntax error, unexpected '}', expecting ',' or ';'
#0 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Blog\\Models\\Usu...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Blog\\Models\\Usu...')
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(16): spl_autoload_call('Blog\\Models\\Usu...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-10-02 17:16:04 --> Undefined variable: validation
#0 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/opt/lampp/htdo...', 11, Array)
#1 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(22): Blog\Models\UsuariosModel->validar_usuario(Object(CodeIgniter\HTTP\IncomingRequest))
#2 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#3 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2018-10-02 17:23:49 --> syntax error, unexpected 'echo' (T_ECHO)
#0 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(261): CodeIgniter\Autoloader\Autoloader->requireFile('/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ci4/system/Autoloader/Autoloader.php(219): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Blog\\Models\\Usu...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Blog\\Models\\Usu...')
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(16): spl_autoload_call('Blog\\Models\\Usu...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(782): Blog\Controllers\Usuarios->__construct()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(300): CodeIgniter\CodeIgniter->createController()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2018-10-02 17:40:34 --> Invalid file: Admin\Views\CI.php
#0 /opt/lampp/htdocs/ci4/system/View/View.php(197): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('Admin\\Views\\CI....')
#1 /opt/lampp/htdocs/ci4/system/Common.php(139): CodeIgniter\View\View->render('Admin\\Views\\CI', Array, NULL)
#2 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(27): view('Admin\\Views\\CI', Array)
#3 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 17:45:02 --> Invalid file: Blog\Views\themes\CI.php
#0 /opt/lampp/htdocs/ci4/system/View/View.php(197): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('Blog\\Views\\them...')
#1 /opt/lampp/htdocs/ci4/system/Common.php(139): CodeIgniter\View\View->render('Blog\\Views\\them...', Array, NULL)
#2 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(27): view('Blog\\Views\\them...', Array)
#3 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2018-10-02 17:52:37 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:52:37 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:53:13 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:53:13 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:54:10 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:54:10 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:55:49 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:55:49 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:56:09 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:56:09 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:56:11 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:56:11 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:56:25 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:56:25 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:56:47 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:56:48 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:57:02 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:57:02 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:57:46 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(24): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:57:46 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 17:59:20 --> Unknown database 'athenea'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(177): mysqli->real_connect('localhost', 'root', '', 'athenea', 3306, '', 0)
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(369): CodeIgniter\Database\MySQLi\Connection->connect(false)
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(602): CodeIgniter\Database\BaseConnection->initialize()
#3 /opt/lampp/htdocs/ci4/Modules/Blog/Models/UsuariosModel.php(14): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/Modules/Blog/Controllers/Usuarios.php(22): Blog\Models\UsuariosModel->get_users()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): Blog\Controllers\Usuarios->index()
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(Blog\Controllers\Usuarios))
#7 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2018-10-02 17:59:20 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/ci4/application/Views/errors/html/error_exception.php(100): print_r(Object(Blog\Controllers\Usuarios), true)
#2 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(276): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ci4/system/Debug/Exceptions.php(153): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2018-10-02 18:01:49 --> Unknown column 'Usuarios_apellido' in 'field list'
#0 /opt/lampp/htdocs/ci4/system/Database/MySQLi/Connection.php(312): mysqli->query('SELECT Usuarios...')
#1 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(704): CodeIgniter\Database\MySQLi\Connection->execute('SELECT Usuarios...')
#2 /opt/lampp/htdocs/ci4/system/Database/BaseConnection.php(626): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT Usuarios...')
#3 /opt/lampp/htdocs/ci4/application/Controllers/Home.php(10): CodeIgniter\Database\BaseConnection->query('SELECT Usuarios...')
#4 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(807): App\Controllers\Home->index()
#5 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(305): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#6 /opt/lampp/htdocs/ci4/system/CodeIgniter.php(220): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /opt/lampp/htdocs/ci4/public/index.php(37): CodeIgniter\CodeIgniter->run()
#8 {main}
