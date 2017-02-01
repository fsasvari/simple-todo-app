<?php

return [
	/**
	 * Application settings
	 */
	'app' => [
		'root' => env('APP_ROOT'),
		'env' => env('APP_ENV'),
		'debug' => env('APP_DEBUG'),
		'log' => env('APP_LOG'),
		'cache' => env('APP_CACHE'),
		'key' => env('APP_KEY'),
		'encoding' => 'UTF-8',
		'timezone' => 'Europe/Zagreb'
	],
	
	/**
	 * Database settings
	 */
	'database' => [
		'default' => 'mysql',
		'log' => env('DB_LOG'),
		
		'connections' => [
			'mysql' => [
				'driver' => 'mysql',
				'host' => env('DB_HOST'),
				'database' => env('DB_NAME'),
				'username' => env('DB_USER'),
				'password' => env('DB_PASS'),
				'charset' => 'utf8',
				'collation' => 'utf8_unicode_ci'
			],
			
			'mysql2' => [
				'driver' => 'mysql',
				'host' => env('DB_HOST2'),
				'database' => env('DB_NAME2'),
				'username' => env('DB_USER2'),
				'password' => env('DB_PASS2'),
				'charset' => 'utf8',
				'collation' => 'utf8_unicode_ci'
			]
		]
	],
	
	/**
	 * Language settings
	 */
	'language' => [
		'default' => 'en',
		'allowed' => ['en']
	],
	
	/**
	 * Logger settings
	 */
	'log' => [
		'type' => 'daily'
	],
	
	/**
	 * Cache settings
	 */
	'cache' => [
		'type' => 'serialize',
		'duration' => 600 // seconds
	],
	
	/**
	 * Image settings
	 */
	'image' => [
		'driver' => 'gd'
	],
];