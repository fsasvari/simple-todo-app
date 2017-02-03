<?php

namespace App\Controller;

use Slinky\Routing\Controller as BaseController;
use Slinky\Http\Response;
use Slinky\Translation\Language;

class Controller extends BaseController
{
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
	 * @param \Slinky\Translation\Language $lang
	 * @return void
	 */
	public function __construct(Response $response, Language $lang)
	{
		parent::__construct($response);

		$this->lang = $lang;
		$this->response->lang = $lang;
	}
}