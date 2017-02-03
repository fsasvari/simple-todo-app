<?php

$router = $app->getContainer()->get('Router');
$lang = $app->getContainer()->get('Language');
$auth = $app->getContainer()->get('Auth');

// user logged in
if ($auth->check()) {
	$router->get('', 'List', 'index');
}

// user logged out
else {
	$router->get('', 'Auth', 'login');
	$router->get($lang->get('routes.login'), 'Auth', 'login');
	$router->post($lang->get('routes.login'), 'Auth', 'loginPost');
}

