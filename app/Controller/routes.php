<?php

$router = $app->getContainer()->get('Router');
$auth = $app->getContainer()->get('Auth');


if ($auth->check()) {
	$router->get('', 'List', 'index');
} else {
	$router->get('', 'Auth', 'login');
}

