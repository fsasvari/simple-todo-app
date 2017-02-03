<?php

namespace App\Controller;

class TodoTaskController extends Controller
{
	public function show($id)
	{
		$this->response->view('listShow');
	}

	public function add()
	{
		$this->response->view('register');
	}

	public function edit($id)
	{
		$this->response->view('register');
	}

	public function delete($id)
	{

	}
}
