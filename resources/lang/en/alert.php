<?php

/**
 * --------------------------------------------------------------------------------------------
 *
 * LANGUAGE - ENGLISH
 *
 * ALERT
 *
 * --------------------------------------------------------------------------------------------
 */

return [
	'login' => [
		'validator' => [
			'email' => array (
				'required' => 'E-mail address is not correct!',
				'email' => 'E-mail address is not correct!',
				'exists' => 'E-mail address does not exist!',
			),
			'password' => array (
				'required' => 'Password is not correct!',
				'rangelength' => 'Password is not correct!',
			)
		],
	]
];
