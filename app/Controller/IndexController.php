<?php

namespace App\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$this->response->view('index');
	}
}
