<?php

namespace App\Controller;

use Slinky\Routing\Controller as BaseController;
use Slinky\Http\Response;
use Slinky\Http\Request;
use Slinky\Config\Config;
use Slinky\Translation\Language;
use Slinky\Auth\Auth;

class Controller extends BaseController
{
	/**
	 * The language instance
	 *
	 * @var \Slinky\Http\Request
	 */
	protected $request;

	/**
	 * The config instance
	 *
	 * @var \Slinky\Config\Config
	 */
	protected $config;

	/**
	 * The language instance
	 *
	 * @var \Slinky\Translation\Language
	 */
	protected $lang;

	/**
	 * The auth instance
	 *
	 * @var \Slinky\Auth\Auth
	 */
	protected $auth;

	/**
	 * Create new controller instance
	 *
	 * @param \Slinky\Http\Response $response
	 * @param \Slinky\Http\Request $request
	 * @param \Slinky\Config\Config $config
	 * @param \Slinky\Translation\Language $lang
	 * @param \Slinky\Auth\Auth $auth
	 * @return void
	 */
	public function __construct(Response $response, Request $request, Config $config, Language $lang, Auth $auth)
	{
		parent::__construct($response);

		$this->request = $request;
		$this->config = $config;
		$this->lang = $lang;
		$this->auth = $auth;

		$this->response->lang = $lang;
		$this->response->config = $config;
	}
}