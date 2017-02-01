<?php

namespace App\Exceptions;

use Exception;
use Slinky\Exception\ExceptionHandler;

class Handler extends ExceptionHandler
{
	/**
     * Report or log an exception
     *
     * @param \Exception $e
     * @return void
     */
	public function report(Exception $e)
	{
		parent::report($e);
	}
	
	/**
     * Render an exception into a response
     *
     * @param \Exception $e
     * @return void
     */
	public function render(Exception $e)
	{
		parent::render($e);
	}
	
	/**
     * Render an exception as debug response
     *
     * @param \Exception $e
     * @return void
     */
	public function debug(Exception $e)
	{
		parent::debug($e);
	}
}