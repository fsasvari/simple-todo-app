<?php

namespace App\Controller;

class TodoListController extends Controller
{
	public function index()
	{
		$this->response->view('listIndex');
	}

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
