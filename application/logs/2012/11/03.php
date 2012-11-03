<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-03 08:56:33 --- CRITICAL: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 102 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php:114
2012-11-03 08:56:33 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php:114
2012-11-03 09:48:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Login.php [ 6 ] in :
2012-11-03 09:48:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 09:54:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''welcome));' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2012-11-03 09:54:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 10:05:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ‹welcome› - assumed '‹welcome›' ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\Welcome.php:13
2012-11-03 10:05:12 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\Welcome.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\PHP\xampp\ht...', 13, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\Welcome.php:13
2012-11-03 10:07:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::facatory() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in :
2012-11-03 10:07:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 10:09:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sitename ~ APPPATH\views\welcome.php [ 3 ] in D:\PHP\xampp\htdocs\kohana\application\views\welcome.php:3
2012-11-03 10:09:00 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\views\welcome.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\PHP\xampp\ht...', 3, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\PHP\xampp\ht...')
#2 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\PHP\xampp\ht...', Array)
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\Welcome.php(13): Kohana_Response->body(Object(View))
#6 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\PHP\xampp\htdocs\kohana\application\views\welcome.php:3
2012-11-03 10:09:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: random ~ APPPATH\views\welcome.php [ 4 ] in D:\PHP\xampp\htdocs\kohana\application\views\welcome.php:4
2012-11-03 10:09:25 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\views\welcome.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\PHP\xampp\ht...', 4, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\PHP\xampp\ht...')
#2 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\PHP\xampp\ht...', Array)
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\Welcome.php(14): Kohana_Response->body(Object(View))
#6 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\PHP\xampp\htdocs\kohana\application\views\welcome.php:4
2012-11-03 11:03:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\User.php [ 13 ] in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:13
2012-11-03 11:03:00 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\PHP\xampp\ht...', 13, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:13
2012-11-03 11:03:36 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\User.php [ 13 ] in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:13
2012-11-03 11:03:36 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php(13): Kohana_Core::error_handler(8, 'Array to string...', 'D:\PHP\xampp\ht...', 13, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:13
2012-11-03 11:03:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\User.php [ 13 ] in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:13
2012-11-03 11:03:50 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\PHP\xampp\ht...', 13, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:13
2012-11-03 12:45:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: corsor ~ APPPATH\classes\Controller\User.php [ 26 ] in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:26
2012-11-03 12:45:41 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\PHP\xampp\ht...', 26, Array)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\PHP\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\PHP\xampp\htdocs\kohana\application\classes\Controller\User.php:26
2012-11-03 12:45:56 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH\classes\Controller\User.php [ 26 ] in :
2012-11-03 12:45:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 12:46:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS) ~ APPPATH\classes\Controller\User.php [ 26 ] in :
2012-11-03 12:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 13:31:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH\classes\Controller\User.php [ 44 ] in :
2012-11-03 13:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 13:31:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH\classes\Controller\User.php [ 44 ] in :
2012-11-03 13:31:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 13:44:09 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:44:09 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:45:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:45:06 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:45:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:45:38 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:45:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:45:49 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:46:13 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:46:13 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:47:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:47:39 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:47:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:47:50 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:48:05 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:48:05 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:48:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 13:48:14 --- DEBUG: #0 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\PHP\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\PHP\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-03 14:01:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\User.php [ 21 ] in :
2012-11-03 14:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 14:01:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\User.php [ 21 ] in :
2012-11-03 14:01:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 14:01:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\User.php [ 21 ] in :
2012-11-03 14:01:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-03 14:02:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\User.php [ 21 ] in :
2012-11-03 14:02:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :