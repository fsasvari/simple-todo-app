<?php

namespace App\Controller;

use Slinky\Routing\Controller as BaseController;
use Slinky\Http\Response;
use Slinky\Http\Request;
use Slinky\Translation\Language;

class Controller extends BaseController
{
	/**
	 * The language instance
	 *
	 * @var \Slinky\Http\Request
	 */
	protected $request;

	/**
	 * The language instance
	 *
	 * @var \Slinky\Translation\Language
	 */
	protected $lang;

	/**
	 * Create new controller instance
	 *
	 * @param \Slinky\Http\Response $response
	 * @param \Slinky\Http\Request $request
	 * @param \Slinky\Translation\Language $lang
	 * @return void
	 */
	public function __construct(Response $response, Request $request, Language $lang)
	{
		parent::__construct($response);

		$this->request = $request;
		$this->lang = $lang;
		$this->response->lang = $lang;
	}
}