<?php

$router = $app->getContainer()->get('Router');
$lang = $app->getContainer()->get('Language');
$auth = $app->getContainer()->get('Auth');

// user logged in
if ($auth->check()) {
	$router->get('', 'List', 'index');
	$router->get($lang->get('routes.logout'), 'Auth', 'logout');
}

// user logged out
else {
	$router->get('', 'Auth', 'login');
	$router->get($lang->get('routes.login'), 'Auth', 'login');
	$router->post($lang->get('routes.login'), 'Auth', 'loginPost');
	$router->get($lang->get('routes.register'), 'Auth', 'register');
	$router->post($lang->get('routes.register'), 'Auth', 'registerPost');
}

